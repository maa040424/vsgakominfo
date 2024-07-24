<!DOCTYPE html>
<html lang="en">

<?php
include "views2/head.php";
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "views2/sidebar.php" ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include "views2/topbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Laporan Pengadaan Buku</h1>
                    <p class="mb-4">Berikut adalah daftar buku yang perlu segera dibeli berdasarkan stok yang paling
                        sedikit.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Buku yang Perlu Segera Dibeli</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Judul Buku</th>
                                            <th>Nama Penerbit</th>
                                            <th>Stok</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Judul Buku</th>
                                            <th>Nama Penerbit</th>
                                            <th>Stok</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        include "config/koneksi.php";
                                        $query = "SELECT tabel_buku.nama_buku, tabel_penerbit.nama, tabel_buku.stok 
                                                  FROM tabel_buku 
                                                  JOIN tabel_penerbit ON tabel_buku.id_penerbit = tabel_penerbit.id_penerbit 
                                                  ORDER BY tabel_buku.stok ASC 
                                                  LIMIT 10";
                                        $result = mysqli_query($db, $query);
                                        if (!$result) {
                                            die("Query gagal: " . mysqli_error($db));
                                        }

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['nama_buku'] ?></td>
                                                <td><?php echo $row['nama'] ?></td>
                                                <td><?php echo $row['stok'] ?></td>
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

            <?php include "views2/footer.php"; ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include "javascript.php"; ?>
</body>

</html>