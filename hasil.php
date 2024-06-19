<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Submit Formulir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            text-align: center;
            padding-top: 50px;
        }
        .container {
            background-color: #ccc;
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Terima kasih!</h2>
        <p>Telah Mengirimkan Formulir Dengan Informasi Berikut:</p>
        <p><strong>Nama:</strong> <?php echo $_POST['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
        <p><strong>Nomor WhatsApp:</strong> <?php echo $_POST['number']; ?></p>
        <p><strong>Pesan Anda:</strong> <?php echo $_POST['message']; ?></p>
        <p><a href="index.html">&larr; Kembali ke Formulir</a></p>
    </div>
</body>
</html>
