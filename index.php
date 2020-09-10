<?php 

class Mobil {
	public $merk, $tipe, $mesin, $kecepatan_maksimal;

	function cetakTipe(){
		return $this->tipe;
	}
	function kecepatanMaksimal(){
		return "Kecepatan maksimal dari mobil ini adalah ".$this->kecepatan_maksimal;
	}
}


$bmw = new Mobil;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->kecepatan_maksimal = "280km/h";

$bmw2 = new Mobil;
$bmw2->merk = "BMW";
$bmw2->tipe = "320i";
$bmw2->mesin = "2000cc";
$bmw2->kecepatan_maksimal = "280km/h";

echo "$bmw->tipe";
echo "<br>";
echo "$bmw2->tipe";

if($bmw === $bmw2){
	echo " Sama";
}else{
	echo " Tidak";
}
