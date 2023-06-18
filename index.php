<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="./Components/selected-page-area/selected-page-area.css">
    <link rel="stylesheet" href="./page/pokemon-single-page/pokemon-single-page.css">
    <link rel="stylesheet" href="./Components/pokemon-card/pokemon-card.css">
    <link rel="shortcut icon" href="./images/favicon.png">
    <title>PHPdex</title>
</head>
<body>
    <header>
        <h1>Pokedex</h1>
        <ul>
            <li><a href="?page=home">Home</a></li>
        </ul>
    </header>
        <?php

            require_once("./Config/Pokemon.php");
            $pokemon = new Pokemon();

            switch($_REQUEST['page']){
                case 'pokemon-single-page':
                    include("./page/pokemon-single-page/pokemon-single-page.php");
                break;
                default:
                    include("./page/home/home.php");
            }
        ?>
</body>
</html>