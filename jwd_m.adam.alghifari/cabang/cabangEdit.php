<?php
include '../koneksi.php';

$id_cabang = $_GET['id_cabang'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];

    $sql = "UPDATE tabel_cabang SET nama='$nama', alamat='$alamat', kota='$kota' WHERE id_cabang='$id_cabang'";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Record updated successfully'); window.location.href ='cabangRead.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

// Fetch existing data
$sql = "SELECT * FROM tabel_cabang WHERE id_cabang='$id_cabang'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Cabang</title>
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

    <div class="container mt-4">
        <h1>Edit Data Cabang</h1>
        <p>Edit data cabang dengan mengisi form di bawah ini</p><br>

        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama..."
                    value="<?php echo htmlspecialchars($row['nama']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat..."
                    required><?php echo htmlspecialchars($row['alamat']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" name="kota" class="form-control" id="kota" placeholder="Masukkan Kota..."
                    value="<?php echo htmlspecialchars($row['kota']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="cabangRead.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
mysqli_close($con);
?>