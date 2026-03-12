<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\AccountCollection;
use App\Models\GofundRegistration;
use App\Models\FundRaisingMembers;
use App\Models\GofundMe;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class viewAdminController extends Controller
{
    //
    public function AdminLogin(){

        // dd(session::get('previous_url'));
        return view('ishumanity.auth.login');
    }
    public function AdminSignup(){
        return view('ishumanity.auth.signup');
    }

    public function AllTransaction(){

        $data = AccountCollection::all();
        return response()->json([
             'data' => $data
        ]);
    }

    public function AllGofundMeRegistration(){
        $data = GofundRegistration::all();
        return response()->json([
            'data' => $data
        ]);
    }

    
    public function AllPartners(){
        $data = FundRaisingMembers::all();
        return response()->json([
            'data' => $data
        ]);
    }

    public function AllEvents(){
    
        $data =  Blog::orderBy('id')->get();
        return response()->json([
            'data' => $data
        ]);
    }

    public function EditBlog($id){
          $user_id = session::get('members_id');
          $url = $id;
          $blogsource = Blog::where('title', $url)->first();
          if($blogsource){
            $title = $blogsource->title;
            $category = $blogsource->category;
            $sub_content = $blogsource->sub_content;
            $contents = $blogsource->content;
            $reference_log = $blogsource->reference_log;
            return view('ishumanity.dashboard.editblog', ['id'], compact('user_id','contents','category','title','sub_content','reference_log'));
          }else{
             return redirect('/ishumanity/dashboard/events');
          }
    }

    public function AdminDashboard(){
        $user_id = session::get('members_id');
        $donors = "donor";
        $charity = "charity";
        $gofundregisters = GofundRegistration::orderBy('id','ASC')->get();
        $fundregisters = FundRaisingMembers::orderBy('id','ASC')->get();
        $gofund_total = count($gofundregisters);
        $fundregisters_total = count($fundregisters);
        $donations = AccountCollection::where('reasons', $donors)->get();
        $charitys = AccountCollection::where('reasons', $charity)->get();
        $charity_total = 0;
        $donation_total = 0;
        
        $check_Date = Carbon::now()->setTimeZone('Africa/Lagos')->format('d M, Y');
        $val_date = AccountCollection::where('date', $check_Date)->get();
        
        $paymentread = count($val_date);
        $count_donors = count($donations);
        $count_charity = count($charitys);

        foreach($charitys as $entry){
        $donation_total+=$entry->amount;
        }
        foreach($donations as $entrydonation){
            $charity_total+=$entrydonation->amount;
        }
        
        return view('ishumanity.dashboard.home', compact('user_id','gofund_total','fundregisters_total','count_donors','count_charity','donation_total','charity_total','paymentread') );
    }

    public function AdminViews(){
        $user_id = session::get('members_id');
        return view('ishumanity.dashboard.views',compact('user_id'));
    }
    public function BlogPost(){
         $user_id = session::get('members_id');
        $category = Category::orderBy('id')->get();
        
        return view('ishumanity.dashboard.blog_post', compact('category','user_id'));
    }
    public function Category(){
         $user_id = session::get('members_id');
        $category = Category::orderBy('id')->get();
        return view('ishumanity.dashboard.category', compact('user_id','category'));
    }
    public function Transaction(){
        $user_id = session::get('members_id');
        return view('ishumanity.dashboard.transactions', compact('user_id'));
    }
    public function GofundMe(){
        $user_id = session::get('members_id');
        return view('ishumanity.dashboard.gofundme',compact('user_id'));
    }

    public function Partners(){
        $user_id = session::get('members_id');
        return view('ishumanity.dashboard.partners', compact('user_id'));
    }
    public function EventsAndPlanning(){
        $user_id = session::get('members_id');
        return view('ishumanity.dashboard.events', compact('user_id'));
    }
    public function Profile(){
        $user_id = session::get('members_id');
        return view('ishumanity.dashboard.profile', compact('user_id'));
    }
    public function Logout(){
        session(['previous_url' => url()->previous()]);;
        session::pull('members_id');
        return redirect('ishumanity/auth/login');
    }
    
}
