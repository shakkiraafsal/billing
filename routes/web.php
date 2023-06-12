<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CEController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','is_user_verify_email']], function()
{
    
Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');

//CATEGORY//
Route::get('category-list',[AdminController::class,'categoryList'])->name('admin.category-list');
Route::post('post-category',[AdminController::class,'postCategory'])->name('admin.post-category');
//CATEGORY//


//HSN NO//
Route::get('hsn-list',[AdminController::class,'hsnList'])->name('admin.hsn-list');
Route::post('post-hsn',[AdminController::class,'postHsn'])->name('admin.post-hsn');
//HSN NO//

//ITEM//

Route::get('item-list',[AdminController::class,'itemList'])->name('admin.item-list');
Route::post('post-item',[AdminController::class,'postItem'])->name('admin.post-item');

//ITEM//


//PARTY//

Route::get('party-list',[AdminController::class,'partyList'])->name('admin.party-list');
Route::post('post-paty',[AdminController::class,'postParty'])->name('admin.post-party');

//PARTY//


});


