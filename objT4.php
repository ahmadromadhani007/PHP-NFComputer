<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP_AR_TG4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    require "tugas4_ahmadRomadhani_unuja.php";

    $data = [
        [
            "nip" => "031233101",
            "nama" => "Ahmad Romadhani",
            "jabatan" => "Manager",
            "agama" => "Islam",
            "status" => "Belum Menikah",
        ],
        [
            "nip" => "031233102",
            "nama" => "Marselino Ferdinan",
            "jabatan" => "Asmen",
            "agama" => "Kristen",
            "status" => "Menikah",
        ],
        [
            "nip" => "031233103",
            "nama" => "Zainul Fuad",
            "jabatan" => "Kabag",
            "agama" => "Islam",
            "status" => "Belum Menikah",
        ],
        [
            "nip" => "031233104",
            "nama" => "I Ketut Made Wenda",
            "jabatan" => "Staff",
            "agama" => "Budha",
            "status" => "Belum Menikah",
        ],
        [
            "nip" => "031233105",
            "nama" => "Ihya Ulumudin",
            "jabatan" => "Manager",
            "agama" => "Islam",
            "status" => "Menikah",
        ],
    ]
    ?>
    <div class="container">
        <div class="row">
            <?php
            foreach ($data as $pg) {
                $nip = $pg['nip'];
                $nama = $pg['nama'];
                $jabatan = $pg['jabatan'];
                $agama = $pg['agama'];
                $status = $pg['status'];

                $pegawai = new Pegawai($nip, $nama, $jabatan, $agama, $status);
                $pegawai->mencetak();
            }
            ?>
        </div>
    </div>
</body>

</html>