<?php
include_once 'Autoload.php';

class ReverseAStackUsingRecursion
{
    #4321
    #1234
    public static function start(LinkedList $list, LinkedList $result)
    {
        $orginalSize = self::getSize($list);

        $curr = peek::peek($list);
        pop::pop($list);
        self::reverseAndFillAgain($list, new Node($curr), $result, $orginalSize);
    }

    public static function reverseAndFillAgain(LinkedList $list, Node $value, LinkedList $result, $orginalSize)
    {
        if (self::getSize($list) == 0) {
            return $result;
        }

        $size = 0;
        $curr = $list->head;
        while ($curr != null) {
            $size++;
            $curr = $curr->next;
        }
        push::push($result, $value);
        self::start($list, $result);
    }
    public static function getSize(LinkedList $list)
    {
        $size = 0;
        $curr = $list->head;
        while ($curr != null) {
            $size++;
            $curr = $curr->next;
        }
        return $size;
    }


}

?>