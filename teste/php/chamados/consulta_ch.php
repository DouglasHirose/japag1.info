<?php
    include('../connect.php');

        $sql_code = "SELECT * FROM chamado WHERE id = $id_servico";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        
if ($sql_querry->num_rows > 0) {
    // Exibe os dados do cliente
    while ($row = $sql_querry->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nome: " . $row["nome"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        // Adicione outras informações que você queira exibir
    }
} else {
    echo "Nenhum resultado encontrado";
}

    $mysqli->close();
?>