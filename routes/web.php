<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;


Route::get('download', function () {

    //get the GET request
    $path = request('f');

    //look at the extension of the file being requested
    $extension = pathinfo($path, PATHINFO_EXTENSION);

    //create an array of items to reject being downloaded
    $blocked = ['php', 'htaccess'];

    //if the requested file is not in the blocked array
    if (! in_array($extension, $blocked)) {
        //download the file
        return response()->download($path);
    }
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/community/news', [App\Http\Controllers\HomeController::class, 'news'])->name('news');
Route::get('/community/notice', [App\Http\Controllers\HomeController::class, 'notice'])->name('notice');
Route::get('/community/notice-detail/{id}', [App\Http\Controllers\HomeController::class, 'noticedetail'])->name('notice-detail/{id}');

Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contact-us');

Route::post('/contact-us/submit', [App\Http\Controllers\HomeController::class, 'contactsubmit'])->name('contactussubmit');


Route::get('/our-business/intellegent-integrated-logistic', [App\Http\Controllers\BusinessController::class, 'businesslog'])->name('intelligent-integrated-logistic');
Route::get('/our-business/digital-healthcare', [App\Http\Controllers\BusinessController::class, 'healthcare'])->name('digital-healthcare');
Route::get('/our-business/system-development-management', [App\Http\Controllers\BusinessController::class, 'management'])->name('system-development-management');
Route::get('/our-business/export-voucher', [App\Http\Controllers\BusinessController::class, 'exportvoucher'])->name('export-voucher');
Route::get('/our-business/webDesign', [App\Http\Controllers\BusinessController::class, 'webdesign'])->name('webDesign');

Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');

Route::get('/about', function () {
   return  view('frontend/pages/about');
});

Route::get('/id', function () {
   return redirect('/');
});

Route::get('/id/aboutus', function () {
   return redirect('/about-us');
});

Route::get('/news', function () {
   return redirect('/community/news');
});
Route::get('/notice', function () {
   return redirect('/community/notice');
});
Route::get('/contact', function () {
   return redirect('/contact-us');
});
Route::get('/intellegent-integrated-logistic', function () {
   return redirect('/our-business/intellegent-integrated-logistic');
});
Route::get('/digital-healthcare', function () {
   return redirect('/our-business/digital-healthcare');
});
Route::get('/system-development-management', function () {
   return redirect('/our-business/system-development-management');
});
Route::get('/export-voucher', function () {
   return redirect('/our-business/export-voucher');
});

// Route::get('/lang',[LanguageController::class , 'change'])->name('user.lang');

Route::get('/lang/{id}',[LanguageController::class , 'ganti'])->name('user.lang');

// Route::get('language/{locale?}', function ($locale = null) {
//     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
//         app()->setLocale($locale);
//     }

//     return redirect()g->back();
// });
Route::post('/visitor-record', [App\Http\Controllers\HomeController::class, 'postmonitor'])->name('visitor.record');

// END FRONTEND


Route::middleware('auth')->group(function () {
   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group([
      'middleware' => 'auth',
      'prefix'=>'dashboard/',
      'as' => 'dashboard.',
      
      ],
      function () {
        // Dashboard Routes
         Route::get('/', [App\Http\Controllers\backend\DashboardController::class, 'index'])->name('dashboard');
         Route::get('/info', [App\Http\Controllers\backend\DashboardController::class, 'index'])->name('dashboard.info');
         Route::get('/list-message', [App\Http\Controllers\backend\DashboardController::class, 'display_message'])->name('list.message');
         Route::get('/show-message', [App\Http\Controllers\backend\DashboardController::class, 'message_by_id'])->name('show.message');

         // Media News Routes
         Route::get('/list-news', [App\Http\Controllers\backend\MediaNewsController::class, 'index'])->name('list.news');
         Route::get('/post-news', function () {
            return  view('backend/pages/post-news');
         });
         Route::post('/store-news', [App\Http\Controllers\backend\MediaNewsController::class, 'store_ajax'])->name('store.news');
         Route::get('/update-news/{id}', [App\Http\Controllers\backend\MediaNewsController::class, 'update'])->name('update.news');
         Route::get('/delete-news', [App\Http\Controllers\backend\MediaNewsController::class, 'destroy'])->name('delete.news');

         // Media Video Routes
         Route::get('/list-videos', [App\Http\Controllers\backend\MediaVideosController::class, 'index'])->name('list.videos');
         Route::get('/post-videos', function () {
            return  view('backend/pages/post-videos');
         });
         // Notices Routes
         Route::get('/list-notices', [App\Http\Controllers\backend\NoticeController::class, 'index'])->name('list.notice');
         Route::get('/post-notices', [App\Http\Controllers\backend\NoticeController::class, 'store'])->name('post.notice');
         Route::get('/update-notices/{id}', [App\Http\Controllers\backend\NoticeController::class, 'update'])->name('update.notice');
         Route::post('/post-notices-ajax', [App\Http\Controllers\backend\NoticeController::class, 'store_ajax'])->name('post.notice.ajax');
         Route::get('/delete-notice', [App\Http\Controllers\backend\NoticeController::class, 'destroy'])->name('delete.notice');
         // Our Team Routes
         Route::get('/list-team', [App\Http\Controllers\backend\OurTeamController::class, 'index'])->name('list.team');
         Route::get('/show-team', [App\Http\Controllers\backend\OurTeamController::class, 'show'])->name('show.team');
         Route::get('/delete-team', [App\Http\Controllers\backend\OurTeamController::class, 'destroy'])->name('delete.team');
         Route::post('/post-team', [App\Http\Controllers\backend\OurTeamController::class, 'store'])->name('post.team');

         //Meta Tags
         Route::get('/list-tags', [App\Http\Controllers\backend\MetaController::class, 'index'])->name('list.tags');
         Route::post('/post-tags', [App\Http\Controllers\backend\MetaController::class, 'store'])->name('post.tags');
         Route::get('/delete-tags', [App\Http\Controllers\backend\MetaController::class, 'destroy'])->name('delete.tags');
         Route::get('/show-tags', [App\Http\Controllers\backend\MetaController::class, 'show'])->name('show.tags');
         
         //Admin
         Route::get('/list-admins', [App\Http\Controllers\backend\AdminController::class, 'index'])->name('list.admins');
         Route::get('/show-admin', [App\Http\Controllers\backend\AdminController::class, 'show'])->name('show.admin');
         Route::post('/post-admin', [App\Http\Controllers\backend\AdminController::class, 'store'])->name('post.admin');
         Route::get('/delete-admin', [App\Http\Controllers\backend\AdminController::class, 'destroy'])->name('delete.admin');
         
      }
   );

require __DIR__.'/auth.php';
