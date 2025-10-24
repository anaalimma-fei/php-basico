<!-- Passar id via URL -->
<!-- http://localhost/php-basicos/12_atualizar.php?id=1-->

<?php
//Conecta ao banco de dados 
$servername = "localhost"; 
$username = "root";
$password = "Senai@118";
$dbname = "exercicio";

$conn = new mysqli($servername, $username, $password, $dbname);

//Verifica a conexão
if ($conn->connect_error){
    die ("falha a conexão: " . $conn->connect_error);
}

//Inicializa a variavel $cliente com null 
$cliente = null;

//Verificase um ID foi passado via URL para edição
if (isset ($_GET['id'])){
    $id = $_GET['id'];
    $sql
}
?>


