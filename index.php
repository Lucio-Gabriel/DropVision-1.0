<?php

require ('config.php');
require 'dao/CadastroDAOMysql.php';

$cadastroDao = new CadastroDAOMysql($pdo);
$lista = $cadastroDao->findAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/styleTable.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DropVison</title>
</head>
<body>
    
    <nav id="sidebar">
        <div id="sidebar_content">
        <div id="user">
            <img src="src/imagens/usertest.png" id="user_avatar" alt="Avatar">

            <p id="user_infos"> 
                <span class="item-description">
                    User Test
                </span>
                <span class="item-description">
                    Lorem ipsum dolor sit amet.
                </span>
            </p>
        </div>
    

        <ul class="side_items">
            <li class="side-item active">
                <a href="#">
                    <i class="fa-solid fa-inbox"></i>
                    <span class="item-description">
                        Dashboard
                    </span>
                </a>
            </li>

            <li class="side-item">
                <a href="#">
                    <i class="fa-solid fa-user"></i>
                    <span class="item-description">
                        Usuario
                    </span>
                </a>
            </li>
       

        <li class="side-item">
            <a href="#">
                <i class="fa-solid fa-folder-open"></i>
                <span class="item-description">
                    Anotações
                </span>
            </a>
        </li>
    </ul>
    
    <button id="open_btn">
        <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
    </button>
        </div>

        <div id="logout">
            <button id="logout_btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="item-description">
                    Sair
                </span>
            </button>
        </div>
</nav>

<h1>Bem vindo User Test</h1>

    <main class="body2">
        

        <div class="#">

            <table class="table table-dark .table-group-divider">
                <tr>
                    <th>#</th>
                    <th>Nome Da Loja</th>
                    <th>Link da Loja</th>
                    <th>Loja Nichada</th>
                    <th>Opções</th>
                </tr>

            <?php foreach($lista as $dados): ?>

                <tr>
                    <td><?=$dados->getId();?></td>
                    <td><?=$dados->getNomeDaLoja();?></td>
                    <td><?=$dados->getLinkDaLoja();?></td>
                    <td><?=$dados->getLojaNichada();?></td>

                    <td>
                    <a href="#">Editar</a>
                    <a href="#">Excluir</a>
                </td>
                </tr>
                <?php endforeach; ?>

            </table>
    
        </div>

    </main>

    

    <script src="src/javascript/script.js"></script>
</body>
</html>