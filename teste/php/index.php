<?php
    include ('connect.php');

    if(isset($_POST['username']) || isset($_POST['senha'])) {
        if (strlen($_POST['username']) == 0) {
            echo "Preencha seu usuario";
        }else if (strlen($_POST["senha"]) == 0) {
            echo "Preencha sua senha";
        }else{
            $username = $mysqli->real_escape_string($_POST["username"]);
            $senha = $mysqli->real_escape_string($_POST["senha"]);

            $sql_code = "SELECT * FROM users WHERE username = '$username' AND senha = '$senha'";
            $sql_querry = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
       
            $quant = $sql_querry->num_rows;

            if ($quant == 1) {
            $usuario = $sql_querry->fetch_assoc();

            if (!isset($_SESSION)){
                session_start();
            }

            $_SESSION["id"] = $usuario["id"];

            header("Location: start.php");
        } else {
            echo "Usuário não encontrado!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
<!--metas-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="author" content="Douglas K. Hirose">
<title>JapaG1.Info - Login</title>
<link rel="stylesheet" type="text/css" href="../css/general.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<script src="https://kit.fontawesome.com/c18bac473a.js"></script>
</head>
<!--inicio-->
<body>
    <div class="login-container">
        <h2>JapaG1.Info</h2><br>
        <form action="" method="POST">
            <label>Login:</label>
            <input type="text" name="username"><br><br>

            <label>Senha:</label>
            <input type="password" name="senha"><br><br>

            <button type="submit">Entrar</button>
        </form>
    </div>

</body>

<footer>
    <p>JapaG1.Informática - 2023.</p>
</footer>
</html>