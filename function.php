<?php

function bilanghalo() {
    echo "halo";
}

function bilangnama($nama = 'Tidak ada nama'){
    echo "Halo, " . $nama . '!</br>';
}

function tambah ($a, $b) {
    $total = $a + $b;
    echo $total;
}
bilangnama('Safwan');
bilangnama('Fadlurrohman');