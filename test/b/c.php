<?php
    require_once $_SERVER['DOCUMENT_ROOT']. '/pages/test/a.php';

    $a = new A;
    $b = new B;

    echo $a->hello(). $b->helloWorld();
