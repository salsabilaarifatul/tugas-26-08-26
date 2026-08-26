<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $gaji = 100000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji * $pajak);

        echo "Gaji sebelum kena pajak = Rp. $gaji <br>";
        echo "Gaji setelah kena pajak = Rp. $thp <br>";
    ?>
</body>
</html>