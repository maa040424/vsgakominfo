<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </link>
    <title>Elektronik Store</title>
</head>

<style>
    body {
        background-color: #f5f5f5;
        margin-left: 4%;
        margin-right: 4%;
    }

    header {
        background-image: url(buahh.jpg);
        padding: 30px;
        text-align: center;
        font-size: 40px;
        color: whitesmoke;
        font-family: Georgia, serif;
    }

    header .p {
        color: white;
        text-align: center;
        align-items: center;
        padding-left: center;
    }

    .navbar-brand {
        position: relative;
        padding: 20px;
        left: 20px;
    }

    .container h2 {
        margin-top: 2.5%%;
        text-align: left;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 35px;
    }
</style>

<body>

    <header>
        <p>Fruit Store</p>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #D3D3D3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logoo.png" width="60" height="60" alt="">
            </a>
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>

            </div>
        </div>
    </nav>
    <div class="container">
        <h2>Dashboard</h2>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>