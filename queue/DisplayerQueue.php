<?php
include_once 'Autoload.php';

class DisplayerQueue
{

    public static function display(LinkedListQueue $list)
    {
        $curr = $list->head;
        while ($curr != null) {
            echo "<br>" . $curr->data;
            $curr = $curr->next;
        }
    }


}

?>