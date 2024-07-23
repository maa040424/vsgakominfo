<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Diskon Tes</title>
</head>

<body>
    <h3>Soalnya</h3>
    <p>Buatlah program menggunakan Procedure dan Fuction untuk menghitung diskon hitung Diskon() yang menerima parameter
        total belanja. Prosesnya adalah sebagai berikut:
        <br>
        1. Jika total belanja lebih dari atau sama dengan Rp. 100.000, maka diskon sebesar 10%.
        <br>
        2. Jika total belanja lebih dari atau sama dengan Rp. 50.000, tapi kurang dari Rp. 100.000, maka diskon sebesar
        5%.
        <br>
        3. Jika total belanja kurang dari Rp. 50.000, maka tidak ada diskon.
        <br>
        Setelah itu, prosedur mengembalikan nilai diskon yang kemudian digunakan untuk menghitung total yang harus
        dibayar.
        <br>
        Pada bagian akhir kode, kita memanggil prosedur tersebut dengan memberikan contoh total belanja sebesar Rp.
        120.000,
        dan menampilkan total belanja, diskon, dan total yang harus dibayar setelah diberikan diskon.
    </p>
    <br><br>
    <h3>Hasilnya</h3>
    <br><br>

    <?php
    // Fungsi untuk menghitung diskon berdasarkan total belanja
    function hitungDiskon($totalBelanja)
    {
        $diskon = 0;

        if ($totalBelanja >= 100000) {
            $diskon = 0.10; // Diskon 10%
        } elseif ($totalBelanja >= 50000) {
            $diskon = 0.05; // Diskon 5%
        }

        return $diskon;
    }

    // Prosedur untuk menghitung total yang harus dibayar setelah diskon
    function hitungTotalBelanja($totalBelanja)
    {
        $diskon = hitungDiskon($totalBelanja);
        $nilaiDiskon = $totalBelanja * $diskon;
        $totalBayar = $totalBelanja - $nilaiDiskon;

        return [$nilaiDiskon, $totalBayar];
    }

    // Cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalBelanja = $_POST['totalBelanja'];
        $totalBelanja = floatval($totalBelanja); // Pastikan nilai adalah float
    
        list($nilaiDiskon, $totalBayar) = hitungTotalBelanja($totalBelanja);
    } else {
        $totalBelanja = '';
        $nilaiDiskon = $totalBayar = 0;
    }
    ?>

    <form method="post" action="">
        <label for="totalBelanja">Total Belanja (Rp):</label>
        <input type="number" id="totalBelanja" name="totalBelanja"
            value="<?php echo htmlspecialchars($totalBelanja); ?>" required>
        <input type="submit" value="Hitung">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Hasil Perhitungan</h2>
        <p>Total Belanja: Rp. <?php echo number_format($totalBelanja, 0, ',', '.'); ?></p>
        <p>Diskon: Rp. <?php echo number_format($nilaiDiskon, 0, ',', '.'); ?></p>
        <p>Total yang harus dibayar: Rp. <?php echo number_format($totalBayar, 0, ',', '.'); ?></p>
    <?php endif; ?>
</body>

</html>