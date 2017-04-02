# recursive-word-counter
Functions in Recursive Word Counter: 

    1. wordCounter: returns the total words of a text.
    2. uniqueWordCounter: returns the total of unique words of a text.

This is a class to study, however everything works!

## Installation

You can add this library as a local, per-project dependency to your project using [Composer](https://getcomposer.org/):

    composer require marcocianci/word-counter
    
If you only need this library during development, for instance to run your project's test suite, then you should add it as a development-time dependency:

    composer require --dev marcocianci/word-counter
    
## Usage

```php
<?php
require __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use MarcoCianci\WordCounter;

$wordCounter = new WordCounter;
$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi cursus varius felis, ut hendrerit magna semper varius. Fusce sed consequat.';
$wordsTotal = $wordCounter->wordCounter($text);
$result = $wordCounter->wordCounter($text).PHP_EOL;
// $result == 20

print_r($wordCounter->uniqueWordCounter($text));
/*
Array
(
    [Lorem] => 1
    [ipsum] => 1
    [dolor] => 1
    [sit] => 1
    [amet] => 1
    [consectetur] => 1
    [adipiscing] => 1
    [elit] => 1
    [Morbi] => 1
    [cursus] => 1
    [varius] => 2
    [felis] => 1
    [ut] => 1
    [hendrerit] => 1
    [magna] => 1
    [semper] => 1
    [Fusce] => 1
    [sed] => 1
    [consequat] => 1
)
*/
```

##Hint
http://php.net/manual/en/function.str-word-count.php \
0 - returns the number of words found
```php
<?php
$result = str_word_count($text,0);
// $result == 20
```
