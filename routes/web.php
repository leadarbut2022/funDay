<?php

use App\Http\Controllers\AddformpersonController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\mail as ControllersMail;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/loginaddadminform_fun_day', function () {
    return view('admin/auth/login');
});


Route::get('/loginperson', function () {
    return view('ticetk_person/login');

});









Route::get('qr_v_img',[UsersController::class,'qr_v_img'])->name('qr_v_img');
Route::get('qr_v_img_hide',[UsersController::class,'qr_v_img_hide'])->name('qr_v_img_hide');







    



Route::post('loginadmin', [AdminController::class, 'loginAdmin'])->name('loginadmin'); 


Route::group(['middleware' =>['Authadmin'] ],function (){

 
    Route::get('dachbordd', [AdminController::class, 'dachbordd'])->name('dachbordd'); 
    Route::get('signoutadmin', [AdminController::class, 'signoutadmin'])->name('signoutadmin');

    Route::post('add_admin_',[AdminController::class,'add_admin_'])->name('add_admin_');
    Route::post('add_tiketman_',[AddformpersonController::class,'add_tiketman_'])->name('add_tiketman_');
    Route::post('add_user_admin',[UsersController::class,'add_user_admin'])->name('add_user_admin');


    // Route::post('add_user_admin_',[UsersController::class,'add_user'])->name('add_user_admin_');

    Route::post('add_user_admin_hide',[UsersController::class,'add_user_admin_hide'])->name('add_user_admin_hide');

    

    // Route::post('update_pro', [SelerController::class, 'update_pro'])->name('update_pro'); 
    // Route::post('allw_order', [SelerController::class, 'allw_order'])->name('allw_order'); 

});





Route::post('loginteketer', [AddformpersonController::class, 'loginteketer'])->name('loginteketer'); 


Route::group(['middleware' =>['addformperson'] ],function (){

    Route::get('a__d__u__s__e__r',[UsersController::class,'home'])->name('home');


    Route::get('signoutaddformerson', [AddformpersonController::class, 'signoutaddformerson'])->name('signoutaddformerson');

    Route::post('add_user_',[UsersController::class,'add_user'])->name('add_user');




    Route::post('sendmail',[UsersController::class,'send'])->name('send');

    // Route::post('edit_u_prodect', [SelerController::class, 'edit_u_prodect'])->name('edit_u_prodect'); 
    // Route::post('update_pro', [SelerController::class, 'update_pro'])->name('update_pro'); 
    // Route::post('allw_order', [SelerController::class, 'allw_order'])->name('allw_order'); 

    
    
    
});




