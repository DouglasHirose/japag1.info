<?php

include('../connect.php');

$sql_code = "SELECT * FROM users";
$sql_querry = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

if ($sql_querry->num_rows > 0) {
    // Exibindo os resultados em uma tabela HTML
    echo '<table border="1" class="tabela_chamados">
    <tr>
    <th>Nome</th>
    <th>CPF/CNPJ</th>
    <th>Mais Informações</th>
    </tr>';

    while ($row = $sql_querry->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='nome'>" . $row["nome"] . "</td>";
        echo "<td class='cpf'>" . $row["cpf"] . "</td>";
        echo '<td class="mais"><form method="POST" action="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=japag1_info&table=users">
        #<input type="hidden" name="id" value='. $row["id"] .'>
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