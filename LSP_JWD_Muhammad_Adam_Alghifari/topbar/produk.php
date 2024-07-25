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

        <div class="card-container">
            <!-- Card 1 -->
            <div class="card">
                <img src="../img/helm.png" alt="Helm Berkualitas">
                <div class="card-body">
                    <h3 class="card-title">Helm Berkualitas</h3>
                    <p class="card-text">Helm berkualitas tinggi untuk memastikan keamanan dan kenyamanan Anda saat
                        berkendara.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="../img/jaket.jpg" alt="Jaket Motor">
                <div class="card-body">
                    <h3 class="card-title">Jaket Motor</h3>
                    <p class="card-text">Jaket motor stylish dan fungsional untuk melindungi Anda dari cuaca dan
                        meningkatkan penampilan Anda.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <img src="../img/sarung.jpg" alt="Sarung Tangan">
                <div class="card-body">
                    <h3 class="card-title">Sarung Tangan</h3>
                    <p class="card-text">Sarung tangan motor yang nyaman dan tahan lama untuk perlindungan ekstra selama
                        berkendara.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card">
                <img src="../img/sepatu.jpg" alt="Sepatu Motor">
                <div class="card-body">
                    <h3 class="card-title">Sepatu Motor</h3>
                    <p class="card-text">Sepatu motor yang dirancang khusus untuk memberikan kenyamanan dan perlindungan
                        maksimal.</p>
                </div>
            </div>
        </div>
    </main>

</body>

</html>