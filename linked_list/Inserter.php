<?php
include_once './AutoLoaded.php';

interface Inserter
{
    public static function InsertNode(LinkedList $LinkedList, Node $NewNode);
}

?>