<?php

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

Route::get('/login', function () {
    return view('admin.admin-login-page');
})->name('adminLogin');

//Route::any('/adminlogin', [App\Http\Controllers\checkmodel::class, 'check']);

Route::group(['middleware'=>'auth:admin'],function(){


    Route::any('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    ///////////////////////////////////////////////// langueges contorller ////////////////////////////////////
    Route::any('/showall', [App\Http\Controllers\LanController::class, 'show'])->name('admin.languages');
    Route::any('/edit/{id}', [App\Http\Controllers\LanController::class, 'edit'])->name('admin.languages.edit');

    Route::any('/update/{id}', [App\Http\Controllers\LanController::class, 'update'])->name('admin.languages.update');
    Route::any('/create', [App\Http\Controllers\LanController::class, 'create'])->name('admin.create');

    Route::any('/store', [App\Http\Controllers\LanController::class, 'store'])->name('admin.store');
    Route::any('/delete/{id}', [App\Http\Controllers\LanController::class, 'delete'])->name('admin.languages.delete');



///////////////////////////////////////////////// main categery contorller ////////////////////////////////////
Route::any('/showallcat', [App\Http\Controllers\MainCat::class, 'show'])->name('admin.maincat');
Route::any('/createcat', [App\Http\Controllers\MainCat::class, 'create'])->name('admin.maincategory.create');
Route::any('/storecat', [App\Http\Controllers\MainCat::class, 'store'])->name('admin.cat.store');
Route::any('/editcat/{id}', [App\Http\Controllers\MainCat::class, 'edit'])->name('admin.cat.edit');
Route::any('/updatecat/{id}', [App\Http\Controllers\MainCat::class, 'update'])->name('admin.cat.update');
Route::any('/deletecat/{id}', [App\Http\Controllers\MainCat::class, 'delete'])->name('admin.cat.delete');
Route::any('/changstutscat/{id}', [App\Http\Controllers\MainCat::class, 'change'])->name('admin.cat.change');

///////////////////////////////////////////////// vendor contorller ////////////////////////////////////
Route::any('/showallvendor', [App\Http\Controllers\Vendors::class, 'show'])->name('admin.vendor');
Route::any('/createvendor', [App\Http\Controllers\Vendors::class, 'create'])->name('admin.vendor.create');
Route::any('/storevendor', [App\Http\Controllers\Vendors::class, 'store'])->name('admin.vendor.store');
Route::any('/editvendor/{id}', [App\Http\Controllers\Vendors::class, 'edit'])->name('admin.vendor.edit');
Route::any('/updatevendor/{id}', [App\Http\Controllers\Vendors::class, 'update'])->name('admin.vendor.update');
Route::any('/deletevendor/{id}', [App\Http\Controllers\Vendors::class, 'delete'])->name('admin.vendor.delete');
    
    ///////////////////////////////////////////////// subcatgery contorller ////////////////////////////////////
Route::any('/showallsubcategories', [App\Http\Controllers\SubCategry::class, 'show'])->name('admin.subcategories');
Route::any('/createsubcategories', [App\Http\Controllers\SubCategry::class, 'create'])->name('admin.subcategories.create');
Route::any('/storesubcategories', [App\Http\Controllers\SubCategry::class, 'store'])->name('admin.subcategories.store');
Route::any('/editsubcategories/{id}', [App\Http\Controllers\SubCategry::class, 'edit'])->name('admin.subcategories.edit');
Route::any('/updatesubcategories/{id}', [App\Http\Controllers\SubCategry::class, 'update'])->name('admin.subcategories.update');
Route::any('/deletesubcategories/{id}', [App\Http\Controllers\SubCategry::class, 'delete'])->name('admin.subcategories.delete');




});



Route::group(['middleware'=>'guest:admin'],function(){

    Route::any('/check', [App\Http\Controllers\checkmodel::class, 'index']);


});
