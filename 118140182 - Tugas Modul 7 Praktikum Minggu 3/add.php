<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <style>
    *{
        font-family: 'Quicksand', sans-serif;
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
        margin-top: 10px;
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

    a{
        text-decoration: none;
        color: black;
    }

    a:hover{
        background-color: green;
        color: white;
    }
    </style>
</head>
<body>
        <h1>Tambah Data Mahasiswa</h1>
    <form action="add.php" method ="POST">
        
        <label for="username">Nama</label><br>
        <input type="text" name="nama" class="box" placeholder="Input Your Name" required>
        <br>
        
        <label for="nrp">NRP</label><br>
        <input type="number" name="nrp" class="box" placeholder="Input Your NRP" required>
        <br>
        
        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" class="box" placeholder="Input Your Address" required>
        <br>

        <br>
        <label for="jurusan">Jurusan</label>
        <select name="id_jur">
            <option value='Telekomunikasi'>Telekomunikasi</option>
            <option value='Elka'>Elka</option>
            <option value='IT'>IT</option>
            <option value='Elin'>Elin</option>
        </select><br><br>
        
        <input type="submit" name="submit" class="submit">
    </form>
    
    <?php
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $nrp = $_POST['nrp'];
            $alamat = $_POST['alamat'];
            $id_jur = $_POST['id_jur'];
            
            include 'koneksi.php';
            
            $data_insert = mysqli_query($koneksi,"INSERT INTO `mahasiswa` (`nrp`, `nama`, `alamat`, `id_jur`) VALUES ('$nrp', '$nama', '$alamat', '$id_jur');");
            
            echo '<br>';
            echo "User Added Success";
        }
        ?>

    <br>
    <a href="main.php" class="kotak">Lihat Data User</a>
</body>
</html>