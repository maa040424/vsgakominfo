<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Klub Motor Kami</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        main {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.1em;
            color: #555;
            text-align: center;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            overflow: hidden;
            text-align: center;
            background-color: #fff;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.25em;
            margin-bottom: 10px;
            color: #333;
        }

        .card-text {
            font-size: 1em;
            color: #555;
        }

        .form-container {
            margin: 20px 0;
            text-align: center;
        }

        .form-container form {
            display: inline-block;
            max-width: 600px;
            width: 100%;
        }

        .form-container label {
            display: block;
            margin: 10px 0 5px;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            main {
                margin: 20px;
                padding: 15px;
            }

            .card-container {
                gap: 10px;
            }

            .card {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php include 'navside.php'; ?>
    <main>
        <h2>Produk Kami</h2>
        <p>Kami di Klub Motor Kami menawarkan berbagai produk dan layanan untuk meningkatkan pengalaman berkendara Anda.
            Berikut adalah beberapa produk utama yang kami tawarkan:</p>

        <div class="form-container">
            <button onclick="document.getElementById('addProductForm').style.display='block'">Tambah Produk</button>
            <div id="addProductForm" style="display: none;">
                <h3>Tambah Produk Baru</h3>
                <form action="produk_process.php" method="post" enctype="multipart/form-data">
                    <label for="product_name">Nama Produk:</label>
                    <input type="text" id="product_name" name="product_name" required>

                    <label for="product_description">Deskripsi:</label>
                    <textarea id="product_description" name="product_description" rows="4" required></textarea>

                    <label for="product_image">Gambar Produk:</label>
                    <input type="file" id="product_image" name="product_image" accept="image/*" required>

                    <button type="submit">Tambahkan Produk</button>
                </form>
            </div>
        </div>

        <div class="card-container">
            <?php
            // Koneksi ke database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_motor";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Mengambil data produk dari database
            $sql = "SELECT name, description, image FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Menampilkan data produk
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="card">';
                    echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
                    echo '<div class="card-body">';
                    echo '<h3 class="card-title">' . $row["name"] . '</h3>';
                    echo '<p class="card-text">' . $row["description"] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>Tidak ada produk yang ditemukan.</p>";
            }

            $conn->close();
            ?>
        </div>
    </main>
</body>

</html>