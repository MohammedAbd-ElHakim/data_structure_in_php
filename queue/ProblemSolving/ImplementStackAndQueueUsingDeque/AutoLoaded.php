<?php
spl_autoload_register(function ($ClassName) {

    if (file_exists('./' . $ClassName . '.php')) {
        include_once './' . $ClassName . '.php';
    }

    if (file_exists('../../' . $ClassName . '.php')) {
        include_once '../../' . $ClassName . '.php';
    }

    if (file_exists('../Deque/' . $ClassName . '.php')) {
        include_once '../Deque/' . $ClassName . '.php';
    }

    if (file_exists('../../../Stack/' . $ClassName . '.php')) {
        include_once '../../../Stack/' . $ClassName . '.php';
    }

    if (file_exists('../../../FactoryObject/' . $ClassName . '.php')) {
        include_once '../../../FactoryObject/' . $ClassName . '.php';
    }

    if (file_exists('../../../BinaryTreeDataStruture/' . $ClassName . '.php')) {
        include_once '../../../BinaryTreeDataStruture/' . $ClassName . '.php';
    }
});
?>