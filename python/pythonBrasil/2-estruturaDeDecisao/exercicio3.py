#!/usr/local/bin/python3

s = input("Insira o sexo: \nM = Masculino \nou \nF = Feminino:\n");

if s == 'M' or s == 'm' :
	print ("Sexo igual a Masculino");
elif s == 'F' or s == 'f' :
	print ("Sexo igual a Feminino");
else :
	print ("Sexo inválido");