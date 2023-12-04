<?php
include ('../connect.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// Preparação da query usando prepared statements
$sql_code = "INSERT INTO chamado (nome, cpf, assunto, mensagem) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql_code);

// Verificação de erros na preparação da query
if (!$stmt) {
    die("Falha na preparação da query: " . $mysqli->error);
}

// Vinculação dos parâmetros e execução da query
$stmt->bind_param("ssss", $nome, $cpf, $assunto, $mensagem);
$result = $stmt->execute();

// Verificação do sucesso da execução da query
if ($result) {
    echo "Chamado cadastrado com sucesso!";
    header("Location: gerenciarchamados.php");
} else {
    echo "Erro ao cadastrar o chamado: " . $mysqli->error;
}

// Fechamento do statement e conexão
$stmt->close();
$mysqli->close();
?>
