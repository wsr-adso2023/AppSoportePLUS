<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\DiagnosticreportsController;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    return view('auth/login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/guardar-datos', [DiagnosticreportsController::class, 'store']);

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
    'suppliers' => SupplierController::class,
    'customers' => CustomerController::class,
    'support' => SupportController::class,
    'reports' => DiagnosticreportsController::class,
    
]);

Route::post('/destroy-user', [UserController::class, 'destroy'])->name('destroy-user');
Route::post('/destroy-product', [ProductController::class, 'destroy'])->name('destroy-product');
Route::post('/destroy-supplier', [SupplierController::class, 'destroy'])->name('destroy-supplier');
Route::post('/destroy-customer', [CustomerController::class, 'destroy'])->name('destroy-customer');