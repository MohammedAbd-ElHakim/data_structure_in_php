<?php
include_once './AutoLoaded.php';

class DeleteAllOccurrencesOfAGivenKeyInALinkedList
{
    public static function deleteOccurranceOfAgivenInlinkedList(LinkedList $list, $k)
    {
        if ($list == null) {
            return $list;
        }

        $curr = $list->head;
        while ($curr != false) {
            $currData = $curr->data;
            if ($currData == $k) {
                $list = DeleteNode::DeleteNode($list, $currData);
            }
            $curr = $curr->next;
        }
        return $list;
    }
}

?>