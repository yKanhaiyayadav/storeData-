<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/create', [userController::class, 'saveData'])->name('create');

Route::get('/login', function () {
    return view('signin');
})->name('login');

Route::post('/signin', [userController::class, 'login'])->name('signin');

Route::get('/logout', [userController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    if(session('activeId')){
        return view('pages.profile');
    }else{
        return view('signin');
    }
});

Route::get('/profileActive', [userController::class, 'profileActive'])->name('profileActive');

Route::get('/upload', function () {
    return view('pages.upload');
});

Route::post('/uploadData', [userController::class, 'uploadData'])->name('uploadData');

Route::get('/gallary', function () {
    return view('pages.gallary');
});

Route::get('/getImage', [userController::class, 'getImage'])->name('getImage');

Route::get('/document', function () {
        return view('pages.document');
});

Route::get('/getDocument', [userController::class, 'getDocument'])->name('getDocument');

Route::get('/video', function () {
        return view('pages.video');
});

Route::get('/getVideo', [userController::class, 'getVideo'])->name('getVideo');

Route::get('/updatepage', function(){
    return View('pages.edit');
});

Route::get('/upadate{id?}', [userController::class, 'update'])->name('update');

route::get('signin',function(){
    return view('signin');
});

Route::post('/updateData{id?}', [userController::class, 'updateData'])->name('updateData');

Route::fallback(function (){
    return view('components.invalidurl');
});

Route::get('/chenge', function(){
    return view('pages.change');
})->name('chenge');

Route::post('/chenged', [userController::class, 'chenged'])->name('chenged');

Route::get('/forget', function(){
    return view('pages.forget');
});

Route::post('/forgetpass', [userController::class, 'forgetpass'])->name('forgetpass');

Route::get('/forget-password', function(){
    return view('pages.forget-password');
});

Route::post('/forget_pass', [userController::class, 'forgetPassword'])->name('forget_pass');