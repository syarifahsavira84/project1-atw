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

class BMW extends Mobil {
}
class Tesla extends Mobil {
	function selfParking(){
		echo "Parkir Sendiri";
	}
}


$bmw = new BMW;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->kecepatan_maksimal = "280km/h";

$tesla = new Tesla;
$tesla->merk = "Tesla";
$tesla->tipe = "Model X";
$tesla->mesin = "Listrik";
$tesla->kecepatan_maksimal = "280km/h";


echo $tesla->kecepatanMaksimal();
