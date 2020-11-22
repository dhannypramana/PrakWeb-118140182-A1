<!-- TUGAS 1 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Faktorial</title>
    <style>
        input[type=number]{
            margin: 8px 0;
            padding: 12px 20px;
            width: 80%;
            box-sizing: border-box;
            border: 1px solid grey;
            border-radius: 4px;
        }

        input[type=submit]{
            width: 100px;
            padding: 10px;
            margin: 10px;
            margin-left: 0;
            background-color: green;
            color: white;
        }

        #container{
            border: 1px solid black;
            width: 25%;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div id="container">
        <form action="" method="GET">
            <label for="angka">Masukkan Bilangan</label><br>
            <input type="number" name="angka" placeholder="Input Your Number"><br>

            <input type="submit" name="submit">
        </form>
    </div>
<?php

    function faktorial($x){
        $hitung = 1;
        
        for($i=$x; $i>0; $i--){
            $hitung = $hitung * $i;
        }
    
        return $hitung;
    }

    $angka = isset($_POST['GET']) ? $_POST['GET'] : '';

    if(isset($_GET['submit'])){
            $angka = $_GET['angka'];
    }

    echo "<br>";
    echo "<b> Faktorial Dari ". $angka . " Adalah ";
    echo faktorial($angka);
    echo "</b>";
?>
</body>
</html>