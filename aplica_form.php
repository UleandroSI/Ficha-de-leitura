<?php
    header("Content-type: text/html; charset=utf-8");
    header("Location: index.html");
    include_once("banco.php");

    // Recebendo dados do form
    $titulo = addslashes($_POST['inputTitulo']);
    $autor = addslashes($_POST['inputAutor']);
    $publicacao = addslashes($_POST['inputPublicacao']);
    $assunto = addslashes($_POST['inputAssunto']);
    $recursos = addslashes($_POST['inputRecursos']);
    $teses = addslashes($_POST['inputTeses']);
    $evidencias = addslashes($_POST['inputEvidencias']);
    $desconhecidos = addslashes($_POST['inputDesconhecidos']);
    $contribuicao = addslashes($_POST['inputContribuicao']);
    $interpretacao = addslashes($_POST['inputInterpretacao']);
    $problemas = addslashes($_POST['inputProblemas']);

    try {
        $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO livros (
            titulo, 
            autor, 
            publicacao, 
            assunto, 
            recursos, 
            teses, 
            evidencias, 
            desconhecidos, 
            contribuicao, 
            interpretacao, 
            problemas)
        VALUES (
            '$titulo', 
            '$autor', 
            '$publicacao', 
            '$assunto', 
            '$recursos', 
            '$teses', 
            '$evidencias', 
            '$desconhecidos', 
            '$contribuicao', 
            '$interpretacao', 
            '$problemas')";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;    
    
?>
