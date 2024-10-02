<?php
include_once './AutoLoaded.php';

class DeleteDublicateElementFromSortedLinkedList implements DeleteDublicateElementFromSortedLinkedListInterface
{

    public static function deleteDuplicate(LinkedList $list)
    {

        if ($list == null) {
            return $list;
        }

        $duplicateElement = GetDuplicateElementInLinkedList::getDublicate($list);
        while ($duplicateElement != false) {
            $list = DeleteNode::DeleteNode($list, $duplicateElement);
            $duplicateElement = GetDuplicateElementInLinkedList::getDublicate($list);
        }
        return $list;
    }
}

?>