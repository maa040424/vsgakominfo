<?php
include '../koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Elektronik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .img-fluid1 {
            width: 100%;
            height: auto;
        }

        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin-left: 3%;
            margin-right: 3%;
            background-color: lightyellow;
        }
    </style>
</head>

<body>
    <img src="../img/electronics.jpg" class="img-fluid1" alt="">

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Toko Elektronik Bersama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="elektronikRead.php">Data Elektronik</a></li>
                            <li><a class="dropdown-item" href="../supplier/supplierRead.php">Data Supplier</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pengadaan.php">Pengadaan</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Data Elektronik</h2>
        <a href="elektronikadd.php" class="btn btn-primary mb-4">Tambah Data</a>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID Elektronik</th>
                    <th>Kategori</th>
                    <th>Nama Elektronik</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Warranty Period</th>
                    <th>Supplier ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM tabel_elektronik";
                $result = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_elektronik'] . "</td>";
                    echo "<td>" . $row['kategori'] . "</td>";
                    echo "<td>" . $row['nama_elektronik'] . "</td>";
                    echo "<td>" . $row['harga'] . "</td>";
                    echo "<td>" . $row['stok'] . "</td>";
                    echo "<td>" . $row['brand'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['warranty_period'] . "</td>";
                    echo "<td>" . $row['supplier_id'] . "</td>";
                    echo "<td>
                            <a class='btn btn-sm btn-success' href='elektronikEdit.php?id_elektronik=" . $row['id_elektronik'] . "'>Edit</a>
                            <a class='btn btn-sm btn-danger' href='elektronikDelete.php?id_elektronik=" . $row['id_elektronik'] . "' onclick='return confirm(\"Lanjutkan menghapus data ?\")'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
mysqli_close($con);
?>