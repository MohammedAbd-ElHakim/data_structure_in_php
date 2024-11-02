<?php
spl_autoload_register(function ($ClassName) {
    if (file_exists('../FactoryObject/' . $ClassName . '.php')) {
        include_once '../FactoryObject/' . $ClassName . '.php';
    } else {
        die("cant found " . $ClassName . '.php');
    }
});
?>