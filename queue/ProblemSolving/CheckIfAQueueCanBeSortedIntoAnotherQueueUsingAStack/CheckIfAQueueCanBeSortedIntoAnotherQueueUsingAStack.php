<?php
include_once './AutoLoaded.php';

class CheckIfAQueueCanBeSortedIntoAnotherQueueUsingAStack
{
    public static function checkNow(LinkedListQueue $queue, LinkedListQueue $resultQueue, LinkedList $stack)
    {
        if ($queue == null) {
            return; // لا حاجة لإعادة مصفوفة فارغة
        }
        $can = true;
        $expectedNum = 1;
        $curr = $queue->head;
        while ($curr != null) {
            $currData = Front::getFront($queue)->data;
            Dequeue::RemoveTheFrontNode($queue);
            if ($expectedNum < $currData) {
                push::push($stack, new Node($currData));
                $expectedNum = $currData;
                $curr = $curr->next;
                continue;
            }
            if ($expectedNum >= $currData) {
                Enqueue::addNewNodeAtRear($resultQueue, new NodeQueue($currData));
                $curr = $curr->next;
                continue;
            }
            $curr = $curr->next;
        }

        echo "<br>stack : ";
        $curr3 = $stack->head;
        while ($curr3 != null) {
            $currData = peek::peek($stack) != null ? peek::peek($stack) : false;
            if (!$currData) {
                break;
            }
            pop::pop($stack);
            echo "<br>" . $curr3->data;
            $rear = Rear::getRear($resultQueue)->data;
            echo "<br>currData : " . $currData;
            echo "<br>rear : " . $rear;
            if ($currData > $rear) {
                Enqueue::addNewNodeAtRear($resultQueue, new NodeQueue($currData));
                $can = true;
            } else {
                $can = false;
            }
            $curr3 = $curr3->next;
        }

        echo "<br>yes";
        return $can == true ? "yes" : "no";
    }
}

?>