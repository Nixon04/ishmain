<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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

    public function BlogPostCall(Request $request){
      $request->validate([
        'content' => 'required',
        'category' => 'required',
        'imageArray' => 'required',
        'content_header'=>'required',
        'minutes_header' => 'required',
        'image_top' => 'required|file',
        'title' => 'required'
      ]);

      $checktitle = Blog::where('title', $request['title'])->first();
      if($checktitle){
        return response()->json([
          'message' => 'Sorry this title already exist'
        ]);
      }
      $imagefile = $request->file('image_top');
      $filename = $imagefile->getClientOriginalName();
      $firstpave = $_SERVER['DOCUMENT_ROOT'] . '/clientArea/';
  
      $imagefile->move($firstpave, $filename);

      $check = json_decode($request->input('imageArray'), true);
      if(is_array($check)){
      foreach($check as $entry){
        $filestamp = $entry['filename'];
        $pathway = $_SERVER['DOCUMENT_ROOT'] .'/blog_stored_images/';
        $destination =  $pathway . '/' .$filestamp;
        file_put_contents($destination, base64_decode($entry['fileContent']));
      }
      $username = session::get('members_id');
      $date = Carbon::now()->setTimeZone('Africa/Lagos')->format('d M, Y');
      $requestLog = rand(99999999,11111111);
      $insert = new Blog([
        'user_id' => $username,
        'category' => $request->input('category'),
        'title' => $request->input('title'),
        'content' => $request->input('content'),
        'minutes_header' => $request->input('minutes_header'),
        'reference_log' => $requestLog,
        'sub_content' => $request->input('content_header'),
        'date' => $date,
        'status'=>'approve',
        'image' => $filename,
        'updated_date'=>'',
      ]);
      $insert->save();
  }
      return response()->json([
        
        'message' => 'success'
      ]);
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

    public function BlogEdit(Request $request){
      $request->validate([
        'category' => 'required',
        'title' => 'required',
        'content_header' => 'required',
        'content' => 'required',
        'imageArray' => 'required',
        'reference_log' => 'required'
      ]);

      $check = json_decode($request->input('imageArray'), true);  
      if(is_array($check)){
      foreach($check as $entry){
        $filestamp = $entry['filename'];
        
        $pathway = $_SERVER['DOCUMENT_ROOT'] . '/blog_stored_images/';
        $destination = $pathway . '/' .$filestamp;
        file_put_contents($destination, base64_decode($entry['fileContent']));
      }
      
      $updateblog = Blog::where('reference_log', $request['reference_log'])->first();
      if($updateblog){
        $updateblog->update([
          'title' => $request->input('title'),
          'content_header' => $request->input('content_header'),
          'content' => $request->input('content'),
        ]);
        return response()->json([
          'message' => 'Blog updated successfully'
         ]);
      }else{
        return response()->json([
          'message' => 'Not successfully'
         ]);
      }
    }  
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
