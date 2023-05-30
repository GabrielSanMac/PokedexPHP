<?php
$res = $pokemon->getPokemonByName($_GET['pokemon']);
$name = $res->name;
$id = $res->id;
$height = $res->height;
$weight = $res->weight;
$types = $res->types;

echo $name;
echo $height;
echo $weight;
for($i = 0; $i<count($types);$i++){
    echo $types[$i]->type->name;
}
echo "<img src=".$pokemon->getImageFromPokemon('artwork',$id).">";

?>