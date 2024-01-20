<?php

class Produk
{
    protected $nama;
    protected $harga;
    protected $sku;

    public function __construct($nama, $harga, $sku)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->sku = $sku;
    }

    abstract public function getDetail();

    public function getRupiah()
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }
}

class Laptop extends Produk
{
    protected $merk;
    protected $ramSize;
    protected $ssdSize;

    public function __construct($nama, $harga, $sku, $merk, $ramSize, $ssdSize)
    {
        parent::__construct($nama, $harga, $sku);
        $this->merk = $merk;
        $this->ramSize = $ramSize;
        $this->ssdSize = $ssdSize;
    }

    public function getDetail()
    {
        return "Laptop {$this->merk} - {$this->nama}, RAM: {$this->ramSize}GB, SSD: {$this->ssdSize}GB";
    }
}

class Monitor extends Produk
{
    protected $panel;
    protected $resolusi;

    public function __construct($nama, $harga, $sku, $panel, $resolusi)
    {
        parent::__construct($nama, $harga, $sku);
        $this->panel = $panel;
        $this->resolusi = $resolusi;
    }

    public function getDetail()
    {
        return "Monitor {$this->nama}, Panel: {$this->panel}, Resolusi: {$this->resolusi}";
    }
}

// Pembuatan objek
$laptop = new Laptop("Asus ROG", 13000000, "AR12345", "Asus", 8, 256);
$monitor = new Monitor("Monitor LG 27Inch", 13000000, "M12345", "IPS", "2K");

// Menampilkan objek
echo $laptop->getDetail() . "\n";
echo $laptop->getRupiah() . "\n";

echo "\n";

echo $monitor->getDetail() . "\n";
echo $monitor->getRupiah() . "\n";

?>
