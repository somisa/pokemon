<?php

declare(strict_types=1);

use Somisa\Pokemon\Pokemon;

test('pokemon class can be instantiated', function () {
    expect(new Pokemon())->toBeInstanceOf(Pokemon::class);
});

test('pokemon class uses custom base url', function () {
    $pokemon = new Pokemon(baseUrl: 'https://example.com/api');
    expect($pokemon)->toBeInstanceOf(Pokemon::class);
});
