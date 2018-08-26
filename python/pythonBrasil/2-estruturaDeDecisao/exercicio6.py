#!/usr/local/bin/python3

n1 = float(input("Digite o 1º número:\n"));
n2 = float(input("Digite o 2º número:\n"));
n3 = float(input("Digite o 3º número:\n"));

if n1 > n2 and n1 > n3 :
	print("O maior número é " + str(n1));
elif n2 > n1 and n2 > n3 :
	print("O maior número é " + str(n2));
elif n3 > n1 and n3 > n2 :
	print("O maior número é " + str(n3));
else :
	print("Informação inválida, favor inserir um número.");
