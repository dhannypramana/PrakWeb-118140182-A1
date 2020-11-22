<?php 

    include 'koneksi.php';
            
    $nrp = $_GET['nrp'];
    
    $data_delete = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nrp='$nrp';");
    
    if(mysqli_affected_rows($koneksi)==1){
        echo "<b> Data " .$nrp. " Berhasil Dihapus Dari Database</b>";
        header("location:main.php");
    }else{
        echo "<b> Data " .$nrp. " Gagal Dihapus Dari Database </b>";
    }
?>