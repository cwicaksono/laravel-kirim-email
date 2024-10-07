<?php

use Illuminate\Support\Facades\Route;

Route::get('/kirimemail', function(Request $request){
    Mail::send('template_email', [], function($message) use ($request){
        $message->subject('Uji Coba Kirim Email Pakai Laravel');
        $message->from('cahyo.wicaksono@gmail.com','Cahyo Wicaksono');
        $message->to('cahyo.wicaksono@gmail.com');
    });
    echo 'kirim email berhasil';
});
