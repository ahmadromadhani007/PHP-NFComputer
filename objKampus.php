<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';

$d1 = new Dosen('Budi Santoso', 'Laki-Laki', '111', 'S.Kom', 'M.Kom');
$d2 = new Dosen('Siti Aminah', 'Perempuan', '112', 'S.T', 'M.T');
$d3 = new Mahasiswa('Sayyidah Aminah', 'Perempuan', '5', 'TI');
$d4 = new Mahasiswa('Sofyanto', 'Laki-Laki', '5', 'SI');

$data = [$d1, $d2, $d3, $d4];
foreach ($data as $d) {
    echo $d->mencetak();
}
