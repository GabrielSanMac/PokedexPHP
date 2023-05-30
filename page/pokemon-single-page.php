<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 

    $res = $pokemon->getPokemonByName($_GET['pokemon']);
    $name = $res->name;
    $id = $res->id;
    $types = $res->types;
    $classType = $res->types[0]->type->name;
    $hp = $res->stats[0]->base_stat;
    $attack = $res->stats[1]->base_stat;
    $defense = $res->stats[2]->base_stat;
    $sattack = $res->stats[3]->base_stat;
    $sdefense = $res->stats[4]->base_stat;
    $speed = $res->stats[5]->base_stat;

    echo "<div class='box-pokemon'>
            <div class='left-area'>
                <img class='$classType' src='".$pokemon->getImageFromPokemon('artwork',$id)."'>
                <h1 class='$classType'>".ucfirst($name)."</h1>
                <div class='type-area'>
                    ";?><?php
                        for($i = 0; $i < count($types);$i++){
                            echo "<span class='".$types[$i]->type->name."'>".ucfirst($types[$i]->type->name)."</span>";
                        }
                    echo "
                </div>
            </div>
            <div class='right-area'>
                <div class='stats-area'>
                    <ul>
                        <li class='$classType'><span>HP </span><span>$hp</span></li>
                        <li class='$classType'><span>ATTACK </span><span>$attack</span></li>
                        <li class='$classType'><span>DEFENSE </span> <span>$defense</span></li>
                        <li class='$classType'><span>SPECIAL ATTACK </span> <span>$sattack</span></li>
                        <li class='$classType'><span>SPECIAL DEFENSE </span> <span>$sdefense</span></li>
                        <li class='$classType'><span>SPEED </span> <span>$speed</span></li>
                    </ul>
                </div>
            </div>
        </div>"

    ?>
</body>
</html>