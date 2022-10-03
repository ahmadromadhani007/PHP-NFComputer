<?php
require_once 'tugas5_ahmadRomadhani_unuja.php';
class Lingkaran extends kumpulanBidang
{
    protected $jari2;
    public function  __construct($jari2)
    {
        $this->jari2 = $jari2;
    }
    public function namaBidang()
    {
        echo 'Lingkaran';
    }
    public function keterangan()
    {
        echo 'Jari-Jari = ' . $this->jari2;
    }
    public function luasBidang()
    {
        echo 3.14 * $this->jari2 * $this->jari2;
    }
    public function kelilingBidang()
    {
        echo 3.14 * 2 * $this->jari2;
    }
}
