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
	function SuaraKucing(){
		echo "Perbedaannya : Suara";
	}
}
class Anjing extends Animal {
	function SuaraAnjing(){
		echo "Perbedaannya : Suara";
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
echo $kucing->SuaraKucing();

echo "<hr>";

$anjing = new Anjing;
$anjing->hewan = "Anjing";
$anjing->jumlah_kaki = "4";
$anjing->bisa_terbang = "Tidak";
$anjing->suara = "guukguuk";

echo $anjing->Hewan();
echo "<br>";
echo $anjing->jumlahKaki();
echo "<br>";
echo $anjing->bisaTerbang();
echo "<br>";
echo $anjing->Suara();
echo "<br>";
echo $anjing->SuaraAnjing();