# recursive-word-counter
This component returns the total words of a text.

PHP: Recursive Word Counter | Contador de Palavras Recursivo

## Installation

You can add this library as a local, per-project dependency to your project using [Composer](https://getcomposer.org/):

    composer require marcocianci/word-counter
    
If you only need this library during development, for instance to run your project's test suite, then you should add it as a development-time dependency:

    composer require --dev marcocianci/word-counter
    
## Usage

```php
<?php
use MarcoCianci\WordCounter;

$wordCounter = new WordCounter;
$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi cursus varius felis, ut hendrerit magna semper varius. Fusce sed consequat.';
$wordsTotal = $wordCounter->wordCounter($text);


```