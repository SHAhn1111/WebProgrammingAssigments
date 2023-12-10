# Week 1

---

## p58

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자기소개</title>
    <style>
        body {
            background-color: yellow;
            margin-left: 40px;
            margin-right: 40px;
        }

        h3 {
            text-align: center;
        }

        span {
            color: green;
            font-size: 20px;
        }
    </style>
    <script>
        function show() {
            document.getElementById("fig").src = "sohyun.jpg";
        }
        function hide() {
            document.getElementById("fig").src = "";
        }
    </script>
</head>

<body>
    <h3 onmouseover="show()" onmouseout="hide()">안소현</h3>
    <hr>
    <div><img id="fig" src=""></div> 저는 경성대학교 <span>소프트웨어학과</span>를 다니고 있습니다. <br> 현재 <span>3학년</span>입니다.
</body>

</html>
```

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/33ce2dad-b6e3-42bf-a313-7ff0c5444076)


![Untitled](Week%201%2045f0f07dd91149efb875417688446260/Untitled%201.png)![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/56d57a26-5440-4f78-b2b6-c47d5bae9bd7)


## p61-1

```html
<!DOCTYPE html><!-- !가 없음 -->
<html>

<head>
    <meta charset="utf-8">
    <title>오류를 찾으세요</title>
    <style>
        h3 {
            text-align: center;
            color: darkred;
        }

        span {
            color: blue;
            font-size: 20px;
        }

        /* color= 를 color:로 바꿈*/
    </style> <!-- </style> 닫는태그가없음-->
</head>

<body>
    <h3>Elvis Presley</h3> He was an American singer and actor. In November 1956, he is often referred to as "<span>the
        King of Rock and Roll</span>"
</body>

</html>
```

## p61-2

```html
<!DOCTYPE html>
<html>

<head> <!-- <body>가 아닌 <head>여야함-->
    <meta charset="UTF-8">
    <title>오류를 찾으세요</title>
    <style>
        h3 {
            text-align: center;
            color: darkred;
        }

        /*text-alian : center 뒤에 ;이 있어야함*/
        span {
            color: blue;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h3>Elvis Presley</h3> <!--</h>를 </h3>로 수정--> He was an American singer and actor. In November 1956, he is often
    referred to as "<span>the King of Rock and Roll</span>".
</body>

</html>
```

## p62-1

![Untitled 2](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/c8191817-ab73-4530-a334-f50a7d77d550)


```html
<!DOCTYPE html>
<html>

<head>
    <title>웹 페이지의 구성 요소</title>
    <style>
        body {
            background-color: linen;
            color: green;
            margin-left: 40px;
            margin-right: 40px;
        }

        h3 {
            text-align: center;
            color: darkred;
        }

        hr {
            height: 10px;
            border: solid grey;
            background-color: grey
        }

        span {
            color: violet;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h3>Elvis Presley</h3>
    <hr> He was an American singer and actor. In November 1956, he made his film debut in <span>Love Me Tender</span>.
    He is often referred to as "<span>the King of Rock and Roll</span>".
</body>

</html>
```

## p62-2

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>웹 페이지의 구성 요소</title>
    <style>
        body {
            background-color: linen;
            color: green;
            margin-left: 40px;
            margin-right: 40px;
        }

        h3 {
            text-align: center;
            color: darkred;
        }

        hr {
            height: 5px;
            border: solid grey;
            background-color: grey
        }

        span {
            color: blue;
            font-size: 20px;
        }
    </style>
    <script>
        function show() {
            document.getElementById("fig").src = "ElvisPresley.png";
        }
        function hide() {
            document.getElementById("fig").src = "";
        }
        function myImage() {
            document.getElementById("fig").src = "sohyun.jpg";
        }
    </script>
</head>

<body>
    <h3 onmouseover="show()" onmouseout="hide()">Elvis Presley</h3>
    <hr>
    <div><img id="fig" src=""></div> He was an American singer and actor. In November 1956, he made his film debut in
    <span onmouseover="myImage()" onmouseout="hide()">Love Me Tender</span>. He is often referred to as "<span>the King
        of Rock and Roll</span>".
</body>

</html>
```

![Untitled 3](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/4ecd4fa1-b31c-4dcf-9f5d-b01b5e4c281c)


![Untitled 4](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/acec9ca1-c849-4482-b8fe-ad59a8ae5478)


![Untitled 5](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/76c1e9a3-125e-44f3-9a82-d26e33bcaf4c)
