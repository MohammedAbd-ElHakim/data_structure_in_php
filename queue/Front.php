<?php
include_once 'Autoload.php';

class Front
{

    #add new node at first stack
    public static function getFront(LinkedListQueue $list)
    {
        if ($list->head == null) {
            return null;
        }

        $front = $list->head->data;
        return new Node($front);

    }

}

?>