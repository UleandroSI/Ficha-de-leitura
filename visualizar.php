<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <title>Modelo</title>
</head>

<body>
<main class="main">
  <!-- Header-->
  <header class="header">
      <h1>Ficha de Leitura para Textos Acadêmicos</h1>
      <h5 class="d-none d-print-block">Use o formulário para guardar tudo de mais importante que conseguiu colher da leitura.</h5>
  </header>

  
    <?php
      //Cabecalho declaracoes
      header("Content-type: text/html; charset=utf-8");
      //header("Location: index.html");
      include_once("banco.php");

      // Create connection
      $conn = new mysqli($host, $user, $password, $database);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      //$sql = "SELECT livroID, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
      $sql = "SELECT livroID, titulo FROM livros ";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["livroID"]."</td><td>".$row["titulo"]."</td></tr>";
          //echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
      $conn->close();
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
