<?php


class Paragraf
{
    private $daftarBarisParagraf = [];
    private $judul = "";
    private $subJudul = "";

    public function tambahText($textBaru = "")
    {
        array_push($this->daftarBarisParagraf, $textBaru);
        return $this;
    }

    public function tambahTextJika($text = "", $logic = 0)
    {
        if ($logic) {
            array_push($this->daftarBarisParagraf, $text);
        }
        return $this;
    }

    public function judulParagraf($judul = "")
    {
        $this->judul = $judul;
        return $this;
    }

    public function subJudulParagraf($subjudul = "")
    {
        $this->subJudul = $subjudul;
        return $this;
    }

    public function hapusBarisKe($barisKe)
    {
        unset($this->daftarBarisParagraf[$barisKe - 1]);
        return $this;
    }

    public function laluTampilkan()
    {
        echo $this->judul ? "<h1>$this->judul</h1>" : "";
        echo $this->subJudul ? "<h2>$this->subJudul</h2>" : "";
        foreach ($this->daftarBarisParagraf as $barisParagraf) {
            echo "<p>";
            echo $barisParagraf;
            echo "</p>";
        }
    }
}


function paragrafBaru()
{
    return new Paragraf();
}
