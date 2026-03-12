<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category; 

class viewController extends Controller
{
    //

    public function ViewControl(){
        $main_view = Blog::orderBy('id','DESC')->take(1)->get();
        foreach($main_view as $image){
             $image_relate = "https://ishcommunity.org/clientArea/".$image->image;   
        }
        
        $image_state = $image_relate;
        
        $blog_lists = Blog::orderBy('id','DESC')->take(5)->get();
        $blog_list = $blog_lists->splice(1);
        return view('home',compact('blog_list','main_view', 'image_state'));
    }
    public function About(){
        return view('about');
    }
    public function Faq(){
        return view('faqs');
    }
    public function Participate(){
        return view('participate');
    }
    public function Infographics(){
        return view('infographics');
    }
    public function Education(){
        return view('education');
    }
    public function Donation(){
        return view('donation');
    }
    public function FundRaising(){
        return view('fund-raising');
    }
    public function Privacy(){
        return view('privacy');
    } 
    public function Terms(){
        return view('terms');
    }  
    public function TermsAndConditions(){
        return view('privacyandterms');
    }
    public function Projects(){
       
         $events = Blog::where('category', 'Events')->orderBy('id', 'DESC')->get();
         if($events){
        return view('projects', compact('events'));
         }
         
         return redirect('/');
         

    }

    public function Contact(){
        return view('contact');
    }

    public function Blog($id){
        
           $state = $id;
           $url = Blog::where('title', $state)->first();
           if($url){
           $image_relates = $url->image;
           
           $image_relate = "https://ishcommunity.org/clientArea/".$image_relates;
           
       
           
           $content = $url->content;
           $title = $url->title;
           $sub_content = $url->sub_content;
           $date = $url->date;
           $category = $url->category;
           $user_id = $url->user_id;
              $minutes = $url->minutes_header;

           $blog_relateds = Blog::where('category', $category)->orderBy('id','DESC')->take(2)->get();
           $blog_related = $blog_relateds->splice(1);
          return view('blogs', ['id'], compact('blog_related','user_id','category','title','sub_content','date','content','image_relate','minutes'));
           }else{
            return redirect('/');
           }
    }

    public function BlogResources(){
        
          $blog_cat = Category::orderBy('id')->get();

         $blog_list = Blog::orderBy('id')->get();
       
        return view('blog_resources', compact('blog_list', 'blog_cat'));
    }


    // gofundme reserve tasks collection
}
