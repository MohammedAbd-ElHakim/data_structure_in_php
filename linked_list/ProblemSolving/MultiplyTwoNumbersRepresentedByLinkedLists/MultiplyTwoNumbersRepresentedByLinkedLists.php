<?php
include_once './AutoLoaded.php';

class MultiplyTwoNumbersRepresentedByLinkedLists
{
    public static function multiPly(LinkedList $list, LinkedList $list2)
    {
        if ($list == null) {
            return;
        }

        $curr = $list->head;
        $curr1 = $list2->head;
        $firstNumber = '';
        $secondNumber = '';
        while ($curr != null) {
            $currDigit = (string) $curr->data;
            $firstNumber .= $currDigit;
            $curr = $curr->next;
        }
        echo "<br>firstNumber : " . $firstNumber;
        while ($curr1 != null) {
            $currDigit1 = (string) $curr1->data;
            $secondNumber .= $currDigit1;
            $curr1 = $curr1->next;
        }
        echo "<br>secondNumber : " . $secondNumber;
        $multiPly = (int) $firstNumber * (int) $secondNumber;
        return $multiPly;
    }
}

?>