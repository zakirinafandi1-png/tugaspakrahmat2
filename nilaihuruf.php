<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tugas 4 - Menentukan Nilai Huruf</title>
</head>
<body>

<h2>Tugas 4 - Menentukan Nilai Huruf Berdasarkan Kategori</h2>

<form method="post">
    <p>Masukkan 5 nilai siswa:</p>
    <?php
    // Membuat 5 input nilai
    for ($i = 1; $i <= 5; $i++) {
        echo "Nilai Siswa $i: <input type='number' name='nilai[]' min='0' max='100' required><br>";
    }
    ?>
    <br>
    <input type="submit" name="proses" value="Tampilkan Nilai Huruf">
</form>

<?php
if (isset($_POST['proses'])) {
    $nilai = $_POST['nilai'];

    echo "<hr>";
    echo "<b>Daftar Nilai dan Kategorinya:</b><br>";

    // perulangan untuk setiap nilai
    for ($i = 0; $i < count($nilai); $i++) {
        $angka = $nilai[$i];
        $huruf = "";
        $keterangan = "";

        // percabangan bersarang menentukan kategori nilai
        if ($angka >= 85) {
            $huruf = "A";
            $keterangan = "Sangat Baik";
        } else {
            if ($angka >= 70) {
                $huruf = "B";
                $keterangan = "Baik";
            } else {
                if ($angka >= 60) {
                    $huruf = "C";
                    $keterangan = "Cukup";
                } else {
                    $huruf = "D";
                    $keterangan = "Kurang";
                }
            }
        }

        echo "Nilai " . ($i+1) . ": $angka → $huruf ($keterangan)<br>";
    }
}
?>

</body>
</html>