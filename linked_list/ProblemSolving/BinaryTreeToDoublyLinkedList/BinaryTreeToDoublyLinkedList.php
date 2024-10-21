<?php
include_once './AutoLoaded.php';

class BinaryTreeToDoublyLinkedList
{
    public static function convertBinaryTreeToDoublyLinkedList(NodeOfBinaryTree $root, LinkedList $list, LinkedList $list1, DoublyLinkedList $result)
    {
        if ($root == null) {
            return;
        }

        #add root to stack 1
        ImplementAStackUsingSinglyLinkedList::push($list, $root->data);

        while (
            ImplementAStackUsingSinglyLinkedList::peek($list) ||
            ImplementAStackUsingSinglyLinkedList::peek($list1)
        ) {
            #زياره العقد من استاك 1
            while (ImplementAStackUsingSinglyLinkedList::peek($list)) {
                $node = ImplementAStackUsingSinglyLinkedList::pop($list);
                InserterInDoublyLinkedList::insertAtFront($result, $node->head->data);

                #اضافه الابناء الي الاستاك 2
                if($)
            }
        }
    }
}

?>