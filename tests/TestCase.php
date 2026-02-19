<?php

declare(strict_types=1);

namespace Somisa\Pokemon\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Somisa\Pokemon\PokemonServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            PokemonServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'Pokemon' => \Somisa\Pokemon\Facades\Pokemon::class,
        ];
    }
}
