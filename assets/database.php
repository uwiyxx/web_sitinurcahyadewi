<?php 
    $koneksi = new mysqli("localhost","root","","uprak_dewi");

    $query = "select * from spp";

    $hasil =$koneksi->query($query);
  
    $kasir =[];

    while($item =$hasil->fetch_assoc()){
        $kasir[]=$item;
}
?>