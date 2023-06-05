<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPDEX</title>
</head>
<body>
    <div class="container">
        <form class="search-pokemons" action="?page=home&&action=search" method="POST">
            <input type="text" name="search" placeholder="search">
            <input type="submit" value="Search">
        </form>
    </div>

    <div class="container">
    <?php 
    if($_POST['search'] != null || $_POST['search'] != ""){
        $res = $pokemon->getAllPokemons(0,1010);
        $match = 0;
        $PokemonList = $res->results;
        $regex = '/^('.strtolower($_POST['search']).')\w+/';
        for($i = 0; $i < count($PokemonList);$i++){
            if(preg_match($regex,$PokemonList[$i]->name) || $PokemonList[$i]->name == $_POST['search']){
                $id = $i+1;
                $match++;
                echo "<a href='?page=pokemon-single-page&&pokemon=".$res->results[$i]->name."'>
                <div class='card'>
                    <div class='infoName'>
                        <h1 class='name'>".strtoupper($res->results[$i]->name)."</h1>
                    </div>
                    <img src=".$pokemon->getImageFromPokemon('artwork',$id).">
                </div></a>";
            }
        }
        if($match <= 0) {
            echo "404 POKEMON NOT FOUND";
        }
    } else {
        $res = $pokemon->getAllPokemons(0,1010);
        for($i = 0; $i < count($res->results);$i++){
            $id = $i+1;
            echo "<a href='?page=pokemon-single-page&&pokemon=".$res->results[$i]->name."'>
            <div class='card'>
                <div class='infoName'>
                    <h1 class='name'>".strtoupper($res->results[$i]->name)."</h1>
                </div>
                <img src=".$pokemon->getImageFromPokemon('artwork',$id).">
            </div></a>";
        }
    }
    ?>
    </div>
</body>
</html>