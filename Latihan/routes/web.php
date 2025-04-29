<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function() {
    return view(view :'profil');
});

Route::get('/berita/{id}',function($id) {
    return view('berita', ['id' => $id]);
});

Route::get("/total/{bil1}/{bil2?}/{bil3?}", function($bil1, $bil2, $bil3 = 0) {
    return view('hasil', [
        'total' => $bil1 + $bil2 + $bil3,
        'bil1' => $bil1,
        'bil2' => $bil2,
        'bil3' => $bil3
    ]);
})

?>