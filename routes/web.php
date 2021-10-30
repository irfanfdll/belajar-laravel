<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Else_;

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



Route::get('/input/{nama}/{jk}/{tl}/{tgllahir}/{alamat}/{agama}/{hobi}', function ($nama, $jk, $tl, $tgllahir, $alamat, $agama, $hobi) {
    echo "Nama Saya:" . $nama . "<br>
        jenis kelamin: " . $jk . "<br>
        Tempat Lahir: " . $tl . "<br>
        Tanggal Lahir: " . $tgllahir . "<br>
        Alamat: " . $alamat . "<br>
        Agama: " . $agama . "<br>
        Hobi: " . $hobi;
});

Route::get('/inputt/{nama?}/{kelas?}', function ($nama=null,$kelas=null) {
    echo "Nama Saya:" . $nama . "<br>";
    echo "Kelas:" . $kelas . "<br>";
});


Route::get('blog', function () {
    $data = [
        ['id' => 1, 'title' => 'Lorem Ipsum v1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum v2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum v3', 'content' => 'Content Ketiga'],
    ];
    return view('blog', compact('data'));
});

Route::get('absen', function () {
    $data = [
        ['nis' => 1, 'nama' => 'Alya', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Nata Endah'],
        ['nis' => 2, 'nama' => 'Anggi', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Cilebak'],
        ['nis' => 3, 'nama' => 'Anisa', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bojong Cijerah'],
        ['nis' => 4, 'nama' => 'Arif', 'jeniskelamin' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Cibedug'],
        ['nis' => 5, 'nama' => 'Astri', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Pasawahan'],
        ['nis' => 6, 'nama' => 'Azhar', 'jeniskelamin' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Rancamanyar'],
        ['nis' => 7, 'nama' => 'Aziz', 'jeniskelamin' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Isekai'],
        ['nis' => 8, 'nama' => 'Bima', 'jeniskelamin' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Rancamanyar'],
        ['nis' => 9, 'nama' => 'Cindy', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Rancamanyar'],
        ['nis' => 10, 'nama' => 'Dinda', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bojong malaka indah'],
    ];
    return view('absen', compact('data'));
});

Route::get('siswa', function () {
    $siswas =[
        ['id' => 1,
        'nama' => 'irfan fadillah',
        'username' => 'irfanfdll',
        'email' => 'irfanfdlhh0@gmail.com',
        'alamat' => 'Bandung',
        'mapel' => [
                    'mapel1' => 'Bahasa Indonesia',
                    'mapel2' => 'Bahasa Inggris',
                    'mapel3' => 'Bahasa Jepang',
                    'mapel4' => 'Bahasa Belanda',
                   ]
         ],
    ];
    return view('siswa', compact('siswas'));
});


Route::get('/inputnilai/{nama?}/{mtk?}/{pro?}/{indo?}/{ingris?}', function ($nama=null,$mtk=0,$pro=0,$indo=0,$ingris=0) {
    echo "Nama Saya:" . $nama . "<br>";
    echo "Nialai Maatematika : " . $mtk . "<br>";
    echo "Nialai Produktif : " . $pro . "<br>";
    echo "Nialai Bahasa Indonesia :  " . $indo . "<br>";
    echo "Nialai Bahsa Inggris : " . $ingris . "<br>";

    $ratarata =($mtk + $pro + $indo + $ingris)/4;

    echo "Rata-rata :". $ratarata ."<br>";
    echo "Grade : ";
    if ($ratarata >= 90) {
        echo "A";
    } elseif ($ratarata >=80) {
        echo "B";
    } elseif ($ratarata >=70) {
        echo "C";
    } else {
        echo "D";
    }
});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan=null,$minuman=null,$cemilan=null) {

    if ($makanan = $makanan) {
        echo "Makan : ".$makanan ."<br>";
        if ($minuman = $minuman) {
            echo "Minuman : " . $minuman."<br>";
        }if ($cemilan= $cemilan) {
            echo "Cemilan : ".$cemilan."<br>";
        }
    }else {
      echo "Anda tidak memesan silahkan pulang";
    }
});


