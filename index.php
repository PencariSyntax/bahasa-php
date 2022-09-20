<?php

# Kita masukan kamus bahasa indonesia.
require "kamus_bahasa/kamus.php";

# Contoh Penggunaanya
paragrafBaru()->judulParagraf("Test Pemrogramman Bahasa Indonesia")->laluTampilkan();

# Penggunaan Lebih lengkapnya
paragrafBaru()
    ->judulParagraf("Paragraf pertamaku")
    ->subJudulParagraf("Dan semangat terus berkreasi")
    ->tambahText("Dan aku sekarang mau ke pasar.")
    ->tambahText("Mamam")
    ->hapusBarisKe(1)
    ->tambahTextJika("Sukinalaba", jika(true)->laluKembalikanBooleannya())
    ->tambahText(
        jika(4 % 2)
            ->ituBenar(maka("Aitakatta"))
            ->danKalauSalah(maka("Lurus kujalani hidupku"))
            ->laluKembalikanHasilnya()
    )
    ->laluTampilkan();
