# Week 11 php 문제

---

# 문제 1번

---

1. for문을 이용하여 다음과 같은 출력을 하는 프로그램을 작성하시오.
A
A B
A B C
A B C D
A B C D E
A B C D
A B C
A B
A

**[1번 문제 결과 확인](http://sohahn.dothome.co.kr/Week11/1.php)**

```php
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
```

# 문제 2번

---

1. 배열을 내림차순으로 정렬하고 싶다. sort() 함수를 이용하여 revsort() 함수를 설계하고 테스트하시오.
(hint : sort와 array_reverse함수 사용)

**[2번 문제 결과 확인](http://sohahn.dothome.co.kr/Week11/2.php)**

```php
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
```

# 문제 3번

---

3.  'exam.txt' 라는 파일을 열어 그 파일의 줄 수, 단어 수, 글자 수를 계산하는 프로그램을 작성하시오.

**[3번 문제 결과 확인](http://sohahn.dothome.co.kr/Week11/3.php)**

```php
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
```

# 문제 4번

---

1. 다음은 각각의 사람들이 현재까지 생활하였던 도시의 이름을 나타내었다.

Kim   Seoul
Lee    Pusan, Daegu
Choi   Inchon
Park   Suwon, Daejon
Jung   Kwangju, Chunchon, Wonju

위의 값들을 연상 배열로 선언한 후 Choi 항목을 삭제한 뒤 연상 배열의 내용을 출력하는 PHP 프로그램을 작성하시오 (단, vardump() 함수는 사용하지 않음).

**4[번 문제 결과 확인](http://sohahn.dothome.co.kr/Week11/4.php)**

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 11 php 문제 4번</title>
</head>
<body>
    <?php
        $cities = array(
            "Kim" => "Seoul",
            "Lee" => "Pusan, Daegu",
            "Choi" => "Inchon",
            "Park" => "Suwon, Daejon",
            "Jung" => "Kwangju, Chunchon, Wonju"
        );

        
        unset($cities["Choi"]);

        
        foreach ($cities as $name => $city) {
            echo "[".$name . "]".": " . $city . "<br>";
        }
    ?>
</body>
</html>
```

# 문제 5번

---

1. 고객 정보가 들어있는 파일 client.txt가 있다. 이 파일에 저장된 자료의 구조는 다음과 같이 ASCII 형식으로 저장되어 있다고 가정하자.

이름 [TAB] 나이 [TAB] 성별 [TAB] 이메일

이 파일을 읽어 나이가 30세 이상의 고객을 출력하는 프로그램을 작성하시오.

**[5번 문제 결과 확인](http://sohahn.dothome.co.kr/Week11/5.php)**

```php
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
```
