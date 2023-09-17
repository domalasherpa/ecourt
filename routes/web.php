<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\frontend2\CitizenController;
use App\Http\Controllers\frontend2\LawyersController;
use App\Http\Controllers\frontend2\AttorneyController;
use App\Http\Controllers\frontend\CaseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\ClientController;
use App\Http\Controllers\frontend\LawyerController;
use App\Http\Controllers\LogoutController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/citizen', [CitizenController::class, 'citizen'])->name('citizen');
Route::get('/attorneys', [AttorneyController::class, 'attorney'])->name('attorneys');
Route::get('/lawyer', [LawyersController::class, 'lawyer'])->name('lawyer');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/showusers', [ClientController::class, 'index'])->name('client.index');
    Route::get('/showlawyers', [LawyerController::class, 'index'])->name('lawyer.index');
    // Route::get('/expertise', [LawyerController::class, 'index'])->name('lawyer.index');
    Route::get('/showcases', [CaseController::class, 'index'])->name('case.index');
    Route::get('/settings', [AccountController::class, 'index'])->name('account-settings');

    Route::post('/updateuser/{id}', [ClientController::class, 'update'])->name('update-basic-data');
    Route::post('/updatelawyer/{id}', [LawyerController::class, 'update'])->name('update-lawyer');

    Route::get("/expertise", [LawyerController::class, 'toExpertise'])->name('lawyer.expertise');
    Route::post("/expertise/add/{id}", [LawyerController::class, 'addExpertise'])->name('expertise-add');

    Route::get("/fileCase", [CaseController::class, 'toFileCase'])->name('case.file');
    Route::post("/fileCase/new/{id}", [CaseController::class, 'store'])->name('case.new.file');

    Route::get("/hireLawyer/{id}", [LawyerController::class, 'hire'])->name('hirelawyer');

    Route::get("/lawyer", function () {
        return view('lawyer', [
            'lawyer' => App\Models\User::where('type', "lawyer")->get()
        ]);
    })->name('tolawyer');

    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
});


require __DIR__ . '/auth.php';
