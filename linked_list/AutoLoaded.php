<?php
spl_autoload_register(function ($ClassName) {
    if (file_exists('./' . $ClassName . '.php')) {
        include_once './' . $ClassName . '.php';
    } else {
        if (file_exists('./ProblemSolving/' . $ClassName . '/' . $ClassName . '.php')) {
            include_once './ProblemSolving/' . $ClassName . '/' . $ClassName . '.php';
        }
    }
});
?>