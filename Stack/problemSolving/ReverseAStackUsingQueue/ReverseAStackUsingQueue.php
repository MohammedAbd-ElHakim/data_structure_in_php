<?php
include_once 'Autoload.php';

class ReverseAStackUsingQueue
{
    public static function startReverse(LinkedList $stack, LinkedList $queue)
    {
        if ($stack == null) {
            return $stack;
        }
        $size = self::getSize($stack);
        #ملينها الكوي من الاستاك وفضينه الاستاك
        for ($i = 0; $i < $size; $i++) {
            $rear = Peek::peek($stack);
            pop::pop($stack);
            QueueLinkedListImplementation::enQueue($queue, new Node($rear));
        }

        #حسي يلا حنعمل ديكوي للكوي عشان نملا الاستاك من اول وجديد
        $size2 = self::getSize($queue);
        for ($i = 0; $i < $size2; $i++) {
            $front = QueueLinkedListImplementation::deQueue($queue);
            echo "<br>front : " . $front->data;
            push::push($stack, new Node($front->data));
        }
        return $stack;
    }

    public static function getSize($list)
    {
        $count = 0;
        $curr = $list->head;
        while ($curr != null) {
            $count++;
            $curr = $curr->next;
        }
        return $count;
    }
}

?>