<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klien - GamePro Boosters</title>
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

        .client-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }

        .client {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            width: 200px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .client:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .client img {
            width: 100%;
            height: auto;
            object-fit: contain;
            max-height: 100px;
        }

        .client-name {
            margin-top: 10px;
            font-size: 1em;
            color: #333;
        }
    </style>
</head>

<body>
    <?php include 'navside.php'; ?>
    <main>
        <h2>Daftar Klien</h2>
        <p>Berikut adalah beberapa klien yang telah bekerja sama dengan kami:</p>
        <div class="client-container">
            <div class="client">
                <img src="../img/client1.jpg" alt="Client 1 Logo">
                <p class="client-name">Client 1</p>
            </div>
            <div class="client">
                <img src="../img/client2.png" alt="Client 2 Logo">
                <p class="client-name">Client 2</p>
            </div>
            <div class="client">
                <img src="../img/client3.jpg" alt="Client 3 Logo">
                <p class="client-name">Client 3</p>
            </div>
            <div class="client">
                <img src="../img/client4.png" alt="Client 4 Logo">
                <p class="client-name">Client 4</p>
            </div>
        </div>
    </main>
</body>

</html>