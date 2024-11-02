<?php
include_once 'Autoload.php';

class NodeOfPriority
{
    public $data;
    public $priority;
    public ?NodeOfPriority $next;

    public function __construct($data = null, $priority)
    {
        $this->data = $data;
        $this->priority = $priority;
        $this->next = null;
    }
}
?>