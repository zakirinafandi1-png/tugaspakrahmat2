<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tugas 1 - Rata-rata Nilai Siswa (Input)</title>
    <style>
        body { 
            font-family: Arial; 
            background: #f2f8ff; 
            margin: 40px;
        }
        h2 { 
            color: #003366; 
        }
        .box { 
            background: white; 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
            width: 400px; 
        }
        input[type=number] {
            width: 80px; 
            padding: 5px; 
            margin: 3px;
        }
        input[type=submit] {
            padding: 6px 15px;
            background: #0066cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background: #004999;
        }
    </style>
</head>
<body>
<div class="box">
    <h2>Tugas 1 - Menghitung Rata-rata Nilai Siswa</h2>

    <form method="post">
        <p>Masukkan 5 nilai ujian siswa:</p>
        <?php
        // buat input 5 nilai
        for ($i = 1; $i <= 5; $i++) {
            echo "Nilai $i: <input type='number' name='nilai[]' min='0' max='100' required><br>";
        }
        ?>
        <br>
        <input type="submit" name="hitung" value="Hitung Rata-rata">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $nilai = $_POST['nilai'];
        $total = 0;

        // hitung jumlah semua nilai
        for ($i = 0; $i < count($nilai); $i++) {
            $total += $nilai[$i];
        }

        // hitung rata-rata
        $rata = $total / count($nilai);

        // tentukan keterangan
        if ($rata >= 75) {
            $keterangan = "Lulus 🎉";
            $warna = "#c8f7c5";
        } else {
            $keterangan = "Tidak Lulus ❌";
            $warna = "#f7c5c5";
        }

        // tampilkan hasil
        echo "<div style='margin-top:20px; padding:10px; background:$warna; border-radius:5px;'>";
        echo "<b>Hasil Perhitungan:</b><br>";
        echo "Nilai: " . implode(", ", $nilai) . "<br>";
        echo "Rata-rata: <b>" . number_format($rata,2) . "</b><br>";
        echo "Keterangan: <b>$keterangan</b>";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>