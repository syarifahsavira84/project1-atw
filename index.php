<?php 

class Mobil {
	private $merk, $tipe, $mesin, $kecepatan_maksimal;

	private function cetakTipe(){
		return $this->tipe;
	}
	public function kecepatanMaksimal(){
		return "Kecepatan maksimal dari mobil ini adalah ".$this->kecepatan_maksimal;
	}
}

class BMW extends Mobil {
}
class Tesla extends Mobil {
	private $merk;
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


echo $tesla->merk;
