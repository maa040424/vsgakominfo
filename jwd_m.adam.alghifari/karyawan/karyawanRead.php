<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style1.css">
</head>

<body>
    <?php
    include '../nav.php';
    ?>
    <?php
    include '../koneksi.php';

    $sql = "SELECT * FROM tabel_karyawan";
    $result = mysqli_query($con, $sql);
    ?>

    <div class="container">
        <br>
        <h1>Data Karyawan</h1>
        <p>Daftar karyawan yang terdaftar di sistem:</p><br>
        <a href="karyawanAdd.php" class="btn btn-primary mb-3">Tambah Karyawan</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Karyawan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id_karyawan']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td><?php echo $row['kota']; ?></td>
                        <td><?php echo $row['telepon']; ?></td>
                        <td>
                            <a href="karyawanEdit.php?id_karyawan=<?php echo $row['id_karyawan']; ?>"
                                class="btn btn-warning btn-sm">Edit</a>
                            <a href="karyawanDelete.php?id_karyawan=<?php echo $row['id_karyawan']; ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <footer style="text-align: center;">
        <p>&#169; Copyright, Muhammad Adam Alghifari</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>