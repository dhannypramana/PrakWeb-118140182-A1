<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
    <div id="container">
        <form action="" method="POST">
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" placeholder="Input Nama"><br>

            <label for="warna">Warna</label><br>
            <input type="text" name="warna" placeholder="Input Warna Nama"><br>

            <input type="submit" name="submit">
        </form>
    </div>

    <?php
        function hitungBet($x){
            $p_nama = $x;

            if($p_nama >= 1 && $p_nama <= 10){
                $h_nama = $p_nama*300;
            }else if($p_nama >= 11 && $p_nama <= 20){
                $h_nama = $p_nama*500;
            }else if($p_nama > 20){
                $h_nama = $p_nama*700;
            }

            return $h_nama;
        }

        function cetakNama($color="black", $nama){
            echo "<font color=".$color."><br>Nama : " . $nama . "<br></font>";
        }
    ?>

    <?php
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $warna = $_POST['warna'];

            $p_nama = strlen($nama);
            
            echo cetakNama($warna, $nama);
            echo "Harga Bet : Rp." . hitungBet($p_nama);
            echo "<br>Panjang Karakter: ". $p_nama;
        }
    ?>
</body>
</html>