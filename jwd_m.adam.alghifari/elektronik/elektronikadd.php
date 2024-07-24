<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Data Elektronik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style/style1.css">
</head>

<body>
    <?php
    include '../koneksi.php';

    if (isset($_POST['submit'])) {
        $id_elektronik = $_POST['id_elektronik'];
        $kategori = $_POST['kategori'];
        $nama_elektronik = $_POST['nama_elektronik'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $warranty_period = $_POST['warranty_period'];
        $supplier_id = $_POST['supplier_id'];

        $result = mysqli_query($con, "INSERT INTO tabel_elektronik (id_elektronik, kategori, nama_elektronik, harga, stok, brand, model, warranty_period, supplier_id) VALUES ('$id_elektronik', '$kategori', '$nama_elektronik', '$harga', '$stok', '$brand', '$model', '$warranty_period', '$supplier_id')");

        echo "<script>window.location.href ='elektronikRead.php';</script>";
    }
    ?>

    <div class="container">
        <br>
        <h1>TAMBAH DATA ELEKTRONIK</h1>
        <p>
            Tambahkan data elektronik dengan mengisi form di bawah ini
        </p><br>

        <form method="post">
            <div class="mb-3 row">
                <label for="id_elektronik" class="col-sm-2 col-form-label">ID Elektronik</label>
                <div class="col-sm-10">
                    <input type="text" name="id_elektronik" class="form-control" placeholder="Masukan ID Elektronik..."
                        required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select class="form-select" name="kategori" required>
                        <option value="-">- Pilih Kategori -</option>
                        <option value="Televisi">Televisi</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Smartphone">Smartphone</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_elektronik" class="col-sm-2 col-form-label">Nama Elektronik</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_elektronik" class="form-control"
                        placeholder="Masukan Nama Elektronik..." required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="number" name="harga" class="form-control" placeholder="Masukan Harga..." required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input type="number" name="stok" class="form-control" placeholder="Masukan Stok..." required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                <div class="col-sm-10">
                    <input type="text" name="brand" class="form-control" placeholder="Masukan Brand..." required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="model" class="col-sm-2 col-form-label">Model</label>
                <div class="col-sm-10">
                    <input type="text" name="model" class="form-control" placeholder="Masukan Model..." required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="warranty_period" class="col-sm-2 col-form-label">Warranty Period</label>
                <div class="col-sm-10">
                    <input type="number" name="warranty_period" class="form-control"
                        placeholder="Masukan Warranty Period..." required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="supplier_id" class="col-sm-2 col-form-label">Supplier ID</label>
                <div class="col-sm-10">
                    <input type="text" name="supplier_id" class="form-control" placeholder="Masukan Supplier ID..."
                        required>
                </div>
            </div>

            <div class="row">
                <div class="offset-md-2">
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                    <a href="elektronikRead.php" class="btn btn-warning">Kembali</a>
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