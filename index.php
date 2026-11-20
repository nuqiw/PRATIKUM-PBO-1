<?php

//panggil file PropertyConstant
require('./PropertyConstant.php');

use Pbo\marketplace\product;

//object
$produk = new product();

$produk->setKode('P0001')
       ->setNama('Laptop')
       ->setHarga(100000000)
       ->setStok(5);

//hasil
echo "Produk: ". $produk->getNama();
echo "<br/>";

echo "Harga: Rp.". $produk->getHarga();
echo "<br/>";

echo "Stok: ". $produk->getStok();
echo "<br/>";

echo "Pajak: ". $produk->pajak(). "%";
echo "<br/>";

echo "Total Harga Setelah Pajak: Rp.". $produk->total();