<?php
class Genre {
    public $nama_genre;
    
    public function __construct($nama) {
        $this->nama_genre = $nama;
    }
    
    public function getNama() {
        return $this->nama_genre;
    }
}
?>