<?php
class Buku {
    private $judul;
    private $penulis;
    private $tahun;

    public function __construct($judul, $penulis, $tahun) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    public function getInfo() {
        return "{$this->judul} | Penulis: {$this->penulis} | Tahun: {$this->tahun}";
    }
}

class Perpustakaan {
    private $daftarBuku = [];

    public function tambahBuku(Buku $buku) {
        $this->daftarBuku[] = $buku;
    }

    public function tampilkanBuku() {
        if (empty($this->daftarBuku)) {
            echo "Belum ada buku di perpustakaan.\n";
            return;
        }
        echo "Daftar Buku di Perpustakaan:\n";
        foreach ($this->daftarBuku as $index => $buku) {
            echo ($index + 1) . ". " . $buku->getInfo() . "\n";
        }
    }
}

// Contoh penggunaan
$perpustakaan = new Perpustakaan();

$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 2005) <br>;
$buku2 = new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980) <br>;
$buku3 = new Buku("Harry Potter dan Batu Bertuah", "J.K. Rowling", 1997) <br>;

$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);
$perpustakaan->tambahBuku($buku3);

$perpustakaan->tampilkanBuku();
?>


