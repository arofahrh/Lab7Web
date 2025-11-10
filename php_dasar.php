<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>

<h1>Form Input</h1>

<form action="php_dasar.php" method="GET">
  Nama: <input type="text" name="nama">
  <input type="submit" value="Kirim">
</form>

<br>

<?php
$nama = $_GET['nama'] ?? '';
echo "Selamat Datang $nama";
?>

</body>
</html>
