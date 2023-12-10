<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 11 php 문제 2번</title>
</head>
<body>
    <?php
        function revsort(&$array) {
            sort($array);
            $array = array_reverse($array);
        }

        
        $testArray = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
        revsort($testArray);
        echo "[3,1,4,1,5,9,2,6,5,3,5] 배열 내림차순 정렬<br><hr>";
        print_r($testArray);
    ?>
</body>
</html>