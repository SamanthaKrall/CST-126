<?php
// Samantha Krall
// CST-126
?>
<html>
<body background='batman-vs-superman.jpg'>
	<?php 
        require_once 'Superman.php';
        require_once 'Batman.php';
        $lost = 0;
        $bat = new Batman();
        $sman = new Superman();
        echo "<table style='border: 1px solid orange; padding: 16px; color: orange; font-size: 12px;'>";
            echo "<tr>";
                echo "<th>Hero</th>
                      <th>Health</th>
                      <th>Dead</th>";
            echo "</tr>";
            while ($lost == 0) {
                if (($bat->isDead() == 'false') && ($sman->isDead() == 'false')){
                    $bat->Attack(mt_rand(1, 10));
                    if ($bat->isDead() != 'true') {
                        $sman->Attack(mt_rand(1, 10));
                    }
                }
                if (($bat->isDead() == 'true') && ($bat->isDead() == 'false')){
                    echo '<span style="display: inline-block; width: 300px; padding-bottom: 5px; font-size: 12px; color: orange;">Superman Won!</span>';
                    $lost = 1;
                }
                if (($sman->isDead() == 'true') && ($bat->isDead() == 'false')){
                    echo '<span style="display: inline-block; width: 300px; padding-bottom: 5px; font-size: 12px; color: orange;">Batman Won!</span>';
                    $lost = 1;
                }
            }
?>
</body>
</html>