<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hal2', function () {
    return "<h1>Selamat Datang Dihalaman Kedua</h1>";
});

Route::get('biodata', function () {
    $nama = "Irfan";
    $jk ="Laki-laki";
    $tempat_lahir="Bandung";
    $tanggal_lahir="30 Juli 2003";
    $alamat="Sekeawi";
    $agama="Islam";
    $hobi="Memancing";
    return "Nama : ".$nama ."<br>Jenis Kelamin : " . $jk."<br> Tempat Lahir : ".$tempat_lahir."<br>Tanggal Lahir : ".$tanggal_lahir."<br>Alamat : ".$alamat."<br>Agama : ".$agama."<br>Hobi : ".$hobi."<hr>";

});

Route::get('biodata2', function () {
     $nama = "Irfan";
     $jk ="Laki-laki";
     $tempat_lahir="Bandung";
     $tanggal_lahir="30 Juli 2003";
     $alamat="Sekeawi";
     $agama="Islam";
     $hobi="Memancing";
    return view('biodata',compact('nama','jk','tempat_lahir','tanggal_lahir','alamat','agama','hobi'));
});
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


git remote add origin https://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@github.com/irfanfdll/belajar-laravel.git
