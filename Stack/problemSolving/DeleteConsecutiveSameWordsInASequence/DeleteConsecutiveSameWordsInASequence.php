<?php
include_once 'Autoload.php';

class DeleteConsecutiveSameWordsInASequence
{
    public static function startDelete(string $str, LinkedList $result)
    {
        if ($str == null) {
            return;
        }
        #"ab aa aa bcd ab"
        $words = explode(" ", $str);
        echo "<pre>";
        print_r($words);
        echo "</pre>";
        foreach ($words as $word) {
            $currWord = $word;
            $prevWordInStack = peek::peek($result);
            if ($currWord == $prevWordInStack) {
                pop::pop($result);
            } else {
                push::push($result, new Node($currWord));
            }
        }
    }
}

?>