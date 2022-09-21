<?php

if (!function_exists('tampilkan')) {
    function tampilkan($teks)
    {
        echo $teks;
    }
}

if (!function_exists('tampilDalamModeProgram')) {
    function tampilDalamModeProgram($teks)
    {
        var_dump($teks);
    }
}
if (!function_exists('maka')) {
    function maka($nilai)
    {
        return $nilai;
    }
}

if (!function_exists('kosong')) {
    function kosong()
    {
        return null;
    }
}

if (!function_exists('pisahBaris')) {
    function pisahBaris()
    {
        echo "<br />";
    }
}

if (!function_exists('buatGarisBaru')) {
    function buatGarisBaru()
    {
        echo "<hr />";
    }
}
