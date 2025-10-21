<html>
<head>
    <title>Program Diskon Barang</title>
</head>
<body>
    <h2>TUGAS 2- Menghitung Total Belanja dan Diskon</h2>

    <?php
    if (!isset($_POST['submit'])) {
    ?>
        <form method="post">
            <p>Masukkan harga beberapa barang:</p>
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "Harga barang ke-$i: <input type='number' name='harga[]' min='0' required><br>";
            }
            ?>
            <br>
            <input type="submit" name="submit" value="Hitung Total">
        </form>
    <?php
    } else {
        $harga = $_POST['harga'];

        $total_awal = 0;
        $total_diskon = 0;
        $total_akhir = 0;

        echo "<h3>Daftar Harga dan Diskon</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr>
                <th>No</th>
                <th>Harga Barang</th>
                <th>Diskon</th>
                <th>Harga Setelah Diskon</th>
              </tr>";

        // Perulangan untuk menghitung tiap barang
        for ($i = 0; $i < count($harga); $i++) {
            $harga_barang = $harga[$i];
            $total_awal += $harga_barang;

            // Percabangan di dalam perulangan
            if ($harga_barang > 30000) {
                $diskon = 0.1 * $harga_barang; // diskon 10%
            } else {
                $diskon = 0; // tidak dapat diskon
            }

            $harga_setelah_diskon = $harga_barang - $diskon;
            $total_diskon += $diskon;
            $total_akhir += $harga_setelah_diskon;

            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>Rp " . number_format($harga_barang, 0, ',', '.') . "</td>";
            echo "<td>Rp " . number_format($diskon, 0, ',', '.') . "</td>";
            echo "<td>Rp " . number_format($harga_setelah_diskon, 0, ',', '.') . "</td>";
            echo "</tr>";
        }

        echo "</table><br>";

        echo "Total Harga Awal: Rp " . number_format($total_awal, 0, ',', '.') . "<br>";
        echo "Total Diskon: Rp " . number_format($total_diskon, 0, ',', '.') . "<br>";
        echo "Total Bayar Akhir: Rp " . number_format($total_akhir, 0, ',', '.') . "<br><br>";
        echo "<a href=''>Hitung Ulang</a>";
    }
    ?>
</body>
</html>