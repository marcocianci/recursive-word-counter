<?php

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use MarcoCianci\WordCounter;

$wordCounter = new WordCounter;
$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi cursus varius felis, ut hendrerit magna semper varius. Fusce sed consequat.';
$wordsTotal = $wordCounter->wordCounter($text);