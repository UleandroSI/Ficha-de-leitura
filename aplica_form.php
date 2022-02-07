<?php
    header("Content-type: text/html; charset=utf-8");
    include_once("banco.php");

    // Recebendo dados do form
    $titulo = $_POST['inputTitulo'];
    $autor = $_POST['inputAutor'];
    $publicacao = $_POST['inputPublicacao'];
    $assunto = $_POST['inputAssunto'];
    $recursos = $_POST['inputRecursos'];
    $teses = $_POST['inputTeses'];
    $evidencias = $_POST['inputEvidencias'];
    $desconhecidos = $_POST['inputDesconhecidos'];
    $contribuicao = $_POST['inputContribuicao'];
    $interpretacao = $_POST['inputInterpretacao'];
    $problemas = $_POST['inputProblemas'];

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
