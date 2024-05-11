<?php

use Barryvdh\DomPDF\Facades\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdftest', function () {
    return view('test.pdftest');
});

Route::get('/pdftest' , function(){
    // $pdf = App::make('dompdf.wrapper');
    //$pdf = app('dompdf.wrapper');
    //$pdf = Pdf:: loadHTML('<h1>hola pdf 3</h1>');
    //$pdf->loadHTML('<h1>hola pdf 3</h1>');
   // return $pdf->stream();

   return view('test.pdftest');
});

Route::get('/simpleqr', function () {
    return view('test.simpleqr');
});

Route::get('/qrgenerator', function () {
    return view('test.qrgenerator');
});
