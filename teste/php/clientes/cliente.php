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

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers|Open+Sans:300,400&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/c18bac473a.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <li><a href="../chamados/gerenciarchamados.php">Chamados</a></li>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-left">
        <div class="container-left">
            <ul class="vertical-menu">
                <li class="menu-heading">Chamados</li>
                <ul class="sub-menu">
                    <li><a href="../chamados/abrirchamado.php">Abrir Chamado</a></li>
                    <li><a href="../chamados/gerenciarchamados.php">Gerenciar Chamados</a></li>
                </ul>
                <li class="menu-heading">Pagamentos</li>
                <ul class="sub-menu">
                    <li><a href="#">Gerenciar Pagamentos</a></li>
                </ul>
                <li class="menu-heading">Clientes</li>
                <ul class="sub-menu">
                    <li><a href="adicionarcliente.php">Cadastrar Clientes</a></li>
                    <li><a href="gerenciarclientes.php">Gerenciar Clientes</a></li>
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
        <div class="container">
            
        </div>
    </div>
</body>

<footer>
    <p>JapaG1.Informática - 2023.</p>
</footer>
</html>