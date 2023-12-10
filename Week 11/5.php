<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 11 php 문제 5번</title>
</head>
<body>
    <?php
        function printOver30($filename) {
            if (!file_exists($filename)) {
                return "파일이 존재하지 않습니다.";
            }

            $file = fopen($filename, "r");

            while (!feof($file)) {
                $line = fgets($file);
                $data = explode(" ", $line);
                if (count($data) >= 4 && intval($data[1]) > 30) {
                    echo $line;
                    echo "<br>";
                }
            }

            fclose($file);
        }

        
        echo "<h2>client.txt의 내용</h2>";
        echo "name1 29 male abc1@def.com<br>
        name2 24 female abc2@def.com<br>
        name3 56 female abc3@def.com<br>
        name4 59 male abc4@def.com<br>
        name5 26 male abc5@def.com<br>
        name6 35 female abc6@def.com<br>";
        echo "<h3>30세이상만 출력</h3>";
        printOver30('client.txt');
    ?>
</body>
</html>