<?php

abstract class Animal {
	public function falar() {
		return "Som";
	}
	public function locomover() {
	return "Anda";
	}
}

class Cachorro extends Animal {
	public function falar(){
		return "Late";
	}
}

class Gato extends Animal {
	public function falar() {
		return "Mia";
	}
}

class Passaro extends Animal {
	public function falar(){
		return "Piar";
	}
	public function locomover(){
		return "Voa e " . parent::locomover();
	}
}

$pluto = new Cachorro();

echo "----------------------<br/>";

echo $pluto -> falar() . "<br/>";
echo $pluto -> locomover() . "<br/>";

$garfield = new Gato();

echo "----------------------<br/>";

echo $garfield -> falar() . "<br/>";
echo $garfield -> locomover() . "<br/>";

$pardal = new Passaro();

echo "----------------------<br/>";

echo $pardal -> falar() . "<br/>";
echo $pardal -> locomover() . "<br/>";

?>