<?php
include '../koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Cabang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin-left: 3%;
            margin-right: 3%;
            background-color: lightyellow;
        }
    </style>
</head>

<body>
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
                            <li><a class="dropdown-item" href="../supplier/supplierRead.php">Data Supplier</a></li>
                            <li><a class="dropdown-item" href="../elektronik/elektronikRead.php">Data Elektronik</a>
                            </li>
                            <li><a class="dropdown-item" href="cabangRead.php">Data Cabang</a></li>
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
        <h2>Data Cabang</h2>
        <a href="cabangAdd.php" class="btn btn-primary mb-4">Tambah Data</a>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID Cabang</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM tabel_cabang";
                $result = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_cabang'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['kota'] . "</td>";
                    echo "<td>
                            <a class='btn btn-sm btn-success' href='cabangEdit.php?id_cabang=" . $row['id_cabang'] . "'>Edit</a>
                            <a class='btn btn-sm btn-danger' href='cabangDelete.php?id_cabang=" . $row['id_cabang'] . "' onclick='return confirm(\"Lanjutkan menghapus data?\")'>Delete</a>
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