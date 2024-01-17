<?php

$college = array(
    "Студенты" => array("fff", "ggg"),
    "Преподователи" => array("fffh", "gggh"));

    foreach($college as $people => $items) {
        echo "<h1>$people</h1>";
        echo "<ul>";
            foreach($items as $item => $value) {
                echo "<li>$value</li>";
            }
        echo "</ul>";
    }
    

