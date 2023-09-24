# flower 페이지를 자기소개 페이지로

---

### 반응형으로 만들기

iPhon XR보다 폭과 높이가 작거나 iPhone XR과 같은 폭과 높이라면 페이지의 색이 변경되도록 수정했습니다.

```css
@media (max-width: 414px) and (max-height: 896px) {
            body {
                background-color: #EADBC8;
            }

            section {
                background-color: #F8F0E5;
            }
        }
```

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/ecfdb6fd-3bb7-400d-a836-8e60aa6d6e9d)

![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/2181babb-cc1f-482c-ac6e-bff70dc9967b)

### 변환 사용하기

#my_info의 이미지에 마우스를 갖다대면 사진이 1.5배정도 커지도록 transform을 이용하여 수정했습니다.

```css
#my_info img:hover {
    transform: scale(1.5, 1.5);
}
```

![Untitled 2](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/c5460a56-e955-412b-8b82-094d3b77bf4e)

![Untitled 3](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/dd5cd9a5-94fd-4db6-9838-514aa9ec8fb4)


### 전환 사용하기

안소현에 커서를 갖다대면 글자가 2초에 걸쳐 커지도록 전환을 사용해 수정했습니다.

```css
#myname td {
    transition: font-size 2s;
}

#myname td:hover {
    font-size: 30px;
}
```

![Untitled](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/29302554-93a8-440f-a712-0647df37f3b8)

### 애니메이션 사용

```css
@keyframes anime {
    0% {
        width: 0%;
        height: 0%;
    }

    100% {
        width: 15%;
        height: 15%;
    }
}

#my_info img {
    width: 100px;
    height: 100px;
    border-radius: 50px;
    margin-right: 40px;
    animation-name: anime;
    animation-duration: 1s;
    animation-iteration-count: 1;
}
```

![Untitled 1](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/c4c71445-89ae-411f-ac02-fb1b8d3002b1)

### 페이지 내 나만의 컨텐츠 사용

![Untitled 2](https://github.com/SHAhn1111/WebProgrammingAssigments/assets/144648041/94de4c1b-cba5-4ec6-a8d7-9895ee4ca362)

### 폰트 변경

폰트를 jua 폰트로 변경하였습니다. google fonts에서 import했습니다.

```css
*@import* url('https://fonts.googleapis.com/css2?family=Jua&display=swap');
```
