<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 문제 1번</title>
</head>
<body>
<?php
function printNextEvenOrSame($a) {
    if ($a % 2 == 0) {
        echo $a;
    } else {
        echo $a + 1;
    }
}

echo "a가 홀수(3) 일 때 <br>";
printNextEvenOrSame(3);
echo "<br>";
echo "a가 짝수(4) 일 때 <br>";
printNextEvenOrSame(4); 
?>
</body>
</html>