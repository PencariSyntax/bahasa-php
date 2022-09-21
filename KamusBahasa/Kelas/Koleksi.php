<?php

class Koleksi
{
    private $koleksianku;
    public function __construct($koleksi)
    {
        $this->koleksianku = $koleksi;
    }

    private $namaKoleksiku;

    public function namaKoleksi($namaKoleksiku = "Koleksiku")
    {
        $this->namaKoleksiku = $namaKoleksiku;
        return $this;
    }


    public function totalKoleksianku()
    {
        return count($this->koleksianku);
    }

    public function tambahBarangKoleksiankuJika($data, Jika $jika)
    {
        if ($jika->laluKembalikanBooleannya()) {
            array_push($this->koleksianku, $data);
        }
        return $this;
    }

    public function tambahBarangKoleksianku($data)
    {
        array_push($this->koleksianku, $data);
        return $this;
    }

    public function cariBarang($dataBarang)
    {
        return "Barangmu di Nomor : " . array_search($dataBarang, $this->koleksianku);
    }

    public function kembalikankoleksianku()
    {
        return $this->koleksianku;
    }

    public function tampilkankoleksianku()
    {
        echo "<h2>$this->namaKoleksiku</h2> <ol>";
        foreach ($this->koleksianku as $barangKoleksi) {
            echo "<li>$barangKoleksi</li>";
        }
        echo "</ol>";
    }
}
