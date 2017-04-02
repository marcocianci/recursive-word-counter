<?php
/**
 * (c) Marco Cianci <marco@cianci.com.br>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * http://php.net/manual/en/language.namespaces.rationale.php
 */
namespace MarcoCianci;

/**
 * Class WordCounter
 * @package MarcoCianci
 */
class WordCounter
{
    /**
     * Recursive counter
     * @param $array
     * @param int $i
     * @return int
     * @Hint http://php.net/manual/en/function.count.php
     * count($array, COUNT_RECURSIVE), could help you ?
     */
    static private function counter($array, $i = 0)
    {
        foreach ($array as $key) {
            if (is_array($key)) {
                $i += self::counter($key, 1);
            } else {
                $i++;
            }
        }
        return $i;
    }

    /**
     * Returns the total words of a text.
     * @param $string A text
     * @return int
     */
    static public function wordCounter($string)
    {
        /**
         * @param $format 1 - returns an array containing all the words found inside the string
         * @link http://php.net/manual/en/function.str-word-count.php
         */
        $words = str_word_count($string,$format = 1);
        return self::counter($words);
    }

    /**
     * Returns an array of the total unique words of a text.
     * @param $text A text
     * @return array Array associative of unique words
     */
    static public function uniqueWordCounter($text)
    {
        $words = str_word_count($text,1);
        /**
         * Counts all the values of an array
         * @link http://php.net/manual/en/function.array-count-values.php
         */
        return array_count_values($words);
    }

}