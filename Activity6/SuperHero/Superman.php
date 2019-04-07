<?php
// Samantha Krall
// CST-126

require_once 'SuperHero.php';
class Superman extends SuperHero{
    function __construct(){
        parent::__construct('Superman', mt_rand(1, 1000));
    }
}
?>