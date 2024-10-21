<?php
include_once './AutoLoaded.php';

class FunctionToGetTheIntersSectionPointOfTwoLinkedLists
{
    public static function GetInterSectionNode(LinkedList $list, LinkedList $list2)
    {
        if ($list->head == null || $list2->head == null) {
            return false;
        }
        $curr = $list->head;
        $curr2 = $list2->head;
        while ($curr != null && $curr2 != null) {
            # code...
            while ($curr2 != null) {
                if ($curr == $curr2) {
                    echo "<br>detect Intersection Node : " . $curr->data;
                    return $curr;
                }
                $curr2 = $curr2->next;
            }
            $curr2 = $list2->head;
            $curr = $curr->next;
        }

        return false;
    }
}

?>