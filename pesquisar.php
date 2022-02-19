<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Images/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <title>Pesquisar Livros</title>
</head>

<body>
<main class="main">
  <!-- Header-->
  <header class="header">
      <h1>Ficha de Leitura para Textos Acadêmicos</h1>
      <h5 class="d-none d-print-block">Lista de livros já salvos.</h5>
  </header>

  <section class="table">
    <?php
      //Cabecalho declaracoes
      header("Content-type: text/html; charset=utf-8");
      include_once("banco.php");

      // Create connection
      $conn = new mysqli($host, $user, $password, $database);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      // SELECT dos dados
      $sql = "SELECT livroID, titulo, autor, publicacao, assunto FROM livros";
      $result = $conn->query($sql);
      // IF tiver dados recuperados
      if ($result->num_rows > 0) {
    ?>
        <form accept-charset="utf-8" name="form_pesquisar" id="form_pesquisar" action="visualizar.php" method="POST">
    <?php
        $retorno_banco= "<table> <tr> <th> </th> <th>ID</th> <th>Titulo</th> <th>Autor</th> <th>Publicacao</th> <th>Assunto</th></tr>";
        // output data of each row
      
        while($row = $result->fetch_assoc()) {
          $retorno_banco .= '<tr>';
          $retorno_banco .= '<td> <input type="radio" value='.$row["livroID"].' name="Escolhido" id='.$row["livroID"].' checked> </td> <td>'.$row["livroID"].'</td> <td>'.$row["titulo"].'</td> <td>'.$row["autor"].'</td> <td>'.$row["publicacao"].'</td> <td>'.$row["assunto"].'</td>';
          $retorno_banco .= '</tr>';
        }
        //echo "</table>";
        $retorno_banco .= "</table>";
        echo "$retorno_banco";

      } else {
        echo "0 results";
      }
      $conn->close();
    ?>

  </section>

    <!-- Botões-->
    <section class="botoes">
      <input type="button" value="HOME" onclick="javascript: location.href='index.html'" class="botao">
      <input type="button" value="IMPRIMIR" onclick="Imprimir()" class="botao">
      <input type="button" value="VISUALIZAR" onclick="javascript: location.href='visualizar.php';" class="botao">
      <input type="submit" value="VISUALIZAR" class="botao">
    </section>


      </form>

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

