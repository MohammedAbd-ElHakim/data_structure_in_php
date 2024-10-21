<?php
include_once './AutoLoaded.php';

class DeleteNnodesAfterMnodesOfAlinkedList
{
    public static function execute(LinkedList $list, $n, $m)
    {
        #move m nodes and delete n nodes
        if ($m < 1 || $list->head == null) {
            return $list;
        }

        $curr = $list->head;
        $skipNodes = $m;
        $countOfNodesToDelete = $n;
        $prev = null;
        while ($curr != null && $curr->next != null) {
            $curr2 = $curr;
            #start skip m nodes
            $currIndexOfSkip = 1;
            while ($currIndexOfSkip <= $skipNodes && $curr2 != null) {
                $prev = $curr2;
                $curr2 = $curr2->next;
                $currIndexOfSkip++;
            }
            if ($curr2 != null) {
                $curr3 = $curr2;
            }
            if ($curr2 == null) {
                return $list;
            }
            #start delete n nodes
            $currIndexToDeleteNnodes = 1;
            while ($currIndexToDeleteNnodes <= $countOfNodesToDelete && $curr3 != null) {
                $prev->next = $curr3->next;
                $currIndexToDeleteNnodes++;
            }
            $curr2 = $prev;

            $i = 1;
            while ($i <= $m) {
                $curr = $curr->next;
                $i++;
            }
            $display = $curr;
            #display curr
            while ($display != null) {
                // echo "<br>" . $display->data;
                $display = $display->next;
            }

        }

        return $list;
    }
}
?>