<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Klub Motor Kami</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        main {
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        p {
            text-align: center;
            font-size: 1.1em;
            color: #555;
            margin-bottom: 30px;
        }

        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }

        .gallery-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            width: 200px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .gallery-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }

        .gallery-item p {
            padding: 10px;
            font-size: 1em;
            color: #333;
            text-align: center;
            margin: 0;
            background-color: #fff;
        }
    </style>
</head>

<body>
    <?php include 'navside.php'; ?>
    <main>
        <h2>Galeri</h2>
        <p>Berikut adalah beberapa gambar dari kegiatan dan acara kami:</p>
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="../img/1.jpg" alt="Riding Bareng">
                <p>Riding Bareng</p>
            </div>
            <div class="gallery-item">
                <img src="../img/2.jpg" alt="Workshop Perawatan">
                <p>Workshop Perawatan</p>
            </div>
            <div class="gallery-item">
                <img src="../img/3.jpg" alt="Kopdar Akbar">
                <p>Kopdar Akbar</p>
            </div>
            <div class="gallery-item">
                <img src="../img/4.jpg" alt="Acara Sosial">
                <p>Acara Sosial</p>
            </div>
        </div>
    </main>
</body>

</html>