<?php

$a = 18;
echo $a;

if ($a == 15) {
    echo "Ini bernilai sama, yaitu $a.";
} else {
    echo "Ini tidak bernilai sama, yaitu $a.";
}


$nama = "Namamu";
$kelas = "XII TKJ 5";
$alamat = "Sapugarut";

const TANGGAL_LAHIR = "1 Januari 2023";

echo $nama . $kelas . $alamat;
echo "Nama saya $nama, dari kelas $kelas.";
echo "Alamat saya di $alamat.";
echo "Saya lahir tanggal " . TANGGAL_LAHIR;