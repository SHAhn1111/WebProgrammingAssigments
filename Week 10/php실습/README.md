# Week 10 php 문제

---
닷홈 무료 호스팅 사이트를 이용했습니다. (http://sohahn.dothome.co.kr/Week10)
# 문제 1번

---

1. $a라는 변수의 값이 홀수이면 그 숫자 다음 숫자인 짝수를 출력하고, $a의 값이 짝수이면 그 수를 출력하는 함수를 작성하고 테스트하시오.

[**1번 문제 결과 확인**](http://sohahn.dothome.co.kr/Week10/1.php)

```php
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
```

# 문제 2번

---

1. while문을 이용하여 factorial 값을 구하는 함수를 작성하고 테스트하시오.

[**2번 문제 결과 확인**](http://sohahn.dothome.co.kr/Week10/2.php)

```php
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
```

# 문제 3번

---

1. 다음 프로그램과 동일한 기능을 하는 프로그램을 삼항연산자( ? : )를 이용하여 작성고 테스트하시오.
<?PHP
$value = 12;
if (($value % 2) == 1) print "odd";
else print "even";
?>

[**3번 문제 결과 확인**](http://sohahn.dothome.co.kr/Week10/3.php)

```php
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
```
