<?php
include_once './AutoLoaded.php';

class DeleteANodeFromLinkedListWithoutHeadPointer
{
    public static function delete($pos)
    {
        if ($pos == null) {
            return;
        }

        if ($pos->next == null) {
            echo "This is last node, require head, can't be null";
            return;
        }

        $pos->data = $pos->next->data;
        $pos->next = $pos->next->next; // تحديث الرابط

        return $pos;
    }
}

?>