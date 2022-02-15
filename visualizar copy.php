<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <title>Leitura de Textos Acadêmicos</title>
</head>

<body>
<main class="main">
  <!-- Header-->
  <header class="header">
      <h1>Ficha de Leitura para Textos Acadêmicos</h1>
      <h5 class="d-none d-print-block">Use o formulário para guardar tudo de mais importante que conseguiu colher da leitura.</h5>
  </header>

  
    <?php
      header("Content-type: text/html; charset=utf-8");
      include_once("banco.php");

      // Conecta e testa conexão
      try {
        $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT livroID, titulo, autor, publicacao, assunto, recursos, teses, evidencias, desconhecidos, contribuicao, interpretacao, problemas FROM livros ";
            
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          $row = $result->fetch_assoc()
          echo <<<EOT <form accept-charset='utf-8' name='form_ficha' id='form_ficha' class='ficha'>
          <ol>
            <li>Texto como um todo
  
              <ol type='a'>

              <li>
                <div class='form-group row'>
                  <label for='inputID' class='col-lg-2 col-md-12 col-form-label'>Livro ID</label>
                  <div class='col-lg-10 flex col-md-12'>
                    <textarea class='form-control' name='inputID' id='inputID'> .$row["livroID"]</textarea>
                  </div>
                </div>
              </li>

                <li>
                  <div class='form-group row'>
                    <label for='inputTitulo' class='col-lg-2 col-md-12 col-form-label'>Titulo</label>
                    <div class='col-lg-10 flex col-md-12'>
                      <textarea class='form-control' name='inputTitulo' id='inputTitulo'> .$row["titulo"]</textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Autor -->
                <li>
                  <div class="form-group row">
                    <label for="inputAutor" class="col-lg-2 col-md-12 col-form-label">Autor</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputAutor" id="inputAutor" rows="2" placeholder="Nome e breves informações sobre quem escreveu o texto. Ex: Otto Peters, professor alemão especialista em ensino a distância." style="height: 50px;"></textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Publicação -->
                <li>
                  <div class="form-group row">
                    <label for="inputPublicacao" class="col-lg-2 col-md-12 col-form-label">Publicação</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputPublicacao" id="inputPublicacao" rows="2" placeholder="Informações contextuais do material. Ex: artigo publicado na revista X, livro publicado pela editora Y no ano 2000." style="height: 50px;"></textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Assunto -->
                <li>
                  <div class="form-group row">
                    <label for="inputAssunto" class="col-lg-2 col-md-12 col-form-label">Assunto</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputAssunto" id="inputAssunto" rows="2" placeholder="O tema principal do texto. Geralmente está no resumo, no título ou nos primeiros parágrafos. Ex: teoria cognitiva da aprendizagem multimídia." style="height: 50px;"></textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Recursos -->
                <li>
                  <div class="form-group row">
                    <label for="inputRecursos" class="col-lg-2 col-md-12 col-form-label">Recursos</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputRecursos" id="inputRecursos" rows="2" placeholder="Fontes de informações apresentadas pelo autor. Ex: livros e autores, documentos, experimentos, entrevistas." style="height: 50px;"></textarea>
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
                      <textarea class="form-control" name="inputTeses" id="inputTeses" rows="2" placeholder="A principal ideia apresentada/defendida pelo autor. Ex: mostrar que a educação aberta facilita a aprendizagem autônoma." style="height: 50px;"></textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Evidências -->
                <li>
                  <div class="form-group row">
                    <label for="inputEvidencias" class="col-lg-2 col-md-12 col-form-label">Evidências</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputEvidencias" id="inputEvidencias" rows="2" placeholder="Como o autor chegou a essa ideia ou conclusão. Ex: dados estatísticos provenientes do Censo do IBGE." style="height: 50px;"></textarea>
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
                      <textarea class="form-control" name="inputDesconhecidos" id="inputDesconhecidos" rows="2" placeholder="Anote para pesquisa posterior palavras ou conceitos que você desconhece. Ex: memória de trabalho e memória sensorial." style="height: 50px;"></textarea>
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
                      <textarea class="form-control" name="inputContribuicao" id="inputContribuicao" rows="2" placeholder="Relações com seu contexto acadêmico/profissional. Ex: conhecer a teoria de Piaget ajuda a compreender os estágios de desenvolvimento das crianças com que trabalho." style="height: 50px;"></textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Outras interpretações -->
                <li>
                  <div class="form-group row">
                    <label for="inputInterpretacao" class="col-lg-2 col-md-12 col-form-label">Outras interpretações</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputInterpretacao" id="inputInterpretacao" rows="2" placeholder="Relações com outras ideias, autores e conhecimentos prévios. Ex: Piaget se encaixa no construtivismo; Vygotsky, por sua vez, é socioconstrutivista porque dá mais importância às interações." style="height: 50px;"></textarea>
                    </div>
                  </div>
                </li>
  
                <!-- Problemas e Interpretações -->
                <li>
                  <div class="form-group row">
                    <label for="inputProblemas" class="col-lg-2 col-md-12 col-form-label">Problemas e Limitações</label>
                    <div class="col-lg-10 flex col-md-12">
                      <textarea class="form-control" name="inputProblemas" id="inputProblemas" rows="2" placeholder="Ressalvas (justificadas) às ideias apresentadas no texto. Ex: o estudo é interessante, mas se restringe a populações urbanas, ignorando o contexto rural." style="height: 50px;"></textarea>
                    </div>
                  </div>
                </li>
  
              </ol>
            </li>
  
          </ol>
          
          
          EOT;


        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
        } catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
          }

      $conn = null; 
    ?>

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
