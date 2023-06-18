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
            if(preg_match($regex,$PokemonList[$i]->name) || $PokemonList[$i]->name == strtolower($_POST['search'])){
                $id = $i+1;
                $match++;
                include("./Components/pokemon-card/pokemon-card.php");
            }
        }
        if($match <= 0) {
            echo "404 POKEMON NOT FOUND";
        }
    } else {
        $page_num = $_GET['page_num'];
        if($page_num > 41){
            echo "Page Not Found";
        } else {
            $limit = 24;
            $offset = $limit*$page_num;
            $id = $offset;
            $res = $pokemon->getAllPokemons($offset,$limit);
            for($i = 0; $i < count($res->results);$i++){
                $id++;
                include("./Components/pokemon-card/pokemon-card.php");
            } ?></div><?php
            include('./Components/selected-page-area/selected-page-area.php');
            }
        }
    ?>
    </div>
</body>
</html>