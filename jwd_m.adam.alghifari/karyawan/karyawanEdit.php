<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style1.css">
</head>

<body>
    <?php
    include '../koneksi.php';
    include '../nav.php';
    $id_karyawan = $_GET['id_karyawan'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $telepon = $_POST['telepon'];

        $sql = "UPDATE tabel_karyawan SET nama='$nama', alamat='$alamat', kota='$kota', telepon='$telepon' WHERE id_karyawan='$id_karyawan'";

        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Data berhasil diperbarui'); window.location.href ='karyawanRead.php';</script>";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

    // Fetch existing data
    $sql = "SELECT * FROM tabel_karyawan WHERE id_karyawan='$id_karyawan'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <br>
        <h1>Edit Karyawan</h1>
        <p>Edit data karyawan dengan mengisi form di bawah ini:</p><br>

        <form method="POST">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" required><?php echo $row['alamat']; ?></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-10">
                    <input type="text" name="kota" class="form-control" value="<?php echo $row['kota']; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="text" name="telepon" class="form-control" value="<?php echo $row['telepon']; ?>"
                        required>
                </div>
            </div>

            <div class="row">
                <div class="offset-md-2">
                    <input type="submit" value="Update" class="btn btn-primary">
                    <a href="karyawanRead.php" class="btn btn-warning">Kembali</a>
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