# Chapter5

---

### prac5-01-1

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/07331200-7882-40fc-bb09-a79d13ffc34e)


-display를 이용해서 div를 inline-block으로 함

### prac5-01-2

![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/82ff42af-8571-477c-8874-fee001f86e3a)

-display를 이용해서 div를 inline으로 함

### prac5-02

![Untitled 2](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/9ca7950c-e72f-4acd-8afd-dfed4920233a)

-position:fixed를 이용해 div를 고정시킴. bottom과 left로 위치를 지정해줌

### prac5-03

![Untitled 3](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/89cc84d0-2cfc-4147-85f9-2bbb365db5e2)

-border로 테두리를 꾸밀 수 있음

```css
td.index {
border: 1px solid yellowgreen;
padding-left: 3px;
padding-right: 3px;
}
th {
        width: 200px;
        text-align: left;
        border-bottom: 1px solid gray;
    }

```

### prac5-04-1

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/68f42e86-8c78-4494-8cab-97186b7a7997)

-list-style-type을 통해 ul태그의 순서 아이콘을 변경할 수 있고 padding-right로 패딩 값을 지정함

### prac5-04-2

![Untitled 4](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/e6519b91-c231-4811-bd49-2b369dabe863)


-background-img로 배경이미지를 삽입할수있음

### prac5-05

![Untitled 5](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/5abb4f26-5694-4a79-b108-1a8fc60a8cda)

-float:left로 div를 왼쪽으로 배치

### prac5-06-1

![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/3f01da2d-6723-4e54-8d63-cc0d748b74e9)


-애니메이션 회전효과 애니메이션 지속시간, 애니메이션 반복 횟수를 지정

```css
#rotate {
animation-duration: 1s;
animation-name: rotate;
animation-iteration-count: infinite;
}    
@keyframes rotate {
        100% {
            transform: rotate(360deg);
        }
    }

```

### prac5-06-2

![Untitled 2](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/478b0dc3-bd82-44dd-a7eb-a81e1d34c5af)

```css
#rotate {
            animation-duration: 1s;
            animation-name: rotate;
            animation-iteration-count: infinite;
        }
@keyframes rotate {
            50% {
                transform: rotate(-90deg);
            }

            100% {
                transform: rotate(90deg);
            }
        }
```

### prac5-07

![Untitled 3](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/f6001232-fda0-4379-adb1-4fb63c5c7dbf)

-transition을 이용해 이미지를 늘림

### prac5-08

![Untitled 4](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/2aba5c61-9c84-4a65-9251-cc382f5868db)

-display:block;으로 리스트를 수직 리스트로 만듦

### prac5-09

![Untitled 6](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/137205ee-3997-4a88-be71-9eb0e7acbede)

-font로 원하는 font스타일로 만들 수 있음

```css
ol li {
            font: bold italic 35px Helvetica;
            padding-left: 5px;
            margin-bottom: 10px;
        }
```

### prac5-10

![Untitled 5](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/78c77c53-a9d7-4776-a30b-afd91d850bf2)

```css
#ani {
            animation-duration: 3s;
            animation-name: animation;
            animation-iteration-count: 1;
        }

        @keyframes animation {
            0% {
                margin-left: 100%;
            }

            100% {
                margin-left: 0%;
            }
        }
```
