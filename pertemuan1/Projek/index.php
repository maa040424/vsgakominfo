<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pixle Art Web</title>
</head>

<body>

    <div class="container">
        <header>
            <h2> Pixel Art Style </h2>
        </header>
        <div class="navbar" id="navbar">
            <a href="#home">Home</a>
            <a href="src/paketart.php">Paket Art</a>
            <div class="dropdown">
                <button class="dropbtn">Dropdown
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
                <i class="fa fa-th"></i>
            </a>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="w3-container">
                <h2>Cards</h2>
                <p>paket pixel art</p>
                <div class="cards-container">
                    <div class="w3-panel w3-card card">
                        <img src="img/kucing.jpg" alt="Image 1" class="card-img">
                        <p>Pixel Art Kucing</p>
                    </div>
                    <div class="w3-panel w3-card-2 card">
                        <p>Paket membuat pemandangan</p>
                        <img src="img/green.jpg" alt="Image 2" class="card-img">
                        <p>Pixel Art Pemandangan</p>
                        <p>Start price 15$</p>
                    </div>
                    <div class="w3-panel w3-card-4 card">
                        <img src="img/snake.png" alt="Image 3" class="card-img">
                        <p>Pixel Art Snake</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tesGaris"></div>
        <br>
    </section>

    <footer>
        <p>Footer</p>
    </footer>

    <script>
        function toggleMenu() {
            var x = document.getElementById("navbar");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>
</body>

</html>