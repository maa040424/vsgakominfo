<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Elektronik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style1.css">
</head>

<body>
    <?php
    include '../koneksi.php';

    $id_elektronik = $_GET['id_elektronik'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kategori = $_POST['kategori'];
        $nama_elektronik = $_POST['nama_elektronik'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $warranty_period = $_POST['warranty_period'];
        $supplier_id = $_POST['supplier_id'];

        $sql = "UPDATE tabel_elektronik SET kategori='$kategori', nama_elektronik='$nama_elektronik', harga='$harga', stok='$stok', brand='$brand', model='$model', warranty_period='$warranty_period', supplier_id='$supplier_id' WHERE id_elektronik='$id_elektronik'";

        if (mysqli_query($con, $sql)) {
            echo "<script>window.location.href ='elektronikRead.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }

    $sql = "SELECT * FROM tabel_elektronik WHERE id_elektronik='$id_elektronik'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <br>
        <h1>Edit Data Elektronik</h1>
        <p>Edit data elektronik dengan mengisi form di bawah ini</p><br>

        <form method="post">
            <div class="mb-3 row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori..."
                        value="<?php echo $row['kategori']; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_elektronik" class="col-sm-2 col-form-label">Nama Elektronik</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_elektronik" class="form-control"
                        placeholder="Masukkan Nama Elektronik..." value="<?php echo $row['nama_elektronik']; ?>"
                        required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="number" name="harga" class="form-control" placeholder="Masukkan Harga..."
                        value="<?php echo $row['harga']; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input type="number" name="stok" class="form-control" placeholder="Masukkan Stok..."
                        value="<?php echo $row['stok']; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                <div class="col-sm-10">
                    <input type="text" name="brand" class="form-control" placeholder="Masukkan Brand..."
                        value="<?php echo $row['brand']; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="model" class="col-sm-2 col-form-label">Model</label>
                <div class="col-sm-10">
                    <input type="text" name="model" class="form-control" placeholder="Masukkan Model..."
                        value="<?php echo $row['model']; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="warranty_period" class="col-sm-2 col-form-label">Warranty Period</label>
                <div class="col-sm-10">
                    <input type="number" name="warranty_period" class="form-control"
                        placeholder="Masukkan Warranty Period..." value="<?php echo $row['warranty_period']; ?>"
                        required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="supplier_id" class="col-sm-2 col-form-label">Supplier ID</label>
                <div class="col-sm-10">
                    <input type="text" name="supplier_id" class="form-control" placeholder="Masukkan Supplier ID..."
                        value="<?php echo $row['supplier_id']; ?>" required>
                </div>
            </div>

            <div class="row">
                <div class="offset-md-2">
                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
                    <a href="elektronikRead.php" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>
    </div><br><br>

    <footer style="text-align: center;">
        <p>&#169; Copyright, Muhammad Adam Alghifari</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>