<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - Klub Motor Kami</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .article-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 20px;
        }

        .article {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .article-title {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .article-content {
            font-size: 1em;
            color: #555;
        }

        .article-read-more {
            margin-top: 10px;
            text-align: right;
        }

        .article-read-more a {
            color: #007bff;
            text-decoration: none;
        }

        .article-read-more a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php include 'navside.php'; ?>
    <main>
        <h2>Artikel Terkait Klub Motor</h2>
        <div class="article-container">
            <div class="article">
                <h3 class="article-title">Tips Merawat Motor Agar Tetap Prima</h3>
                <p class="article-content">Merawat motor secara rutin adalah kunci untuk menjaga performa dan umur
                    panjang kendaraan Anda. Artikel ini membahas beberapa tips penting dalam merawat motor agar tetap
                    dalam kondisi prima...</p>
                <div class="article-read-more">
                    <a href="artikel/tips-merawat-motor.php">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="article">
                <h3 class="article-title">Panduan Touring Motor untuk Pemula</h3>
                <p class="article-content">Touring motor adalah cara yang menyenangkan untuk menjelajahi tempat baru dan
                    menikmati perjalanan bersama teman-teman. Dalam artikel ini, kami memberikan panduan lengkap untuk
                    pemula yang ingin memulai touring motor...</p>
                <div class="article-read-more">
                    <a href="artikel/panduan-touring-pemula.php">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="article">
                <h3 class="article-title">Memilih Aksesoris Motor yang Tepat</h3>
                <p class="article-content">Aksesoris motor tidak hanya mempercantik tampilan motor Anda tetapi juga
                    meningkatkan kenyamanan dan keamanan berkendara. Pelajari cara memilih aksesoris motor yang tepat
                    dalam artikel ini...</p>
                <div class="article-read-more">
                    <a href="artikel/memilih-aksesoris-motor.php">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>