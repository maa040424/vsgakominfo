<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pengelolaan Data Buku dan Penerbit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Pengelolaan Data Buku dan Penerbit</h1>

        <!-- Data Buku -->
        <h2 class="mt-4">Data Buku</h2>
        <a class="btn btn-primary mb-3" href="add_buku.php">Tambah Buku</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Kategori</th>
                    <th>Nama Buku</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Penerbit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config/koneksi.php';
                $result = mysqli_query($db, "SELECT * FROM tabel_buku");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['id_buku']}</td>
                        <td>{$row['kategori']}</td>
                        <td>{$row['nama_buku']}</td>
                        <td>{$row['harga']}</td>
                        <td>{$row['stok']}</td>
                        <td>{$row['id_penerbit']}</td>
                        <td>
                            <a class='btn btn-warning btn-sm' href='edit_buku.php?id_buku={$row['id_buku']}'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete_buku.php?id_buku={$row['id_buku']}' onclick='return confirm(\"Yakin ingin menghapus?\")'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Data Penerbit -->
        <h2 class="mt-4">Data Penerbit</h2>
        <a class="btn btn-primary mb-3" href="add_penerbit.php">Tambah Penerbit</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Penerbit</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($db, "SELECT * FROM tabel_penerbit");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['id_penerbit']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['alamat']}</td>
                        <td>{$row['kota']}</td>
                        <td>{$row['telepon']}</td>
                        <td>
                            <a class='btn btn-warning btn-sm' href='edit_penerbit.php?id_penerbit={$row['id_penerbit']}'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete_penerbit.php?id_penerbit={$row['id_penerbit']}' onclick='return confirm(\"Yakin ingin menghapus?\")'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>