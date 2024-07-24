<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
    <img src="img\bookshelf.jpg" class="img-fluid1" alt="bg">

    <?php
    include 'nav.php'
        ?>
    <div class="container">
        <br>
        <h1>DASHBOARD</h1><br>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-bg-default mb-3 text-center text-secondary">
                    <div class="card-header"><strong>Jumlah Produk</strong></div>
                    <div class="card-body">
                        <i class="fa fa-tv fa-3x"></i>
                        <h4 class="card-title mt-4">
                            <?php
                            include 'koneksi.php';
                            $result = mysqli_query($con, "SELECT COUNT(*) as count FROM tabel_elektronik");
                            $row = mysqli_fetch_assoc($result);
                            echo $row['count'] . " Produk";
                            mysqli_close($con);
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-bg-default mb-3 text-center text-secondary">
                    <div class="card-header"><strong>Jumlah Supplier</strong></div>
                    <div class="card-body">
                        <i class="fa fa-industry fa-3x"></i>
                        <h4 class="card-title mt-4">
                            <?php
                            include 'koneksi.php';
                            $result = mysqli_query($con, "SELECT COUNT(*) as count FROM tabel_supplier");
                            $row = mysqli_fetch_assoc($result);
                            echo $row['count'] . " Supplier";
                            mysqli_close($con);
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-bg-default mb-3 text-center text-secondary">
                    <div class="card-header"><strong>Jumlah Karyawan</strong></div>
                    <div class="card-body">
                        <i class="fa fa-users fa-3x"></i>
                        <h4 class="card-title mt-4">
                            <?php
                            include 'koneksi.php';
                            $result = mysqli_query($con, "SELECT COUNT(*) as count FROM tabel_karyawan");
                            $row = mysqli_fetch_assoc($result);
                            echo $row['count'] . " Orang";
                            mysqli_close($con);
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-bg-default mb-3 text-center text-secondary">
                    <div class="card-header"><strong>Jumlah Cabang</strong></div>
                    <div class="card-body">
                        <i class="fa fa-store fa-3x"></i>
                        <h4 class="card-title mt-4">
                            <?php
                            include 'koneksi.php';
                            $result = mysqli_query($con, "SELECT COUNT(*) as count FROM tabel_cabang");
                            $row = mysqli_fetch_assoc($result);
                            echo $row['count'] . " Cabang";
                            mysqli_close($con);
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laptop</h5>
                        <p class="card-text">High performance laptops from top brands.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Smartphones</h5>
                        <p class="card-text">Latest smartphones with cutting-edge technology.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cameras</h5>
                        <p class="card-text">Capture moments with high-quality cameras.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Accessories</h5>
                        <p class="card-text">Find accessories for all your electronic needs.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div><br>


        <form>
            <hr style="border: 3px solid; margin-left: 10%; margin-right: 10%"><br>
            <h2 align="center">
                CONTACT US
            </h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Pesan Anda</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form><br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>