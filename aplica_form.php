<?php
    header("Content-type: text/html; charset=utf-8");
    //include_once("banco.php");

    $host = "localhost:90";
    $user = "ti";
    $password = "zt049br";
    $database = "livros_db";

    // Create connection
    $conn = mysqli_connect($host, $user, $password, $database);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO livros (titulo, autor, publicacao, assunto, recursos, teses, evidencias, desconhecidos, contribuicao, interpretacao, problemas)
    VALUES ('$titulo', '$autor', '$publicacao', '$assunto', '$recursos', '$teses', '$evidencias', '$desconhecidos', '$contribuicao', '$interpretacao', '$problemas')";
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    // Recebendo dados
    $titulo = $_POST['inputTitulo'];
    $autor = $_POST['inputAutor'];
    $publicacao = $_POST['inputPublicacao'];
    $assunto = $_POST['assunto'];
    $recursos = $_POST['inputRecursos'];
    $teses = $_POST['inputTeses'];
    $evidencias = $_POST['inputEvidencias'];
    $desconhecidos = $_POST['inputDesconhecidos']
    $contribuicao = $_POST['inputContribuicao'];
    $interpretacao = $_POST['inputInterpretacao'];
    $problemas = $_POST['inputProblemas'];

    /*
    $dados = "INSERT INTO livros(
        titulo
        autor, 
        publicacao, 
        assunto, 
        recursos, 
        teses, 
        evidencias, 
        desconhecidos, 
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
        '$desconhecidos', 
        '$contribuicao', 
        '$interpretacao', 
        '$problemas',
        NOW()
    )"; 
    $salvar = mysqli_query($conn, $dados) */
    
?>
