<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP | dataPegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container px-5 my-5">
        <form method="POST">
            <p class="h4 mb-4 text-center">Form Input Data Kepegawaian</p>
            <div class="form-floating mb-3">
                <input class="form-control" id="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" name="namaPegawai" />
                <label for="namaPegawai">Nama Pegawai</label>
                <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai</div>
            </div>
            <div class="form-floating mb-3">
                <select name="agama" class="form-select" id="agama" aria-label="Agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindhu">Hindhu</option>
                    <option value="Kongucu">Kongucu</option>
                </select>
                <label for="agama">Agama</label>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check form-check-inline">
                    <input value="manager" class="form-check-input" id="manager" type="radio" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input value="asisten" class="form-check-input" id="asisten" type="radio" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input value="kabag" class="form-check-input" id="kabag" type="radio" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="kabag">Kabag</label>
                </div>
                <div class="form-check form-check-inline">
                    <input value="staff" class="form-check-input" id="staff" type="radio" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Status</label>
                <div class="form-check form-check-inline">
                    <input value="menikah" class="form-check-input" id="menikah" type="radio" name="status" data-sb-validations="" />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input value="belum" class="form-check-input" id="belum" type="radio" name="status" data-sb-validations="" />
                    <label class="form-check-label" for="belum">Belum</label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input name="jumlahAnak" class="form-control" id="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
                <label for="jumlahAnak">Jumlah Anak</label>
                <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
            </div>
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" name="submit" type="submit">Submit Now</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <?php
    if (isset($_POST['submit'])) {
        $namaPegawai = $_POST['namaPegawai'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jumlahAnak = $_POST['jumlahAnak'];

        switch ($jabatan) {
            case 'manager':
                $gaji_pokok = 20000000;
                break;
            case 'asisten':
                $gaji_pokok = 15000000;
                break;
            case 'kabag':
                $gaji_pokok = 10000000;
                break;
            case 'staff':
                $gaji_pokok = 4000000;
                break;
            default:
                break;
        }
        $tunjanganJabatan = 20 * $gaji_pokok / 100;
        if ($status == 'menikah' && $jumlahAnak <= 2) {
            $tunjanganKeluarga = 5 * $gaji_pokok / 100;
        } elseif ($status == 'menikah' && $jumlahAnak <= 5) {
            $tunjanganKeluarga = 10 * $gaji_pokok / 100;
        } elseif ($status == "menikah" && $jumlahAnak > 5) {
            $tunjanganKeluarga = 15 * $gaji_pokok / 100;
        } else {
            $tunjanganKeluarga = 0;
        }

        $gajiKotor = $gaji_pokok + $tunjanganJabatan + $tunjanganKeluarga;

        $zakat_profesi = ($agama == 'Islam' && $gajiKotor >= 6000000) ? 2.5 * $gajiKotor / 100 : 0;

        $take_home_pay = $gajiKotor - $zakat_profesi;

    ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hasil Input Data Kepegawaian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Nama Pegawai = <?= $namaPegawai ?> </p>
                        <p>Agama = <?= $agama ?> </p>
                        <p>Jabatan = <?= $jabatan ?> </p>
                        <p>Status = <?= $status ?> </p>
                        <p>Jumlah Anak = <?= $jumlahAnak ?> </p>
                        <p>Tunjangan Keluarga = Rp,<?= $tunjanganKeluarga ?> </p>
                        <p>Tunjangan Jabatan = Rp,<?= $tunjanganJabatan ?> </p>
                        <p>Zakat Profesi = Rp,<?= $zakat_profesi ?> </p>
                        <p>Take Home Pay = Rp,<?= $take_home_pay ?> </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script>
        const modal = new bootstrap.Modal('#exampleModal')
        modal.show()
    </script>
</body>

</html>