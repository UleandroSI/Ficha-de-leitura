<?php
    include_once("banco.php");

    // Recebendo dados
    $titulo = $_POST['inputTitulo'];
    $autor = $_POST['inputAutor'];
    $publicacao = $_POST['inputPublicacao'];
    $assunto = $_POST['assunto'];
    $recursos = $_POST['inputRecursos'];
    $teses = $_POST['inputTeses'];
    $evidencias = $_POST['desconhecidas'];
    $contribuicao = $_POST['inputContribuicao'];
    $interpretacao = $_POST['inputInterpretacao'];
    $problemas = $_POST['inputProblemas'];

    $dados = "INSERT INTO livros(
        titulo
        autor, 
        publicacao, 
        assunto, 
        recursos, 
        teses, 
        evidencias, 
        desconhecidas, 
        contribuicao, 
        interpretacao, 
        problemas,
        created)
    VALUES (
        '$titulo',
        '$autor', 
        '$publicacao', 
        '$assunto', 
        '$recursos', 
        '$teses', 
        '$evidencias', 
        '$desconhecidas', 
        '$contribuicao', 
        '$interpretacao', 
        '$problemas',
        NOW()
    )";

    $salvar = mysqli_query($conn, $dados)
?>
