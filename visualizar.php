<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Images/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <title>Leitura de Textos Acadêmicos</title>
</head>

<body>
<main class="main">
  <!-- Header-->
  <header class="header">
      <h1>Ficha de Leitura para Textos Acadêmicos</h1>
      <h5 class="d-none d-print-block">Visualizando Dados Referente A Livro Ja Salvo.</h5>
  </header>

  
    <?php
      header("Content-type: text/html; charset=utf-8");
      include_once("banco.php");

      // Recebe variavel com ID da pesquisar
      $Id = $_POST['Escolhido'] = ( isset($_POST['Escolhido']) ) ? $_POST['Escolhido'] : null;

      // Conecta e testa conexão
      try {
        
        // Create connection
        $conn = new mysqli($host, $user, $password, $database);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          }
        $sql = "SELECT livroID, titulo, autor, publicacao, assunto, recursos, teses, evidencias, desconhecidos, contribuicao, interpretacao, problemas FROM livros WHERE livroID= '$Id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          $row = $result->fetch_assoc();

          echo <<<EOT
          <form accept-charset='utf-8' name='form_ficha' id='form_ficha' class='ficha'>
          <ol>
            <li>Texto como um todo
  
              <ol type='a'>

              <li>
                <div class='form-group row'>
                  <label for='inputID' class='col-lg-2 col-md-12 col-form-label'>Livro ID</label>
                  <div class='col-lg-10 flex col-md-12'>
                    <textarea class='form-control' name='inputID' id='inputID'> {$row["livroID"]}</textarea>
                  </div>
                </div>
              </li>

                <li>
                  <div class='form-group row'>
                    <label for='inputTitulo' class='col-lg-2 col-md-12 col-form-label'>Titulo</label>
                    <div class='col-lg-10 flex col-md-12'>
                      <textarea class='form-control' name='inputTitulo' id='inputTitulo'> {$row["titulo"]}</textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Autor -->
                <li>
                  <div class="form-group row">
                    <label for="inputAutor" class="col-lg-2 col-md-12 col-form-label">Autor</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputAutor" id="inputAutor" > {$row["autor"]}</textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Publicação -->
                <li>
                  <div class="form-group row">
                    <label for="inputPublicacao" class="col-lg-2 col-md-12 col-form-label">Publicação</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputPublicacao" id="inputPublicacao"> {$row["publicacao"]}</textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Assunto -->
                <li>
                  <div class="form-group row">
                    <label for="inputAssunto" class="col-lg-2 col-md-12 col-form-label">Assunto</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputAssunto" id="inputAssunto"> {$row["assunto"]}</textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Recursos -->
                <li>
                  <div class="form-group row">
                    <label for="inputRecursos" class="col-lg-2 col-md-12 col-form-label">Recursos</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputRecursos" id="inputRecursos"> recursos</textarea>
                    </div>
                  </div>
                </li>
  
              </ol>
            </li>
  
            <!-- Objetivos e estrutura -->
            <li>Objetivos e estrutura
              <ol type="a">
  
                <!-- Teses/Objetivos -->
                <li>
                  <div class="form-group row">
                    <label for="inputTeses" class="col-lg-2 col-md-12 col-form-label">Teses / Objetivos</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputTeses" id="inputTeses"> {$row["teses"]}</textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Evidências -->
                <li>
                  <div class="form-group row">
                    <label for="inputEvidencias" class="col-lg-2 col-md-12 col-form-label">Evidências</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputEvidencias" id="inputEvidencias"> {$row["evidencias"]}</textarea>
                    </div>
                  </div>
                </li>
  
              </ol>
            </li>
  
            <!-- Leitura e Compreensão Textual -->
            <li>Leitura e compreensão textual
              <ol type="a">
  
                <!-- Palavras e conceitos desconhecidos -->
                <li>
                  <div class="form-group row">
                    <label for="inputDesconhecidos" class="col-lg-2 col-md-12 col-form-label">Palavras e conceitos desconhecidos</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputDesconhecidos" id="inputDesconhecidos"> {$row["desconhecidos"]}</textarea>
                    </div>
                  </div>
                </li>
  
              </ol>
            </li>
  
            <!-- Crítica e avaliação do texto -->
            <li>Crítica e avaliação do texto
              <ol type="a">
  
                <!-- Contribuição -->
                <li>
                  <div class="form-group row">
                    <label for="inputContribuicao" class="col-lg-2 col-md-12 col-form-label">Contribuição</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputContribuicao" id="inputContribuicao"> contribuicao</textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Outras interpretações -->
                <li>
                  <div class="form-group row">
                    <label for="inputInterpretacao" class="col-lg-2 col-md-12 col-form-label">Outras interpretações</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputInterpretacao" id="inputInterpretacao"> {$row["interpretacao"]}</textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Problemas e Interpretações -->
                <li>
                  <div class="form-group row">
                    <label for="inputProblemas" class="col-lg-2 col-md-12 col-form-label">Problemas e Limitações</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputProblemas" id="inputProblemas"> {$row["problemas"]}</textarea>
                    </div>
                  </div>
                </li>
  
              </ol>
            </li>
  
          </ol>
          
          EOT;
        } else {
          echo "0 results";
        }

        } catch(PDOException $t) {
          echo $sql . "<br>" . $t->getMessage();
          }

      $conn = null; 
    ?>
    <!-- Botões-->
    <section class="botoes">
      <input type="button" value="HOME" onclick="javascript: location.href='index.html'" class="botao">
      <input type="button" value="IMPRIMIR" onclick="Imprimir()" class="botao">
      <input type='button' value='PESQUISAR' class="botao" onclick="javascript: location.href='pesquisar.php';">
    </section>
    <!-- Footer-->
    <footer class="footer">
      <div>
        <a href="https://github.com/uleandrosi">
          <img src="https://img.icons8.com/fluency/96/000000/github.png" alt="Github">
        </a>
        <a href=mailto:uleandrosp@gmail.com?subject="Contato Ficha Leitura">
          <img src="https://img.icons8.com/fluency/96/000000/apple-mail.png" alt="E-mail">
        </a>
        <p> Desenvolvido por: &copy;uLeandroTI</p>
        <p><a href="https://icons8.com/icon/7rhqrO588QcU/mail">Icon by Icons8</a></p>
      </div>
    </footer>
  </main>
</body>
</html>
