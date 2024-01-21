<?php 

function formatRupiah($angka, $prefix = false){
    if($prefix == true){
        $rupiah = "Rp. ".number_format($angka,0,',',',');
        return $rupiah;
    }
    $rupiah = number_format($angka,0,',',',');
    return $rupiah;
}