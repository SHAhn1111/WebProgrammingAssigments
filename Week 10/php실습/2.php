<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 문제 2번</title>
</head>
<body>
<?php
function factorial($n) {
    if ($n < 0) {
        return "양의 정수를 입력해주세요";
    }
    $factorial = 1;
    while ($n > 0) {
        $factorial *= $n;
        $n--;
    }
    return $factorial;
}


echo "5 팩토리얼 구하기 : ";
echo factorial(5); 
echo "<br>";
echo "3 팩토리얼 구하기 : ";
echo factorial(3);
?>
</body>
</html>