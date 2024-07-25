<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer - GamePro Boosters</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .footer-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .footer-container .social-media {
            display: flex;
            gap: 15px;
        }

        .footer-container .social-media a {
            font-size: 1.5em;
        }
    </style>
</head>

<body>
    <div class="main-content">
        <!-- Konten utama halaman di sini -->
    </div>
    <footer class="footer">
        <div class="footer-container">
            <hr style="border: 3px solid white; margin-left: 10%; margin-right: 10%; background-color: white;">
            <br>
            <div>
                &copy; <?php echo date('Y'); ?> GamePro Boosters. All Rights Reserved.
            </div>
            <div>
                <a href="contact.php">Contact Us</a> | <a href="privacy.php">Privacy Policy</a>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/adam.alghifari.31?mibextid=ZbWKwL" target="_blank">Facebook</a>
                <a href="https://www.instagram.com/m.adam.al04?igsh=MWtlamxnYmxtOTRvZA==" target="_blank">Instagram</a>
                <a href="https://github.com/maa040424" target="_blank">Github</a>
            </div>
        </div>
    </footer>
</body>

</html>