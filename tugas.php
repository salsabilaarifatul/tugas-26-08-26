<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama = "Salsabila arifatul aulia";
    $umur = 16;
    $alamat = "Pagak, Krajan, Malang";
    $jeniskelamin = "Perempuan";
    $kelas = "XI";
    $jurusan = "RPL";

    echo "========== APLIKASI BIODATA ==========";
    echo "<br>";
    echo "Nama = $nama";
    echo "<br>";
    echo "Umur = $umur tahun";
    echo "<br>";
    echo "Alamat = $alamat";
    echo "<br>";
    echo "Jenis Kelamin = $jeniskelamin";
    echo "<br>";
    echo "Kelas = $kelas";
    echo "<br>";
    echo "Jurusan = $jurusan";
    echo "<br>";

    define("PHI", 3.14);

   
    $r = 7;

  
    $luas = PHI * $r * $r;
    $keliling = 2 * PHI * $r;

    echo "========== PERHITUNGAN LINGKARAN ==========";
    echo "<br>";
    echo "Jari-jari = $r cm";
    echo "<br>";
    echo "Luas Lingkaran = $luas cm²";
    echo "<br>";
    echo "Keliling Lingkaran = $keliling cm";
    echo "<br>";
    ?>
</body>
</html>