<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 11 php 문제 1번</title>
</head>
<body>
    <?php
    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j <= 4; $j++) {
            if ($i < 5) {
                
                if ($j <= $i) {
                    echo chr(65 + $j) . " ";
                }
            } else {
                
                if ($j <= 8 - $i) {
                    echo chr(65 + $j) . " ";
                }
            }
        }
        echo "<br>";
    }
    ?>
</body>
</html>