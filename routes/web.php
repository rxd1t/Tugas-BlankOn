<?php

use Illuminate\Support\Facades\Route;

Route::get('/companies/{name?}', function($name=null) {
    
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }Route::get('/contact', function() {
        return "<h1>Daftar Kontak</h1>";
     })->name('contacts.index');
     Route::get('/contacts/create', function() {
        return "<h1>Tambah Kontak Baru</h1>";
     })->name('contacts.create');
     Route::get('/contacts/{id}', function($id) {
        return "Ini Kontak ke-" . $id;
     })->whereNumber('id')->name('contacts.show');
    

    $html =" 
    return <h1>Aplikasi Kontak</h1>
    <div>
    <a href='/contacts'>Kontak</a>
    <a href='/contacts/create'>Kontak Baru</a>
        <a href='/contacts/2'>Tampilkan Kontak</a>
        <a href='/students/Raditya'>Tampilkan Nama</a>
    </div>
    ";
    return $html;
    // return view('welcome');
});

Route::get('/contacts', function() {
    return "<h1><marquee> Daftar Kontak Studentday Programming Web</h1></marquee>";
 });

 Route::get('/contacts/create', function() {
    return "<h1>Tambah Kontak Baru</h1>";
 });

 Route::get('/contacts/{id}', function($id) {
    return "Ini Kontak ke-" . $id;
 });
 
 Route::get('/students/{name}', function($name=null) {
    if ($name) {
        return "Nama Lengkap: ".$name;
    } else {
        return "Nama Lengkap Belum Diisi: ";
    }
 });