<?php 

class Animal {
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

echo "Tipe".$bmw->kecepatanMaksimal();