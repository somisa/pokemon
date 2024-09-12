<?php
namespace Somisa\Pokemon;
use Illuminate\Support\ServiceProvider;

class PokemonServiceProvider extends ServiceProvider
{
    public function register(){
        $this->app->singleton(Pokemon::class, function () {
            return new Pokemon();
        });
    }

    public function boot(){
        /*$this->publishes([
            __DIR__.'/../config/pokemon.php' => config_path('pokemon.php'),
        ]);*/
    }
}