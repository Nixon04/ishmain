<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use Carbon\Carbon;
use App\Models\Category; 
use App\Models\Members;
use App\Models\GofundMe;
use App\Models\FundRaisingMembers;
use App\Models\AccountCollection;
use App\Models\NewsLetter;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    //


    public function LoginPost(Request $request){
      $request->validate([
        'role' => 'required',
        'fullname' => 'required',
        'username' => 'required',
        'contact' => 'required',
        'contact' => 'required',
        'password' => 'required'
      ]);


      $email_check = Members::where('email', $request['email'])->first();
      if($email_check){
          return response()->json([
          'message' => 'Email already registered'
        ]);
      }

       $email_check = Members::where('username', $request['username'])->first();
      if($email_check){
          return response()->json([
          'message' => 'Username already registered'
        ]);
      }

      $admin_reverse = Members::where('role', $request['role'])->get();
      $adminRoles = $admin_reverse->filter(function ($item) {
          return $item->role === 'admin';
      });
      
      if ($adminRoles->count() > 2) {
          return response()->json([
              'message' => 'Space for only two admins, try other option.'
          ]);
      }
    
      $length_user = strlen($request['username']);
      if($length_user > '8' ){
          return response()->json([
          'message' => 'Username limit is 8 in character'
        ]);
      }

      $length = strlen($request['password']);
      if($length < '8'){
        return response()->json([
          'message' => 'Password declined'
        ]);
      }
      $passwordhash  = Hash::make($request['password']);
      $currentdate = Carbon::now()->setTimeZone('Africa/Lagos')->format('d M, Y');
      $insert = new Members([
        'role' => $request->input('role'),
        'fullname' => $request->input('fullname'),
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'contact' => $request->input('password'),
        'password' => $passwordhash,
        'image' => "default.png",
        'email_token' => "0",
        'email_verified' => "0",
        'account_visibility' => "0",
        'date' => $currentdate,
      ]);
      $insert->save();

        return response()->json([
          'status' => 'success',
          'message' => 'Registration successful'
        ]);
    }
    public function LoginAuth(Request $request){
      $request->validate([
        'username',
        'password'
      ]);

      $validate = Members::where('username', $request['username'])->first();
      if(!$validate){
        return response()->json([
          'message' => 'Username not recognized'
        ]);
      }else{
         if($validate && hash::check($request['password'], $validate->password)){

              Session(['members_id' => $request['username']]);

              return response()->json([
                'status' => 'success',
                'message' => 'Successful'
              ]);
         }else{
          return response()->json([
            'message' => 'Password not identified'
          ]);
         }
      }
    }

    public function BlogEdit(Request $request)
    {
        $validator = $request->validate([
            'reference_log'   => 'required|string|exists:blogs,reference_log',
            'category'        => 'required|string|max:100',
            'title'           => 'required|string|max:255',
            'content_header'  => 'required|string|max:500',
            'content'         => 'required|string',
            'minutes_header'  => 'nullable|string|max:100',     
            'image_top'       => 'nullable|file|mimes:jpg,jpeg,png,gif|max:10240', 
            'imageArray'      => 'nullable|string',            
        ]);
    
        try {
            DB::beginTransaction();
    
            $blog = Blog::where('reference_log', $request->reference_log)->firstOrFail();
            $newMainImagePath = $blog->image; // keep old one by default

            $fileimage = $request->input('image_top');

            if ($request->hasFile('image_top') && $request->file('image_top')->isValid()) {
                if ($blog->image) {
                    Storage::disk('public')->delete("blog_top_images/{$blog->image}");
                }
    
                $newMainImagePath = time() . '_' . Str::random(10) . '.' .
                    $request->file('image_top')->getClientOriginalExtension();

                    $fileimage->storeAs('blog_top_images', $newMainImagePath, 'public');
    
                // $request->file('image_top')->storeAs(
                //     'blog_top_images',
                //     $newMainImagePath,
                //     'public'
                // );
            }
    
        
            $newExtraImages = [];
            $oldExtraImages = $blog->extra_images ? json_decode($blog->extra_images, true) : [];
    
            if ($request->filled('imageArray')) {
                $imageArray = json_decode($request->input('imageArray'), true);
    
                if (json_last_error() !== JSON_ERROR_NONE || !is_array($imageArray)) {
                    throw new \Exception('Invalid imageArray JSON format');
                }
    
                foreach ($imageArray as $item) {
                    if (empty($item['filename']) || empty($item['fileContent'])) {
                        continue;
                    }
    
                    $binary = base64_decode($item['fileContent'], true);
                    if ($binary === false) {
                        continue; 
                    }
    
                    $safeName = $item['filename'];
                    $safeName = preg_replace('/[^a-zA-Z0-9._-]/', '_', $safeName);
    
                    Storage::disk('public')->put(
                        "blog_top_images/{$safeName}",
                        $binary
                    );
    
                    $newExtraImages[] = $safeName;
                }
    
                foreach ($oldExtraImages as $oldFile) {
                    Storage::disk('public')->delete("blog_top_images/{$oldFile}");
                }
            }

    
            $blog->update([
                'category'       => $request->category,
                'title'          => $request->title,
                'content_header' => $request->content_header,
                'content'        => $request->input('content'),
                'minutes_header' => $request->minutes_header ?? $blog->minutes_header,
                'image'          => $newMainImagePath,
                'extra_images'   => json_encode($newExtraImages), 
                'updated_date'   => now(),
            ]);
    
            DB::commit();
    
            return response()->json([
                'status'  => 'success',
                'message' => 'Blog updated successfully',
            ]);
    
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Blog post not found',
            ], 404);
    
        } catch (\Exception $e) {
            DB::rollBack();
    
            Log::error('Blog edit failed', [
                'reference_log' => $request->reference_log,
                'error'         => $e->getMessage(),
                'trace'         => $e->getTraceAsString(),
            ]);
    
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to update blog: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function BlogPostCall(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'           => 'required|string|max:255',
            'content'         => 'required|string',
            'content_header'  => 'required|string|max:500',
            'minutes_header'  => 'required|string|max:100',
            'category'        => 'required|string|max:100',
            'image_top'       => 'required|file|mimes:jpg,jpeg,png,gif|max:10240', // 10MB
            'imageArray'      => 'nullable|string', // ← we expect JSON string
        ], [
            'image_top.required' => 'Main highlight image is required.',
            'image_top.max'      => 'Main image must not exceed 10MB.',
            'image_top.mimes'    => 'Main image must be jpg, jpeg, png or gif.',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first(),
                'errors'  => $validator->errors()->all(),
            ]);
        }
    
        // Optional: more strict title uniqueness (case-insensitive)
        $titleExists = Blog::whereRaw('LOWER(title) = ?', [strtolower($request->title)])->exists();
        if ($titleExists) {
            return response()->json([
                'status'  => 'error',
                'message' => 'A blog with this title already exists.',
            ]);
        }
    
        try {
            DB::beginTransaction();
    
            // 1. Handle main image
            $mainImage = $request->file('image_top');
            $mainFilename = time() . '_' . Str::random(8) . '.' . $mainImage->getClientOriginalExtension();
            $mainImage->storeAs('blog_top_images', $mainFilename, 'public');
    
            // 2. Handle additional images (base64)
            $extraImages = [];
            $imageArrayJson = $request->input('imageArray');
    
            if ($imageArrayJson) {
                $imageArray = json_decode($imageArrayJson, true);
    
                if (json_last_error() !== JSON_ERROR_NONE || !is_array($imageArray)) {
                    throw new \Exception('Invalid imageArray format.');
                }
    
                $allowedMime = ['image/jpeg', 'image/png', 'image/gif'];
                $maxSize = 10 * 1024 * 1024; // 10MB
    
                foreach ($imageArray as $item) {
                    if (empty($item['filename']) || empty($item['fileContent'])) {
                        continue;
                    }
    
                    $binary = base64_decode($item['fileContent'], true);
                    if ($binary === false) {
                        throw new \Exception('Invalid base64 content in additional images.');
                    }
    
                    $finfo = finfo_open(FILEINFO_MIME_TYPE);
                    $mime = finfo_buffer($finfo, $binary);
                    finfo_close($finfo);
    
                    if (!in_array($mime, $allowedMime)) {
                        throw new \Exception('Only JPG, PNG, GIF allowed in additional images.');
                    }
    
                    if (strlen($binary) > $maxSize) {
                        throw new \Exception('Additional image exceeds 10MB limit.');
                    }
    
                    $ext = pathinfo($item['filename'], PATHINFO_EXTENSION);
                    $safeName = Str::random(12) . '.' . strtolower($ext);
    
                    Storage::put("public/blog_extra_images/{$safeName}", $binary);
    
                    $extraImages[] = $safeName;
                }
            }
    
            $blog = Blog::create([
                'user_id'        =>  $request->user()?->id ?? session('members_id'),
                'category'       => $request->category,
                'title'          => trim($request->title),
                'sub_content'    => $request->content_header,
                'content'        => $request->input('content'),         
                'date'           => Carbon::now('Africa/Lagos')->format('d M, Y'),
                'reference_log'  => (string) Str::uuid(),
                'minutes_header' => $request->minutes_header,
                'status'         => 'approve',                
                'image'          => $mainFilename,
                'extra_images'   => json_encode($extraImages),   
                'updated_date'   => now(),
            ]);
    
            DB::commit();
    
            return response()->json([
                'status'  => 'success',
                'message' => 'Blog post created successfully.',
                'data'    => ['id' => $blog->id, 'slug' => Str::slug($blog->title)],
            ]);
    
        } catch (\Exception $e) {
            DB::rollBack();
    
            Log::error('Blog creation failed', [
                'error' => $e->getMessage(),
                'line'  => $e->getLine(),
                'file'  => $e->getFile(),
                'input' => $request->except(['image_top', 'imageArray']),
            ]);
    
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to create blog post. Please try again.',
            ]);
        }
    }


    public function  CategoryHeader(Request $request){
      $request->validate([
          'title' => 'required'
      ]);

      $check = Category::where('title', $request['title'])->first();
       if($check == true){
        return response()->json([
          'message'=> 'Category already inserted'
        ]);
       }

      $ref_id = rand(999999,111111);
      $status = 'true';
      $date = Carbon::now()->setTimeZone('Africa/Lagos')->format('d M, Y');

      $insert = new Category([
        'category_ref_id' => $ref_id,
        'title' => $request->input('title'),
        'status'=> $status,
        'date' => $date
      ]);
      $insert->save();

      return response()->json([
        'message' => 'Category Added successfully'
      ]);
    }
    

    public function ViewCatId(Request $request){
      $request->validate([
        'id' => 'required|numeric'
      ]);
        
      $data = Category::where('id', $request['id'])->first();
      return response()->json([
        'message' => 'Success',
        'data'  => $data
      ]);  
    }

    public function CategoryUpdate(Request $request){
      $request->validate([
        'title_input' => 'required',
        'uuid' => 'required',
      ]);
     
      $update = Category::where('id', $request['uuid']);

       if($update){
        $update->update([
          'title' => $request['title_input'],
        ]);
        return response()->json([
          'message' => 'Category updated',
        ]);
       }
    }

    public function CategoryDelete(Request $request){
      $request->validate([
        'delid' => 'required',
      ]);
     
      $update = Category::where('id', $request['delid']);

       if($update){
        $update->delete();
        return response()->json([
          'message' => 'Category deleted successfully',
        ]);
       }
    }

    public function GofundMessage(Request $request){
      $request->validate([
         'email' => 'required'
      ]);
      $validate = GofundMe::where('relations', $request['email'])->first();

      if($validate){
        return response()->json([
          'data' => $validate
        ]);
      }
    }

    public function ActiveGofundMe(Request $request){
      $request->validate([
          'gofundid' => 'required',
          'status' => 'required'
      ]);

      $check = $request['status'];

      $update = GofundMe::where('relations', $request['gofundid'])->first();
      if($update && $request['status']=='true'){
        $update->update([
          'status' => $request->input('status')
        ]); 
        return response()->json([
          'message' => 'Account has been activated'
        ]);
      }
      else{
        $update->update([
          'status' => $request->input('status')
        ]); 
        return response()->json([
          'message' => 'Account has been deactivated'
        ]);
      }
    
    }

    public function IsActive(Request $request){
      $request->validate([
        'reference' => 'required'
      ]);
      $fetch = GofundMe::where('relations', $request['reference'])->first();

      $status = $fetch->status; 
      return response()->json([
        'data' => $status
      ]);
    }

    public function ReviewPartnership(Request $request){
      $request->validate([
        'reference_id' => 'required',
      ]);
      $data = FundRaisingMembers::where('email_address', $request['reference_id'])->first();
      if($data){
        return response()->json([
          'data' => $data
        ]);
      }
    }
    public function DeletePartnership(Request $request){
      $request->validate([
          'reference_delete' => 'required'
      ]);

      $delete = FundRaisingMembers::where('email_address', $request['reference_delete'])->first();
      if($delete){
        $delete->delete();
        return response()->json([
          'status' => 'success',
          'message' => 'partner deleted successfully']);
      }
     }
     
     public function EditEvents(Request $request){
      $request->validate([
         'reference_id' => 'required'
      ]);
     }
     public function DeleteEvents(Request $request){
      $request->validate([
        'reference_delete' => 'required'
      ]);
      $validate = Blog::where('title', $request['reference_delete'])->first();
      if($validate){
        $validate->delete();
      }
       return response()->json([
        'message' => 'Blog deleted successfully',
        'status' => 'success'
       ]);
    }

  
   public function SubmitPartnership(Request $request){
    $request->validate([
      'email' => 'required',
      'name' => 'required',
      'contact' => 'required',
      'noc' => 'required',
      'organization',
      'position',
      'country' => 'required',
    ]);


    $date = Carbon::now()->setTimeZone('Africa/Lagos')->format('d M, Y');
    $email_check = FundRaisingMembers::where('email_address', $request['email'] )->first();
    if($email_check){
      return response()->json(['message'=> 'Email already registered']);
    }

    $reg = rand(99999999,11111111);
    $state = "Nigeria";
    
    $insert = new FundRaisingMembers([
    'type_of_partnership' => $request->input('category_list'),
    'username' => $request->input('name'),
    'email_address' => $request->input('email'),
    'contact' => $request->input('contact'),
    'nature_of_collaboration' => $request->input('noc'),
    'organization_name' => $request->input('organization')??'',
    'organization_user_position' => $request->input('position')?? '',
    'reference_id' => $reg,
    'time_reply' => '',
    'date' => $date,
    'state' => $request->input('country'),
    ]);

    $insert->save();
    return response()->json(['message' => 'Information successfully sent','status'=>'success']);
   }

   public function Paystack(Request $request){
    $request->validate([
      'email_send' => 'required|email',
      'firstname' => 'required',
      'monthly' => 'required',
      'deposit' => 'required|numeric',
      'ref_id' => 'required',
      'country' => 'required',
      'contactnumber' => 'required'
    ]);

    $date = Carbon::now()->setTimeZone('Africa/Lagos')->format('d M, Y');
    // $ref_id = rand(99999999,11111111);
    $insertdata = new AccountCollection([
      'reference_id' => $request->input('ref_id'),
     'username' => $request->input('firstname'),
     'amount' =>$request->input('deposit'),
     'reasons' => 'charity',
     'payment_type' => 'PAYSTACK',
     'email_address' => $request->input('email_send'),
     'contact_address' => $request->input('contactnumber'),
     'region_code' =>  $request->input('monthly'),
     'country' => $request->input('country'),
     'status' => 'pending',
     'date' => $date,
     'auth_code' => '',
     'card_type' => '',
     'signature' => '',
      'expiring_month' => '',
     'account_name' => '',
     
    ]);
    $insertdata->save();
     if($insertdata){
      return response()->json([
        'message' => ''
      ]);
     }
   }

   public function Newsletter(Request $request){
    $request->validate([
      'username' => 'required',
      'email' => 'required',
    ]);

    $email_check = NewsLetter::where('email', $request['email'])->first();
    if($email_check){
      return response()->json(['message'=> 'Email already registered on our newsletter']);
    }

    $insert = new NewsLetter([
      'username' => $request->input('username'),
      'email' => $request->input('email'),
      'status' => 'active',
    ]);
    $insert->save();

    if($insert){
    return response()->json(['message'=> 'Thanks for registering in our newsletter, sit back and get lots of coming gist from us']);
    }else{
      return response()->json(['message' => 'Oops something went wrong']);
    }
   }

   public function ContactMail(Request $request){
    $request->validate([
      'cname' => 'required',
      'email' => 'required',
      'contact' => 'required',
      'message' => 'required',

    ]);

    $cname = $request['cname'];
    $email = $request['cmail'];
    $contact = $request['contact'];
    $message = $request['message'];
     try{
    Mail::to('nixonsampson04@gmail.com')->send(new ContactMail($cname, $email, $contact, $message) );

    return response()->json(['message' => 'Message successfully sent']);
   }
   catch(\Exception $e){
    return response()->json(['message' => $e->getMessage()]);
   }

  }

  
  }
