<?php 

function urutanAngka($angka) {
    $z = 1;
    for ($x = 1; $x <= $angka ; $x++) {
        for($y = 1; $y <= $x; $y++) {
            echo "$z ";
            $z++;
            if ($y == $x) {
                echo "<br>";
            }
        }
    }
}

urutanAngka(5);
