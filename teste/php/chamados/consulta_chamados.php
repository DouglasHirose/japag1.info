<?php

include('../connect.php');

$sql_code = "SELECT * FROM chamado";
$sql_querry = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

if ($sql_querry->num_rows > 0) {
    // Exibindo os resultados em uma tabela HTML
    echo '<table border="1" class="tabela_chamados">
    <tr>
    <th>ID</th>
    <th>Status</th>
    <th>Mais Informações</th>
    </tr>';

    while ($row = $sql_querry->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='id'>" . $row["id_servico"] . "</td>";
        echo "<td class='status'>" . $row["status"] . "</td>";
        echo '<td class="mais"><form method="POST" action="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=japag1_info&table=chamado">
        #<input type="hidden" name="id" value='. $row["id_servico"] .'>
        <button>Editar</button>
    </form></td>';
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$mysqli->close();
?>