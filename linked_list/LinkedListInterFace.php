<?php
include_once './AutoLoaded.php';

interface Displayer
{
    public static function DisplayNodes(LinkedList $LinkedList);
}
interface Deleter
{
    public static function DeleteNode(LinkedList $LinkedList, $value);
}
interface Inserter
{
    public static function insertNode(LinkedList $LinkedList, Node $NewNode);
}

?>