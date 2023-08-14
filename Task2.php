<?php
//////////////////////////Task 2a//////////////////////////

echo "Fibonacci Series with Odd and Even Markers:\n";

$first = 0;
$second = 1;
$count = 0;

do {
    if ($count % 2 == 0) {
        echo "{" . $first . "} ";
    } else {
        echo "[" . $first . "] ";
    }

    $next = $first + $second;
    $first = $second;
    $second = $next;

    $count++;
} while ($count < 10);



echo"</br></br>";


//////////////////////////Task 2b//////////////////////////
echo "Month-Season Pairs:\n";

$month = 1;
while ($month <= 12) {
    if ($month == 1 || $month == 2 || $month == 12) {
        echo "Month $month - Summer\n";
    } elseif ($month >= 3 && $month <= 5) {
        echo "Month $month - Autumn\n";
    } elseif ($month >= 6 && $month <= 8) {
        echo "Month $month - Winter\n";
    } elseif ($month >= 9 && $month <= 11) {
        echo "Month $month - Spring\n";
    }

    $month++;
}



echo"</br></br>";


//////////////////////////Task 2c//////////////////////////
function getSeason($month) {
    switch ($month) {
        case 1:
        case 2:
        case 12:
            return "Summer";
        case 3:
        case 4:
        case 5:
            return "Autumn";
        case 6:
        case 7:
        case 8:
            return "Winter";
        case 9:
        case 10:
        case 11:
            return "Spring";
        default:
            return "Unknown";
    }
}

$values = [3, 5, 10, 12, 20];
foreach ($values as $value) {
    $result = getSeason($value);
    echo "Month $value - $result\n";
}
?>

<iframe src="text/Task2.txt" height="400" width="1200">
Your browser does not support iframes. </iframe>




