<?php
// Samantha Krall
// CST-126

require_once 'SuperHero.php';
class Batman extends SuperHero {
    function __construct(){
        parent::__construct('Batman', mt_rand(1, 1000));            
    }
}
?>