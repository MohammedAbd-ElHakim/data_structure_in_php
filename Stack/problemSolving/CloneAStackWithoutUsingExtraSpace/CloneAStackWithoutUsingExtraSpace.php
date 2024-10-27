<?php
include_once 'Autoload.php';

class CloneAStackWithoutUsingExtraSpace
{
    public static function recursieCloneStack(LinkedList $orginal, LinkedList $clone)
    {
        if ($orginal->head == null) {
            return;
        }
        self::cloneHelper($orginal->head, $clone);
        return $clone;
    }

    public static function cloneHelper(Node $orginal, LinkedList $clone)
    {
        if ($orginal == null) {
            return;
        }
        if ($orginal->next !== null)
            self::cloneHelper($orginal->next, $clone);

        push::push($clone, new Node($orginal->data));
    }
}

?>