<?php
include_once './AutoLoaded.php';

class IntersectionOfTwoSortedLinkedLists
{

    public static function getInterSectionNode(LinkedList $list, LinkedList $list1)
    {
        if ($list == null || $list1 == null) {
            return false;
        }

        $curr1 = $list1->head;
        $curr = $list->head;
        $intersectionNodes = null;
        while ($curr != null) {
            $curr1 = $list1->head;
            while ($curr1 != null) {
                # code...
                if ($curr->data == $curr1->data) {
                    $newNode = new Node($curr1->data);
                    if ($intersectionNodes == null) {
                        $intersectionNodes = $newNode;
                    } elseif ($intersectionNodes !== null) {
                        $c = $intersectionNodes;
                        while ($c->next != null) {
                            # code...
                            $c = $c->next;
                        }
                        $c->next = $newNode;

                    }
                }
                $curr1 = $curr1->next;
            }
            $curr = $curr->next;
            if ($curr !== null) {
            }
        }
        return $intersectionNodes;
    }
}

?>