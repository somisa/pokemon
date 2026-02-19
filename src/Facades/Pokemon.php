<?php

declare(strict_types=1);

namespace Somisa\Pokemon\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Http\Client\Response getPokemon(string $name = 'arbok')
 * @method static \Illuminate\Http\Client\Response getNames(int $limit = 10)
 *
 * @see \Somisa\Pokemon\Pokemon
 */
final class Pokemon extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'pokemon';
    }
}
