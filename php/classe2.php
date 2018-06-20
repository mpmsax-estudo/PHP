<?php

class Documento {

	public function getNumero(){
		return $this -> numero;
	}

	public function setNumero($numero){
		// :: server para acessar método estático
		$resultado = Documento::validarCPF($numero);

		if ($resultado === false){
			throw new Exception("CPF informado não é válido", 1);
		} 
		
		$this -> numero = $numero;
	}

	public static function validarCPF($cpf){
		// Verifica se um número foi informado
		if(empty($cpf)) return false;

		// Elimina possível mascara
		$cpf = preg_replace('[^0-9]', '', $cpf);
		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

		// Verifica se o numer de digitos informados é igual a 11
		if (strlen($cpf) !=11) {
			return false;
		}

		// Verifica se nenhuma das sequencias invalidas abaixo 
		// foi digitada. Caso afirmativo,l retorna falso
		else if ($cpf == '00000000000' ||
			$cpf == '11111111111' ||
			$cpf == '22222222222' ||
			$cpf == '33333333333' ||
			$cpf == '44444444444' ||
			$cpf == '55555555555' ||
			$cpf == '66666666666' ||
			$cpf == '77777777777' ||
			$cpf == '88888888888' ||
			$cpf == '99999999999') {
			return false;
		// Calcula os digitos verificadores para verificar se o 
		// CPF é válido
		} else {
			/*
Regra Prática

O número de um CPF tem 9 algarismos e mais dois dígitos verificadores, que são indicados após uma barra. Logo, um CPF tem 11 algarismos. O número do CPF é escrito na forma ABCDEFGHI/JK ou diretamente como ABCDEFGHIJK, onde os algarismos não podem ser todos iguais entre si.

O J é chamado 1° dígito verificador do número do CPF.

O K é chamado 2° dígito verificador do número do CPF.
Primeiro Dígito

Para obter J multiplicamos A, B, C, D, E, F, G, H e I pelas constantes correspondentes:
A 	B 	C 	D 	E 	F 	G 	H 	I -> onde $digitos[$i] são os respectivos digitos do número
x10 	x9 	x8 	x7 	x6 	x5 	x4 	x3 	x2 -> onde xj é o número que vai ser multiplicado

 O resultado da soma, 10A + 9B + 8C + 7D + 6E + 5F + 4G + 3H + 2I, é dividido por 11.

 Analisamos então o RESTO dessa divisão:

 Se for 0 ou 1, o dígito J é [0] (zero). Se for 2, 3, 4, 5, 6, 7, 8, 9 ou 10, o dígito J é [11 - RESTO]
Segundo Dígito

Já temos J. Para obter K multiplicamos A, B, C, D, E, F, G, H, I e J pelas constantes correspondentes:
A 	B 	C 	D 	E 	F 	G 	H 	I 	J -> onde $digitos[$i] são os respectivos digitos do número
x11 	x10 	x9 	x8 	x7 	x6 	x5 	x4 	x3 	x2 -> onde xk é o número que vai ser multiplicado

O resultado da soma, 11A + 10B + 9C + 8D + 7E + 6F + 5G + 4H + 3I + 2J, é dividido por 11.

Verificamos então o RESTO dessa divisão:

Se for 0 ou 1, o dígito K é [0] (zero). Se for 2, 3, 4, 5, 6, 7, 8, 9 ou 10, o dígito K é [11 - RESTO].
*/
			$digitos = array_map('intval', str_split($cpf));

			$xj=10;
			$calculoJ=0;
			for ($i=0; $i < 9; $i++) { 
				$calculoJ = $digitos[$i] * $xj + $calculoJ;
				$xj--;
			}

			$calculoJ = $calculoJ % 11;

			if ($calculoJ == 0 || $calculoJ == 1) {
				$calculoJ = 0;
			} else {
				$calculoJ = 11 - $calculoJ;
			}

			$xk=11;
			$calculoK=0;
			for ($i=0; $i < 10; $i++) { 
				$calculoK = $digitos[$i] * $xk + $calculoK;
				$xk--;
			}

			$calculoK = $calculoK % 11;

			if ($calculoK == 0 || $calculoK == 1) {
				$calculoK = 0;
			} else {
				$calculoK = 11 - $calculoK;
			}

			if ($calculoJ == $digitos[9] && $calculoK == $digitos[10]) {
				echo $calculoJ;
				echo $calculoK;
				return true;
			} else {
				echo $calculoJ;
				echo $calculoK;
				return false;
			}

		}
	}

}

$cpf = new Documento();

$cpf -> setNumero("87867147241");

var_dump($cpf);

var_dump(Documento::validarCPF("87867147241"))
?>

