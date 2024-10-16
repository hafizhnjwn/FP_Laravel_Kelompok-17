<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Models\Facility;
use App\Models\Specialty;
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




Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->
        middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);

Route::get('updatedoctor/{id}', [AdminController::class, 'updatedoctor']);

Route::post('editdoctor/{id}', [AdminController::class, 'editdoctor']);

use App\Http\Controllers\FacilityController;

Route::get('/add_facility_view', [FacilityController::class, 'addview']);
Route::post('/store_facility', [FacilityController::class, 'store_facility']);
Route::get('/facility_list', [FacilityController::class, 'showlist']);
Route::get('/deletefacility/{id}', [FacilityController::class, 'deletefacility']);
Route::get('/updatefacility/{id}', [FacilityController::class, 'updatefacility']);
Route::post('/updatefacility/{id}', [FacilityController::class, 'update']);


Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/myappointment/{id}', [HomeController::class, 'cancel_appoint'])->name('cancel_appoint');

Route::get('/facilities', function () {
    $query = Facility::latest();

    if (request()->has('search')) {
        $query->where('name', 'like', '%' . request('search') . '%');
    }

    $facilities = $query->paginate(16);

    return view('user.facilities', ['facilities' => $facilities]);
});

Route::get('/facilities/{facility:slug}', function (Facility $facility) {
    return view('user.facility', ['facility' => $facility]);
});

Route::get('/doctor/{specialties:slug}', function(Specialty $specialties){
    return view('user.doctors', ['title' => 'Doctor by ' . $specialties->name, 'posts' => $specialties->doctors]);
});

Route::get('/doctor',[DoctorController::class,'doctor']);