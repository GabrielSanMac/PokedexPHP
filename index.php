<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHPdex</title>
</head>
<body>
    <header>
        <h1>Pokedex</h1>
        <ul>
            <li><a href="?page=home">Home</a></li>
        </ul>
    </header>
    <div class="container">
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
        
    </div>
    <footer>
        <span>Made by <a href="https://github.com/GabrielSanMac">GabrielSanMac</a> Project</span>
    </footer>
</body>
</html>