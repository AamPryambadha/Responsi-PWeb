<?php
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $jumlahdewasa = $_POST['jumlahdewasa'];
        $jumlahanak = $_POST['jumlahanak'];
        $tanggal = $_POST['tanggal'];
        $fp = fopen("list.txt", "a+");

        fputs($fp, "Nama: $nama\nJumlah Tiket Dewasa: $jumlahdewasa\nJumlah Tiket Anak-anak: $jumlahanak\nTanggal: $tanggal\n\n");
        fclose($fp);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Museum Nasional</title>
</head>
<body style="background-color: #FFF8F3;">
    <center><h3 class="p1">Terimakasih atas pemesanan Anda!</h3>
    <a href="index.html"><h4 class="p2">Kembali ke Menu</h4></a></center>
</body>
</html>