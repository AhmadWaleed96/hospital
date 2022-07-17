<?php

use App\Http\Controllers\BooksController;
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {return view('front_end.index');});
// Route::get('/book', function () {return view('front_end.book');});
Route::get('/specialty', function () { return view('front_end.specialty');});
Route::get('/servicese', function () { return view('front_end.services');});
Route::get('/dates', function () { return view('front_end.dates');});
Route::resource('/departments', 'DepartmentController');
// End department

// Start doctors
Route::resource('/doctors', 'DoctorController');
Route::resource('/users/doctors', 'DoctorController');

Route::get('/treatmenthistory/{doctor}', 'DoctorController@treatmentHistory')->name('treatment-history');
Route::get('/timeschedule/{doctor}', 'TimeScheduleController@timeSchedulesForDoctor')->name('doctor-time-schedules');
Route::get('/timeschedule/{doctor}/create/', 'TimeScheduleController@createtimeScheduleForDoctor')->name('create-time-schedule-for-doctor');
Route::get('/gettimeschedulebydoctor/', 'DoctorController@getTimeScheduleByDoctor')->name('get-time-schedule-by-doctor');
Route::get('/getdayoffschedulebydoctor/', 'DoctorController@getDayoffScheduleByDoctor')->name('get-dayoff-schedule-by-doctor');

// End doctors
// Start
Route::resource('/accountants', 'AccountantController');
Route::resource('/users/accountants', 'AccountantController');

Route::resource('/ticketout', 'TicketoutController');
Route::resource('/users/ticketout', 'TicketoutController');

Route::resource('/patients', 'PatientController');
Route::resource('/users/patients', 'PatientController');

Route::resource('/ray', 'RayController');
Route::resource('/users/ray', 'RayController');

Route::resource('/care', 'CareController');
Route::resource('/users/care', 'CareController');
// End
// Start nurses
Route::resource('/nurses', 'NurseController');
Route::resource('/users/nurses', 'NurseController');
// End nurses
// Start pharmacists
Route::resource('/pharmacists', 'PharmacistController');
Route::resource('/users/pharmacists', 'PharmacistController');
// End pharmacists
// Start receptionists
Route::resource('/receptionists', 'ReceptionistController');
Route::resource('/users/receptionists', 'ReceptionistController');
// End receptionists
// Start laboratorists
Route::resource('/laboratorists', 'LaboratoristController');
Route::resource('/users/laboratorists', 'LaboratoristController');
// End laboratorists
// Start blood_bank
Route::resource('/blood_bank', 'BloodBankController');
Route::resource('/donor', 'DonorController');
// End blood_bank

Route::resource('/timeschedules', 'TimeScheduleController');
Route::resource('/casehistories', 'CaseHistoryController');
Route::resource('/appointments', 'AppointmentController');
Route::resource('/documents', 'DocumentController');

Route::get('/prescription/print/{id}',['as'=>'prescription.print','uses'=>'PrescriptionController@print']);
Route::resource('/prescriptions', 'PrescriptionController');

Route::resource('/medicines/categories', 'MedicineCategoryController', ['as' => 'medicines']);
Route::resource('/medicines', 'MedicineController');
Route::resource('/services', 'ServiceController');
Route::resource('/beds', 'BedController');

Route::resource('/lap/lapreports', 'LapReportController');
Route::resource('/lap/laptemplates', 'LapTemplateController');

Route::resource('/bedallotments', 'BedAllotmentController');
Route::resource('/servicepackages', 'ServicePackageController');
Route::resource('/dayoffschedules', 'DayoffScheduleController');
Route::resource('/payments', 'PaymentController');
Route::resource('/paymentitems', 'PaymentItemController');
Route::resource('/expenses', 'ExpenseController');

// Start Appointment
Route::get('/getdoctorsbydepartment/', 'AppointmentController@getDoctorsByDepartment')->name('get-doctors-by-department');
Route::get('/getappointmentsbydate/', 'AppointmentController@getAppointmentsByDate')->name('get-appointments-by-date');
// End Appointment

Route::get('/gettimebytimeschedule/', 'TimeScheduleController@getTimeByTimeSchedule')->name('get-time-by-time-schedule');
Route::get('/getbedallotmentsbydate/', 'BedAllotmentController@getBedAllotmentsByDate')->name('get-bedallotments-by-date');
Route::get('/gettemplatebyid/', 'LapReportController@getTemplateById')->name('get-template-by-id');
Route::get('/getpaymentitembyitemid/', 'PaymentItemController@getPaymentItemByItemId')->name('get-payment-item-by-item-id');
Route::get('/getpaymentitembydoctorid/', 'PaymentItemController@getPaymentItemByDoctorId')->name('get-payment-item-by-doctor_id');
Route::get('/getuserbyusertype/', 'PublicController@getUserByUserType')->name('get-user-by-user-type');
// Start books
Route::resource('books', BooksController::class);
    Route::post('update_books/{id}' , [BooksController::class , 'update'])->name('update_books');
