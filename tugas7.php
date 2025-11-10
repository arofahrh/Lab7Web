<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tugas 7</title>
<style>
    body {
        background: linear-gradient(to bottom, #8D6E63, #D7CCC8);
        font-family: Arial, sans-serif;
        padding: 40px;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
        color: #5D4037;
    }
    .card {
        background: rgba(255, 255, 255, 0.85);
        padding: 20px 25px;
        border-radius: 12px;
        width: 330px;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.15);
    }
    input, select {
        width: 100%;
        padding: 8px;
        margin-top: 6px;
        margin-bottom: 14px;
        border-radius: 6px;
        border: 1px solid #BCAAA4;
    }
    button {
        width: 100%;
        padding: 10px;
        background: #A1887F;
        border: none;
        border-radius: 8px;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }
    button:hover { background: #8D6E63; }
    .result {
        margin-top: 20px;
        background: rgba(255,255,255,0.92);
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0px 3px 8px rgba(0,0,0,0.1);
    }
</style>
</head>
<body>

<div class="card">
    <h2 style="text-align:center;">Form Data Diri</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tgl" required>

        <label>Pekerjaan:</label>
        <select name="pekerjaan">
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Live Streamer TikTok">Live Streamer TikTok</option>
            <option value="Freelancer">Freelancer</option>
            <option value="Karyawan">Karyawan</option>
        </select>

        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tgl = $_POST['tgl'];
        $pekerjaan = $_POST['pekerjaan'];

        // Hitung Umur
        $umur = date("Y") - date("Y", strtotime($tgl));

        // Tentukan Gaji
        switch ($pekerjaan) {
            case "Mahasiswa": $gaji = "Rp 0"; break;
            case "Live Streamer TikTok": $gaji = "Rp 3.000.000"; break;
            case "Freelancer": $gaji = "Rp 3.000.000"; break;
            case "Karyawan": $gaji = "Rp 5.000.000"; break;
        }

        echo "<div class='result'>
                <h3>Hasil Data</h3>
                Nama: $nama <br>
                Tanggal Lahir: $tgl <br>
                Umur: $umur tahun <br>
                Pekerjaan: $pekerjaan <br>
                Perkiraan Gaji: $gaji
              </div>";
    }
    ?>
</div>

</body>
</html>
