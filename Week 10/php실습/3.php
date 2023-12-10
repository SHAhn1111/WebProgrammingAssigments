<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 문제 3번</title>
</head>
<body>
    <?php
        $value = 12;
        echo "현재 value의 값 : {$value}<br>";
        echo ($value % 2) == 1 ? "odd" : "even";
    ?>
</body>
</html>