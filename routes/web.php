<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;
use App\Http\Controllers\PdfController;

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});
=======

// pantalla del "landing" donde llega la gente directo que no esta autenticada
// o que ha perdido session.
Route::get('/', function () { return view('welcome'); });


// pantalla donde la gente se registra (crea su usuario)
Route::get('/register', function () { return view('register'); });

// pantalla que las personas accesan a la plataforma
Route::get('/login', function () { return view('login'); })->name('login');

// pantallas creadas, sin implementacion ni redireccion
// pantalla de olvide contraseña (blade)
// Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// pantalla de recuperar contraseña (dnpoint)
// Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// pantalla recurerar contraseña... ((verificar si pre o post llenado formulario)
// Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');

// recuperar contraseña endpoint
// Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');*/

// pantalla recurperar contraseña
// Route::get('forgot-password', function () { return view('forgot-password'); })->name('password.request'); 


//Routes Controller Users Authentication (endpoints)
Route::post('/register', [UserController::class,'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

//Routes Controller fpdf
// test de concepto
Route::get('/generate-pdf', [PdfController::class,'generatePDF']);

// layouts para composiciones en las pantallas
// headers y footers principalmente
// deberian haber menus de acceso a las pantallas aparte o acciones
Route::get('app', function () { return view('layouts.app'); });

// de manera oculta esta la pantalla de /log-viewer donde puedes ver los logs de la app, 
// no se refleja aqui poruqe esta en un middleware
//  URL: <ej: http://127.0.0.1:8000>/log-viewer



/*Routes Emails*/

Route::get('contactanos', function () {
    
    Mail::to('elicarconsales@gmail.com')
    ->send(new ContactanosMailable);

    return "Mensaje enviado";

})->name('contactanos');
>>>>>>> 3d5c482c8d93a0bad2bfe5d3c210111356e72306
