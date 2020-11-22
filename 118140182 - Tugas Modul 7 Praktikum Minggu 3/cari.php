<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
</head>

<style>
    *{
        font-family: 'Quicksand', sans-serif;
    }

        table{
            border-collapse: collapse;
        }

        th{
            background-color: green;
            color: white;
        }

        th, td{
            width: 250px;
            text-align: center;
            border: 1px solid black;
            padding: 10px;
        }

    .box{
        margin: 8px 0;
        padding: 12px 20px;
        width: 30%;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 4px;
    }

    .submit{
        margin-top: 5px;
        padding: 10px;
        width: 405px;
        background-color: green;
        color: white;
        border: 1px solid green;
        border-radius: 4px;
    }

    .submit:hover{
        background-color: rgba(0,0,0,0.6);
    }

    .kotak{
        margin: 50px 0;
        padding: 12px 20px;
        width: 30%;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 4px;
        float: left;
    }

    .kotak:hover{
        background-color: green;
        color: white;
    }

    a{
        text-decoration: none;
        color: black
    }
</style>
<body>
<h1>Cari Data Mahasiswa</h1>

<form action="cari.php" method="POST">
    <label for="cari">Masukkan nama yang ingin dicari</label><br>
    <input type="text" name="nama" class="box" placeholder="Input Nama" required>
    <br>
            
    <input type="submit" name="submit" class="submit">
</form><br><br>


<?php
error_reporting(0);
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        include 'koneksi.php';

        $data = mysqli_query($koneksi,"select * from mahasiswa where nama='$nama'") or die(mysqli_error());
        
        if(mysqli_affected_rows($koneksi) == 1){
            echo "Menampilkan hasil pencarian: " . $nama;
        }else{
            echo "Data ".$nama." tidak Ditemukan";
        }
    }
?>

<table>
    <tr>
        <th>NRP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jurusan</th>
    </tr>

<?php
    while($d = mysqli_fetch_array($data)){
?>

        <tr>
            <td>
                <?php
                echo $d['nrp'];
                ?>
            </td>
            <td><?php
                    echo $d['nama'];
                ?>
            </td>
            <td><?php
                    echo $d['alamat'];
                ?>
            </td>
            <td><?php
                    echo $d['id_jur'];
                ?>
            </td>
        </tr>
</table>
<?php } ?>
<br>
    <a href="main.php" class="kotak">Lihat Data User</a>
</body>
</html>