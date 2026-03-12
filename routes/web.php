<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

use App\Http\Controllers\viewController;
use App\Http\Controllers\viewAdminController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\phpini;
// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/blog_top_images/{filename}', function ($filename) {

    $filename = basename($filename);
  
    $path = storage_path('app/public/blog_top_images/' . $filename);
  
    if (!File::exists($path)) {
        abort(403, 'Image Not Found');
    }
  
    $mime = File::mimeType($path);
    $allowed = [
        'image/png',
        'image/jpeg',
        'image/jpg',
        'image/gif'
    ];

    if (!in_array($mime, $allowed)) {
        abort(403, 'Invalid file type');
    }
  
    return response()->file($path, [
        'Cache-Control' => 'public, max-age=86400',
    ]);
  
  })->name('blog_top_images');


// view controller for public first view
Route::get('/', [viewController::class, 'ViewControl'])->name('ViewControl');
Route::get('/about', [viewController::class, 'About'])->name('About');
Route::get('/faqs', [viewController::class, 'Faq'])->name('Faq');
Route::get('/participate', [viewController::class, 'Participate'])->name('Participate');
Route::get('/infographics', [viewController::class, 'Infographics'])->name('Infographics');
Route::get('/education', [viewController::class, 'Education'])->name('Education');
Route::get('/donation', [viewController::class, 'Donation'])->name('Donation');
Route::get('/fund-raising', [viewController::class, 'FundRaising'])->name('FundRaising');
Route::get('/privacy', [viewController::class, 'Privacy'])->name('Privacy');
Route::get('/Terms', [viewController::class, 'Terms'])->name('Privacy');
Route::get('/projects', [viewController::class, 'Projects'])->name('Projects');
Route::get('/blog_resources', [viewController::class, 'BlogResources'])->name('BlogResources');
Route::get('/contact', [viewController::class, 'Contact'])->name('Contact');
Route::get('/blogs/{id}', [viewController::class, 'Blog'])->name('Blog');

Route::get('/privacyandterms', [viewController::class, 'TermsAndConditions'])->name('TermsAndConditions');
// view controller for admin 

Route::get('/ishumanity/auth/login', [viewAdminController::class, 'AdminLogin'])->name('AdminLogin');
Route::get('/ishumanity/auth/signup', [viewAdminController::class, 'AdminSignup'])->name('AdminSignup');
Route::get('/ishumanity/auth/forgot_password', [viewAdminController::class, 'ForgotPassword'])->name('ForgotPassword');
Route::get('/ishumanity/auth/confirm_password', [viewAdminController::class, 'ConfirmPassword'])->name('ConfirmPassword');
Route::get('/ishumanity/dashboard/home', [viewAdminController::class, 'AdminDashboard'])->name('AdminDashboard')->middleware('isLoggedin');
Route::get('/ishumanity/dashboard/views', [viewAdminController::class, 'AdminViews'])->name('AdminViews')->middleware('isLoggedin');
Route::get('/ishumanity/dashboard/blog_post', [viewAdminController::class, 'BlogPost'])->name('BlogPost')->middleware('isLoggedin');
Route::get('/ishumanity/dashboard/category', [viewAdminController::class, 'Category'])->name('Category')->middleware('isLoggedin');
Route::get('/ishumanity/dashboard/transactions', [viewAdminController::class, 'Transaction'])->name('Transaction')->middleware('isLoggedin');
Route::get('/ishumanity/dashboard/gofundme', [viewAdminController::class, 'GofundMe'])->name('GofundMe')->middleware('isLoggedin');
Route::get('/ishumanity/dashboard/partners', [viewAdminController::class, 'Partners'])->name('Partners')->middleware('isLoggedin');
Route::get('/ishumanity/dashboard/events', [viewAdminController::class, 'EventsAndPlanning'])->name('EventsAndPlanning')->middleware('isLoggedin');
Route::get('/ishumanity/dashboard/profile', [viewAdminController::class, 'Profile'])->name('Profile')->middleware('isLoggedin');
Route::get('/ishumanity/dashboard/editblog/{id}', [viewAdminController::class, 'EditBlog'])->name('EditBlog')->middleware('isLoggedin');
Route::get('/ishumanity/dashboard/logout', [viewAdminController::class, 'Logout'])->name('Logout')->middleware('isLoggedin');




Route::get('/ini', [phpini::class, 'Inifile'])->name('Inifile');



// post Admin url

Route::post('/ishumanity/sigup', [AdminPostController::class, 'LoginPost'])->name('LoginPost');
Route::post('/ishumanity/Login', [AdminPostController::class, 'LoginAuth'])->name('LoginAuth');



// all release items

Route::get('/ishumanity/dashboard/release_transaction', [viewAdminController::class, 'AllTransaction'])->name('AllTransaction');
Route::get('/ishumanity/dashboard/release_gofundmeregisters', [viewAdminController::class, 'AllGofundMeRegistration'])->name('AllGofundMeRegistration');
Route::get('/ishumanity/dashboard/release_partners', [viewAdminController::class, 'AllPartners'])->name('AllPartners');
Route::get('/ishumanity/dashboard/release_allevents', [viewAdminController::class, 'AllEvents'])->name('AllEvents');


Route::post('/ishumanity/blogpostcall', [AdminPostController::class, 'BlogPostCall'])->name('BlogPostCall');
Route::post('/ishumanity/categorypost', [AdminPostController::class, 'CategoryHeader'])->name('CategoryHeader');
Route::post('/ishumanity/categoryid', [AdminPostController::class, 'ViewCatId'])->name('ViewCatId');
Route::post('/ishumanity/categoryupdate', [AdminPostController::class, 'CategoryUpdate'])->name('CategoryUpdate');
Route::post('/ishumanity/categorydelete', [AdminPostController::class, 'CategoryDelete'])->name('CategoryDelete');
Route::post('/ishumanity/allgofundmessage', [AdminPostController::class, 'GofundMessage'])->name('GofundMessage');
Route::post('/ishumanity/activegofundme', [AdminPostController::class, 'ActiveGofundMe'])->name('ActiveGofundMe');
Route::post('/ishumanity/activenoractive', [AdminPostController::class, 'IsActive'])->name('IsActive');
Route::post('/ishumanity/reviewpartnership', [AdminPostController::class, 'ReviewPartnership'])->name('ReviewPartnership');
Route::post('/ishumanity/deletepartners', [AdminPostController::class, 'DeletePartnership'])->name('DeletePartnership');
Route::post('/ishumanity/editevents', [AdminPostController::class, 'EditEvents'])->name('EditEvents');
Route::post('/ishumanity/delete_events', [AdminPostController::class, 'DeleteEvents'])->name('DeleteEvents');
Route::post('/ishumanity/blogedit', [AdminPostController::class, 'BlogEdit'])->name('BlogEdit');
Route::post('/ishumanity/submit_participate', [AdminPostController::class, 'SubmitPartnership'])->name('SubmitPartnership');
Route::post('/ishumanity/donationupdate', [AdminPostController::class, 'Paystack'])->name('Paystack');
Route::post('/ishumanity/newsletters', [AdminPostController::class, 'Newsletter'])->name('Newsletter');
Route::post('/ishumanity/contactaddress', [AdminPostController::class, 'ContactMail'])->name('ContactMail');






