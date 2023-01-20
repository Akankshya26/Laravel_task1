<?php

use App\Mail\TestEmail;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MutatorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\NotificationController;
use App\Jobs\SendEmailJob;

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

// Route::get('/', [ArticleController::class, 'article']);
// Route::get('/softDelete/{id}', [ArticleController::class, 'softDelete']);
// Route::get('/forceDelete/{id}', [ArticleController::class, 'forceDelete']);

// Route::get('trashed', [ArticleController::class, 'trashed']);
// Route::get('restore/{id}', [ArticleController::class, 'restore']);
// Route::get('restore-all', [ArticleController::class, 'restoreall']);

//polymorph many to many
// Route::get('/', [TestController::class, 'index']);
// Route::get('show-post', [TestController::class, 'show_post']);

//mutator
// Route::get('index', [MutatorController::class, 'index']);
// //accessor
//Route::get('show', [MutatorController::class, 'show']);

//component
// Route::get('/', function () {
//     return view('contact');
// });

// Route::get('home', function () {
//     return view('home');
// });
//Route::get('json', [MutatorController::class, 'json']);
//Request


// Route::get('/profile', function (Request $request) {
//     dd($request);
// });
//Route::get('/{id}', [PracticeController::class, 'index']);
//Route::get('/admin/two', [PracticeController::class, 'index1']);
//Route::get('/guest/one', [PracticeController::class, 'index1']);
// //name route
// Route::get('/admin/two', [PracticeController::class, 'index2'])
//     ->name('admin.two');
//Route::get('/index', [PracticeController::class, 'index']);
//Route::view("login", 'user');

//Route::put("users", [UserController::class, 'testRequest']);
// Route::view("user", 'user');
//Route::post('add', [UserController::class, 'addmember']);
// Route::get('/upload', function () {
//     return view('upload');
// });
// Route::post('/upload', [TestController::class, 'upload']);
//validation
// Route::get('/', [ValidationController::class, 'showform']);
// Route::post('/', [ValidationController::class, 'signup']);
// Route::get('file', [FileController::class, 'form']);
// Route::post('file/store', [FileController::class, 'store'])->name('file.store');

//middleware(global)
// Route::get('/', function () {
//     return view('home');
// });
//group middleware
// Route::get('dashboard', function () {
//     return view('dashboard');
// })->middleware('construction');
// Route::get('dashboard', function () {
//     return view('dashboard');
// });
//route middleware
// Route::get('stock', function () {
//     return view('stock');
// })->middleware('construction');

// Route::get('stock', function () {
//     return view('stock');
// });
// Route::get('report', [ReportController::class, 'show']);
//group middleware
// Route::middleware(['construction'])->group(function () {
//     Route::get('stock', function () {
//         return view('stock');
//     });
// });

//Mail Routes
// Route::get('send-email', function () {
//     $email = "abc@gmail.com";
//     $mailData = [
//         "name" => "TEST NAME",
//         "dob" => "26/06/2000"
//     ];
//     // dd($email);
//     Mail::to($email)->send(new TestEmail($mailData));
//     dd("Email is successfully send ");
// });
// Route::get('send-email', [FileController::class, 'mail']);
// Route::get('/send-email', [MailController::class, 'sendEmail']);
// Route::get('/send-notification/{id}', [NotificationController::class, 'sendOfferNotification']);

// Route::get('/', function () {
//     $email = 'abc@gmail.com';
//     dispatch(new SendEmailJob($email));
//     dd('send email');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
//events
Route::get('/', function () {
    return view('EventDashboard');
});
