<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PokeAPI Base URL
    |--------------------------------------------------------------------------
    |
    | The base URL for the PokeAPI. You can override this in your .env file
    | if you need to point to a different instance or use a cached proxy.
    |
    */

    'base_url' => env('POKEAPI_URL', 'https://pokeapi.co/api/v2'),

];
