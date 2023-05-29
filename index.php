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
        <h1>PHPdex</h1>
        <ul>
            <li><a href="?page=home">Home</a></li>
        </ul>
    </header>
    <div class="container">
        <?php

            require_once("./Config/Pokemon.php");
            $pokemon = new Pokemon();

            switch($_REQUEST['page']){
                case 'home':
                    $res = $pokemon->getAllPokemons(0,20);
                    for($i = 0; $i < count($res->results);$i++){
                        $id = $i+1;
                        echo "<div class='card'>
                            <h1 class='name'>".strtoupper($res->results[$i]->name)."</h1>
                            <img src=".$pokemon->getImageFromPokemon('front',$id).">
                        </div>";
                    }
                break;
                case 'pokemon-single-page':
                    include("./page/pokemon.php");
                break;
                default:
                    echo "404 page not found";
            }


        ?>
    </div>
    <footer>
        <p>Creditos a GabrielSanMac</p>
    </footer>
</body>
</html>