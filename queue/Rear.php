<?php
include_once 'Autoload.php';

class Rear
{
    #return the top element
    public static function getRear(LinkedListQueue $list)
    {
        #add new Node At Rear
        if ($list->head == null) {
            return null;
        }
        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
        }
        return $curr;
    }
}
?>