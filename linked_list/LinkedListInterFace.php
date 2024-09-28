<?php
include_once './AutoLoaded.php';

interface LinkedListInterFace
{
    public static function DisplayNodes(LinkedList $LinkedList);
    public static function DeleteNode(LinkedList $LinkedList, $value);
    public static function insertNode(LinkedList $LinkedList, Node $NewNode);
}

?>