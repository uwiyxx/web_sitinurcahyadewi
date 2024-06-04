<?php 
    $koneksi = new mysqli("localhost","root","","uprak_dewi");

    $query = "select * from data_siswa";

    $hasil =$koneksi->query($query);
  
    $kasir =[];

    while($item =$hasil->fetch_assoc()){
        $kasir[]=$item;
}
?>