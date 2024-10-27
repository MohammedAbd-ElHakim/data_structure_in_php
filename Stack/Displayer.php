<?php
include_once 'Autoload.php';

class Displayer
{

    public static function display(LinkedList $list)
    {
        $curr = $list->head;
        while ($curr != null) {
            echo "<br>" . $curr->data;
            $curr = $curr->next;
        }
    }


}

?>