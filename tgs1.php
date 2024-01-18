<?php

$nama_lengkap = "M.Sakti";
$umur = 16;
$kelas = "X RPL 2";
$tempat_lahir = "Jakarta";
$tanggal_lahir = "19 februari 2008";
$nomor_wa = "085695097246";
$alamat = "Jl Zaenal Arifin No 02";


function my_biodata() {
    global $nama_lengkap, $umur, $kelas, $tempat_lahir, $tanggal_lahir, $nomor_wa, $alamat;

    echo "=== Program Biodata Sederhana ===\n<br/>";
    echo "Nama: " . $nama_lengkap . "\n <br/>";
    echo "Umur: " . $umur . "\n<br/>";
    echo "Kelas: " . $kelas . "\n<br/>";
    echo "Tempat/Tanggal Lahir: " . $tempat_lahir . ", " . $tanggal_lahir . "\n<br/>";
    echo "Nomor WA: " . $nomor_wa . "\n<br/>";
    echo "Alamat: " . $alamat . "\n<br/>";
}


my_biodata();
?>