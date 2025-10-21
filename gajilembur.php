<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tugas 5 - Gaji dan Lembur Karyawan</title>
    <style>
        body { font-family: Arial; background: #fff3f3; margin: 40px; }
        h2 { color: #8b0000; }
        table { border-collapse: collapse; width: 80%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background: #ffe0e0; }
    </style>
</head>
<body>
<h2>Tugas 5 - Menghitung Gaji dan Lembur Karyawan</h2>
<?php
$jamKerja = [40, 35, 50, 45];
$tarifNormal = 20000;
$tarifLembur = 25000;
$batasNormal = 40;

echo "<table>
<tr>
<th>No</th><th>Jam Kerja</th><th>Jam Normal</th><th>Jam Lembur</th>
<th>Gaji Normal</th><th>Gaji Lembur</th><th>Total Gaji</th>
</tr>";

for ($i=0; $i<count($jamKerja); $i++) {
    $jam = $jamKerja[$i];
    $jamNormal = min($jam, $batasNormal);
    $jamLembur = max(0, $jam - $batasNormal);
    $gajiNormal = $jamNormal * $tarifNormal;
    $gajiLembur = $jamLembur * $tarifLembur;
    $total = $gajiNormal + $gajiLembur;

    echo "<tr>
        <td>".($i+1)."</td>
        <td>$jam</td>
        <td>$jamNormal</td>
        <td>$jamLembur</td>
        <td>Rp".number_format($gajiNormal)."</td>
        <td>Rp".number_format($gajiLembur)."</td>
        <td><b>Rp".number_format($total)."</b></td>
    </tr>";
}
echo "</table>";
?>
</body>
</html>