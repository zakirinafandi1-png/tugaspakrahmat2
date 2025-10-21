<!DOCTYPE html>
<html>
<head>
    <title>Status Kehadiran Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 30px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            margin-bottom: 20px;
        }

        input[type="number"] {
            padding: 8px;
            width: 60px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #2196F3;
            color: white;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            border-radius: 5px;
            margin-left: 5px;
        }

        table {
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px 20px;
            text-align: center;
        }

        th {
            background-color: #2196F3;
            color: white;
        }

        .hadir {
            color: green;
            font-weight: bold;
        }

        .izin {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Status Kehadiran Karyawan</h2>

<form method="post">
    <label>Masukkan Nomor Urut (1–5): </label>
    <input type="number" name="nomor" min="1" max="5" required>
    <input type="submit" value="Cek">
</form>

<?php
$karyawan = ["Andi", "Budi", "Citra", "Dodi", "Eka"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor = $_POST["nomor"];

    echo "<table>";
    echo "<tr><th>No Urut</th><th>Nama</th><th>Status</th></tr>";

    for ($i = 0; $i < count($karyawan); $i++) {
        $no = $i + 1;
        $nama = $karyawan[$i];

        // Tentukan status tanpa if (pakai array)
        $status = ["<span class='izin'>Izin ❌</span>", "<span class='hadir'>Hadir ✅</span>"][$no % 2];

        echo "<tr>
                <td>$no</td>
                <td>$nama</td>
                <td>$status</td>
              </tr>";
    }

    echo "</table>";

    echo "<p>Nomor yang kamu pilih: <b>$nomor - {$karyawan[$nomor - 1]}</b></p>";
}
?>

</body>
</html>