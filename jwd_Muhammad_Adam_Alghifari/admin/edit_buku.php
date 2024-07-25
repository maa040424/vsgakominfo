<?php
include 'config/koneksi.php';

$id_buku = $_GET['id_buku'];
$query = mysqli_query($db, "SELECT * FROM tabel_buku WHERE id_buku='$id_buku'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Edit Buku</h1>
        <form action="update_buku.php" method="POST">
            <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori"
                    value="<?php echo $data['kategori']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama_buku" class="form-label">Nama Buku</label>
                <input type="text" class="form-control" id="nama_buku" name="nama_buku"
                    value="<?php echo $data['nama_buku']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $data['harga']; ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $data['stok']; ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="id_penerbit" class="form-label">ID Penerbit</label>
                <input type="text" class="form-control" id="id_penerbit" name="id_penerbit"
                    value="<?php echo $data['id_penerbit']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Buku</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>