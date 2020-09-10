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
	public function JumlahKaki(){
		return "Kucing memiliki jumlah kaki 4";
	}
	public function BisaTerbang(){
		return "Kucing tidak bisa terbang";
	}
	public function Suara(){
		return "Kucing memiliki suara : Meooong ";
	}
}
class Anjing extends Animal {
	public function JumlahKaki(){
		return "Anjing memiliki jumlah kaki 4";
	}
	public function BisaTerbang(){
		return "Anjing tidak bisa terbang";
	}
	public function Suara(){
		return "Anjing memiliki suara : GuukGuuk ";
	}
}
class Elang extends Animal {
	public function JumlahKaki(){
		return "Elang memiliki jumlah kaki 2";
	}
	public function BisaTerbang(){
		return "Elang bisa terbang";
	}
	public function Suara(){
		return "Elang memiliki suara : Miiipppp ";
	}
}
class Angsa extends Animal {
	public function JumlahKaki(){
		return "Angsa memiliki jumlah kaki 2";
	}
	public function BisaTerbang(){
		return "Angsa bisa terbang";
	}
	public function Suara(){
		return "Angsa memiliki suara : Kwaaak ";
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

echo "<hr>";

$elang = new Elang;
$elang->hewan = "Elang";
$elang->jumlah_kaki = "2";
$elang->bisa_terbang = "Bisa";
$elang->suara = "Miiipppp";

echo $elang->Hewan();
echo "<br>";
echo $elang->jumlahKaki();
echo "<br>";
echo $elang->bisaTerbang();
echo "<br>";
echo $elang->Suara();
echo "<br>";

echo "<hr>";

$angsa = new Angsa;
$angsa->hewan = "Angsa";
$angsa->jumlah_kaki = "2";
$angsa->bisa_terbang = "Bisa";
$angsa->suara = "Kwaaak";

echo $angsa->Hewan();
echo "<br>";
echo $angsa->jumlahKaki();
echo "<br>";
echo $angsa->bisaTerbang();
echo "<br>";
echo $angsa->Suara();
echo "<br>";