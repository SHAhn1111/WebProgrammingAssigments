<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 11 php 문제 3번</title>
</head>
<body>
<?php
        $lines = 0;
        $words = 0;
        $characters = 0;

        $file = fopen("exam.txt",'r');

        while(!feof($file)){
            $lines++;
            
            $line = trim(fgets($file)); 
            
            $words += str_word_count($line);

            $characters += strlen(str_replace(' ','', $line));
        }
        echo "<h2>'exam.txt'내용</h2><br>";
        echo "hi hi hi<br>hi hi hi<br>hi hi hi<br><hr>";
        echo "줄 수 : {$lines}<br>";
        echo "단어 수 : {$words}<br>";
        echo "글자 수 : {$characters}<br>";
    ?>
</body>
</html>