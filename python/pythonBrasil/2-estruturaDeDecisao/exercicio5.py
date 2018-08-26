#!/usr/local/bin/python3

n1 = round(float(input("Inserir a 1ª nota:\n")), 2);
n2 = round(float(input("Inserir a 2ª nota:\n")), 2);

media = (n1 + n2) / 2;

if n1 > 10.00 or n2 > 10.00 or n1 < 0.00 or n2 < 0.00 :
	print("Nenhuma das notas pode ser maior do que 10.00 ou negativa");

else :

	if media == 10.00 :
		print("Aprovado com Distinção");

	elif media >= 7.00  and media < 10.00 :
		print("Aprovado");

	else : # media < 7.00 
		print("Reprovado");

