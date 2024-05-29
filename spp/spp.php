<?php 

    include "../assets/database.php";

    $p = "INSERT INTO spp(id,tahun,nominal) values(
    '" . $_POST['id'] . "',   
    '" . $_POST['tahun'] . "',   
    '" . $_POST['nominal'] . "'
   )";
   
   $koneksi->query($p);

?>