<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event - Klub Motor Kami</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .event-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 20px;
        }

        .event {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .event-title {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .event-date {
            font-size: 1em;
            color: #777;
            margin-bottom: 10px;
        }

        .event-description {
            font-size: 1em;
            color: #555;
        }

        .event-read-more {
            margin-top: 10px;
            text-align: right;
        }

        .event-read-more a {
            color: #007bff;
            text-decoration: none;
        }

        .event-read-more a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php include 'navside.php'; ?>
    <main>
        <h2>Event Klub Motor Kami</h2>
        <div class="event-container">
            <div class="event">
                <h3 class="event-title">Riding Bareng ke Puncak</h3>
                <p class="event-date">Tanggal: 12 Agustus 2024</p>
                <p class="event-description">Ayo ikut serta dalam riding bareng ke Puncak bersama anggota klub motor
                    kami. Nikmati perjalanan yang menyenangkan dan pemandangan indah sepanjang perjalanan.</p>
                <div class="event-read-more">
                    <a href="event/riding-bareng-puncak.php">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="event">
                <h3 class="event-title">Workshop Perawatan Motor</h3>
                <p class="event-date">Tanggal: 20 September 2024</p>
                <p class="event-description">Ikuti workshop perawatan motor yang akan memberikan pengetahuan dasar dan
                    lanjutan tentang cara merawat motor agar selalu dalam kondisi prima. Workshop ini akan diisi oleh
                    mekanik berpengalaman.</p>
                <div class="event-read-more">
                    <a href="event/workshop-perawatan-motor.php">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="event">
                <h3 class="event-title">Kopdar Akbar</h3>
                <p class="event-date">Tanggal: 15 Oktober 2024</p>
                <p class="event-description">Jangan lewatkan kesempatan untuk bertemu dengan sesama anggota klub motor
                    dari berbagai daerah dalam acara Kopdar Akbar. Nikmati berbagai kegiatan seru dan mempererat
                    silaturahmi antar anggota.</p>
                <div class="event-read-more">
                    <a href="event/kopdar-akbar.php">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>