<?php

class JikaLogikanya
{
    public function __construct(
        public $logic
    ) {
    }

    private $hasilLogikaBenar;
    private $hasilLogikaSalah;

    public function ituBenar($perintahBenar)
    {
        $this->hasilLogikaBenar = $perintahBenar;
        return $this;
    }

    public function danKalauSalah($perintahSalah)
    {
        $this->hasilLogikaSalah = $perintahSalah;
        return $this;
    }

    public function laluKembalikanHasilnya()
    {
        return $this->logic ? $this->hasilLogikaBenar : $this->hasilLogikaSalah;
    }

    public function laluKembalikanBooleannya()
    {
        return $this->logic ? true : false;
    }
}


function jika($logic)
{
    return new JikaLogikanya($logic);
}
