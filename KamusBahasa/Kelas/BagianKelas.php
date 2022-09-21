<?php

spl_autoload_register(function ($kelas) {
    require_once $kelas . ".php";
});

if (!function_exists("paragrafBaru")) {
    function paragrafBaru()
    {
        return new Paragraf();
    }
}

if (!function_exists("jika")) {
    function jika($logic)
    {
        return new Jika($logic);
    }
}

if (!function_exists("koleksi")) {
    function koleksi(...$koleksi)
    {
        return new Koleksi($koleksi);
    }
}
