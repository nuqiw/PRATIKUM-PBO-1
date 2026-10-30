<?php

//panggil file PropertyConstant
require('./produk.php');

use Pbo\marketplace\product;

//object
$produk = new product('P0001','Laptop',1000000,5);

//hasil
echo "produk: ". $produk->nama;
echo "<br/>";

echo "harga: rp.". $produk->harga;
echo "<br/>";

echo "stok: ". $produk->stok;
echo "<br/>";

echo "pajak: ". $produk->pajak(). "%";
echo "<br/>";

echo "total harga setelah pajak: RP". $produk->total();