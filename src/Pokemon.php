<?php
namespace Somisa\Pokemon;
use Illuminate\Support\Facades\Http;

class Pokemon {

    public static function default(?string $name='unknown') {
        return $name . "!";
    }
    public function getPokemon(?string $name='arbok') {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/${name}");
        return $response;
    }

    public function getNames(?int $limit = 10) {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon?limit=${limit}&offset=0");
        return $response;
    }
}
