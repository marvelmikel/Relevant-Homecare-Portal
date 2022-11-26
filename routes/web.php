<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FinanceController;
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

//employees routes
Route::get('employee',  [HomeController::class,'employee'])->name('employee.view-all-employee');
Route::get('employeelist',  [HomeController::class,'employeelist'])->name('employee.employee-list');
Route::get('employeeterminate',  [HomeController::class,'employeeterminate'])->name('employee.terminate');
Route::get('employeesalary',  [FinanceController::class,'employeesalary'])->name('employee.salary');
Route::post('employee-salary',[FinanceController::class,'addEmployeesalary']);
Route::post('addemployee',  [HomeController::class,"addemployee"]);
Route::get('edit-employee/{id}',  [HomeController::class, "editEmployee"]);
Route::put('edit-employee/{id}', [HomeController::class,'updateEmployee']);
Route::get('delete-employee/{id}',  [HomeController::class,'deleteEmployee']);
Route::get('assigned-employees',[HomeController::class,'assignedEmployee'])->name('employee.assigned');




//clients routes
Route::get('client',  [HomeController::class,'client'])->name('client.view-all-client');
Route::get('clientlist',  [HomeController::class,'clientlist'])->name('client.client-list');
Route::post('addclient',  [HomeController::class,"addclient"]);
Route::get('client/{id}',[HomeController::class,"getClient"]);
Route::delete('delete-client/{id}',[HomeController::class,'deleteClient']);
Route::get('edit-client/{id}', [HomeController::class,'editClient']);
Route::put('edit-client/{id}', [HomeController::class,'updateClient']);




//external share holders
Route::get('exshareholders',  [HomeController::class,'exshareholders'])->name('ex-share-holders');
Route::post('addexshareholders',[HomeController::class,'addExshareHolders']);

//gross revenue
Route::get('payment',  [FinanceController::class,'payment'])->name('deposit');
Route::post('addPayment',[FinanceController::class,'addPayment']);


route::get('/redirects', [HomeController::class,"index"]);
Route::get('logout', [HomeController::class,'logout'])->name('/');

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',[
    HomeController::class,"index"])->name('dashboard');

