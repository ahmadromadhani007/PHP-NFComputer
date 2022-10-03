<?php
require_once 'tugas5_ahmadRomadhani_unuja.php';
class PersegiPanjang extends kumpulanBidang
{
    protected $panjang;
    protected $lebar;
    public function  __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang()
    {
        echo 'Persegi Panjang';
    }
    public function keterangan()
    {
        echo 'Panjang = ' . $this->panjang . '<br>Lebar = ' . $this->lebar;
    }
    public function luasBidang()
    {
        echo $this->panjang * $this->lebar;
    }
    public function kelilingBidang()
    {
        echo 2 * ($this->panjang + $this->lebar);
    }
}
