# OpenChallenge08

---

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/304d3557-2ded-4d46-a409-63d80a16008c)


```html
<!doctype html>
<html>

<head>
    <meat charset="UTF-8">
        <title>갬블링 게임</title>
        <style>
            #block {
                background-color: linen;
                width: 150px;
                height: 70px;
                padding-left: 5px;
                font-style: italic;
                color: blue;
                font-size: 50px;
                border: 2px solid pink;
            }

            #result {
                color: purple;
                font-style: italic;
            }
        </style>
</head>

<body>
    <script>
        function firstC() {
            var firstN = document.getElementById("first");
            var num = Math.floor(Math.random() * 3);
            firstN.innerHTML = num;
        }
        function secondC() {
            var secondN = document.getElementById("second");
            var num = Math.floor(Math.random() * 3);
            secondN.innerHTML = num;
        }
        function thirdC() {
            var firstN = document.getElementById("first");
            var secondN = document.getElementById("second");
            var thirdN = document.getElementById("third");
            var num = Math.floor(Math.random() * 3);
            thirdN.innerHTML = num;

            if ((thirdN.innerHTML == firstN.innerHTML) && (thirdN.innerHTML == secondN.innerHTML)) {
                document.getElementById("result").innerHTML = "Success(click here to do again)";
            }
            else
                document.getElementById("result").innerHTML = "fail(click here to do again)";
        }
        function again() {
            document.getElementById("result").innerHTML = " ";
            document.getElementById("first").innerHTML = 0;
            document.getElementById("second").innerHTML = 0;
            document.getElementById("third").innerHTML = 0;
        }
    </script>
    <h3>갬블링 게임</h3> 각 숫자를 클릭하면 0에서 2사이의 난수로 바뀝니다. 모두 같은 수가 나오면 승리합니다.
    <hr>
    <div id="block">
        <span id="first" onclick="firstC()"> 0 </span>
        <span id="second" onclick="secondC()"> 0 </span>
        <span id="third" onclick="thirdC()"> 0 </span>
    </div>
    <div id="result" onclick="again()"></div>
</body>

</html>
```

첫번째 숫자, 두번째 숫자, 세번째숫자가 바뀌도록 각각 함수를 만들어주고 if문으로 각각의 innerHTML이 같으면 success를 출력하고 아니면 fail을 출력하도록함
