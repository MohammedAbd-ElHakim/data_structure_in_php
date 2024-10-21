<?php
include_once './AutoLoaded.php';

class RemoveEveryKthNodeOfTheLinkedList
{
    public static function removeEveryKthNodeOfLinkedList(LinkedList $list, $k)
    {

        $size = 0;
        $curr2 = $list->head;
        while ($curr2 != null) {
            $curr2 = $curr2->next;
            $size++;
        }

        echo "<br> size : " . $size;
        if ($list == null || $k < 1 || $k > $size) {
            return $list;
        }

        $curr = $list->head;
        $index = 1;
        while ($curr != null) {
            if ($index == $k) {
                #delete curr node
                DeleteNode::DeleteNode($list, $curr->data);
                $index = 1;
                $curr = $curr->next;
                continue;
            }
            $curr = $curr->next;
            $index++;
        }

        return $list;
    }
}

?>