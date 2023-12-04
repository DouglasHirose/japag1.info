<?php
include ('../connect.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];

// Preparação da query usando prepared statements
$sql_code = "INSERT INTO clientes (nome, cpf, email) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($sql_code);

// Verificação de erros na preparação da query
if (!$stmt) {
    die("Falha na preparação da query: " . $mysqli->error);
}

// Vinculação dos parâmetros e execução da query
$stmt->bind_param("sss", $nome, $cpf, $email);
$result = $stmt->execute();

// Verificação do sucesso da execução da query
if ($result) {
    echo "Cliente cadastrado com sucesso!";
    header("Location: adicionarendereco.php");
} else {
    echo "Erro ao cadastrar o cliente: " . $mysqli->error;
}

// Fechamento do statement e conexão
$stmt->close();
$mysqli->close();
?>
