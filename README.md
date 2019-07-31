# ChuckNorrisJokes
Package that can return Chuck Norris jokes from a list. Purely written to learn composer and packagist.

## Installation

Require the package using composer:

```bash
composer require mcbarnard/chuck-norris-jokes
```

## Usage

```php
use Mcbarnard\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENCE.md)
