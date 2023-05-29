<?php 

    class Pokemon {

        private $url = "";

        public function getPokemonByName($name){
            $this->url = "https://pokeapi.co/api/v2/pokemon/$name";
            $response = file_get_contents($this->url);
            if($response !== false){
                $json = json_decode($response);
                if($json != null){
                    return $json;
                } else {
                    echo "Erro ao extrair JSON";
                }
            } else {
                return false;
            }
        }

        public function getAllPokemons($start,$limit){
            $this->url = "https://pokeapi.co/api/v2/pokemon/?limit=$limit&offset=$start.";
            $response = file_get_contents($this->url);
            if($response !== false){
                $json = json_decode($response);
                if($json != null){
                    return $json;
                } else {
                    echo "Erro ao extrair o JSON";
                }
            } else {
                return false;
            }
        }

        public function getImageFromPokemon($position,$id){
            switch($position){
                case 'front':
                    return "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/$id.png";
                break;
                case 'back':
                    return "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/$id.png";
                break;
                default:
                    echo "Invalid Position";
            }
        }

    }

?>