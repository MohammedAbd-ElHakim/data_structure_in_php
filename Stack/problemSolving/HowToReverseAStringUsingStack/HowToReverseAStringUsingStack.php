<?php
include_once 'Autoload.php';

class HowToReverseAStringUsingStack
{
    public static function reverse(string $str, LinkedList $list)
    {
        for ($i = 0; $i <= strlen($str) - 1; $i++) {
            Push::push($list, new Node($str[$i]));
        }
        echo "<br>after reverse : ";
        Displayer::display($list);
        return $list;
    }
}

?>