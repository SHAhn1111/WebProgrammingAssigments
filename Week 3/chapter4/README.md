# Chapter4

---

### prac4-01

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/a4401932-5834-47d6-8e36-e57f5aac967f)

셀렉터를 이용해서 원하는 효과 주기

### prac4-02

![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/6d522e66-d0d9-4f93-a3e8-051047b3e064)


```css
p {
            background-color: aliceblue;
            text-indent: 1.5em;
            font: 10px Lucida Console;
            color: brown;
        }

        span {
            text-decoration: underline;
            font-size: 1.5em;
        }
```

### prac4-03

![Untitled 2](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/c8d82d88-4ea0-4d4d-b940-cb2f94c42f9f)

```html
<table border="1">
        <thead>
            <tr>
                <th>이름</th>
                <th>코드</th>
                <th>색</th>
                <th>이름</th>
                <th>코드</th>
                <th>색</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Brown</td>
                <td>#A52A2A</td>
                <td style="background-color: #A52A2A;" width="50"></td>
                <td>DeepSkyBlue</td>
                <td>#00BFFF</td>
                <td style="background-color: #00BFFF;" width="50"></td>
            </tr>
            <tr>
                <td>Blueviolet</td>
                <td>#8A2BE2</td>
                <td style="background-color: #8A2BE2;"></td>
                <td>Gold</td>
                <td>#FFD700</td>
                <td style="background-color: #FFD700;"></td>
            </tr>
            <tr>
                <td>DarkOrange</td>
                <td>#FF8C00</td>
                <td style="background-color: #FF8C00;"></td>
                <td>OliveDrab</td>
                <td>#6B8E23</td>
                <td style="background-color: #6B8E23;"></td>
            </tr>
        </tbody>
    </table>
```

색이름 뿐아니라 #형태로도 색 지정 가능

### prac4-04

![Untitled 3](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/4014a5be-b0d6-4b1e-bd07-b39de37238de)


```css
.main {
            background-color: powderblue;
        }

        .headline {
            text-align: center;
            color: brown;
            font-size: 2em;
        }

        div.help {
            color: blue;
        }

        p.help {
            color: red;
            font-size: 1.5em;
        }

        #hot {
            background-color: orange;
        }
```

id셀렉터, class 셀렉터를 이용하기

### prac4-05

![Untitled 4](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/35ab4379-29e8-49e4-ac94-89abd21584b4)

```css
h3,
        em {
            color: green;
        }

        #center strong {
            background: yellow;
        }

        div>strong {
            color: blue;
        }

        #center {
            text-align: center;
        }

        .indent strong {
            color: red;
        }

        .indent {
            text-indent: 3em;
        }

        body.main {
            background: powderblue;
        }
```

### prac4-06

![Untitled 5](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/4fa3f566-4a35-4331-ac6e-575485e9111e)

```css
a {
            color: green;
            text-decoration: none;
        }

        a:hover {
            color: violet;
            text-decoration: underline;
        }
```

### prac4-07

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/9b342756-2e64-44ae-b090-6d081cfb848a)

```css
div {
            width: 100px;
            height: 140px;
            background-image: url("media/back.png");
            background-size: 100px 140px;
        }

        div#img:hover {
            background-image: url("media/spade-7.png");
        }
```

:hover활용 :hover는 커서를 갖다 댈때 적용

### prac4-08

![Untitled 6](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/b6f5a504-3311-432a-86d1-90f84417ca7a)

```css
img {
            width: 300px;
            height: 150px;
            padding: 5px;
            border: 15px solid lightgray;
        }

        #round {
            border-image: url("media/checkpattern.png") 30 round;
        }
```

id셀렉터를 이용하고 border-image로 이미지의 테두리를 꾸밈

### prac4-09

![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/10ff474e-bf3d-4e29-a482-35eb01c0115a)


```css
h2 {
            text-align: center;
            color: yellow;
            text-shadow: 2px 2px 3px blue;
        }

        img:hover {
            box-shadow: 0px 0px 5px blue;
        }
```

:hover를 활용하고 text-shadow, box-shadow로 그림자 효과 주기
