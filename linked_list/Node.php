<?php
include_once 'AutoLoaded.php';

class Node
{
    public $data;
    public ?NODE $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}
?>