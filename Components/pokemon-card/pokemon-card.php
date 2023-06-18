<?php

echo "<a href='?page=pokemon-single-page&&pokemon=".$res->results[$i]->name."'>
<div class='card'>
    <div class='infoName'>
        <h1 class='name'>".strtoupper($res->results[$i]->name)."</h1>
    </div>
    <img src=".$pokemon->getImageFromPokemon('artwork',$id).">
</div></a>";

?>