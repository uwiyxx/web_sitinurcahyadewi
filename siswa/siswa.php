<?php 

    include "../assets/database.php";

    $p = "INSERT INTO data_siswa(nis,nama_lengkap,alamat,kelas,) values(
    '" . $_POST['nis'] . "',   
    '" . $_POST['nama_lengkap'] . "',   
    '" . $_POST['alamat'] . "'
    '" . $_POST['kelas'] . "'
   )";
   
   $koneksi->query($p);

?>