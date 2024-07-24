<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Data Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style1.css">
</head>

<body>
    <?php
    include '../koneksi.php';

    if (isset($_POST['submit'])) {
        $supplier_id = $_POST['supplier_id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $telepon = $_POST['telepon'];

        $result = mysqli_query($con, "INSERT INTO tabel_supplier (supplier_id, nama, alamat, kota, telepon) VALUES ('$supplier_id', '$nama', '$alamat', '$kota', '$telepon')");

        if ($result) {
            echo "<script>window.location.href ='supplierRead.php';</script>";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
    ?>

    <div class="container">
        <br>
        <h1>TAMBAH DATA SUPPLIER</h1>
        <p>
            Tambahkan data supplier dengan mengisi form di bawah ini
        </p><br>

        <form method="post">
            <div class="mb-3 row">
                <label for="supplier_id" class="col-sm-2 col-form-label">Supplier ID</label>
                <div class="col-sm-10">
                    <input type="text" name="supplier_id" class="form-control" placeholder="Masukan Supplier ID..."
                        required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama..." required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" placeholder="Masukan Alamat..." required></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-10">
                    <input type="text" name="kota" class="form-control" placeholder="Masukan Kota..." required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="text" name="telepon" class="form-control" placeholder="Masukan Telepon..." required>
                </div>
            </div>

            <div class="row">
                <div class="offset-md-2">
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                    <a href="supplierRead.php" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>
    </div><br><br>

    <footer style="text-align: center;">
        <p>
            &#169; Copyright, Muhammad Adam Alghifari
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>