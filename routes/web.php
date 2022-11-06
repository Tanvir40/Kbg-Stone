<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\MarbelController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//frontEnd Controller
Route::get('/', [FrontendController::class, 'index'])->name('/');
Route::get('/marbels', [FrontendController::class, 'marbels'])->name('marbels');
Route::get('/new-Stones', [FrontendController::class, 'new_Stones'])->name('new_Stones');
Route::get('/customers', [FrontendController::class, 'customers'])->name('customers');
Route::get('/Contact', [FrontendController::class, 'Contact'])->name('Contact');
//marbels details
Route::get('/marbel/details/{marbel_id}', [FrontendController::class, 'marbel_details'])->name('marbel.details');
//marbels by category
Route::get('/new-Stones/{id}', [FrontendController::class, 'marbels_by_category']);
//marbels by category Room
Route::get('/new-Stone/{id}', [FrontendController::class, 'marbels_by_categoryroom']);

//BackendController

//add banner
Route::get('/add/banner',[BackendController::class, 'add_banner'])->name('add.banner');
// save banner
Route::POST('/save-banner', [BackendController::class, 'save_banner'])->name('save.banner');
//Image banner delete
Route::get('/banner/delete/{banner_id}', [BackendController::class, 'banner_delete'])->name('banner.delete');
// active banner
Route::get('/active/banner/{banner_id}', [BackendController::class, 'banner_active']);
// Deactive banner
Route::get('/deactive/banner/{banner_id}', [BackendController::class, 'banner_deactive']);
//banner_image_2 view
Route::get('/2nd/banner/image',[BackendController::class, 'banner_image_2'])->name('banner_image_2');
// save banner_image_2
Route::POST('/save-banner2', [BackendController::class, 'save_banner2'])->name('save.2nd.banner');

// contact submit
Route::POST('/contact-submit', [BackendController::class, 'contact_submit'])->name('contact_submit');
//contact form view
Route::get('/view/contact',[BackendController::class, 'view_contact'])->name('view_contact');
//contact form delete
Route::get('/contact/delete/{contact_id}', [BackendController::class, 'contact_delete'])->name('contact.delete');

//Add Marbel Category
Route::get('/add/marbel/cat',[MarbelController::class, 'add_marbel_cat'])->name('add.marbel.cat');
// save Marbel Category
Route::POST('/category/insert', [MarbelController::class, 'add_marbel_insert'])->name('save.marbel.cat');
//Marbel Category delete
Route::get('/marbel/category/delete/{category_id}', [MarbelController::class, 'category_delete'])->name('category.add.delete');

//Add Marbel Room Category
Route::get('add/marbel/room',[MarbelController::class, 'add_marbel_room'])->name('add.marbel.room');
// save Marbel Room Category
Route::POST('/category/room/insert', [MarbelController::class, 'save_marbel_room'])->name('save.marbel.room');
//Marbel Category Room delete
Route::get('/marbel/room/delete/{category_id}', [MarbelController::class, 'category_room_delete'])->name('category.room.delete');

//Add New Marbel
Route::get('/add/marbel',[MarbelController::class, 'add_marbel'])->name('add.marbel');
// save Marbel
Route::POST('/save-marbel', [MarbelController::class, 'save_marbel'])->name('save.marbel');
//Marbel list
Route::get('/marbel/list', [MarbelController::class, 'marbel_list'])->name('marbel.list');
//Marbel delete
Route::get('/marbel/delete/{marbel_id}', [MarbelController::class, 'marbel_delete'])->name('marbel.delete');

//Add Customer Review
Route::get('add/customer/review',[BackendController::class, 'add_customer_review'])->name('add.customer.review');
// save clint Review 
Route::POST('/clint/review/insert', [BackendController::class, 'save_clint_review'])->name('save.clint.review');
//clint Review delete
Route::get('/clint/review/delete/{review_id}', [BackendController::class, 'clint_review_delete'])->name('clint.review.delete');