<!DOCTYPE html>
<html lang="en">

<?php
// Bagian ini untuk menyisipkan isi dari file head.php ke dalam halaman ini
include "views2/head.php";
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
        // Menyisipkan sidebar dari file sidebar.php
        include "views2/sidebar.php";
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php
                // Menyisipkan topbar dari file topbar.php
                include "views2/topbar.php";
                ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Buku</h1>
                    <p class="mb-4">
                        <a target="_blank" href="https://datatables.net"></a>.
                    </p>

                    <!-- Card Section -->
                    <div class="row">
                        <?php
                        // Menyisipkan koneksi ke database
                        include "config/koneksi.php";

                        // Query untuk mengambil nama penerbit dan total stok buku
                        $query = "
                            SELECT tp.nama AS penerbit, SUM(tb.stok) AS total_stok
                            FROM tabel_buku tb
                            JOIN tabel_penerbit tp ON tb.id_penerbit = tp.id_penerbit
                            GROUP BY tp.nama
                        ";
                        $result = mysqli_query($db, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $penerbit = $row['penerbit'];
                            $stok = $row['total_stok'];
                            ?>
                            <div class="col-md-4">
                                <div class="card text-bg-default mb-3 text-center text-secondary">
                                    <div class="card-header"><strong><?php echo htmlspecialchars($penerbit); ?></strong>
                                    </div>
                                    <div class="card-body">
                                        <i class="fa fa-book fa-3x"></i>
                                        <h4 class="card-title mt-4">
                                            <?php echo htmlspecialchars($stok) . " Stok"; ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        // Jangan lupa untuk menutup koneksi setelah semua operasi selesai
                        ?>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
                            <!-- Tombol untuk menambah data buku -->
                            <a class="btn btn-sm btn-primary" href="controllers/tambah_data_buku.php">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- Tabel untuk menampilkan data buku -->
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                    <tfoot>
                                        <tr>
                                            <th>ID Buku</th>
                                            <th>Kategori</th>
                                            <th>Nama Buku</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Penerbit</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        // Mengambil data buku dari database
                                        $data = mysqli_query($db, "SELECT * FROM tabel_buku");
                                        // Menampilkan data buku dalam bentuk tabel
                                        while ($array = mysqli_fetch_array($data)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $array['id_buku'] ?></td>
                                                <td><?php echo $array['kategori'] ?></td>
                                                <td><?php echo $array['nama_buku'] ?></td>
                                                <td><?php echo $array['harga'] ?></td>
                                                <td><?php echo $array['stok'] ?></td>
                                                <td><?php echo $array['id_penerbit'] ?></td>
                                                <td>
                                                    <!-- Tombol untuk mengedit data buku -->
                                                    <a class="btn btn-sm btn-primary"
                                                        href="controllers/edit_data_buku.php?id_buku=<?php echo $array['id_buku'] ?>">Edit</a>
                                                    <!-- Tombol untuk menghapus data buku -->
                                                    <a class="btn btn-sm btn-danger"
                                                        href="controllers/delete_data_buku.php?id_buku=<?php echo $array['id_buku'] ?>"
                                                        onclick="return confirm('Ingin menghapus data ini?')">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php
            // Menyisipkan footer dari file footer.php
            include "views2/footer.php";
            ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php
    // Menyisipkan file JavaScript
    include "javascript.php";
    ?>
</body>

</html>