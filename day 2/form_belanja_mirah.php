<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Customer = $_POST['customer']; 
    $Pilih_produk = $_POST['pilih_produk']; 
    $Jumlah = $_POST['jumlah']; 
    

    if ($Pilih_produk == 'tv') $harga = 4200000;
    else if ($Pilih_produk == 'kulkas') $harga = 3100000;
    else if ($Pilih_produk == 'mesin cuci') $harga = 3800000;


    $harga_total = $Jumlah * $harga;

    echo '</br>Nama customer : '. $Customer;
    echo '</br>Beli produk : '. $Pilih_produk;
    echo '</br>Jumlah beli : '. $Jumlah;
    echo '</br>Harga : Rp '. $harga;
    echo '</br>Harga total : Rp '. $harga_total;
}
?>
