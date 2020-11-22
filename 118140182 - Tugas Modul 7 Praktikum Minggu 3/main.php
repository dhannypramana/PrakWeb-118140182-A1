<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa CRUD</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
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

        a{
            text-emphasis: none;
            text-decoration: none;
            color: black;
        }

        a:hover{
            color: white;
        }
        
        .box{
            margin: 50px 0;
            padding: 12px 20px;
            width: 30%;
            box-sizing: border-box;
            border: 1px solid black;
            border-radius: 4px;
        }

        .box:hover{
            background-color: green;
        }

        td > a:hover{
            color: green;
        }
    </style>
</head>
<body>
<h1>DATA MAHASISWA PENS</h1>
    <?php
        include_once 'koneksi.php';
        $data = mysqli_query($koneksi,"select * from mahasiswa");
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
            <td>
                <a href="deletes.php?nrp=<?php echo $d['nrp']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <br>
        <a href="add.php" class="box">Tambah Data</a><br><br><br>
        <a href="cari.php" class="box">Cari Data</a>
</body>
</html>