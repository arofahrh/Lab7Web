# Praktikum 7: PHP Dasar

**Nama**: Arofah Raudlatul Hasanah  
**Kelas**: TI.24.A2  
**NIM**: 312410231  

---

## Tugas: Form Input + Hitung Umur & Gaji

Buatlah program PHP sederhana dengan **form input** untuk:
- Nama
- Tanggal Lahir
- Pekerjaan (pilih dari dropdown)

**Output**:
- Menampilkan nama, umur (otomatis dihitung dari tanggal lahir)
- Gaji sesuai pekerjaan yang dipilih

**Link Demo**:  
`http://localhost/Lab7_php_dasar/tugas7.php`

---

## Hasil Program

### 1. Form Input
<img width="2879" height="1031" alt="image" src="https://github.com/user-attachments/assets/37fe8d75-0cd3-4f5b-b227-84c186b8a018" />


### 2. Hasil Output
<img width="2879" height="1119" alt="image" src="https://github.com/user-attachments/assets/508b78aa-e802-4bd3-b001-db17024227e5" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/81db0d9a-4e40-42b5-b850-e451f88a5961" />


---

## Langkah Praktikum

1. **Install & Jalankan XAMPP**  
  <img width="2879" height="1313" alt="image" src="https://github.com/user-attachments/assets/af327d1b-7914-46b4-bd57-927f2f67f648" />


2. **Buat File PHP Pertama**  
  <img width="1389" height="771" alt="image" src="https://github.com/user-attachments/assets/d3276cdf-24da-46b9-b53f-09ee73a299fc" />

3. **Akses via Browser**  
   `http://localhost/Lab7_php_dasar/`  
   <img width="1191" height="746" alt="image" src="https://github.com/user-attachments/assets/636d77fe-7ca4-40c9-92bf-bacc5c66669c" />


4. **Sintaks PHP Dasar**  
   <img width="966" height="361" alt="image" src="https://github.com/user-attachments/assets/92f0f46e-518e-4497-90cd-17567d675308" />


5. **Variable PHP**  
  <img width="961" height="416" alt="image" src="https://github.com/user-attachments/assets/ac115aba-63d4-4cbe-864f-364085d54e41" />


6. **Predefined Variable `$_GET`**  
  <img width="961" height="471" alt="image" src="https://github.com/user-attachments/assets/37008f9b-84e7-4359-874e-21dfeb916450" />


7. **Membuat Form Input**  
  <img width="954" height="379" alt="image" src="https://github.com/user-attachments/assets/2adc14ce-6964-47ec-9a31-80405ed7071b" />

---

## Kode Utama: `tugas7.php`

```
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
</html>```
