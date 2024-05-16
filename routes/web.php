<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\ProductController;
use App\Models\Barang;
use App\Models\Post;
use App\Models\Siswa;
use App\Models\Item;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Produk;
use App\Models\Merek;
use App\Models\Transaksi;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// // route basic
// Route::get('/about', function () {
//     return '<h1>Halo</h1>'
//         . 'selamat datang di webapp saya<br>'
//         . 'Laravel, emang keren apalagi surya keren banget.';
// });

// // buat route basic introduce yourself
// Route::get('/biodata', function () {
//     return '<h1>Biodata</h1>'
//         . 'selamat datang di Biodata saya<br>'
//         . 'Nama: Surya <br>'
//         . 'Hobi: Jadi Sadboy <br>'
//         . 'Saya tinngal di Bandung <br>'
//         . 'Saya suka makan'
//         . 'Saya suka main game'
//         . ' saya suka berharap kepada orang yang salah'
//         . 'saya suka dikecewakan oleh harapan palsu';
// });

// // buat route basic to view
// Route::get('hewan', function () {
//     $king = "lion";
//     $hewan = ["monkey", "dragonfly", "lion", "butterfly", "crocodile"];
//     return view('animals_page', compact('king', 'hewan'));
// });

// Route::get('vegetables', function () {
//     $fruit = ['apple', 'grape', 'starfruit', 'melon', 'watermelon'];
//     return view('vegetable_page', ['buah' => $fruit]);
// });

// // route parameter
// Route::get('product/{name}', function ($name) {
//     return "produk : $name";
// });

// //buat sebuah route dengan 3 buah parameter,
// // nama, berat badan, tinggi badan

// Route::get('bido/{nama}/{beratbadan}/{tinggibadan}', function ($nama, $bb, $tg) {
//     return "bido : $nama <br> berat badan : $bb <br> tinggi badan : $tg";
// });

// Route::get('myself/{name}/{bb}/{age}', function ($a, $bb, $tb) {
//     $bmi = $bb / (($tb / 100) ** 2);
//     if ($bmi > 30) {
//         $ket = "obesitas";
//     } elseif ($bmi > 25) {
//         $ket = "kelebihan";
//     } elseif ($bmi > 18.5) {
//         $ket = "ideal";
//     } elseif ($bmi < 18.5) {
//         $ket = "kekurangan berat badan";
//     }
//     return "nama : $a <br>
//     berat badan : $bb <br>
//     tinggi badan : $tb <br>
//     bmi : $bmi <br>
//     ket : $ket";

// });

// // route opsional parameter
// route::get('myname/{name?}', function ($a = "surya") {
//     return "hello $a";
// });

// // menampilkan data dari db
// Route::get('/testmodel', function () {
//     $data = Post::all();
//     return $data;
// });

// Route::get('/testbarangs', function () {
//     $data = Barang::all();
//     return $data;
// });

// Route::get('/idsiswa', function () {
//     $data = Siswa::find(1);
//     return $data;
// });

// Route::get('/judulsiswa', function () {
//     $data = Siswa::where('nama', 'like', '%Surya%')->get();
//     return $data;
// });

// Route::get('/ubahsiswa', function () {
//     $data = Barang::find(1);
//     $data->nama = "Tripatih";
//     $data->save();
//     return $data;
// });

// Route::get('/testsiswas', function () {
//     $data = Siswa::all();
//     return $data;
// });

// Route::get('/buatsiswa', function () {
//     $data = new App\Models\Siswa;
//     $data->nama = "Fatih";
//     $data->Jenis_kelamin = "Perempuan";
//     $data->alamat = "Jalan langit";
//     $data->agama = "Islam";
//     $data->telepon = "0821742131";
//     $data->email = "Fatih";
//     $data->save();
//     return $data;

// });

// Route::get('/testpost', function () {
//     $post = Post::all();
//     return view('tampil_post', compact('post'));
// });

// Route::get('/testpost', function () {
//     $merek = Merek::all();
//     return view('tampil_merek', compact('merek'));
// });

// Route::get('/testbarang', function () {
//     $data = Barang::all();
//     return view('tampiling_barang', compact('data'));
// });

// Route::get('/testsiswa', function () {
//     $data = Siswa::all();
//     return view('tampiling_siswa', compact('data'));
// });

// Route::get('/item', function () {
//     $data = Item::all();
//     return $data;
// });

// Route::get('/pengguna', function () {
//     $pengguna = Pengguna::all();
//     return view('tampil_pengguna', compact('pengguna'));
// });

// Route::get('/telepon', function () {
//     $telepon = Telepon::all();
//     return view('tampil_telepon', compact('telepon'));
// });

// //route Produk
// Route::get('/produk', function() {
//     $data = Produk::all();

//     return view('tampil_produk', compact('data'));
// });

// //route Transaksi
// Route::get('/transaksi', function() {
//     $data = Transaksi::all();

//     return view('tampil_transaksi', compact('data'));
// });

// //route produk
// Route::get('producs',[ProdukController::class,'menampilkan']);


// //route Template
// Route::get('Post',[PostController::class,'menampilkan']);
// Route::get('Post/{id}',[PostController::class,'show']);


// //route Template
// Route::get('Produk',[ProdukController::class,'menampilkan']);
// Route::get('Produk/{id}',[ProdukController::class,'show']);

// //route Template
// Route::get('Merek',[MerekController::class,'menampilkan']);
// Route::get('Merek/{id}',[MerekController::class,'show']);

// tampilkan dengan table
// return view('tampil_siswa', compact('data'));

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('brand', BrandController::class);
Route::resource('product', ProductController::class);