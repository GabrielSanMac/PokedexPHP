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

        public function getAllPokemons(){
            $this->url = "https://pokeapi.co/api/v2/pokemon/";
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

    }

?>