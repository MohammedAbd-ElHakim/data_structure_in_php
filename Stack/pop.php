<?php
include_once 'Autoload.php';

class Pop
{
    #pop : return the top element and delete the first element of stack
    public static function pop(LinkedList $stack)
    {
        if ($stack == null || $stack->head === null) {
            return "Stack can't be null or empty";
        }

        // حفظ القيمة من العقدة الأولى
        $firstElement = $stack->head->data;

        // تحديث الرأس لحذف العنصر الأول
        $stack->head = $stack->head->next;

        return $stack; // إرجاع القيمة المحذوفة
    }
}

?>