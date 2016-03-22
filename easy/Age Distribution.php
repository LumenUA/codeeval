<?php
$fh = fopen($argv[1], 'r');
while (false !== ($line = fgets($fh))) {
    $age = trim($line);
    if ($age < 0 || $age > 100) {
    }
    if ($age <= 2) {
        echo "Still in Mama's arms\n";
    } elseif ($age <= 4) {
        echo "Preschool Maniac\n";
    } elseif ($age <= 11) {
        echo "Elementary school\n";
    } elseif ($age <= 14) {
        echo "Middle school\n";
    } elseif ($age <= 18) {
        echo "High school\n";
    } elseif ($age <= 22) {
        echo "College\n";
    } elseif ($age <= 65) {
        echo "Working for the man\n";
    } else {
        echo "The Golden Years\n";
    }
}
echo "\n";
