<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\ServiceController;


use Illuminate\Support\Facades\Route;
Route::get('/',[HomeController::class,'index']);
Route::get('/contact', [ContactUsController::class, 'contactus'])->name('contact.form');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
   
    Route::post('/contact', [ContactUsController::class, 'submitForm'])->name('contact.submit');
    Route::post('/bookings', [HomeController::class, 'book'])->name('bookings.store');
    Route::get('/hbooknow',[HomeController::class,'hbooking'])->name('hbookings.create');
Route::post('/hbookings', [HomeController::class, 'hbook'])->name('hbookings.store');
Route::get('/booknow',[HomeController::class,'booking'])->name('bookings.create');
Route::get('/home',[HomeController::class,'login']);

});

Route::get('/add_cat',[CategoryController::class,'create']);
Route::post('store_cat',[CategoryController::class,'store']);
Route::get('show_cat',[CategoryController::class,'show']);
Route::get('edit_cat/{id}',[CategoryController::class,'edit']);
Route::post('update_cat/{id}',[CategoryController::class,'update']);
Route::get('delete_cat/{id}',[CategoryController::class,'destroy']);
Route::get('/categories',[HomeController::class,'categories']);
Route::get('/add_img',[GalleryController::class,'create']);
Route::post('store_img',[GalleryController::class,'store']);
Route::get('show_img',[GalleryController::class,'show']);
Route::get('delete_img/{id}',[GalleryController::class,'destroy']);
Route::get('edit_img/{id}',[GalleryController::class,'edit']);
Route::post('update_img/{id}',[GalleryController::class,'update']);
Route::get('/galleries',[HomeController::class,'gallery1']);
Route::get('add_hotl',[HotelController::class,'create']);
Route::post('store_hotl',[HotelController::class,'store']);
Route::get('show_hotl',[HotelController::class,'show']);
Route::get('delete_hotl/{id}',[HotelController::class,'destroy']);
Route::get('edit_hotl/{id}',[HotelController::class,'edit']);
Route::post('update_hotl/{id}',[HotelController::class,'update']);
Route::get('/hotels',[HomeController::class,'hotel1']);
Route::get('/add_tm',[TimeController::class,'create']);
Route::post('store_tm',[TimeController::class,'store']);
Route::get('show_tm',[TimeController::class,'show']);
Route::get('delete_tm/{id}',[TimeController::class,'destroy']);
Route::get('edit_tm/{id}',[TimeController::class,'edit']);
Route::post('update_tm/{id}',[TimeController::class,'update']);
Route::get('/add_ven',[VenueController::class,'create']);
Route::post('store_ven',[VenueController::class,'store']);
Route::get('show_ven',[VenueController::class,'show']);
Route::get('delete_ven/{id}',[VenueController::class,'destroy']);
Route::get('edit_ven/{id}',[VenueController::class,'edit']);
Route::post('update_ven/{id}',[VenueController::class,'update']);
Route::get('/venues',[HomeController::class,'venue']);
Route::get('/add_ser',[ServiceController::class,'create']);
Route::post('store_ser',[ServiceController::class,'store']);
Route::get('show_ser',[ServiceController::class,'show']);
Route::get('delete_ser/{id}',[ServiceController::class,'destroy']);
Route::get('edit_ser/{id}',[ServiceController::class,'edit']);
Route::post('update_ser/{id}',[ServiceController::class,'update']);
Route::get('/services',[HomeController::class,'service']);
Route::get('/faqs',[HomeController::class,'faqs']);
Route::get('/add_org',[OrganizerController::class,'create']);
Route::post('store_org',[OrganizerController::class,'store']);
Route::get('show_org',[OrganizerController::class,'show']);
Route::get('delete_org/{id}',[OrganizerController::class,'destroy']);
Route::get('edit_org/{id}',[OrganizerController::class,'edit']);
Route::post('update_org/{id}',[OrganizerController::class,'update']);
Route::get('/organizers',[HomeController::class,'organize']);
Route::get('/showbooking',[VenueController::class,'showbooking']);
Route::get('/showhbooking',[HotelController::class,'showhbooking']);
