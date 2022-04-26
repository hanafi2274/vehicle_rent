<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsageController;
use App\Http\Controllers\ServiceController;
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
    if(Auth::guard('web')->check()==false){
        return view('login');
        }else{
            return  redirect()->route('dashboard');
        }
});
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('checkRole:head manager,branch manager,admin');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/listUsageVehicle', [UsageController::class, 'listUsageVehicle'])->name('listUsageVehicle')->middleware('checkRole:head manager,branch manager,admin');
Route::get('/CreateOrderVehicleView', [UsageController::class, 'CreateOrderVehicleView'])->name('CreateOrderVehicleView')->middleware('checkRole:admin');
Route::post('/orderVehicle', [UsageController::class, 'orderVehicle'])->name('orderVehicle')->middleware('checkRole:admin');

Route::get('/listServiceVehicle', [ServiceController::class, 'listServiceVehicle'])->name('listServiceVehicle')->middleware('checkRole:head manager,branch manager,admin');
Route::get('/CreateServiceView', [ServiceController::class, 'CreateServiceView'])->name('CreateServiceView')->middleware('checkRole:admin');
Route::post('/orderService', [ServiceController::class, 'orderService'])->name('orderService')->middleware('checkRole:admin');

Route::post('/approveUsage', [UsageController::class, 'approve'])->name('approveUsage')->middleware('checkRole:head manager,branch manager');
Route::post('/approveService', [ServiceController::class, 'approve'])->name('approveService')->middleware('checkRole:head manager,branch manager');
Route::get('/export', [UsageController::class, 'export_excel'])->name('export')->middleware('checkRole:head manager,branch manager');
Route::get('/gas_usageView/{id}', [UsageController::class, 'gas_usageView'])->name('gas_usageView')->middleware('checkRole:admin');
Route::post('/gas_usage', [UsageController::class, 'gas_usage'])->name('gas_usage')->middleware('checkRole:admin');
