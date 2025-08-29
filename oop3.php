<?php
class PersegiPanjang {
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function luas() {
        return $this->panjang * $this->lebar;
    }
    public function keliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
// Contoh penggunaan
$persegi = new PersegiPanjang(8, 4);
echo "Luas: " . $persegi->luas() . "\n";       
echo "Keliling: " . $persegi->keliling() . "\n";  
?>



