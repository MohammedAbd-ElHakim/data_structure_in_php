<?php
spl_autoload_register(function ($ClassName) {
    if (file_exists('../../' . $ClassName . '.php')) {
        include_once '../../' . $ClassName . '.php';
    }
    if (file_exists('./' . $ClassName . '.php')) {
        include_once './' . $ClassName . '.php';

    }
});
?>