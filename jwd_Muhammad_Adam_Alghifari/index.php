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
                    <h1 class="h3 mb-2 text-gray-800">Data Buku</h1>
                    <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
                            <a class="btn btn-sm btn-primary" href="controllers/tambah_data_buku.php">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
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
                                        include "config/koneksi.php";
                                        $data = mysqli_query($db, "SELECT * FROM tabel_buku");
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
                                                    <a class="btn btn-sm btn-primary"
                                                        href="controllers/edit_data_buku.php?id_buku=<?php echo $array['id_buku'] ?>">Edit</a>
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

            <?php include "views2/footer.php"; ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=" scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include "javascript.php"; ?>
</body>

</html>