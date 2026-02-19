<?php

declare(strict_types=1);

namespace Somisa\Pokemon;

use Illuminate\Support\ServiceProvider;

final class PokemonServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/pokemon.php', 'pokemon');

        $this->app->singleton('pokemon', fn () => new Pokemon(
            baseUrl: config('pokemon.base_url', 'https://pokeapi.co/api/v2'),
        ));
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/pokemon.php' => config_path('pokemon.php'),
        ], 'pokemon-config');
    }
}
