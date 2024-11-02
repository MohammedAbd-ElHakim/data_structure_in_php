<?php
include_once 'Autoload.php';

class LinkedListOfPriorityQueue
{
    public ?NodeOfPriority $head;

    public function __construct(NodeOfPriority $node = null)
    {
        $this->head = $node;
    }

    public static function push(LinkedListOfPriorityQueue $queue, NodeOfPriority $newNode)
    {
        if ($queue->head == null) {
            $queue->head = $newNode;
            return;
        }

        #ازا كانت النود الجديده اولويتها اعلي يتم اضافتها في الراس
        if ($newNode->priority > $queue->head->priority) {
            $newNode->next = $queue->head;
            $queue->head = $newNode;
            return;
        }

        #يتم وضع النود الجديده في موقعها في الليست بناء علي اولويتها
        $curr = $queue->head;
        while ($curr->next != null && $curr->next->priority >= $newNode->priority) {
            $curr = $curr->next;
        }
        $newNode->next = $curr->next;
        $curr->next = $newNode;
    }

    public static function pop(LinkedListOfPriorityQueue $queue)
    {
        if ($queue->head == null) {
            return;
        }

        $queue->head = $queue->head->next;
    }
    public static function peek(LinkedListOfPriorityQueue $queue)
    {
        if ($queue->head == null) {
            return "queue its null";
        }

        $frontData = $queue->head->data;
        echo "<br>hieghest node of queue now : " . $frontData;
    }
    public static function display(LinkedListOfPriorityQueue $queue)
    {
        $curr = $queue->head;
        while ($curr != null) {
            echo "<br>" . $curr->data . "," . $curr->priority;
            $curr = $curr->next;
        }

    }
}

?>