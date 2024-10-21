<?php
include_once './AutoLoaded.php';

class FindPairsWithGivenSumInDoublyLinkedList
{
    public static function find(DoublyLinkedList $list, $value)
    {
        if ($list == null) {
            return $list;
        }

        $curr = $list->head;
        $curr1 = $list->head;

        while ($curr != null) {
            $currData = $curr->data;
            while ($curr1 != null) {
                $currData1 = $curr1->data;
                if ($currData + $currData1 == $value) {
                    echo "<br>" . '( ' . $currData . ' , ' . $currData1 . ' )';
                }
                $curr1 = $curr1->next;
            }
            $curr = $curr->next;
            $curr1 = $list->head;
        }
        return $list;
    }
}

?>