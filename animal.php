<?php 

class Animal {
	public $hewan, $jumlah_kaki, $bisa_terbang, $suara;

	function cetakHewan(){
		return $this->hewan;
	}
	function Hewan(){
		return " Hewan Ini Adalah : ".$this->hewan;
	}
	function jumlahKaki(){
		return " Jumlah Kakinya : ".$this->jumlah_kaki;
	}
		function bisaTerbang(){
		return " Dia Bisa Terbang : ".$this->bisa_terbang;
	}
		function Suara(){
		return " Suaranya : ".$this->suara;
	}
}

class Kucing extends Animal {
	function KemampuanMendeteksi(){
		echo "Pendeteksi Gempa";
	}
}
class Anjing extends Animal {
	function KemampuanMelacak(){
		echo "Hewan Pelacak";
	}
}
class Elang extends Animal {
	function KemampuanMelihat(){
		echo "Penglihatan Yang Tajam";
	}
}
class Angsa extends Animal {
	function BentukLeher(){
		echo "Leher Yang Panjang";
	}
}
	

$kucing = new Kucing;
$kucing->hewan = "Kucing";
$kucing->jumlah_kaki = "4";
$kucing->bisa_terbang = "Tidak";
$kucing->suara = "Meooong";

echo $kucing->Hewan();
echo "<br>";
echo $kucing->jumlahKaki();
echo "<br>";
echo $kucing->bisaTerbang();
echo "<br>";
echo $kucing->Suara();
echo "<br>";
echo "<br>";
echo $kucing->KemampuanMendeteksi();

echo "<hr>";

$anjing = new Anjing;
$anjing->hewan = "Anjing";
$anjing->jumlah_kaki = "4";
$anjing->bisa_terbang = "Tidak";
$anjing->suara = "GuukGuuk";

echo $anjing->Hewan();
echo "<br>";
echo $anjing->jumlahKaki();
echo "<br>";
echo $anjing->bisaTerbang();
echo "<br>";
echo $anjing->Suara();
echo "<br>";
echo "<br>";
echo $anjing->KemampuanMelacak();

echo "<hr>";

$elang = new Elang;
$elang->hewan = "Elang";
$elang->jumlah_kaki = "4";
$elang->bisa_terbang = "Tidak";
$elang->suara = "Miiipppp";

echo $elang->Hewan();
echo "<br>";
echo $elang->jumlahKaki();
echo "<br>";
echo $elang->bisaTerbang();
echo "<br>";
echo $elang->Suara();
echo "<br>";
echo "<br>";
echo $elang->KemampuanMelihat();

echo "<hr>";

$angsa = new Angsa;
$angsa->hewan = "Angsa";
$angsa->jumlah_kaki = "4";
$angsa->bisa_terbang = "Tidak";
$angsa->suara = "Kwaaak";

echo $angsa->Hewan();
echo "<br>";
echo $angsa->jumlahKaki();
echo "<br>";
echo $angsa->bisaTerbang();
echo "<br>";
echo $angsa->Suara();
echo "<br>";
echo "<br>";
echo $angsa->BentukLeher();