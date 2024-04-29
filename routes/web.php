<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'selamat datang di webapp saya<br>'
        . 'Laravel, emang keren apalagi surya keren banget.';
});

// buat route basic introduce yourself
Route::get('/biodata', function () {
    return '<h1>Biodata</h1>'
        . 'selamat datang di Biodata saya<br>'
        . 'Nama: Surya <br>'
        . 'Hobi: Jadi Sadboy <br>'
        . 'Saya tinngal di Bandung <br>'
        . 'Saya suka makan'
        . 'Saya suka main game'
        . ' saya suka berharap kepada orang yang salah'
        . 'saya suka dikecewakan oleh harapan palsu';
});

// buat route basic to view
Route::get('hewan', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "lion", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ['apple', 'grape', 'starfruit', 'melon', 'watermelon'];
    return view('vegetable_page', ['buah' => $fruit]);
});

// route parameter
Route::get('product/{name}', function ($name) {
    return "produk : $name";
});

//buat sebuah route dengan 3 buah parameter,
// nama, berat badan, tinggi badan

Route::get('bido/{nama}/{beratbadan}/{tinggibadan}', function ($nama, $bb, $tg) {
    return "bido : $nama <br> berat badan : $bb <br> tinggi badan : $tg";
});

Route::get('myself/{name}/{bb}/{age}', function ($a, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "ideal";
    } elseif ($bmi < 18.5) {
        $ket = "kekurangan berat badan";
    }
    return "nama : $a <br>
    berat badan : $bb <br>
    tinggi badan : $tb <br>
    bmi : $bmi <br>
    ket : $ket";

});

// route opsional parameter
route::get('myname/{name?}', function ($a = "surya") {
    return "hello $a";
});

// menampilkan data dari db
Route::get('/testmodel', function(){
    $data = Post::all();
    return $data;
});

Route::get('/testbarangs', function () {
    $data = Barang::all();
    return $data;
});

Route::get('/idbarangs', function () {
    $data = Barang::find(1);
    return $data;
});

Route::get('/namabarangs', function () {
    $data = Barang::where('nama', 'like', '%Tips Cepat Pintar%')->get();
    return $data;
});

Route::get('/ubahbarangs', function () {
    $data = Barang::find(1);
    $data->nama = "Tips Agar tidak pintar";
    $data->save();
    return $data;
});

