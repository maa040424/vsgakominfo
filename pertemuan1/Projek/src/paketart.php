<?php
include 'koneksi.php'
    ?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <title>Paket Wisata</title>
</head>

<body>
    <div class="container">
        <h1>Form Pemesanan</h1>

        <div class="mb-3" style="width: 25rem">
            <label for="formGroupExampleInput" class="form-label">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Nama">
        </div>
        <div class="mb-3" style="width: 25rem">
            <label for="formGroupExampleInput2" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Nomor Telepon">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="submit" class="btn btn-warning">Kembali</button>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>

<?php
if (isset($_POST['submit'])) {
    $namapemesan = $_POST['namapemesan'];
    $nohp = $_POST['nohp'];
    echo "Resume Pemesanan<br>";
    echo "Nama Pesanan: $namapemesan<br>";
    echo "No HP: $nohp";
}
?>