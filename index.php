<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex PHP</title>
</head>
<body>
    <?php

        require_once("./Config/Pokemon.php");
        $pokemon = new Pokemon();

        switch($_REQUEST['page']){
            case 'home':
                include("./page/home.php");
            break;
            case 'pokemon-single-page':
                include("./page/pokemon.php");
            break;
            default:
                echo ":> That page don't exists.";
        }


?>
</body>
</html>