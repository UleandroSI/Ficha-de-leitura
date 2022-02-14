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

//$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
$sql = "SELECT livroID, titulo FROM livros ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["livroID"]."</td><td>".$row["titulo"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?> 