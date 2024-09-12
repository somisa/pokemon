# Pokemon API
This is my first Laravel package using pokeapi.co

1. **Download** somisa/pokemon repository same place as your Laravel project.
2. **Add** the downloaded repository to composer.json file as new PATH:
```json
   "repositories": [
       {
          "type": "path",
          "url": "../somisa/pokemon"
       }
   ]
```
3. **Run**
```bash
  composer require somisa/pokemon --dev
```

4. **Add** it to the Package Service Providers at app config
```php
   'Somisa\Pokemon\PokemonServiceProvider::class',
```

5. **Use** it in your Laravel project
```php
   Route::get('names', function (Somisa\Pokemon\Pokemon $pokemon) {
      return $pokemon->getNames(100);
   });
   
   Route::get('pokemon', function (Somisa\Pokemon\Pokemon $pokemon) {
      return $pokemon->getPokemon('onix');
   });
```

___
[![Background music](https://img.youtube.com/vi/_OR0BwCXUJA/0.jpg)](https://www.youtube.com/watch?v=_OR0BwCXUJA)