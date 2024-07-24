<!DOCTYPE html>
<html lang="en">

<?php
include "../views/head.php";
include "../config/koneksi.php";

$id_buku = $_GET['id_buku'];
$data = mysqli_query($db, "SELECT * FROM tabel_buku WHERE id_buku = '" . $id_buku . "'");
$array = mysqli_fetch_array($data);

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "../views/sidebar.php" ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include "../views/topbar.php"; ?>

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
                            <form class="user" method="post" action="aksi_edit_buku.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>ID Buku</label>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="id_buku"
                                            name="id_buku" value="<?php echo $array['id_buku'] ?>"
                                            placeholder="Bisa diisi dengan ID Buku">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Kategori</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="kategori"
                                            id="kategori" value="<?php echo $array['kategori'] ?>"
                                            placeholder="Bisa diisi dengan Kategori">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Nama Buku</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="nama_buku"
                                            id="nama_buku" value="<?php echo $array['nama_buku'] ?>"
                                            placeholder="Bisa diisi dengan Nama Buku">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Harga</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="harga"
                                            value="<?php echo $array['harga'] ?>" id="harga"
                                            placeholder="Bisa diisi dengan Harga">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Stok</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="stok"
                                            value="<?php echo $array['stok'] ?>" id="stok"
                                            placeholder="Bisa diisi dengan Stok">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>ID Penerbit</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="id_penerbit" class="form-control" id="id_penerbit">
                                            <?php include "../config/koneksi.php";
                                            $data1 = mysqli_query($db, "SELECT * FROM tabel_penerbit");
                                            while ($array1 = mysqli_fetch_array($data1)) {
                                                ?>
                                                <option value="<?php echo $array1['id_penerbit'] ?>" <?php echo ($array['id_penerbit'] == $array1['id_penerbit']) ? "selected" : ""; ?>>
                                                    <?php echo $array1['nama'] ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <input class=" btn btn-sm btn-primary" type="submit" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include "../views/footer.php"; ?>
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