<?php 
    $koneksi = new mysqli("localhost","root","","uprak_dewi");

    $query = "select * from kasir";

    $hasil =$koneksi->query($query);
  
    $kasir =[];

    while($item =$hasil->fetch_assoc()){
        $buku[]=$item;
}
?>