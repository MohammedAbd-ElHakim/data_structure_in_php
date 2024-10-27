<?php
include_once 'Autoload.php';

class ImplementTwoStacksInAnArray
{
    public static function createTwoStacks(array $arr, LinkedList $stack, LinkedList $stack1)
    {
        $size = count($arr);
        $mid = ($size % 2 == 0) ? $size / 2 : $size / 2 + 1;
        $mid = (int) $mid;
        echo "<br>size : " . $size;
        echo "<br>mid : " . $mid;

        for ($i = 0; $i < $mid; $i++) {
            $currData = $arr[$i];
            push::push($stack, new Node($currData));
        }

        for ($i = $mid; $i < $size; $i++) {
            $currData = $arr[$i];
            push::push($stack1, new Node($currData));
        }
    }
}

?>