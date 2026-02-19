<?php

declare(strict_types=1);

namespace Somisa\Pokemon;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

final class Pokemon
{
    public function __construct(private readonly string $baseUrl = 'https://pokeapi.co/api/v2') {}

    public function getPokemon(string $name = 'arbok'): Response
    {
        return Http::get("{$this->baseUrl}/pokemon/{$name}");
    }

    public function getNames(int $limit = 10): Response
    {
        return Http::get("{$this->baseUrl}/pokemon?limit={$limit}&offset=0");
    }
}
