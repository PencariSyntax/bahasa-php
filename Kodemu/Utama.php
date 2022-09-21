<?php

/**
 * >>Selamat Datang di File Utama PHP Bahasa<<
 * 
 * disini kamu dapat belajar pemrogramman dengan menggunakan syntax Bahasa Indonesia
 * 
 * 
 * Peringatan :
 * File ini Tidak boleh dihapus atau diubah namanya
 */

$namaKu = "Reza";

tampilkan("Halo ini Reza");

buatGarisBaru();

paragrafBaru()
    ->judulParagraf("Aku adalah Anak Gembala")
    ->tambahText("Aku adalah Anak Gembala")
    ->tambahText("Selalu Riang Serta gembira")
    ->tambahTextJika("Karena aku Rajin Bekerja", jika($namaKu == "Reza"))
    ->laluTampilkan();

$koleksiMainanKu = koleksi("Mainan Superman", "Batman", "Barbie", "Kelinci");

$koleksiMainanKu
    ->namaKoleksi("Koleksi Mainan milik Reza")
    ->tambahBarangKoleksianku("Mainan Mobil Cars");

tampilkan($koleksiMainanKu->cariBarang("Batman"));
