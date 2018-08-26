#!/usr/local/bin/python3

letra = input("Insira uma letra:\n");

if len(letra) == 1 :

	flag = 'n';
	vogais = "AEIOUaeiou";
	consoantes = "BCDFGHJKLMNPQRSTVXZbcdfghjklmnpqrstvxz";

	for vogal in vogais :
		if letra == vogal :
			flag = 'v';
			print("A letra é uma vogal");

	for consoante in consoantes :
		if letra == consoante :
			flag = 'c';
			print("A letra é uma consoante");

	if flag != 'v' and flag != 'c' :

		print("Favor informar uma letra, não um número");

else :

	print ("Informação inválida, inserir uma letra");