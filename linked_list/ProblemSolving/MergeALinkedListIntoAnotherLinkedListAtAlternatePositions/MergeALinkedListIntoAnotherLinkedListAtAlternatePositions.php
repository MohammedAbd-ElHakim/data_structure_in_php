<?php
include_once './AutoLoaded.php';

class MergeALinkedListIntoAnotherLinkedListAtAlternatePositions
{

    public static function mergeDifrSize(LinkedList $firstList, LinkedList $secondList)
    {

        $currFirstList = $firstList->head;
        $currSecondList = $secondList->head;
        # code...
        while ($currFirstList != null && $currSecondList != null) {
            # code...

            $temp1 = $currFirstList->next; #4
            $currFirstList->next = $currSecondList;
            $temp2 = $currSecondList->next;
            $currSecondList->next = $temp1;
            $currFirstList = $currSecondList->next;
            $currSecondList = $temp2;
        }
        echo "<br>=================================";

        if ($currFirstList != null) {
            echo "<br>then first list still has:";
            while ($temp1 != null) {
                echo "<br>" . $temp1->data;
                $temp1 = $temp1->next;
            }
            echo "<br>====================";
        }

        if ($currSecondList != null) {
            echo "<br>then second list still has:";
            while ($temp2 != null) {
                echo "<br>" . $temp2->data;
                $temp2 = $temp2->next;
            }
            echo "<br>====================";
        }
        echo "<br>new list after merge :";
        DisplayNodes::DisplayNodes($firstList);

    }
}

?>