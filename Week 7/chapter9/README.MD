# Chapter 9

---

### 1. 브라우저 내의 아무곳이나 클릭하면 왼쪽 화면과 같고, 브라우저 바깥의 아무 곳에 마우스를 클릭하면 브라우저의 배경색이 lightgray로 바뀌도록 웹 페이지를 작성하라.

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/f8e70846-708c-4c92-8350-96269c50a914)


```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>onblur와 onfocus</title>
    <script>
        window.onblur = function (e) {
            document.body.style.backgroundColor = "lightgray";
        }
        window.onfocus = function (e) {
            document.body.style.backgroundColor = "white";
        }
    </script>
</head>

<body>
    <h3>포커스와 onblur,onfocus</h3>
    <hr>
    <p> 브라우저 바깥에 마우스를 클릭하면 window 객체에 blur 이벤트가 발생하고 다시 마우스를 클릭하면 window 객체에 focus 이벤트가 발생한다.
</body>

</html>
```

### 2. 라디오버튼으로 선택하면 해당 이미지를 출력하는 웹 페이지를 작성하라.

![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/71d84a0a-e1ea-47cb-a2cb-cd8f159c226f)


```html
<!DOCTYPE html>
<meta charset="utf-8">

<head>
    <title>라디오 버튼과 이미지 출력</title>
    <script>
        function draw() {

            let found = null;
            let fruits = document.getElementsByName("fruit")

            for (let i = 0; i < fruits.length; i++) {
                if (fruits[i].checked == true) {
                    found = fruits[i].value
                }
            }

            document.getElementById("fruit").src = "media/" + found + ".png"

        }
    </script>
</head>

<body>
    <h3>라디오 버튼을 클릭하면 이미지를 출력합니다.</h3>
    <hr>
    <form onchange="draw()">
        <input type="radio" name="fruit" value="banana">바나나 <input type="radio" name="fruit" value="mango">망고 <input
            type="radio" name="fruit" value="apple">사과
    </form>
    <img id="fruit" src="">
</body>

</html>
```

### 3. 계산식을 입력받아 결과를 출력하는 웹 페이지를 작성하라. 식 입력 후 <Enter> 키를 치면 수식을 계산하고 결과를 출력한다.

![Untitled 2](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/9c441f75-c647-47ce-bd97-372d3fe89dd1)

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>onkeydown</title>
    <script>
        function calculate(e) {
            if (e.key == "Enter") {
                let exp = document.getElementById("cal");
                let result = document.getElementById("result");
                result.value = eval(exp.value);
            }
        }
    </script>
</head>

<body>
    <h3>계산기 만들기</h3>
    <hr> 수식을 입력하고 &lt;Enter&gt;를 입력하세요. <p>
    <form> 식 <input type="text" id="cal" value="" onkeydown="calculate(event)"><br> 값 <input type="text" id="result">
    </form>
</body>

</html>
```

### 4. onmousemove를 이용하여 웹 페이지에 마우스가 움직일 때 이미지를 마우스 커서처럼 사용하도록 웹 페이지를 작성하라. 이미지는 가로 30픽셀, 세로 30 픽셀 크기로 하라.

![Untitled 3](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/6539bc67-2215-4e3c-9b59-a6f94dfcfb80)

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>onmousemove</title>
    <style>
        div {
            position: absolute;
            display: inline-block;
        }

        img {
            width: 30px;
            height: 30px;
        }
    </style>
    <script>
        document.onmousemove = function (e) {
            let div = document.getElementById("cur")
            div.style.top = e.y + "px"
            div.style.left = e.x + "px"
        }
    </script>
</head>

<body>
    <h3>이미지 커서 만들기</h3>
    <hr> 마우스를 움직이면 이미지로 만든 커서가 마우스를 따라 다닙니다. <div id="cur"><img src="media/spongebob.png"></div>
</body>

</html>
```

### 5. 브라우저의 아무 곳이나 더블클릭하면 바탕색이 랜덤하게 바뀌는 웹 페이지를 작성하라.

![Untitled 4](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/547ab449-c5d7-41bc-b6c3-7849466a8dc4)

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>자바스크립트 연습</title>
    <script>
        function randomBackground() {
            let r = Math.floor(Math.random() * 256);
            let g = Math.floor(Math.random() * 256);
            let b = Math.floor(Math.random() * 256);
            document.body.style.backgroundColor =
                "rgb(" + r + "," + g + "," + b + ")";
        }
    </script>
</head>

<body ondblclick="randomBackground()">
    <h3>바탕 아무 곳에나 더블 클릭</h3>
    <hr>
    <p>바탕 아무 곳이나 <strong>더블클릭</strong>하면 배경색이 랜덤하게 변합니다. </p>
</body>

</html>
```

ondbclick리스너를 이용해 더블클릭시 처리되도록함

### 6. 이미지 위에 마우스 휠을 위로 굴리면 이미지가 5%씩 축소되고 아래로 굴리면 5%씩 확대되는 웹 페이지를작성하라.

![Untitled 5](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/631e282b-58dc-4d0e-97b4-c27581229d58)

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>onwheel</title>
    <script>

        function wheel(e, obj) {
            if (e.wheelDelta < 0) {
                obj.height -= obj.height * 0.05;
                obj.width -= obj.width * 0.05;
            }
            else {
                obj.width += obj.width * 0.05;
                obj.height += obj.height * 0.05;
            }
        }
    </script>
</head>

<body>
    <h3>마우스 휠을 이용한 이미지 확대/축소</h3>
    <hr>
    <p>이미지 위에 휠을 위로 굴리면 이미지가 축소되고 아래로 굴리면 이미지가 확대됩니다.</p>
    <img src="media/tulips.png" onmousewheel="wheel(event,this)">
</body>

</html>
```

### 7. 웹 페이지에 있는 모든 <span> 태그에 대해, 마우스가 올라오면 해당 태그의 텍스트에 밑줄을 긋고, 내려가면 밑줄을 지우는 자바스크립트 코드를 완성하라.

![Untitled 6](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/3e32338f-1e12-4678-91b0-d520af53dcb6)

```html
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>이벤트 객체의 target</title>
	<script>
        window.onmouseout = function (e) {
			if (e.target.tagName.toLowerCase() != "span") return;
			e.target.style.textDecoration = "none";
		}
		window.onmouseover = function (e) {
			if (e.target.tagName.toLowerCase() != "span") return;
			e.target.style.textDecoration = "underline";
		}
		
	</script>
</head>

<body>
	<h3>span 태그에만 onmouseover/onmouseout</h3>
	<hr>
	<p>span 태그에 대해서만 <span>마우스</span>가 올라올 때 밑줄이 그어지고 <span>마우스</span>가 내려갈 때 밑줄이 사라지도록 <span>자바스크립트 코드</span>를 작성한다.
	</p>
</body>

</html>
```

onmouseout/over을 이용해서 출력

### 8.다음 웹 페이지에서 <1i> 아이템을 클릭하면 텍스트 크기를 1.3 배(1.3em)로 출력하도록 자바스크립트코드를작성하라. 다른 아이템이 클릭되면 이전 아이템을 원래 크기로 (lem) 출력한다.

![Untitled 7](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/984897ba-71f9-44de-9536-a6126989115b)


```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>이벤트 객체의 target</title>
    <script>
        let tt = document.getElementsByTagName("li")

        function first() {
            for (let i = 0; i < tt.length; i++) {
                tt[i].onclick = sizeUp
            }
        }

        function resetSize(){
            for(let i = 0;i<tt.length;i++){
                tt[i].style.fontSize = "1em"
            }
        }

        function sizeUp(e){
            resetSize()
            e.target.style.fontSize = "1.3em"
        }

    </script>
</head>

<body onload = "first()">
    <h3>아이템을 클릭하면 1.3배 크기로</h3>
    <hr>
    <p>여름 방학 때 하고 싶은 것들</p>
    <ul>
        <li>자전거로 대한민국 일주</li>
        <li>책 100권 읽기</li>
        <li>철인 3종 경기 준비</li>
        <li>자바스크립트 정복</li>
    </ul>
</body>

</html>
```

### 9. 리스트를 만들고 아이템 영역 안에 마우스를 들어오면 다음과 같이 자세한 설명을 출력하는 웹 페이지를 작성하라.

![Untitled 8](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/c933c020-e20e-4833-8725-cfcae0aa9143)

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>onmouseover과 onmouseout</title>
    <script>
        let text = ["빨간자전거를 타고 서울, 대전, 대구, 부산 찍고, 목포, 인천을 거쳐 달린다",
            "한국 고전 50권, 외국 고전 50권을 읽는 목표",
            "아침에는 수영을 배우고, 점심먹고 자전거 훈련 30KM, 저녁에는 10KM 달리기 하기",
            "문제가 많고 잘 정리된 자바스크립트 책을 구입하여 본격적으로 연습문제 풀기"];
        let commentDiv;

        function init() {
            commentDiv = document.getElementById("commentDiv");

            let liArray = document.getElementsByTagName("li");
            for (let i = 0; i < liArray.length; i++) {
                liArray[i].addEventListener("mouseover", over, false);
                liArray[i].addEventListener("mouseout", hideCommentDiv, false);
            }
        }

        function over(e) {
            let n = 0;
            switch (e.target.id) {
                case "l0": n = 0; break;
                case "l1": n = 1; break;
                case "l2": n = 2; break;
                case "l3": n = 3; break;
            }
            setCommentDiv(text[n], e);
        }

        function setCommentDiv(comment, e) {
            commentDiv.innerHTML = comment;
            commentDiv.style.left = e.clientX + "px";
            commentDiv.style.top = e.clientY + "px";
            commentDiv.style.border = "1px solid yellowgreen";
            commentDiv.style.background = "aliceblue";
            commentDiv.style.visibility = "visible";
            commentDiv.style.width = "200px";
            commentDiv.style.height = "80px";
        }

        function hideCommentDiv() {
            commentDiv.style.visibility = "hidden";
        }

    </script>
</head>

<body onload="init()">
    <h3>아이템에 마우스를 올리면 설명 출력</h3>
    <hr>
    <p>여름 방학 때 하고 싶은 것들</p>
    <ul>
        <li id="l0">자전거로 대한민국 일주</li>
        <li id="l1">책 100권 읽기</li>
        <li id="l2">철인 3종 경기 준비</li>
        <li id="l3">자바스크립트 정복</li>
    </ul>
    <div id="commentDiv" style="position:absolute"></div>
</body>

</html>
```

### 10. 다음 브라우저 화면과 같은 모양의 계산기 웹 페이지를 작성하라. 입력 창에는 초기에 0이 출력된다. 숫자와 연산자 버튼을 눌러 계산식을 만들고 = 버튼을 클릭하면 계산 결과를 출력한다. BACK 버튼을 누르면 입력창의 마지막 문자를 지운다. CE나 C 버튼은 같은 기능으로, 입력 창의 내용을 모두 지우고 처음처럼 0이 출력되게 한다. NONE 버튼은 아무 기능이 없다.

![Untitled 9](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/502e8410-78a2-4b89-882d-c45c3dbba3f8)

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        td {
            width: 75px;
            height: 30px;
        }

        input {
            width: 70px;
            height: 25px;
        }
    </style>
    <script>
        let expression = ""

        function getCh(n) {

            expression += n
            document.getElementById("ip").value = expression
        }
        function calculate() {
            document.getElementById("ip").value = eval(expression)
        }
        function resetNum() {
            expression = ""
            document.getElementById("ip").value = "0"
        }
        function eraseNum() {
            let t = document.getElementById("ip").value
            if (t.length > 0) {
                expression = t.substring(0, t.length - 1)

                document.getElementById("ip").value = expression
            }
        }
    </script>
</head>

<body>
    <h3>계산기 만들기</h3>
    <hr>
    <input type="text" style="width: 300px;" id="ip" value="0">
    <table>
        <tr>
            <td><input type="button" value="BACK" onclick="eraseNum()"></td>
            <td><input type="button" value="CE" onclick="resetNum()"></td>
            <td><input type="button" value="C" onclick="resetNum()"></td>
            <td><input type="button" value="=" onclick="calculate()"></td>
        </tr>
        <tr>
            <td><input type="button" value="7" onclick="getCh('7')"></td>
            <td><input type="button" value="8" onclick="getCh('8')"></td>
            <td><input type="button" value="9" onclick="getCh('9')"></td>
            <td><input type="button" value="/" onclick="getCh('/')"></td>
        </tr>
        <tr>
            <td><input type="button" value="4" onclick="getCh('4')"></td>
            <td><input type="button" value="5" onclick="getCh('5')"></td>
            <td><input type="button" value="6" onclick="getCh('6')"></td>
            <td><input type="button" value="*" onclick="getCh('*')"></td>
        </tr>
        <tr>
            <td><input type="button" value="1" onclick="getCh('1')"></td>
            <td><input type="button" value="2" onclick="getCh('2')"></td>
            <td><input type="button" value="3" onclick="getCh('3')"></td>
            <td><input type="button" value="-" onclick="getCh('-')"></td>
        </tr>
        <tr>
            <td><input type="button" value="0" onclick="getCh('0')"></td>
            <td><input type="button" value="+" onclick="getCh('+')"></td>
            <td><input type="button" value="NONE"></td>
            <td><input type="button" value="NONE"></td>
        </tr>
    </table>
</body>

</html>
```
