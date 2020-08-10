<?php require __DIR__ . '/__connect_db.php';
$pageName = 'DIY';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>
<style>
    .container {
        width: 100%;
        min-height: 100vh;
        position: relative;
        background-size: cover;
        background-image: url(images/BG2.svg);
        background-repeat: repeat-y;
        user-select: none;
    }

    .diy-pattern {
        width: 100%;
        height: 100vh;
        position: absolute;
        z-index: 0;
        display: none;
    }

    .diy-pattern div {
        width: calc(100% / 3);
        height: 100vh;
    }

    .diy-pattern div img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    .wrapper {
        width: 1200px;
        flex-direction: column;
        justify-content: center;
        align-items: space-between;
    }

    .btn-top {
        z-index: 1;
    }

    .block-top {
        width: 100%;
        height: 100vh;
        text-align: center;
        flex-direction: column;
    }

    .block-top>h1 {
        margin: 200px 0 60px;
        font-family: 'Fredoka One';
        color: #03588C;
        letter-spacing: 5px;
        z-index: 1;
    }

    .block-top>h1:hover {
        color: #0388A6;
    }

    .block-top>div {
        justify-content: space-evenly;
        align-items: center;
    }

    .diy-socks {
        width: 300px;
        height: 400px;
    }

    .diy-socks img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: drop-shadow(2px 2px 2px rgb(61, 61, 61));
    }

    .img-title-bgc {
        width: 300px;
        position: relative;
        align-self: flex-end;
        margin-top: 30px;
        cursor: pointer;
    }

    .img-title-bgc .svg {
        width: 280px;
    }

    .img-title-bgc>h1 {
        color: white;
        position: absolute;
        font-family: 'Fredoka One';
        letter-spacing: 5px;
        font-size: 2rem;
        margin-top: 10px;
        cursor: pointer;
    }

    .img-title-bgc .cls-1 {
        fill: #FF9685;
        transition: .4s;
    }

    .img-title-bgc:hover .cls-1 {
        fill: #0388A6;
    }

    .block-bottom {
        flex-direction: column;
        margin: 0px 60px 150px;
        position: relative;
        padding-top: 100px;
    }

    .tutorial {
        align-self: flex-end;
        position: relative;
        width: 70px;
        height: 70px;
        cursor: pointer;
        margin-bottom: 20px;
    }

    .tutorial:hover {
        transform: scale(1.1);
    }

    .tutorial#tutor2 {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 3;
        display: none;
        padding-top: 100px;
    }

    .img-btn-closebg img {
        width: 70px;
    }

    .img-btn-closebg {
        position: absolute;
    }

    .img-btn-closebg div {
        font-size: 60px;
        transform: rotate(45deg);
        font-weight: 900;
        margin: -75px 0 0 17.5px;
    }

    .img-questionmark-circle img {
        width: 70px;
    }

    .img-questionmark-circle {
        position: absolute;
    }

    .img-questionmark {
        position: absolute;
        margin: 15px 0 0 27px;
    }

    .img-questionmark img {
        width: 20px;
    }

    .dash-box {
        width: 1080px;
        height: 800px;
        position: absolute;
        margin-top: 90px;
        z-index: 3;
        display: none;
        padding-top: 100px;
    }

    .step1 {
        top: 5px;
        right: 10px;
    }

    .step2 {
        top: 225px;
        right: 10px;
    }

    .clean-all {
        bottom: 100px;
        right: 290px;
    }

    .step4 {
        bottom: 100px;
        right: 30px;
    }

    .step4-1 {
        display: none;
    }

    .step3 {
        bottom: 240px;
        right: 510px;
    }

    .block-bottom .dash-box h3 {
        color: white;
        font-weight: 400;
        position: absolute;
    }

    .flexbox {
        flex-direction: row;
        justify-content: space-between;
        position: relative;
        z-index: 0;
    }

    .diy-area {
        width: 290px;
        height: 480px;
        margin-left: 150px;
    }

    .cls-1 {
        fill: red;
    }

    .box-right {
        width: 450px;
        height: 800px;
        background: #FCF2C1;
        border-radius: 15px;
        position: relative;
        z-index: 2;
    }

    .socks-color {
        width: 100%;
        height: 225px;
        border: 2px solid transparent;
        flex-direction: column;
        margin-bottom: 10px;
        position: relative;
    }

    .dash1 {
        width: 450px;
        height: 215px;
        border: 2px dashed #F2DE79;
        position: absolute;
        top: 0;
        right: 0;
    }

    .pattern-with-shape {
        width: 100%;
        height: 410px;
        border: 2px solid transparent;
        flex-direction: column;
        margin-bottom: 10px;
        position: relative;

    }

    .dash2 {
        width: 450px;
        height: 415px;
        border: 2px dashed #F2DE79;
        top: 220px;
        right: 0;
        position: absolute;
    }

    .btn-box {
        width: 100%;
        height: 140px;
        position: relative;
        justify-content: space-between;
        align-items: center;
    }

    .dash-left,
    .dash-right {
        position: absolute;
        width: 220px;
        height: 160px;
        border: 2px dashed #F2DE79;
        bottom: 0;
        right: 0;
    }

    .dash-left {
        right: 230px;
    }

    .dash-side {
        width: 50px;
        height: 225px;
        border: 2px dashed #F2DE79;
        position: absolute;
        bottom: 0;
        right: 950px;
    }

    .btn-left,
    .btn-right {
        width: 49%;
        height: 140px;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .socks-color>h3,
    .pattern h3,
    .shape h3 {
        margin: 30px 0 0 30px;
    }

    .sockscolor-dots {
        width: 420px;
        height: 140px;
        padding: 15px 0 0 30px;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        cursor: pointer;
    }

    .sockscolor-dots img {
        width: 50px;
        margin-right: 21px;
        opacity: 0;
    }

    .sockscolor-dots li div:hover img {
        opacity: 1;
    }

    .color {
        width: 40px;
        height: 40px;
        background: grey;
        border-radius: 50%;
        position: absolute;
        margin-top: -51.5px;
        margin-left: 5px;
    }

    .color#a1 {
        background: #03588C;
    }

    .color#a2 {
        background: #F2DE79;
    }

    .color#a3 {
        background: #0388A6;
    }

    .color#a3 {
        background: #FF9685;
    }

    .color#a4 {
        background: #AA9BDC;
    }

    .color#a5 {
        background: #C24343;
    }

    .color#a6 {
        background: #C2437A;
    }

    .color#a7 {
        background: #337A3A;
    }

    .color#a8 {
        background: #F88C00;
    }

    .color#a9 {
        background: #0388A6;
    }

    .color#a10 {
        background: #E5B48E;
    }

    .img-pattern {
        flex-wrap: wrap;
        width: 420px;
        height: 153px;
        padding: 15px 0 0 30px;
        margin-bottom: -40px;
    }

    .img-pattern div {
        width: 55px;
        margin: 0 20px 0 0;
        cursor: pointer;
        z-index: 0;
    }

    .shape-flex {
        flex-wrap: wrap;
        width: 420px;
        height: 153px;
    }

    .shape-flex div {
        width: 40px;
        height: 40px;
        margin: 15px 10px 0 30px;
        cursor: pointer;
        z-index: 0;
    }

    .img-strawberry,
    .img-cherry {
        width: 32px;
        margin-left: 4px;
    }

    .img-icecream {
        width: 25px;
        margin: -3px 0 0 8px;
    }

    .btn-box {
        justify-content: center;
        align-items: center;
    }

    .btn-box button {
        width: 180px;
        z-index: 1;
    }

    .btn-clear {
        background: #03588C;
    }

    .btn-clear:hover {
        background: #0388A6;
    }

    .btn-coral:hover {
        background: #0388A6;
    }

    .shape-color {
        width: 500px;
        height: 225px;
        background: white;
        border-radius: 15px;
        position: absolute;
        z-index: 0;
        bottom: 0;
        right: 0;
        overflow: hidden;
    }

    .shape-color-dots {
        width: 450px;
        height: 100%;
        /* border: 1px solid red; */
        position: absolute;
        top: 0;
        right: 0;
    }

    .sockscolor-dots#ul2 {
        padding: 50px 50px 0 0;
        margin: 10px 0 0 80px;
    }

    .sockscolor-dots#ul2 li {
        margin-bottom: 15px;
    }

    .socks-color#ul3 {
        display: none;
    }

    .shape-color h3 {
        color: #FF9685;
        font-family: 'Fredoka One';
        letter-spacing: 5px;
        transform: rotate(270deg);
        position: absolute;
        top: 100px;
        left: -25px;
        cursor: pointer;
    }

    .move-left {
        transform: translateX(-100%);
    }

    .color#b1 {
        background: #03588C;
    }

    .color#b2 {
        background: #F2DE79;
    }

    .color#b3 {
        background: #0388A6;
    }

    .color#b3 {
        background: #FF9685;
    }

    .color#b4 {
        background: #AA9BDC;
    }

    .color#b5 {
        background: #C24343;
    }

    .color#b6 {
        background: #C2437A;
    }

    .color#b7 {
        background: #337A3A;
    }

    .color#b8 {
        background: #F88C00;
    }

    .color#b9 {
        background: #0388A6;
    }

    .color#b10 {
        background: #E5B48E;
    }

    .modal {
        width: 100vw;
        height: 100vh;
        background: black;
        opacity: .6;
        position: fixed;
        top: 0;
        z-index: 2;
        display: none;
    }

    footer {
        z-index: 0;
    }

    @media screen and (max-width: 1200px) {
        .wrapper {
            width: 990px;
        }

        .diy-socks img {
            width: 250px;
            height: 340px;
        }

        .box-right {
            width: 350px;
            height: 750px;
        }

        .diy-area {
            margin-left: 100px;
        }

        .shape-color {
            width: 400px;
            height: 180px;
            padding-top: 10px;
        }

        .shape-color h3 {
            top: 77px;
        }

        .sockscolor-dots {
            width: 350px;
            height: 120px;
            padding: 0 5px 0 15px;
        }

        .sockscolor-dots {
            margin-top: 20px;
        }

        .sockscolor-dots li {
            justify-content: space-between;
            margin: 0 5px;
        }

        .sockscolor-dots li img {
            margin: 0 6px -1px 4px;
            width: 45px;
            /* opacity: 1; */
        }

        .image-select-circle {
            margin: 0;
        }

        .color {
            margin: -46px 0 0 8px;
            width: 37px;
            height: 37px;
        }

        .pattern-with-shape {
            height: 350px;
        }

        .pattern h3 {
            margin-top: 0;
        }

        .img-pattern {
            width: 350px;
        }

        .img-pattern div {
            width: 40px;
        }

        .shape h3 {
            margin-top: 10px;
        }

        .shape-flex {
            width: 350px;
            padding: 10px 0 0 12px;
        }

        .shape-flex div {
            margin: 10px 12px 0;
        }

        .sockscolor-dots#ul2 {
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 0;
            margin: 25px 0 0 50px;
        }

        .btn-box button {
            width: 160px;
        }

        .dash-box {
            width: 870px;
            height: 750px;
        }

        .dash1,
        .dash2 {
            width: 350px;
        }

        .dash-left,
        .dash-right {
            width: 173px;
        }

        .dash-left {
            right: 176px;
        }

        .dash2 {
            height: 360px;
        }

        .dash-side {
            right: 750px;
            height: 180px;
        }

        .clean-all {
            bottom: 120px;
            right: 210px;
        }

        .step4 {
            bottom: 120px;
            right: 0;
        }

        .step3 {
            right: 440px;
            bottom: 200px;
        }

    }

    @media screen and (max-width: 992px) {
        body {
            height: calc(100vh + 160px);
        }

        .wrapper {
            width: 100vw;
            height: 100vh;
            margin: 0;
            align-items: center;
        }

        .diy-pattern {
            display: none;
        }

        .block-top,
        .shape-color {
            display: none;
        }

        .block-bottom {
            width: 90vw;
            margin: 0;
            padding: 0;
        }

        .flexbox {
            flex-direction: column;
        }

        .box-left {
            width: 90vw;
            height: 30vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 2vw;
        }

        .box-right {
            background: white;
            width: 90vw;
            height: 50vh;
        }

        .diy-area {
            width: 100%;
            height: 100%;
            margin: 5vw 0 0 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .diy-area img {
            width: 25vw;
            height: 25vh;
        }

        .box-right {
            width: 90vw;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .socks-color,
        .pattern-with-shape,
        .socks-color#ul3 {
            width: 80%;
            height: 14vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .socks-color h3,
        .pattern-with-shape h3,
        .socks-color#ul3 h3 {
            margin: 1vh 0 1vh 0;
            width: 100%;
        }

        .sockscolor-dots {
            width: 100%;
            height: 12vh;
            margin: 0;
            padding: 0;
        }

        .pattern-with-shape {
            width: 80%;
            height: 10vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .img-pattern-empty,
        .shape {
            display: none;
        }

        .img-pattern {
            width: 100%;
            height: fit-content;
            padding: 0;
        }

        .pattern h3 {
            margin: 0;
        }

        .tutorial {
            position: absolute;
            z-index: 2;
        }

        .btn-box {
            width: 80%;
            height: 8vh;
        }

        .btn-box button {
            width: 90%;
            height: 45px;
        }

        .btn-left,
        .btn-right {
            height: fit-content;
        }

        .sockscolor-dots li img {
            margin: 0 6px -1px 4px;
        }

        .tutorial#tutor2 {
            padding: 0;
        }

        .step4,
        .dash-side,
        .step3 {
            display: none;
        }

        .dash-box {
            margin-top: calc(30vh + 2vw);
            width: 90vw;
            height: 50vh;
            /* border: 1px solid red; */
        }

        .dash1 {
            width: 100%;
            height: 14.5vh;
            top: 0;
            right: 0;
        }

        .dash2 {
            width: 100%;
            height: 26.5vh;
            top: 15vh;
        }

        .step2 {
            top: 15.5vh;
        }

        .dash-left,
        .dash-right {
            width: 49.7%;
            height: 7.8vh;
        }

        .dash-left {
            left: 0;
        }

        .clean-all {
            bottom: 4.5vh;
            left: 20%;
        }

        .step4-1 {
            display: block;
            bottom: 4.5vh;
            right: 15%;
        }

    }

    @media screen and (max-width: 576px) {
        .container {
            background-size: cover;
            background-image: url(images/BG-mobile2.svg);
            background-repeat: repeat-y;
        }

        .diy-area {
            padding-top: 2vh;
        }

        .diy-area img {
            width: 40vw;
        }

        .box-right {
            justify-content: space-evenly;
        }

        .color {
            margin: -46px 0 0 8px;
            width: 25px;
            height: 25px;
        }

        .sockscolor-dots li img {
            width: 32px;
            height: 32px;
            margin: 0 6px 12px 5px
        }

        .img-pattern img {
            width: 30px;
        }

        .btn-box {
            height: 5vh;
        }

        .btn-box button {
            height: 30px;
        }

        .step1,
        .step2,
        .step4-1,
        .clean-all {
            font-size: .8rem;
            white-space: nowrap;
        }

        .clean-all {
            bottom: 5vh;
            left: 17%;
        }

        .step4-1 {
            display: block;
            bottom: 5vh;
            right: 10%;
        }

    }
</style>


<div class="container flex">
    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="diy-pattern flex spot mobile-none">
        <div class="pattern-bg1">
            <img src="images/socks-bg1.svg" alt="">
        </div>
        <div class="pattern-bg2">
            <img src="images/socks-bg2.svg" alt="">
        </div>
        <div class="pattern-bg3">
            <img src="images/socks-bg3.svg" alt="">
        </div>
    </div>
    <div class="wrapper flex">
        <div class="block-top flex mobile-none">
            <h1 class="transition">Create your own WATZ !</h1>
            <div class="flex transition">
                <div class="diy-socks"><img class="transition" src="images/linebox-02.png" alt=""></div>
                <div class="diy-socks"><img class="transition" src="images/linebox2-05.png" alt=""></div>
                <div class="diy-socks"><img class="transition" src="images/linebox2-04.png" alt=""></div>
            </div>
            <div class="img-title-bgc flex transition go-next">
                <img class="svg icon" src="images/title-bgc.svg" alt="">
                <h1>START</h1>
            </div>
        </div>
        <div class="block-bottom flex">
            <div class="tutorial transition">
                <div class="img-questionmark-circle"><img src="images/questionmark circle.svg" alt=""></div>
                <div class="img-questionmark"><img src="images/questionmark.svg" alt=""></div>
            </div>
            <div class="tutorial transition" id="tutor2">
                <div class="img-btn-closebg">
                    <img src="images/btn-closebg.svg" alt="">
                    <div>+</div>
                </div>
            </div>
            <div class="dash-box">
                <h3 class="step1">Step1. 選擇襪子底色</h3>
                <div class="dash1"></div>
                <h3 class="step2">Step2. 選擇襪子樣板或圖案</h3>
                <div class="dash2"></div>
                <h3 class="clean-all">清除樣式</h3>
                <div class="dash-left"></div>
                <h3 class="step4 mobile-none">Step4. 完成啦!</h3>
                <h3 class="step4-1">Step3. 完成啦!</h3>
                <div class="dash-right"></div>
                <h3 class="step3">Step3. 點選此處選擇圖樣顏色</h3>
                <div class="dash-side"></div>
            </div>
            <div class="flexbox flex transition">
                <div class="box-left transition">
                    <div><img class="diy-area transition" src="images/pattern-white.svg" alt="">
                    </div>
                </div>
                <div class="box-right ">
                    <div class="socks-color flex">
                        <h3>Socks Color</h3>
                        <ul class="sockscolor-dots flex">
                            <li class="flex">
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a1">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a2">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a3">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a4">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a5">
                                    </div>
                                </div>
                            </li>
                            <li class="flex">
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a6">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a7">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a8">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a9">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a10">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="pattern-with-shape">
                        <div class="pattern">
                            <h3>Pattern</h3>
                            <div class=" img-pattern flex">
                                <div class="img-pattern-watz"><img src="images/pattern-watz.svg" alt=""></div>
                                <div class="img-pattern-stripe"><img src="images/pattern-stripe.svg" alt=""></div>
                                <div class="img-pattern-dotted"><img src="images/pattern-dotted.svg" alt=""></div>
                                <div class="img-pattern-white mobile-none">
                                    <img src="images/pattern-white.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="shape mobile-none">
                            <h3>Shape</h3>
                            <div class="shape-flex flex">
                                <div><img src="images/shape-triangle.svg" alt=""></div>
                                <div><img src="images/shape-circle.svg" alt=""></div>
                                <div><img src="images/shape-square.svg" alt=""></div>
                                <div><img src="images/shape-rhombus.svg" alt=""></div>
                                <div><img src="images/shape-heart.svg" alt=""></div>
                                <div><img class="img-strawberry" src="images/shape-strawberry.svg" alt=""></div>
                                <div><img src="images/shape-watermelon.svg" alt=""></div>
                                <div><img class="img-cherry" src="images/shape-cherry.svg" alt=""></div>
                                <div><img class="img-icecream" src="images/shape-icecreem.svg" alt=""></div>
                                <div><img src="images/shape-pizza.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="socks-color flex mobile-show" id="ul3">
                        <h3>Shape Color</h3>
                        <ul class="sockscolor-dots flex">
                            <li class="flex">
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a1">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a2">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a3">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a4">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a5">
                                    </div>
                                </div>
                            </li>
                            <li class="flex">
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a6">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a7">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a8">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a9">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color" id="a10">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-box flex">
                        <div class="btn-left flex">
                            <button class="btn-blue
                             btn-clear">Clear</button>
                        </div>
                        <div class="btn-right flex">
                            <button class="btn-coral btn-finish">Finish</button>
                        </div>
                    </div>
                </div>
                <div class="shape-color flex ">
                    <h3 class="color-active">COLOR</h3>
                    <ul class="sockscolor-dots flex" id="ul2">
                        <li class="flex">
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color" id="b1">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color" id="b2">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color" id="b3">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color" id="b4">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color" id="b5">
                                </div>
                            </div>
                        </li>
                        <li class="flex">
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color" id="b6">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color" id="b7">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color" id="a8">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color" id="b9">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color" id="b10">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal"></div>
    <?php include __DIR__ . '/__html_footer.php' ?>
</div>
<?php include __DIR__ . '/__scripts.php' ?>

<script>
    // anchor point
    $(".go-next").click(function() {
        let nextPosition = $(".block-bottom").offset().top;
        console.log(nextPosition)
        $("html").animate({
            scrollTop: nextPosition
        })
        $(".modal").fadeIn(500);
        $(".modal").css({
            "display": "block"
        })
        $(".tutorial#tutor2").css({
            "display": "block"
        })
        $(".dash-box").css({
            "display": "block"
        })
        $(".shape-color").addClass("transition")
        $(".shape-color").addClass("move-left")
    })

    // shape-color move left
    $(".color-active").click(function(event) {
        console.log("click", event)
        // $(this).css({
        //     transform: "translateX(-500px)",
        // })
        $(".shape-color").addClass("transition")
        $(".shape-color").toggleClass("move-left")
    })

    // 打開使用說明
    $(".tutorial").click(function() {
        console.log("click")
        $(".modal").fadeIn(500);
        $(".modal").css({
            "display": "block"
        })

        $(".tutorial#tutor2").css({
            "display": "block"
        })
        $(".dash-box").css({
            "display": "block"
        })
        $(".shape-color").addClass("transition")
        $(".shape-color").addClass("move-left")
    })


    $(".tutorial#tutor2").click(function() {
        $(".modal").fadeOut(500);
        $(".tutorial#tutor2").css({
            "display": "none"
        })
        $(".dash-box").css({
            "display": "none"
        })
        $(".shape-color").removeClass("move-left")
    })

    // mousemove
    // default tutorial

    if ($(window).width() > 992) {
        $(window).mousemove(function(e) {
            // console.log(e.screenX)
            $(".spot").css("display", "flex")
            $(".spot").css("clip-path", `circle(140px at ${e.pageX}px ${e.pageY - 30}px`)
        })

    } else {
        $(".modal").fadeIn(500);
        $(".modal").css({
            "display": "block"
        })

        $(".tutorial#tutor2").css({
            "display": "block"
        })
        $(".dash-box").css({
            "display": "block"
        })
        $(".shape-color").addClass("transition")
        $(".shape-color").addClass("move-left")
    }

    $(window).resize(function() {
        if ($(window).width() > 992) {
            $(window).mousemove(function(e) {
                $(".spot").css("display", "flex")
                $(".spot").css("clip-path", `circle(140px at ${e.pageX}px ${e.pageY - 30}px`)
            })
            $(".modal").fadeOut(500);
            $(".tutorial#tutor2").css({
                "display": "none"
            })
            $(".dash-box").css({
                "display": "none"
            })
            $(".shape-color").removeClass("move-left")
        } else {
            $(".diy-pattern").css({
                "display": "none"
            })
            $(window).off("mousemove");
            $(".modal").fadeIn(500);
            $(".modal").css({
                "display": "block"
            })

            $(".tutorial#tutor2").css({
                "display": "block"
            })
            $(".dash-box").css({
                "display": "block"
            })
            $(".shape-color").addClass("transition")
            $(".shape-color").addClass("move-left")
        }
    })

    

    //DIY change Pattern
    $(".img-pattern-watz img").click(function() {
        let imgSrc = $(this).attr("src")
        $(".diy-area").attr("src", imgSrc)
    })
    $(".img-pattern-stripe img").click(function() {
        let imgSrc = $(this).attr("src")
        $(".diy-area").attr("src", imgSrc)
    })
    $(".img-pattern-dotted img").click(function() {
        let imgSrc = $(this).attr("src")
        $(".diy-area").attr("src", imgSrc)
    })
    $(".img-pattern-white img").click(function() {
        let imgSrc = $(this).attr("src")
        $(".diy-area").attr("src", imgSrc)
    })

    //DIY change socks color
</script>

<?php require __DIR__ . '/__html_foot.php' ?>