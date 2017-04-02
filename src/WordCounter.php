<?php
/*
 * (c) Marco Cianci <marco@cianci.com.br>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MarcoCianci\WordCounter;

/**
 * Class WordCounter
 * @package MarcoCianci\WordCounter
 */
class WordCounter
{
    /**
     * @param $array
     * @param int $i
     * @return int
     */
    static private function counter($array, $i = 0){
        foreach($array as $key){
            if(is_array($key)){
                $i += self::counter($key, 1);
            } else {
                $i++;
            }
        }
        return $i;
    }

    /**
     * Returns the total words of a text.
     * @param $text A text
     * @return int
     */
    static public function wordCounter($text)
    {
        $words = str_word_count($text,1);
        return self::counter($words);
    }

    /**
     * Returns an array of the total unique words of a text.
     * @param $text A text
     * @return array Array of unique words
     */
    static public function uniqueWordCounter($text){
        $words = str_word_count($text,1);
        return array_count_values($words);
    }

}