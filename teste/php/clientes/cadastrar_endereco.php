<?php
include ('../connect.php');

$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];


// Preparação da query usando prepared statements
$sql_code = "INSERT INTO endereco (cep, logradouro, numero, bairro, cidade, estado, pais) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql_code);

// Verificação de erros na preparação da query
if (!$stmt) {
    die("Falha na preparação da query: " . $mysqli->error);
}

// Vinculação dos parâmetros e execução da query
$stmt->bind_param("sssssss", $cep, $logradouro, $numero, $bairro, $cidade, $estado, $pais);
$result = $stmt->execute();

// Verificação do sucesso da execução da query
if ($result) {
    echo "Cliente cadastrado com sucesso!";
    header("Location: gerenciarclientes.php");
} else {
    echo "Erro ao cadastrar o cliente: " . $mysqli->error;
}

// Fechamento do statement e conexão
$stmt->close();
$mysqli->close();
?>
