""" https://pt.stackoverflow.com/questions/220960/como-executar-um-comando-python-com-js """
"""https://realpython.com/python-mysql/#inserting-records-in-tables """

import cgi
from msilib.schema import PublishComponent

data = cgi.FieldStorage()

autor = data["autor"] // É assim que você captura os parâmetros passados.
publicacao = data["publicacao"]
assunto = data["assunto"]
recursos = data["recursos"]
teses = data["teses"]
evidencias = data["evidencias"]
desconhecidos = data["desconhecidos"]
contribuicao = data["contribuicao"]
interpretacao = data["interpretacao"]
problemas = data["problemas"]

inserido = inserir(autor, publicacao, assunto, recursos, teses, evidencias, desconhecidos, contribuicao, interpretacao, problemas)

""" Criar tabela
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="ti",
  password="zt049br",
  database="livros_db"
)


mycursor = mydb.cusor()


mycursor.execute("CREATE TABLE livros (livroID INT AUTO_INCREMENT PRIMARY KEY, titulo VARCHAR(255), autor VARCHAR(255), publicacao VARCHAR(500), assunto VARCHAR(500), recursos VARCHAR(500), teses VARCHAR(500), evidencias VARCHAR(500), desconhecidas VARCHAR(500), contribuicao LONGTEXT, interpretacao LONGTEXT, problemas LONGTEXT)")
"""

""" Mostrar nome da tabela
mycursor.execute("SHOW TABLES")
for x in mycursor:
  print(x) 
"""
""" Altera tabela
  ALTER TABLE livros ADD titulo VARCHAR(255) AFTER livroID
  ALTER TABLE `livros` DROP `desconhecidas`;
"""

def inserir(autor, publicacao, assunto, recursos, teses, evidencias, desconhecidos, contribuicao, interpretacao, problemas):

  autor = autor
  publicacao = publicacao
  assunto = assunto
  recursos recursos 
  teses = teses 
  evidencias = evidencias 
  desconhecidos = desconhecidos 
  contribuicao = contribuicao
  interpretacao = interpretacao 
  problemas = problemas

  import mysql.connector

  mydb = mysql.connector.connect(
      host="localhost",
      user="ti",
      password="zt049br",
      database="livros_db"
  )

  mycursor = mydb.cursor()

  if mydb.is_connected():
    insert_livros_query = f"""
      INSERT INTO livros
      (autor, publicacao, assunto, recursos, teses, evidencias, desconhecidos, contribuicao, interpretacao, problemas)
      VALUES ('{autor}', '{publicacao}', '{assunto}', '{recursos}', '{teses}', '{evidencias}', '{desconhecidos}', '{contribuicao}', '{interpretacao}', '{problemas}')
      """

    mycursor.executemany(insert_livros_query)
    mydb.commit()
    return "Salvo"

  else:
    return "(ERRO Salvar)"
