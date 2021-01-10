<?php

require_once 'degoo.class.php';
try{
    $degoo = new Degoo('421juanda@gmail.com', 'q86pxcjm0egn' );
    $result = $degoo->register('max');
    print_r($result);
} catch (Exception $ex) {
    var_dump($ex->getMessage());
}
