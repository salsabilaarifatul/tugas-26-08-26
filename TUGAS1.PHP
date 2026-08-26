<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>========== APLIKASI BIODATA ==========</h2>

    <form>
        Nama :
        <input type="text" value="Salsabila arifatul aulia">
        <br><br>

        Umur :
        <input type="number" value="16">
        <br><br>

        Alamat :
        <input type="text" value="Pagak, Krajan, Malang">
        <br><br>

        Jenis Kelamin :
        <input type="text" value="Perempuan">
        <br><br>

        Kelas :
        <input type="text" value="XI">
        <br><br>

        Jurusan :
        <input type="text" value="RPL">
        <br><br>

        Jari-jari :
        <input type="number" value="7">
    </form>

    <?php

    $nama = "Salsabila arifatul aulia";
    $umur = 16;
    $alamat = "Pagak, Krajan, Malang";
    $jeniskelamin = "Perempuan";
    $kelas = "XI";
    $jurusan = "RPL";

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

    echo "<br>";
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