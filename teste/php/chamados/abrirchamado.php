<?php
    include('../notoday.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<!--metas-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="author" content="Douglas K. Hirose">
<title>JapaG1.Info - Home</title>
<link rel="stylesheet" type="text/css" href="../../css/home.css">
<link rel="stylesheet" type="text/css" href="../../css/general.css">
<link rel="stylesheet" type="text/css" href="../../css/graphics.css">
<link rel="stylesheet" type="text/css" href="../../css/forms.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers|Open+Sans:300,400&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/c18bac473a.js"></script>
</head>
<!--inicio-->
<body>
    <header>
        <div class="logo">
            <a href="../start.php">
                <img src="../../archives/img/JapaG1.jpg" alt="Logo da Sua Empresa">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="../start.php">Início</a></li>
                <li><a href="gerenciarchamados.php">Chamados</a></li>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-left">
        <div class="container-left">
            <ul class="vertical-menu">
                <li class="menu-heading">Chamados</li>
                <ul class="sub-menu">
                    <li><a href="abrirchamado.php">Abrir Chamado</a></li>
                    <li><a href="gerenciarchamados.php">Gerenciar Chamados</a></li>
                </ul>
                <li class="menu-heading">Pagamentos</li>
                <ul class="sub-menu">
                    <li><a href="#">Gerenciar Pagamentos</a></li>
                </ul>
                <li class="menu-heading">Clientes</li>
                <ul class="sub-menu">
                    <li><a href="../clientes/adicionarcliente.php">Cadastrar Clientes</a></li>
                    <li><a href="../clientes/gerenciarclientes.php">Gerenciar Clientes</a></li>
                </ul>
                <li class="menu-heading">Relatórios</li>
                <ul class="sub-menu">
                    <li><a href="#">Atendimentos</a></li>
                    <li><a href="#">Faturamento</a></li>
                    <li><a href="../funcionarios/gerenciarfunc.php">Funcionários</a></li>
                </ul>
            </ul>
        </div>
    </div>
    
    <div class="main-content">
        <h2>ABRIR CHAMADO</h2>
        <div class="forms">
            <form action="cadastrar_chamado.php" method="POST">
                <label for="nome">Nome do Cliente:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">CPF/CNPJ:</label>
                <input type="number" id="cpf" name="cpf" required>

                <label for="assunto">Assunto:</label>
                <input type="text" id="assunto" name="assunto" required>

                <label for="mensagem">Descrição:</label>
                <textarea id="mensagem" name="mensagem" required></textarea>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>    
            
</body>

<footer>
    <p>JapaG1.Informática - 2023.</p>
</footer>
</html>