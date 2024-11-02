<?php
include_once 'AutoLoaded.php';

class NodeOfDeque
{
    public $data;
    public ?NodeOfDeque $next, $prev;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        $this->prev = null;
    }
}
?>