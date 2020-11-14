<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PHP Dasar</title>
</head>
<body>
    <form action="" method="POST">
        <label for="angka1">Angka Pertama: </label>
        <input type="number" name="angka1">

        <br>
        <br>

        <label for="angka2"> Angka Kedua: </label>
        <input type="number" name="angka2">

        <br>
        <input type="submit" name="submit" value="Hitung"> 
    </form>

    <br>
    <?php
        if(isset($_POST['submit'])){
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
        }

        echo "Angka 1 : " . $angka1 . "<br>";
        echo "Angka 2 : " . $angka2;
    ?>

    <p>Berikut merupakan hasil dari setiap operasi</p>
    PENJUMLAHAN
    <br>
    Operator : +
    <br>
    <?php

        $hitung = $angka1 + $angka2;
        echo "Hasil : " . $hitung;
    ?>

    <br><br>
    PENGURANGAN
    <br>
    Operator : -
    <br>
    <?php
        $hitung = $angka1 - $angka2;
        echo "Hasil : " . $hitung;
    ?>

    <br><br>
    PERKALIAN
    <br>
    Operator : *
    <br>
    <?php
        $hitung = $angka1 * $angka2;
        echo "Hasil : " . $hitung;
    ?>

    <br><br>
    PEMBAGIAN
    <br>
    Operator : /
    <br>
    <?php
        $hitung = $angka1 / $angka2;
        echo "Hasil : " . $hitung;
    ?>

    <br><br>
    MODULUS
    <br>
    Operator : %
    <br>
    <?php
        $hitung = $angka1 % $angka2;
        echo "Hasil : " . $hitung;
    ?>
</body>
</html>