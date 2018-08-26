#!/usr/local/bin/python3

n1 = float(input("Insira o 1º número\n"));

n2 = float(input("Insira o 2º número\n"));

if n1 > n2 :
	print ("O maior número é " + str(n1));
elif n1 == n2 :
	print ("Os números são iguais " + str(n1));
else :
	print ("O maior número é " + str(n2));