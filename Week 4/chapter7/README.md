# Chapter7

---

### 1. 1 에서 100(100 포함)사이의 난수 10개를 생성하여 plots 이름의 배열에 저장하고, 배열에 저장된 수 중 가장 큰 수를 출력하는 웹 페이지를 작성하라.

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/574c8b91-d850-47b7-87cd-35ef16a769de)

Math.random()으로 난수를 생성하고, for문을 이용하여 제일 큰 수를 출력하고 sort( )를 이용하여

작은 숫자부터 나열함

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>난수</title>
</head>

<body>
    <h3>난수 10 개 생성</h3>
    <hr>
    <script>
        let n = [];
        for (let i = 0; i < 10; i++) {
            let r = Math.floor(Math.random() * 100) + 1;
            n[i] = r
        }

        for (let i = 0; i < 10; i++) {
            document.write(n[i] + " ");
        }
        document.write("<hr>");
        let big = n[0];
        for (let i = 0; i < 10; i++) {
            if (big < n[i]) {
                big = n[i];
            }
        }
        document.write("제일 큰 수는 " + big);
        document.write("<hr>");
        n.sort();
        for (let i = 0; i < 10; i++) {
            document.write(n[i] + " ");
        }
    </script>
</body>

</html>
```

### 2. prompt( ) 함수를 반복 호출하여 5개의 정수를 입력받아 배열에 저장하고 입력된 반대 순으로 출력하는 웹 페이지를 작성하라.

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/8db9284f-7cd4-4e0e-bb61-fe6168e90550)

for문을 이용하여 정수 5개를 입력받고 prompt()는 문자열로 리턴하기 때문에 리턴받은 문자열을 parseInt()로 정수로 변환

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정수 5개 입력받아 역순으로 출력</title>
</head>

<body>
    <h3>정수 5개 입력받아 역순으로 출력</h3>
    <hr>
    <script>
        let n1 = [];
        let n = 0;
        for (let i = 0; i < 5; i++) {
            n = prompt("정수 입력");
            if (isFinite(n)) {
                n1[i] = parseInt(n);
            }
            else {
                break;
            }
        }
        if (n1.length == 5) {
            document.write("입력된 수의 배열<br>");
            for (let i = 0; i < 5; i++) {
                document.write(n1[i] + " ");
            }
            document.write("<hr>");
            document.write("역순으로 재정력된 배열<br>");
            n1.reverse();
            for (let i = 0; i < 5; i++) {
                document.write(n1[i] + " ");
            }
        } else {
            document.write("잘못입력했습니다.");
        }

    </script>
</body>

</html>
```

### 3. 예제 7-6을 수정하여 웹 페이지를 접속할 때 오전이면 배경색을 lightskyblue , 오후이면 orange로출력되게하라.

![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/c5868211-6c67-4770-b142-755f180b2a8a)

캡쳐 시간이 오후라 orange화면이 캡쳐됨

new Date()로 현재 시간 값을 가진 Date 객체를 생성하고 if문으로 오전이면 lightskyblue, 오후이면 orange배경으로 바뀌도록 함.

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>방문 시간이 오전 오후에 따라 변하는 배경색</title>
</head>

<body>
    <h3>오전이면 lightskyblue, 오후이면 orange 배경</h3>
    <hr>
    <script>
        let current = new Date(); // 현재 시간 값을 가진 Date 객체 생성
        if (current.getHours() >= 0 && current.getHours < 12)
            document.body.style.backgroundColor = "lightskyblue";
        else
            document.body.style.backgroundColor = "orange";

        document.write("현재 시간 : ");
        document.write(current.getHours(), "시,");
        document.write(current.getMinutes(), "분,");
        document.write(current.getSeconds(), "초<br>");
    </script>
</body>

</html>
```

### 4. 예제 7-6을 수정하여, 웹 페이지를 접속할 때 월요일 ~토요일이면 배경색을gold로, 일요일이면 pink로 출력되게 하라.

![Untitled 2](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/37d1e4d4-89a9-4960-ab22-8687a826130a)

캡처 당시 웹 페이지 접속 시간이 일요일이여서 pink로 출력됨

예제 7-6을 수정하여 switch문으로 월요일 ~토요일이면 배경색을gold로, 일요일이면 pink로 출력되게함

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>방문 요일에 따라 변하는 배경색</title>
</head>

<body>
    <h3>일요일은 pink, 다른 요일은 gold 배경</h3>
    <hr>
    <script>
        let current = new Date();
        if (current.getDay() >= 1 && current.getDay() <= 6)
            document.body.style.backgroundColor = "gold";
        else
            document.body.style.backgroundColor = "pink";

        let days;

        switch (current.getDay()) {
            case 0:
                days = "일";
                break;
            case 1:
                days = "월";
                break;
            case 2:
                days = "화";
                break;
            case 3:
                days = "수";
                break;
            case 4:
                days = "목";
                break;
            case 5:
                days = "금";
                break;
            case 6:
                days = "토";
                break;
        }

        document.write("오늘 : ");
        document.write(current.getDate(), "일,");
        document.write(days + "요일");
    </script>
</body>

</html>
```

### 5. 이름 문자열이 들어 있는 배열 names는 다음과 같다.

(1) names 배열에 들어 있는 각 이름을 출력하라.
(2) names 배열에서 가장 긴 이름을 출력하라.
(3) names 배열에서 사전에서 가장 먼저 나오는 이름을 출력하라.
(4) names 열을 증가순으로 재 정렬하여 출력하라.

![Untitled 3](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/9804cb86-54ab-425c-9835-1cc090f85101)

for문을 이용하여 names 배열에 들어 있는 각 이름을 출력함

for문을 이용하여 names의 각 인덱스에 들어있는 문자열의 갯수(.length)를 비교하여 가장 긴이름을 출력함

문자열의 비교는 사전에 가장 먼저 나오는 것이 작음. 이를 이용해서 출력함

sort()를 이용하여 증가 순으로 재 정렬하여 출력함

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문자열 배열 다루기</title>
</head>

<body>
    <h3>문자열 배열 다루기</h3>
    <hr>
    <script>
        let names = new Array("wonsun", "jaemoonlee", "kitae", "gracehwang");
        document.write("이름 : ");
        for (let i = 0; i < 4; i++) {
            document.write(names[i] + " ");
        }
        document.write("<br>");
        document.write("가장 긴 이름 : ");

        let longName = 0;
        let llongName;
        let nameCount;
        let nameCount1 = 0;
        for (let i = 0; i < 4; i++) {
            nameCount = names[i];
            nameCount1 = nameCount.length;
            if (nameCount1 > longName) {
                longName = nameCount1;
                llongName = nameCount;
            }
        }
        document.write(llongName);

        let first = names[0];
        document.write("<br>");
        document.write("가장 먼저 나오는 이름 : ");
        for (let i = 0; i < 4; i++) {
            if (first > names[i]) {
                first = names[i];
            }
        }
        document.write(first);
        document.write("<br>");
        document.write("증가순 이름 : ");
        names.sort()
        for (let i = 0; i < 4; i++) {
            document.write(names[i] + " ");
        }
    </script>
</body>

</html>
```

### 6. prompt( ) 함수를 호출하여 사용자로부터 문자열을 입력받고 "&" 문자를 기준으로 분할하여 출력하는 웹페이지를작성하라.

![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/81b756a0-92f7-47d7-bb06-30951b16001f)

split()을 이용하여 “&”문자를 기준으로 분할하여 출력

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문자열 분할</title>
</head>

<body>
    <h3>문자열 분할</h3>
    <hr>
    <script>
        let str = prompt("문자열 입력");
        let sAnd = str.split("&");
        for (let i = 0; i < sAnd.length; i++) {
            document.write(sAnd[i] + "<br>");
        }
    </script>
</body>

</html>
```

### 7. 다음과 같이 색 이름을 가진 문자열 배열 colorNames를 만들고, 문자열을 <div> 태그로 출력하라. <div> 태그의 배경색은 해당 색으로 칠하라.

![Untitled 4](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/ab434822-02da-4691-92d4-25279a730bc8)

![Untitled 5](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/4a03ebd8-6f9e-41a9-832e-4e40f8b0ad4e)

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17개의 CSS2 색이름과 색</title>
    <style>
        div {
            display: inline-block;
            width: 60px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h3>17개의 CSS2 색이름과 색</h3>
    <hr>
    <script>
        let colorNames = ["maroon", "red", "orange", "yellow", "olive",
            "purple", "fuchsia", "white", "lime", "green",
            "navy", "blue", "aqua", "teal", "black", "silver", "gray"];

        for (let i = 0; i < colorNames.length; i++) {
            let str = "<div style='background-color:";
            str += colorNames[i];
            str += "'>" + colorNames[i] + "</div>";
            document.write(str);
        }
    </script>
</body>

</html>
```

### 8. 다음 브라우저 화면과 같이, document.write( ）를 이용하여 16 개의 <div> 태그를 출력하고 각<div> 태그에 출력되는 배경색을 랜덤한 색으로 칠하는 웹 페이지를 작성하라. 웹 페이지를 로드할때마다 색이 랜덤하게 바뀐다.

![Untitled 2](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/301bae57-81aa-449f-a3e5-57d10be59025)

colorNames 배열을 생성하고 Math.random()으로 난수를 생성해서 for문으로 colorNames배열에 생성된 난수를 입력하고 출력했다.

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math.random()으로 랜덤한 색 만들기</title>
    <style>
        div {
            display: inline-block;
            width: 150px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h3>16개의 랜덤한 색 만들기</h3>
    <hr>
    <script>
        let colorNames = [];
        for (let i = 0; i < 16; i++) {
            var r = Math.floor(Math.random() * 256);
            var g = Math.floor(Math.random() * 256);
            var b = Math.floor(Math.random() * 256);
            colorNames[i] = "rgb(" + r + "," + g + "," + b + ")";

        }

        for (let i = 0; i < colorNames.length; i++) {
            var str = "<div style='background-color:";
            str += colorNames[i];
            str += "'>" + colorNames[i] + "</div>";
            document.write(str);
        }
    </script>
</body>

</html>
```

### 9. book 객체를 만들려고 한다. 이 객체는 title, author, price의 3개의 프로퍼티로 구성되며 각 프로퍼티는 '‘HTML5", "황기태'’, 20000으로 각각 초기화된다.

![Untitled 6](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/5a2122b8-affd-4092-adb7-7e02f442a6b2)

(1) new Object( ）를 이용하여 book 객체를 작성하고 객체를 출력하라.

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book 객체 만들기</title>
    <script>
        let book = new Object();
        book.title = "HTML5";
        book.author = "황기태";
        book.price = 20000;
    </script>
</head>

<body>
    <h3>book 객체 만들기</h3>
    <hr>
    <script>
        document.write("book : " + book.title + ", " + book.author + ", " + book.price);
    </script>
</body>

</html>
```

(2) 리터럴 표기법으로 book 객체 작성하고 객체 출력하라.

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book 객체 만들기</title>
    <script>
        let book = {
            title: "HTML5",
            author: "황기태",
            price: 20000
        };
    </script>
</head>

<body>
    <h3>book 객체 만들기</h3>
    <hr>
    <script>
        document.write("book : " + book.title + ", " + book.author + ", " + book.price);
    </script>
</body>

</html>
```

(3) 프로토타입 Book을 작성하고 book 객체를 출력하라.

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book 객체 만들기</title>
    <script>
        function Book(title, author, price) {
            this.title = title;
            this.author = author;
            this.price = price;
        }
    </script>
</head>

<body>
    <h3>book 객체 만들기</h3>
    <hr>
    <script>
        let book = new Book("HTML5", "황기태", 20000);
        document.write("book : " + book.title + ", " + book.author + ", " + book.price)
    </script>
</body>

</html>
```

### 10. 문제 9의 (1) 에서 new Object( ）를 이용하여 생성한 book 객체를 이용하여 book의 객체 배열 bookArray를 생성하고, 다음과 같이 prompt() 함수를 통해 5개의 책 정보를 입력받은 후 가장 비싼책의 이름을 출력하는 웹 페이지를 작성하라.

![Untitled 7](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/da0b1932-264c-4fa0-9e78-42fff4f7ab5b)

bookArray에 prompt()로 책 정보를 입력받고 split(”,”)를 이용하여 콤마로 분리.

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book 객체 배열 만들기</title>
</head>

<body>
    <h3>book 객체 배열 만들기</h3>
    <hr>
    <script>
        let bookArray = [];
        let high = 0;
        let highTitle = 0;
        for (let i = 0; i < 5; i++) {
            bookArray[i] = prompt("콤마(,)로 분리하면서 책제목 저자 가격 순으로 입력");
            let s = bookArray[i].split(",");
            let book = new Object();
            book.title = s[0];
            book.author = s[1];
            book.price = s[2];

            if (book.price > high) {
                high = book.price;
                highTitle = book.title;
            }
        }

        for (let i = 0; i < 5; i++) {
            document.write(bookArray[i] + " <br>");
        }
        document.write("<hr>");

        document.write("가장 가격이 비싼 책은 " + highTitle);

    </script>
</body>

</html>
```
