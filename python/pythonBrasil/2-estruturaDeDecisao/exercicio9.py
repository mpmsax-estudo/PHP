#!/usr/local/bin/python3

n1 = float(input("Digite o 1º número:\n"));
n2 = float(input("Digite o 2º número:\n"));
n3 = float(input("Digite o 3º número:\n"));

if n1 >= n2 and n1 >= n3 :
	maior = n1;
	if n2 >= n3 :
		intermediario = n2;
		menor = n3;
	else :
		intermediario = n3;
		menor = n2;
elif n2 >= n1 and n2 >= n3 :
	maior = n2;
	if n1 >= n3 :
		intermediario = n1;
		menor = n3;
	else :
		intermediario = n3;
		menor = n1;
elif n3 >= n1 and n3 >= n2 :
	maior = n3;
	if n1 >= n2 :
		intermediario = n1;
		menor = n2;
	else :
		intermediario = n2;
		menor = n1;


if maior == menor :
	print("Os números são iguais: \n" + str(n1) + "\n" + str(n2) + "\n" + str(n3));
else :
	print("O maior número é " + str(maior));
	print("O número intermediário é " + str(intermediario));
	print("O menor número é " + str(menor));
