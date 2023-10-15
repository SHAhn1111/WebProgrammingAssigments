# Chapter6

---

### 1.HTML 페이지와 출력 결과를 보고 물음에서 요구하는 대로 페이지를 수정하라.

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/97ad8dc5-1cb6-4107-ac49-58c2763d2cde)

(1) HTML 페이지를 수정하여 자바스크립트 코드를 <script> 태그에 삽입하라.

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자바스크립트 코드 위치</title>
    <script>
        function over(obj) {
            obj.style.background = 'yellow';
        }
        function out(obj) {
            obj.style.background = 'white';
        }
    </script>
</head>

<body>
    <h3>마우스를 올려 보세요</h3>
    <hr>
    <div onmouseover="over(this)" onmouseout="out(this)"> 여기에 마우스를 올리면 배경색이 노란색으로 변합니다. </div>
</body>

</html>
```

(2) 자바스크립트 코드를 6-ljs 파일에 저장하고 <script> 태그로 6-1.js 파일을 불러오도록
HTML 페이지를수정하라.

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자바스크립트 코드 위치</title>
    <script src="6-1.js">
    </script>
</head>

<body>
    <h3>마우스를 올려 보세요</h3>
    <hr>
    <div onmouseover="over(this)" onmouseout="out(this)"> 여기에 마우스를 올리면 배경색이 노란색으로 변합니다. </div>
</body>

</html>
```

```jsx
function over(obj) {
    obj.style.background = 'yellow';
}
function out(obj) {
    obj.style.background = 'white';
}
```

### 2. document.write( ）를 이용하여 다음 <script> 태그 안에 자바스크립트 코드를 완성하라.

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/cd63af7f-e554-44ac-8466-7cb64570621e)

document.write( ）를 이용하여 저희 홈 페이지 오신 것을 환영합니다. 출력

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document.write()</title>
</head>

<body>
    <script>
        document.write("<h3>Welcome Home</h3>");
        document.write("<hr>");
        document.write("저희 홈 페이지 오신 것을 환영합니다.");
    </script>
</body>

</html>
```

### 3. document.write( ）를 이용하여 문제2 에 주어진 <script> 태그에 자바스크립트 코드를 완성하여 다음과같이 출력되게 하라.

![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/6fdac90b-06ca-4600-b0ca-3ee8ab62cb61)

나의 3-1, 3-2 출력 결과

![Untitled 2](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/cca03c3a-10a6-4284-b1be-1576375282b2)

![Untitled 3](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/5f754a23-018a-417b-9a1a-d38aa0f58ad9)


```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document.write()</title>
</head>

<body>
    <script>
        document.write("*<br>");
        document.write("**<br>");
        document.write("***<br>");
        document.write("****<br>");
        document.write("*****<br>");
    </script>
</body>

</html>
```

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document.write()</title>
</head>

<body>
    <script>
        document.write("<h3>document.write()로 표만들기</h3>");
        document.write("<hr>");
        document.write("");

        document.write("<table border='1'");
        document.write("<tr>");
        document.write("<th>");
        document.write("n");
        document.write("</th>");

        for (let j = 0; j < 10; j++) {
            document.write("<td>");
            document.write(j);
            document.write("</td>");
        }
        document.write("</tr><tr>");
        document.write("<th>");
        document.write("n<sup>2</sup>");
        document.write("</th>");

        for (let j = 0; j < 10; j++) {
            document.write("<td>");
            document.write(j * j);
            document.write("</td>");
        }
        document.write("</tr>");
        document.write("</table>");

    </script>
</body>

</html>
```

document.write()를 이용하여 별찍기와 테이블을 출력

### 4. prompt() 함수를 이용하여 월, 화, 수, 목,금 ,토 , 일 중 하나를 입력받아 월~목의 경우 ‘출근'을, 다른날의 경우 ‘휴일’을 출력하는 자바스크립트코드를 작성하여 웹 페이지를완성하라.

![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/4e5d6028-72e7-431d-a487-55848740f0e6)

switch문을 이용하여 월~목일 경우 ‘출근’ 출력 다른 날 일 경우 ‘휴일’ 출력

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>월하수목금토일</title>
</head>

<body>
    <script>
        let day = prompt("월화수목금토일 중에서 입력하세요", "수");

        document.write("<h3>월화수목금토일</h3>");
        document.write("<hr>");

        switch (day) {
            case "월":
            case "목":
                document.write(day + "은 출근");
                break;
            case "화":
            case "수":
                document.write(day + "는 출근");
                break;
            default:
                document.write("휴일");
                break;
        }
    </script>
</body>

</html>
```

### 5. 정확한 암호가 입력될 때까지 계속 prompt( ）를 출력하여 암호를 입력받는 웹 페이지를 작성하라.
암호는 you 이다. you가 입력되면 오른쪽과 같이 출력된다.

![Untitled 2](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/a1350504-73a9-45a7-978a-fec37ae150d4)

do-while문을 이용하여 정확한 암호가 입력될 때끼지 계속 prompt()를 출력

```html
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do-while과 break 사용</title>
</head>

<body>
    <h3>암호를 입력하라!</h3>
    <hr>
    <script>
        let password = "";
        do {
            password = prompt("암호를 대라", "암호");
            if (password == "you")
                break;
        } while (true);
        document.write("통과!");
    </script>
</body>

</html>
```

### 6. 브라우저 화면과 같이 출력되도록 <script> 태그 내에 함수를 작성하라.

![Untitled 4](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/87e29e97-cdb9-49fc-9839-ac5cde4c0e91)


나의 6-1 , 6-2 출력

![Untitled 5](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/b5bb38e4-bba0-499d-b561-85c7fbfa147f)

주어진 (1), (2)를 활용하여 코드 작성. function  big으로 big함수 작성 function pr로 pr함수 작성

![Untitled 6](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/3c8dc724-16fd-47cf-906b-223466598ccb)

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>

<body>
    <script>
        function big(n1, n2) {
            let n11 = parseInt(n1);
            let n22 = parseInt(n2);

            if (n11 > n22) {
                return n11;
            }
            else {
                return n22;
            }

        }
    </script>
    <script>
        let b = big("625", "555");
        document.write("큰수=" + b);
    </script>
</body>

</html>
```

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>

<body>
    <script>
        function pr(n1, n2) {
            for (let i = 0; i < n2; i++) {
                document.write(n1);
            }

        }
    </script>
    <script>
        pr("%", 5)
    </script>
</body>

</html>
```

### 7. prompt() 함수로 사용자로부터 숫자를 입력받고 제일 큰 자리 수와 제일 낮은 자리의 수가 같으면 ‘성공', 아니면 ‘다름'을 출력하는 웹 페이지를 작성하라. 문자열 연산으로 풀지 말고 while을 이용하여 제일 큰자리의 수와낮은자리의 수를구하여 풀도록하라.

![Untitled 3](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/a97bae85-fbd6-4c68-9d29-7341bfa16d87)

Math.floor()를 통해 소숫점 이하를 제거, isFinite()함수를 이용해 숫자인지 아닌지 확인

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>큰 자리수와 낮은자리수</title>
</head>

<body>
    <h3>큰 자리수와 낮은자리수 같은지 비교</h3>
    <hr>
    <script>
        let str = prompt("숫자 입력", "0");
        if (isFinite(str)) {
            let n = parseInt(str);
            if (n > 0) { // 양수인 경우에만
                let least = n % 10; // 1의 자리수
                let most = 0;
                while (n != 0) {
                    most = n % 10;
                    n = Math.floor(n / 10);
                }
                if (most == least)
                    document.write(str + ": 같음");
                else
                    document.write(str + ": 다름");
            }
            else
                document.write(str + ": 음수나 0은 다루지 않습니다.");
        }
        else {
            document.write(str + ": 숫자가 아닙니다.");
        }
    </script>
</body>

</html>
```

### 8. prompt() 함수를 통해 수식을 입력받아 계산 결과를 출력하는 웹 페이지를 작성하라. 수식 계산은 eval () 함수를 이용하라

![Untitled 4](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/366f563e-529c-48ae-9ccf-b38ca11b724b)

eval( ) 함수는 문자열의 식을 계산해준다. 이를 활용해서 코드 작성함

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eval()로 수식 계산</title>
</head>

<body>
    <h3>eval()로 수식 계산</h3>
    <hr>
    <script>
        let str = prompt("수식 입력");
        let result = eval(str);
        document.write(str + " = " + result);
    </script>
</body>

</html>
```
