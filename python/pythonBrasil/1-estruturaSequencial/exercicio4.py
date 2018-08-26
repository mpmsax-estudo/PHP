#!/usr/local/bin/python3

n1 = round(float(input("Digite a nota 1\n")), 2);
print ("Número digitado " + str(n1));

n2 = round(float(input("Digite a nota 2\n")), 2);
print ("Número digitado " + str(n2));

n3 = round(float(input("Digite a nota 3\n")), 2);
print ("Número digitado " + str(n3));

n4 = round(float(input("Digite a nota 4\n")), 2);
print ("Número digitado " + str(n4));

media = (n1 + n2 + n3 + n4) / 2;

print ("A sua media foi" + str(media));