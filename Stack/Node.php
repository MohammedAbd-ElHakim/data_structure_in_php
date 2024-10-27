<?php
include_once 'Autoload.php';

class Node
{
    public $data;
    public ?Node $next;

    public function __construct($data = null)
    {
        $this->data = $data;
        $this->next = null;
    }


}

?>