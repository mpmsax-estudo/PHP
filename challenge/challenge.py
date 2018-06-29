#!/usr/bin/python3.5

####!/usr/bin/python

from datetime import date, datetime

from pprint import pprint

#import mysql.connector as mariadb
import pymysql.cursors

import json

import requests

#mariadb_connection = mariadb.connect(user='root', password='password', database='challenge')

mariadb = pymysql.connect(user='root', password='password', database='challenge')

cursor = mariadb.cursor()

class Incidente:

	def __init__(self, status):
		self.status = status

	def mostrarIncidente(self):
		status = input('Mostrar incidentes, escolher uma das opcoes (aberto/fechado): ')
		cursor.execute("SELECT * FROM incidente WHERE status=%s", (status,) )

		for id , atendente , cliente , descricao , status , creation_time in cursor: 
		    print("id: {", id ,"} , atendente: {",atendente,"} , cliente: {",cliente,"} , descricao: {",descricao,"} , status: {",status,"}, creation_time: {",creation_time,"}") 
#		    . format(id , atendente , cliente , descricao , status , creation_time)

		mariadb_connection.close()

	def inserirIncidente(self):

		with open('teste.txt') as f:
			data = json.load(f)

		print(data)

		id_no = cursor.execute('SELECT count(*) from incidente') + 1
		#cursor.lastrowid

		today = datetime.now().date()

		try:
			cursor.execute("INSERT INTO incidente (id,atendente,cliente,descricao,status,creation_time) \
				VALUES (%s,%s,%s,%s,%s,%s)", (id_no,'4','2','erro no envio de e-mail','aberto',today))
#		    	VALUES (%s,%s,%s,%s,%s,%s)", (id_no,'4','2','erro no envio de e-mail','aberto',today))

		except mariadb.Error as error:
		    print("Error: {}".format(error))

		mariadb_connection.commit()
		print ("The last inserted id was: ", cursor.lastrowid)

		id_no = cursor.lastrowid

		cursor.execute("SELECT * FROM incidente WHERE id=%s", (id_no,) )
		
		for id , atendente , cliente , descricao , status , creation_time in cursor:
			print("id: {", id ,"} , atendente: {",atendente,"} , cliente: {",cliente,"} , descricao: {",descricao,"} , status: {",status,"}, creation_time: {",creation_time,"}") 

		mariadb_connection.close()

	def fecharIncidente(self):
		status = 'fechado'

		fechar_id = input('Escolher um id para fechar: ')

		try:
		    cursor.execute("UPDATE incidente \
		    	SET status=%s WHERE id = %s", (status, fechar_id))
		except mariadb.Error as error:
		    print("Error: {}".format(error))

		mariadb_connection.commit()

		cursor.execute("SELECT * FROM incidente WHERE id=%s", (fechar_id,) )
		
		for id , atendente , cliente , descricao , status , creation_time in cursor:
			print("id: {", id ,"} , atendente: {",atendente,"} , cliente: {",cliente,"} , descricao: {",descricao,"} , status: {",status,"}, creation_time: {",creation_time,"}") 

		mariadb_connection.close()

#acao = raw_input("Especificar acao mostrar/inserir/fechar: ")



#objeto = Incidente()

