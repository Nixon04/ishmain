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
            $url = Url()->current();
             $image_relate = route('blog_top_images', ['filename' => $image->image]);  
        }
        
        $image_state = $image_relate;
        $blog_lists = Blog::orderBy('id','DESC')->take(5)->get();

        $blog_lists->transform(function ($entry) {
            $entry->image = $entry->image  ? route('blog_top_images', ['filename' => $entry->image])  : route('blog_top_images', ['filename' => 'demo.png']);
            return $entry;
        });

        // dd($blog_lists);

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
           
           $image_relate = route('blog_top_images', ['filename' => $image_relates]) ?? route('blog_top_images', ['filename' => 'demo.png']) ;
           $content = $url->content;
           $title = $url->title;
           $sub_content = $url->sub_content;
           $date = $url->date;
           $category = $url->category;
           $user_id = $url->user_id;
            $minutes = $url->minutes_header;

            $blog_related = Blog::where('category', $category)
            ->where('title', '!=', $title)
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

            $blog_related->transform(function ($entry){
                $entry->image = $entry->image  ? route('blog_top_images', ['filename' => $entry->image])  : route('blog_top_images', ['filename' => 'demo.png']);
                return $entry;
            });
           
          return view('blogs', ['id'], compact('blog_related','user_id','category','title','sub_content','date','content','image_relate','minutes'));
           }else{
            return redirect('/');
           }
    }

    public function BlogResources(){
        
         $blog_cat = Category::orderBy('id')->get();
         $blog_list = Blog::orderBy('id', 'DESC')->get();

         $blog_list->transform(function ($entry){
            $entry->image = $entry->image ? route('blog_top_images', ['filename' => $entry->image]) : route('blog_top_images', ['filename' => 'demo.png']);
            return $entry;
         });
        
        
       
        return view('blog_resources', compact('blog_list', 'blog_cat'));
    }


    // gofundme reserve tasks collection
}
