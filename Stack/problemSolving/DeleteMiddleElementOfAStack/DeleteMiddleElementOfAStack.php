<?php
include_once 'Autoload.php';

class DeleteMiddleElementOfAStack
{
    public static function deleteMiddle(LinkedList $stack)
    {
        if ($stack == null) {
            return $stack;
        }
        $size = self::getSize($stack);
        $mid = (int) ($size / 2);
        #ملينها الكوي من الاستاك وفضينه الاستاك
        $curr = $stack->head;
        $prev = null;
        if ($size % 2 == 0) {
            $i = 1;
        } else {
            $i = 0;
        }

        echo "<br>size : " . $size;
        echo "<br>mid : " . $mid;

        while ($curr != null) {
            if ($i == $mid && $prev !== null) {
                $prev->next = $curr->next;
            }
            $i++;
            $prev = $curr;
            $curr = $curr->next;
        }

        return $stack;
    }

    public static function getSize($list)
    {
        $count = 0;
        $curr = $list->head;
        while ($curr != null) {
            $count++;
            $curr = $curr->next;
        }
        return $count;
    }
}

?>