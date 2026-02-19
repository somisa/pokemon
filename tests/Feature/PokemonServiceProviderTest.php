<?php

declare(strict_types=1);

use Somisa\Pokemon\Pokemon;

test('service provider registers pokemon singleton', function () {
    expect(app('pokemon'))->toBeInstanceOf(Pokemon::class);
});

test('service provider publishes config', function () {
    expect(config('pokemon.base_url'))->toBe('https://pokeapi.co/api/v2');
});

test('pokemon facade resolves correctly', function () {
    expect(app('pokemon'))->toBeInstanceOf(Pokemon::class);
});
