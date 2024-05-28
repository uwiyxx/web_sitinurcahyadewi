<?php 
    $koneksi = new mysqli("localhost", "root", "", "uprak_dewi");

    if ($mysql->connect_error) {
        die("". $koneksi->connect_error);

        }
    
?>