<?php
include_once './AutoLoaded.php';

class RotateLinkedList
{
    public static function rotateLinkedList(LinkedList $list, $k, $size)
    {
        #ربط الزيل بالراس
        $curr = $list->head;
        #الوصول للزيل
        while ($curr->next != null) {
            $curr = $curr->next;
        }
        $tail = $curr;
        #توصيل الزيل بالراس قبل بدا الدوران
        $tail->next = $list->head;

        #الدوره تساوي size+k
        $circle = $k >= $size ? $k % $size : $size - $k;

        //حنحدد هنا العقده الجديده
        $newCurr = $list->head; //10
        for ($i = 0; $i < $size - $circle - 1; $i++) {
            # code...
            // echo "<br>" . $newCurr->data;
            $newCurr = $newCurr->next;
        }

        $list->head = $newCurr->next;
        $newCurr->next = null;
        return $list;

    }
    public static function rotateLinkedList2(LinkedList $list, $k, $size)
    {
        #ربط الزيل بالراس
        $curr = $list->head;
        while ($curr->next != null) {
            # code...
            $curr = $curr->next;
        }

        #ربط لزيل بالراس
        $curr->next = $list->head;

        #حنحدد عدد الدورات
        $ones = ($k > $size) ? $k % $size : $size - $k;

        #حندد الزيل الجديد
        $newTail = $curr;
        for ($i = 0; $i < $size - $ones; $i++) {
            # code...
            $newTail = $newTail->next;
        }

        #حنخلي راس الليست بتساوي الزيل الجديد
        $list->head = $newTail->next;
        $newTail->next = null;
        return $list;
    }
}
?>