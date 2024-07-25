<!DOCTYPE html>
<html lang="en">

<?php
// Menyertakan file head.php untuk bagian <head>
include "../views/head.php";
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "../views/sidebar.php" // Menyertakan sidebar.php untuk sidebar ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include "../views/topbar.php"; // Menyertakan topbar.php untuk bagian topbar ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Buku</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Buku</h6>
                        </div>
                        <div class="card-body">
                            <!-- Form untuk menambahkan data buku -->
                            <form class="user" method="post" action="aksi_tambah_buku.php">
                                <!-- Input ID Buku -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>ID Buku</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="id_buku"
                                            name="id_buku" placeholder="Bisa diisi dengan ID Buku">
                                    </div>
                                </div>
                                <!-- Input Kategori -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Kategori</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="kategori"
                                            id="kategori" placeholder="Bisa diisi dengan Kategori">
                                    </div>
                                </div>
                                <!-- Input Nama Buku -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Nama Buku</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="nama_buku"
                                            id="nama_buku" placeholder="Bisa diisi dengan Nama Buku">
                                    </div>
                                </div>
                                <!-- Input Harga -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Harga</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="harga"
                                            id="harga" placeholder="Bisa diisi dengan Harga">
                                    </div>
                                </div>
                                <!-- Input Stok -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Stok</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="stok" id="stok"
                                            placeholder="Bisa diisi dengan Stok">
                                    </div>
                                </div>
                                <!-- Dropdown ID Penerbit -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>ID Penerbit</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="id_penerbit" class="form-control" id="id_penerbit">
                                            <?php
                                            // Menyertakan file koneksi.php untuk koneksi database
                                            include "../config/koneksi.php";
                                            // Mengambil data penerbit dari database
                                            $data = mysqli_query($db, "SELECT * FROM tabel_penerbit");
                                            // Menampilkan opsi untuk setiap penerbit
                                            while ($array = mysqli_fetch_array($data)) {
                                                echo "<option value='" . $array['id_penerbit'] . "'>" . $array['nama'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Tombol Submit -->
                                <input class="btn btn-sm btn-primary" type="submit" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include "../views/footer.php"; // Menyertakan footer.php ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include "../javascript.php"; // Menyertakan file javascript.php ?>
</body>

</html>