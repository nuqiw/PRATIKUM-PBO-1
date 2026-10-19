
<?php
class Produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;
}

$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

$pajak = Produk::PAJAK * 100;
$jumlahPajak = $produk->harga * Produk::PAJAK;
$total = $produk->harga + $jumlahPajak;

$harga = number_format($produk->harga, 0, ',', '.');
$totalHarga = number_format($total, 0, ',', '.');

echo "Produk: " . $produk->nama . "<br>";
echo "Harga: Rp" . $harga . "<br>";
echo "Stok: " . $produk->stok . "<br>";
echo "Pajak: " . $pajak . "%<br>";
echo "Total harga setelah pajak: Rp" . $totalHarga;
?>
