<?php
// Samantha Krall
// CST-126

class SuperHero{
    private $name;
    private $health;
    private $isDead;

    function __construct($Name, $Health){
        $this->name = $Name;
        $this->health = $Health;
        $this->isDead = 'false';
    }

    function Attack($OpponentDamage){
        $this->DetermineHealth($OpponentDamage);
    }
    function DetermineHealth($damage){
        $this->health = $this->health - $damage;
        echo "<tr>";
        echo "<td>" . $this->name . "</td>";
        if($this->health <= 0) {
            $this->health = 0;
            $this->isDead = 'true';
            echo "<td>" . $this->health . "</td>"
                . "<td>" . $this->isDead . "</td>";
            echo "</tr>";
        } else {
            echo "<td>" . $this->health . "</td>" . "</td>"
                . "<td>" . $this->isDead . "</td>";
            echo "</tr>";
        }
    }
    function isDead(){
       return $this->isDead;
    }
}
?>
