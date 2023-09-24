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

![Untitled](flower%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%B3%E1%86%AF%20%E1%84%8C%E1%85%A1%E1%84%80%E1%85%B5%E1%84%89%E1%85%A9%E1%84%80%E1%85%A2%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%A9%207910c5ad0a1946c18875c75d2b02d635/Untitled%201.png)

### 변환 사용하기

#my_info의 이미지에 마우스를 갖다대면 사진이 1.5배정도 커지도록 transform을 이용하여 수정했습니다.

```css
#my_info img:hover {
    transform: scale(1.5, 1.5);
}
```

![Untitled](flower%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%B3%E1%86%AF%20%E1%84%8C%E1%85%A1%E1%84%80%E1%85%B5%E1%84%89%E1%85%A9%E1%84%80%E1%85%A2%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%A9%207910c5ad0a1946c18875c75d2b02d635/Untitled%202.png)

![Untitled](flower%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%B3%E1%86%AF%20%E1%84%8C%E1%85%A1%E1%84%80%E1%85%B5%E1%84%89%E1%85%A9%E1%84%80%E1%85%A2%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%A9%207910c5ad0a1946c18875c75d2b02d635/Untitled%203.png)

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

![Untitled](flower%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%B3%E1%86%AF%20%E1%84%8C%E1%85%A1%E1%84%80%E1%85%B5%E1%84%89%E1%85%A9%E1%84%80%E1%85%A2%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%A9%207910c5ad0a1946c18875c75d2b02d635/Untitled.gif)

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

![Untitled](flower%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%B3%E1%86%AF%20%E1%84%8C%E1%85%A1%E1%84%80%E1%85%B5%E1%84%89%E1%85%A9%E1%84%80%E1%85%A2%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%A9%207910c5ad0a1946c18875c75d2b02d635/Untitled%201.gif)

### 페이지 내 나만의 컨텐츠 사용

![Untitled](flower%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%B3%E1%86%AF%20%E1%84%8C%E1%85%A1%E1%84%80%E1%85%B5%E1%84%89%E1%85%A9%E1%84%80%E1%85%A2%20%E1%84%91%E1%85%A6%E1%84%8B%E1%85%B5%E1%84%8C%E1%85%B5%E1%84%85%E1%85%A9%207910c5ad0a1946c18875c75d2b02d635/Untitled%202.gif)

### 폰트 변경

폰트를 jua 폰트로 변경하였습니다. google fonts에서 import했습니다.

```css
*@import* url('https://fonts.googleapis.com/css2?family=Jua&display=swap');
```
