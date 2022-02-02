import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="ti",
  password="zt049br",
  database="livros_db"
)

mycursor = mydb.cursor()


mycursor.execute("CREATE TABLE livros (livroID INT AUTO_INCREMENT PRIMARY KEY, autor VARCHAR(255), publicacao VARCHAR(500), assunto VARCHAR(500), recursos VARCHAR(500), teses VARCHAR(500), evidencias VARCHAR(500), desconhecidas VARCHAR(500), contribuicao LONGTEXT, interpretacao LONGTEXT, problemas LONGTEXT)")


""" Mostrar nome da tabela
mycursor.execute("SHOW TABLES")
for x in mycursor:
  print(x) 
"""

"""
mycursor = mydb.cursor()

sql = "INSERT INTO customers (name, address) VALUES (%s, %s)"
val = [
  ('Peter', 'Lowstreet 4'),
  ('Amy', 'Apple st 652'),
  ('Hannah', 'Mountain 21'),
  ('Michael', 'Valley 345'),
  ('Sandy', 'Ocean blvd 2'),
  ('Betty', 'Green Grass 1'),
  ('Richard', 'Sky st 331'),
  ('Susan', 'One way 98'),
  ('Vicky', 'Yellow Garden 2'),
  ('Ben', 'Park Lane 38'),
  ('William', 'Central st 954'),
  ('Chuck', 'Main Road 989'),
  ('Viola', 'Sideway 1633')
]

mycursor.executemany(sql, val)

mydb.commit()

print(mycursor.rowcount, "was inserted.")  """

def inserir(autor, publicacao, assunto, recursos, teses, evidencias, desconhecidas, contribuicao, interpretacao, problemas):
"""https://realpython.com/python-mysql/#inserting-records-in-tables """
    autor = autor
    publicacao = publicacao
    assunto = assunto
    recursos recursos 
    teses = teses 
    evidencias = evidencias 
    desconhecidas = desconhecidas 
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

    if mydb.is_connected():
        insert_livros_query = """
        INSERT INTO livros
        (autor, publicacao, assunto, recursos, teses, evidencias, desconhecidas, contribuicao, interpretacao, problemas)
        VALUES ( %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)
        """
        gravando_livros = [
            ("Chaitanya", "Baweja"),
        ("Mary", "Cooper"),
        ("John", "Wayne"),
        ("Thomas", "Stoneman"),
        ("Penny", "Hofstadter"),

        with connection.cursor() as cursor:
                cursor.executemany(insert_reviewers_query, reviewers_records)
                connection.commit()
