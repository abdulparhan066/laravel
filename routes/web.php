<?php

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

// Route::get('/halo', function () {
//     return '<h1>Halo</h1>'
//             .'Selamat datang di web saya<br>'
//             .'Laravel emnag keren.';
// });

Route::get('pesan', function () {
    return '<h1>Siapa nama anda?</h1><br></h1<br>';
});
// routing
// Route::get('profil/{nama}/{alamat}/{sekolah}/{umur}', function ($a,$b,$c,$d,$e) {
//     return '<h1>hallo ini biodata</h1> <br>' .$a
//             .'<br>nama : ' .$b
//             .'<br>alamat : ' .$c
//             .'<br>sekolah : ' .$d
//             .'<br>umur : ' .$e;
// });
// latihan 1
//Route::get('pesan/{makan?}/{minum?}/{harga?}', function ($a = null, $b = null, $c =null) {
//        $pesan = 'Silahkan pesan terlebih dahulu';
//    if (isset($a)){
//        $pesan = 'Ini makanan : '.$a;
//    }
//    if (isset($b)){
//        $pesan .= '&'.$b;

//    }
//    $psn = '<br>ukuran : ';
//    if ($c <= 0) {
//        $pesan .= $psn. 'harga tidak valid ';
//    }
//    elseif ($c >= 35000) {
//        $pesan .= $psn. 'medium ';
//    }
//    elseif ($c >= 25000) {
//        $pesan .= $psn. 'Large ';
//    }

//    elseif ($c < 25000) {
//        $pesan .= $psn. 'Small ';
//    }
//    return $pesan;
//});
/// latihan 2
// Route::get('pesan/{nama?}/{bb?}/{umur?}', function ($a = null, $b = null, $c =null) {
//      $pesan = 'Silahkan pesan terlebih dahulu';
//          if (isset($a)){
//         $pesan = 'Ini Nama saya : '.$a;
//     }

//     $ps = '<br>Berat Badan :';
//     if ($b < 50) {
//         $psn .= $ps . $b . 'Anda kuran Nutrisi';
//     }
//     elseif ($b >= 76 || $b >= 100 ) {
//         $psn .= $ps . $b . 'Anda harus turun berat badan';
//     }
//     elseif ($b >= 66 || $b >= 75) {
//         $psn .= $ps . $b . 'Berat badan anda ideal';
//     }
//     elseif ($b >= 50 || $b >= 64) {
//         $psn .= $ps .$b . 'Naikan berat badan anda';
//     }

//     $psi = '<br><b>Umur</b> : ';
//     if ($c >= 30 && sc <= 48) {
//         $psn .= $psi . $c . 'Perwira';
//     }
//     elseif ($c >= 40 && $c <= 50 ) {
//         $psn .= $psi . $c .'laksamana';
//     }

//     elseif ($c >= 50 && $c <= 60 ) {
//         $psn .= $psi . $c .'jendal';
//     }

// return $pesan;
// });


//mengakases model dan post(mencari semua model)
 Route::get('testmodel/ambil', function() {
     $query = App\karyawan::all()->take(3);
     return $query;
    });

// //     //Mencari model berdasarkan ID:
//  Route::get('/testmodell', function() {
//      $query = App\post::find(1);
//      return $query;
//      });

// //Mencari model berdasarkan title:
// Route::get('/testmodel3', function() {
//     $query = App\post::where('title', 'like', '%cepat nikah%')->get();
//     return $query;
//     });

//     // Mengubah record,(hapus semua isi Function):
// Route::get('/testmodel4', function() {
//     $post = App\post::find(1);
//     $post->title = "cari keluarga sakinah";
//     $post->save();
//     return $post;
//     });
// // Menghapus record,(hapus semua isi Function):
// Route::get('/testmodel5', function() {
//     $post = App\post::find(1);
//     $post->delete();
//     return $query; // check data di database
//     });
// // Menambah record()
// Route::get('/testmodel5', function() {
// $post = new App\Post;
// $post->title = "7 Amalan Pembuka Jodoh";
// $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
// $post->save();
// return $post;
// });
// check record baru di database

//mengakases model dan post(mencari semua model)

