<?php

use Illuminate\Support\Facades\Route;

use Psr\Http\Message\ServerRequestInterface;

Route::get('/example-01', function () {
    return view('example-01-form');
    })->name('example-01-form');
Route::post('/example-01', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody();
    $price = (double)$data['price'];
    $discount = (double)$data['discount'];
    $discountCost = $discount/100 * $price;
    $netPrice = $price - $discountCost;
    return view('example-01-result', [
    'price' => $price, 'discount' => $discount,
    'discountCost' => $discountCost, 'netPrice' => $netPrice,
    ]);
    })->name('example-01-result');

    
Route::get('/area', function () {
    return view('area-form');
    })->name('area-form');
Route::post('/area', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody();
    $height = (double)$data['height'];
    $width = (double)$data['width'];
    $type = (double)$data['type'];
    $area=$type*$height*$width;
    if ($type==1) {
         $type_name="Rectangular"; }
    else {
        $type_name="Rectangular"; }
    return view('area-result', [
    'type' => $type_name,
    'width' => $width,
    'height' => $height,
    'area' => $area,
    ]);
    })->name('area-result');


Route::get('/mul', function () {
    return view('mul-form');
    })->name('mul-form');
Route::post('/mul', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody(); 
    $root_number = (double)$data['root_number'];
    return view('mul-result',[
    'root_number'=>$root_number,
    ]); 
    })->name('mul-result');