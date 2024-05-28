<?php 
    $koneksi = new mysqli("localhost","root","","uprak_dewi");

    $query = "select * from buku";

    $hasil =$koneksi->query($query);
  
    $buku =[];

    while($item =$hasil->fetch_assoc()){
        $buku[]=$item;
}
?>