<?php
//Cabecalho declaracoes
header("Content-type: text/html; charset=utf-8");
//header("Location: index.html");
include_once("banco.php");

/* iniciando a conexão com o banco de dados 
$cx = mysqli_connect("127.0.0.1", "root", "");
  selecionando o banco de dados 
$db = mysqli_select_db($cx, "test"); */

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //criando a query de consulta à tabela criada
    $consulta = "SELECT * FROM livros";

    //pecorrendo os registros da consulta. 
    while($aux = mysqli_fetch_assoc($consulta)) { 
        echo "-----------------------------------------<br />";
        echo "ID:".$id["id"]."<br />";
        echo "Titulo:".$aux["titulo"]."<br />";
        echo "Autor:".$aux["autor"]."<br />";
            //publicacao,
            //assunto, 
            //recursos, 
            //teses, 
            //evidencias, 
            //desconhecidos, 
            //contribuicao, 
        echo "Interpretação:".$aux["interpretacao"]."<br />"; 
        echo "Problemas:".$aux["problemas"]."<br />"; 
        } catch(PDOException $e) {
            echo $consulta . "<br>" . $e->getMessage();
        }
    
        $conn = null;
 
?>