<?php 

class Mobil {
	public $merk, $tipe, $mesin, $kecepatan_maksimal;

	public function cetakTipe(){
		return $this->tipe;
	}
	public function kecepatanMaksimal(){
		return "Kecepatan maksimal dari mobil ini adalah ".$this->kecepatan_maksimal;
	}
	function injekGas(){
		return "mengalirkan bensin ke ruang bakar, rpm naik, roda berputar";
	}
}

class BMW extends Mobil {
}
class Tesla extends Mobil {
	function selfParking(){
		echo "Parkir Sendiri";
	}
	function injekGas(){
		return "mengalirkan listrik ke dinamo, rpm naik, roda berputar";
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


echo "BMW : ".$bmw->injekGas();
echo "<br>";
echo "Tesla : ".$tesla->injekGas();
