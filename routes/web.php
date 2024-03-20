<?php

use App\Http\Controllers\aboutbackend;
use App\Http\Controllers\aboutfronted;
use App\Http\Controllers\authController;
use App\Http\Controllers\bookfronted;
use App\Http\Controllers\bookingBackendController;
use App\Http\Controllers\contactBackend;
use App\Http\Controllers\contactfronted;
use App\Http\Controllers\dashboardbackend;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\herosection;
use App\Http\Controllers\indexfronted;
use App\Http\Controllers\menubackend;
use App\Http\Controllers\menufronted;
use App\Http\Controllers\servicebackendController;
use App\Http\Controllers\servicefronted;
use App\Http\Controllers\teamBackend;
use App\Http\Controllers\teamfronted;
use App\Http\Controllers\testimonialBackend;
use App\Http\Controllers\testiomnialfronted;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//fronted
Route::get('/',[indexfronted::class,'index'])->name('fronted.index');
Route::get('about',[aboutfronted::class,'about'])->name('fronted.about');
Route::get('service',[servicefronted::class,'service'])->name('fronted.service');
Route::get('menu',[menufronted::class,'menu'])->name('fronted.menu');

Route::get('team',[teamfronted::class,'team'])->name('fronted.team');
Route::get('testiomnial',[testiomnialfronted::class,'testiomnial'])->name('fronted.testiomnial');
//contact
Route::get('contact',[contactfronted::class,'contact'])->name('fronted.contact');
Route::post('storecontact',[contactfronted::class,'storecontact'])->name('fronted.storecontact');

//booking
Route::get('book',[bookfronted::class,'book'])->name('fronted.book');
// Route::post('storebook',[bookfronted::class,'storebook'])->name('fronted.storebook');
Route::get('bookingTable',[emailController::class,'email'])->name('booking.email');
Route::get('bookingemail',[emailController::class,'bookingemail'])->name('bookingemail.page');
Route::post('storebooking',[emailController::class,'storeEmail'])->name('storebooking.email');


//login
Route::get('login',[authController::class,'login'])->name('auth.login');
Route::post('checklogin',[authController::class,'checkLogin'])->name('auth.checklogin');

//logout
Route::get('logout',[authController::class,'logout'])->name('auth.logout');

//admin
Route::group(['middleware'=>'admin'],function(){
    Route::get('admindashboard',[dashboardController::class,'Dashboard'])->name('Dashboard');

//backend
//herosection
Route::get('herosection',[herosection::class,'heroSection'])->name('backend.herosection');
Route::get('addherosection',[herosection::class,'addheroSection'])->name('backend.addherosection');
Route::post('storeherosection',[herosection::class,'storeheroSection'])->name('backend.storeherosection');
Route::get('editherosection{id}',[herosection::class,'editheroSection'])->name('backend.editherosection');
Route::post('updateherosection',[herosection::class,'updateheroSection'])->name('backend.updateherosection');
Route::get('deleteherosection{id}',[herosection::class,'deleteheroSection'])->name('backend.deleteherosection');

//about
Route::get('aboutbackend',[aboutbackend::class,'aboutBackend'])->name('backend.about');
Route::get('addaboutbackend',[aboutbackend::class,'addaboutBackend'])->name('backend.addaboutbackend');
Route::post('storeaboutbackend',[aboutbackend::class,'storeaboutBackend'])->name('backend.storeaboutbackend');
Route::get('editaboutbackend{id}',[aboutbackend::class,'editaboutBackend'])->name('backend.editaboutbackend');
Route::post('updateaboutbackend',[aboutbackend::class,'updateaboutBackend'])->name('backend.updateaboutbackend');
Route::get('deleteaboutbackend{id}',[aboutbackend::class,'deleteaboutBackend'])->name('backend.deleteaboutbackend');

//service

Route::get('servicebackend',[servicebackendController::class,'serviceBackend'])->name('backend.service');
Route::get('addservicebackend',[servicebackendController::class,'addserviceBackend'])->name('backend.addservice');
Route::post('storeservicebackend',[servicebackendController::class,'storeserviceBackend'])->name('backend.storeservice');
Route::get('editservicebackend{id}',[servicebackendController::class,'editserviceBackend'])->name('backend.editservice');
Route::post('updateservicebackend',[servicebackendController::class,'updateserviceBackend'])->name('backend.updateservice');
Route::get('deleteservicebackend{id}',[servicebackendController::class,'deleteserviceBackend'])->name('backend.deleteservice');

//menu
//breakfast
Route::get('menubackend',[menubackend::class,'menuBackend'])->name('backend.menu');
Route::get('addmenubackend',[menubackend::class,'addmenuBackend'])->name('backend.addmenu');
Route::post('storemenubackend',[menubackend::class,'storemenuBackend'])->name('backend.storemenu');
Route::get('editmenubackend{id}',[menubackend::class,'editmenuBackend'])->name('backend.editmenu');
Route::post('updatemenubackend',[menubackend::class,'updatemenuBackend'])->name('backend.updatemenu');
Route::get('deletemenubackend{id}',[menubackend::class,'deletemenuBackend'])->name('backend.deletemenu');

//lunch
Route::get('lunch',[menubackend::class,'lunch'])->name('backend.lunch');
Route::get('addlunch',[menubackend::class,'addLunch'])->name('backend.addlunch');
Route::post('storelunch',[menubackend::class,'storeLunch'])->name('backend.storelunch');
Route::get('editlunch{id}',[menubackend::class,'editLunch'])->name('backend.editlunch');
Route::post('updatelunch',[menubackend::class,'updateLunch'])->name('backend.updatelunch');
Route::get('deletelunch{id}',[menubackend::class,'deleteLunch'])->name('backend.deletelunch');

//dinner
Route::get('dinner',[menubackend::class,'dinner'])->name('backend.dinner');
Route::get('addDinner',[menubackend::class,'addDinner'])->name('backend.adddinner');
Route::post('storedinner',[menubackend::class,'storeDinner'])->name('backend.storedinner');
Route::get('editdinner{id}',[menubackend::class,'editDinner'])->name('backend.editdinner');
Route::post('updatedinner',[menubackend::class,'updateDinner'])->name('backend.updatedinner');
Route::get('deletedinner{id}',[menubackend::class,'deleteDinner'])->name('backend.deletedinner');

//team

Route::get('teambackend',[teamBackend::class,'teamBackend'])->name('backend.team');
Route::get('addteambackend',[teamBackend::class,'addteamBackend'])->name('backend.addteam');
Route::post('storeteambackend',[teamBackend::class,'storeteamBackend'])->name('backend.storeteam');
Route::get('editteambackend{id}',[teamBackend::class,'editteamBackend'])->name('backend.editteam');
Route::post('updateteambackend',[teamBackend::class,'updateteamBackend'])->name('backend.updateteam');
Route::get('deleteteambackend{id}',[teamBackend::class,'deleteteamBackend'])->name('backend.deleteteam');

//testimonial
Route::get('testimonialbackend',[testimonialBackend::class,'testimonialBackend'])->name('backend.testimonial');
Route::get('addtestimonial',[testimonialBackend::class,'addtestimonialBackend'])->name('backend.addtestimonial');
Route::post('storetestimonial',[testimonialBackend::class,'storetestimonialBackend'])->name('backend.storetestimonial');
Route::get('edittestimonial{id}',[testimonialBackend::class,'edittestimonialBackend'])->name('backend.edittestimonial');
Route::post('updatetestimonial',[testimonialBackend::class,'updatetestimonialBackend'])->name('backend.updatetestimonial');
Route::get('deletetestimonial{id}',[testimonialBackend::class,'deletetestimonialBackend'])->name('backend.deletetestimonial');

//booking
// Route::get('viewbooking',[bookingBackendController::class,'viewbooking'])->name('backend.viewbooking');
// Route::get('deletebooking{id}',[bookingBackendController::class,'deletebooking'])->name('backend.deletebooking');

//contact
Route::get('viewcontact',[contactBackend::class,'viewcontact'])->name('backend.viewcontact');
Route::get('deletecontact{id}',[contactBackend::class,'deletecontact'])->name('backend.deletecontact');



});




