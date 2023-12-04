<?php

include('connect.php');

// Query para contar a quantidade de chamados em cada estado
$sql_code = "SELECT status, COUNT(*) as quantidade FROM chamado GROUP BY status";
$sql_querry = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

$query = "SELECT 
            SUM(CASE WHEN status = 'Aberto' THEN 1 ELSE 0 END) AS abertos,
            SUM(CASE WHEN status = 'Em andamento' THEN 1 ELSE 0 END) AS em_andamento,
            SUM(CASE WHEN status = 'Concluído' THEN 1 ELSE 0 END) AS concluidos
          FROM chamado";

$sql_querry = $mysqli->query($query);

if ($sql_querry->num_rows > 0) {
    // Exibir os resultados em uma tabela HTML
    echo '<table border="1" class="cont_chamados">
            <tr>
            <th>Abertos</th>
            <th>Em Andamento</th>
            <th>Concluídos</th>
            </tr>';
    
    while($row = $sql_querry->fetch_assoc()) {
        echo '<tr>
                <td>' . $row["abertos"] . '</td>
                <td>' . $row["em_andamento"] . '</td>
                <td>' . $row["concluidos"] . '</td>
              </tr>';
    }
    
    echo '</table>';
} else {
    echo 'Nenhum resultado encontrado';
}

$mysqli->close();
?>