<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="./Components/selected-page-area/selected-page-area.css">
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
                    include("./page/pokemon-single-page.php");
                break;
                default:
                    include("./page/home.php");
            }
        ?>
</body>
</html>