<?php

class Pessoa {
	// public todos vem
	public $nome = "Rasmus Lerdorf";
	// protected - só quem pode acessar um método ou atributo protected de uma classe é dentro da própria classe ou quem herda da classe // o objeto não consegue acessar.
	protected $idade = 48;
	// private nem mesmo os herdeiros consegue acessar só a própria classe consegue acessar.
	private $senha = "123456";

	public function verDados(){

		echo $this -> nome . "<br/>";
		echo $this -> idade . "<br/>";
		echo $this -> senha . "<br/>";
	}
}

class Programador extends Pessoa{
	// extende tudo menos o que for privado da classe Pessoa
	public function verDados(){

		echo get_class($this);
		echo "<br/>";

		echo $this -> nome . "<br/>";
		echo $this -> idade . "<br/>";
		echo $this -> senha . "<br/>";
	}

}

$objeto = new Programador();

//echo $objeto -> nome . "<br/>";

//echo $objeto -> idade . "<br/>";

//echo $objeto -> senha . "<br/>";

$objeto -> verDados();

?>