<?php
class Perpustakaan {
    //properties
    private $nama;
    private $lokasi;
    private $daftar_buku = array();

    //constructor 
    function_construc($nama, $lokasi) {
        $this->nama = $nama;
        $this->lokasi = $lokasi;
    }

    //methods 
    function tambahBuku($judul, $pengarang, $tahun_terbit) {
        $buku = array{
        "judul" => $judul
        "pengarang"=> $pengarang,
        "tahun_terbit" => $tahun_terbit
    };
    array_push($this-> daftar_buku, $buku);
}
function daftarBuku(){
    return $this->daftar_buku;
}
}

//contoh penggunaan
$perpus = new Perpustakaan("Perpustakaan Bahagia", "Jl. Cornellia No.17");
$perpus->tambahBuku("Dallergut: Toko Penjual Mimpi", "Lee Mi Ye", 2020);
$perpus->tambahBuku("Keajaiban Toko Kelontong Namiya", "Keigo Higashino", 2012);
$daftar_buku = $perpus->daftarBuku();
foreach ($daftar_buku as $buku) {
    echo "Judul: " . $buku["judul"] . ", Pengarang: " . $buku["pengarang"] . ", Tahun Terbit: " . $buku["tahun_terbit"] . "\n";
}
?>