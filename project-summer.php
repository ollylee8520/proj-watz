<?php require __DIR__ . '/__connect_db.php';
$pageName = 'project summer';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>

<!-- font-family: 'Josefin Sans', sans-serif; -->
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">


<style>
    .container {
        width: 100vw;
        min-height: 100vh;
        user-select: none;
        overflow-x: hidden;
    }

    .bg-left,
    .bg-right {
        width: calc(100vw / 2);
        height: 100vh;
        position: relative;
        z-index: -1;
    }

    .absolute {
        position: absolute;
    }

    .bg-blue,
    .bg-red {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .img-dot1 {
        width: 180px;
        top: 0;
        left: 80px;
        mix-blend-mode: multiply;
    }

    .img-text {
        width: 60px;
        top: 160px;
        left: 0;
        position: fixed;
        z-index: 1;
    }

    .img-pineapple {
        width: 460px;
        bottom: 0;
        left: -50px;
        mix-blend-mode: multiply;
    }

    .img-whiteline {
        width: 420px;
        top: 0;
        right: 0;
        z-index: 1;
    }

    .img-orangeline {
        width: 260px;
        top: -60px;
        right: -60px;
        mix-blend-mode: multiply;
    }

    .img-pinkpaint {
        width: 600px;
        top: 620px;
        right: -250px;
    }

    .wrapper {
        width: 1200px;
        min-height: 100vh;
        justify-content: space-between;
        padding: 120px 0;
        /* border: 1px solid red; */
    }

    .btn-top {
        z-index: 2;
    }

    .block1 {
        width: 100%;
        justify-content: space-between;
    }

    .block1-left {
        position: relative;
        flex-direction: column;
    }

    .border-line,
    .block1-1 {
        width: 800px;
        height: 530px;
    }

    .border-line {
        border: 1px solid white;
        top: -8px;
        left: -8px;
    }

    .summer-tag {
        background: #FF9C42;
        width: 180px;
        height: 45px;
        justify-content: center;
        align-items: center;
        top: 10px;
        left: -20px;
    }

    .summer-tag h4 {
        color: white;
        font-family: 'Josefin Sans', sans-serif;
        letter-spacing: 3px;
    }

    .img-block1-1 {
        width: 800px;
        height: 530px;
    }

    .img-block1-1 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .block1-left ul {
        width: 600px;
        justify-content: space-evenly;
        align-items: flex-start;
    }

    .block1-left ul h5 {
        font-weight: 500;
    }

    .block1-left ul li {
        flex-direction: column;
        align-items: center;
    }

    .box-li {
        width: 180px;
        height: 180px;
    }

    .box-li h5 {
        color: white;
    }

    .box-li img {
        width: 100%;
        /* height: 100%; */
        object-fit: cover;
    }

    .small-li {
        width: 115px;
        height: 115px;
        margin-top: 15px;
    }

    .small-li img {
        width: 100%;
        /* height: 100%; */
        object-fit: cover;
    }

    .img-block1-2 {
        width: 350px;
        height: 700px;
        margin-top: -100px;
    }

    .img-block1-2 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .block1-right h1 {
        color: white;
        letter-spacing: 6px;
    }

    .block1-right h6 {
        color: white;
        text-align: right;
    }

    .block2 {
        width: 100vw;
        height: 100vh;
        position: relative;
        justify-content: center;
        align-items: center;
    }

    .block2 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .block2 div {
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 2;
    }

    .img-block2-1 {
        width: 170px;
        height: 240px;
    }

    .img-block2-1 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
        margin-bottom: 20px;
    }

    .block2 h1 {
        color: white;
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .block2 button {
        width: 250px;
        background: #59C3C3;
    }

    .block2 button:hover {
        width: 250px;
        background: #FF9685;
    }
    
    .modal {
        width: 100vw;
        height: 100vh;
        background: black;
        opacity: .5;
        top: 100vh;
    }

    .block3 {
        position: relative;
        justify-content: space-between;
    }

    .block3-left, .block3-right {
        width: calc(100vw / 2);
        height: 100vh;
    }

    .block3-left {
        position: relative;
    }

    .img-block3-1 {
        width: calc(100vw / 2);
        height: 100vh;
    }

    .img-block3-1 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .img-summer-dot2 {
        width: 280px;
        z-index: 1;
        mix-blend-mode: multiply;
        left: 43%;
    }

    .img-summer-dot2 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .img-summer-yellowfruit {
        width: 400px;
        z-index: 1;
        mix-blend-mode: multiply;
        bottom: -140px;
        right: -60px;
    }

    .block3-left ul {
        width: calc(100vw / 2);
        left: 15px;
        bottom: 15px;
    }

    .block3-left li {
        width: 22%;
        height: 22%;
        margin: 0 5px;
    }

    .block3-left li img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .block3-right {
        justify-content: center;
        align-items: center;
        background: white;
    }

    .block3-right div{
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-right: 80px;
    }

    .block3-right div h3,.block3-right div p {
        color: #38726C;
        margin-bottom: 20px;
    }

    .block3-right div h3 {
        margin-bottom: 30px;
    }

    .btn-seemore {
        width: 170px;
        background: #FF9C42;
        margin-top: 30px;
    }

    .btn-seemore:hover {
        background: #FF538A;
    }
    
    .block3-right p {
        width: 500px;
        text-align: center;
    }

    






    @media screen and (max-width: 1280px) {
        .wrapper {
            width: 950px;
            padding: 120px 20px;
        }
    }

    @media screen and (max-width: 992px) {
        .wrapper {
            width: 570px;
            padding: 120px 0;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

    }

    @media screen and (max-width: 576px) {
        .wrapper {
            width: 100vw;
            padding: 80px 0 0 0;
        }


    }
</style>


<div class="container flex">
    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="flex">
        <div class="bg-left">
            <img class="bg-blue" src="images/summer-bgblue.svg" alt="">
            <img class="img-dot1 absolute" src="images/summer-dot1.svg" alt="">
            <img class="img-pineapple absolute" src="images/summer-pineapple.svg" alt="">
        </div>
        <div class="bg-right">
            <img class="bg-red" src="images/summer-bgred.svg" alt="">
            <img class="img-pinkpaint absolute" src="images/summer-pinkpaint.svg" alt="">
            <img class="img-orangeline absolute" src="images/summer-orangeline.svg" alt="">
        </div>
    </div>
    <img class="img-text fixed" src="images/summer-text.svg" alt="">
    <img class="img-whiteline absolute" src="images/summer-whiteline.svg" alt="">

    <div class="wrapper flex transition absolute">
        <div class="block1 flex absolute">
            <div class="block1-left flex">
                <div class="border-line absolute"></div>
                <div class="summer-tag absolute flex">
                    <h4>Summer Sale</h4>
                </div>
                <div class="img-block1-1">
                    <img src="images/summer/block1-1.jpg" alt="">
                </div>
                <ul class="flex">
                    <li class="box-li flex">
                        <a href="">
                            <img src="images/summer/watzbox1-1.png" alt="">
                        </a>
                        <h5>芒果派對禮盒</h5>
                    </li>
                    <li class="small-li flex">
                        <a href="">
                            <img src="images/summer/block1-3.jpg" alt="">
                        </a>
                        <h5>夏日煙火</h5>
                    </li>
                    <li class="small-li flex">
                        <a href="">
                            <img src="images/summer/block1-4.jpg" alt="">
                        </a>
                        <h5>一起來跳森巴</h5>
                    </li>
                    <li class="small-li flex">
                        <a href="">
                            <img src="images/summer/block1-5.jpg" alt="">
                        </a>
                        <h5>綠野仙蹤</h5>
                    </li>
                </ul>
            </div>
            <div class="block1-right">
                <div class="img-block1-2">
                    <img src="images/summer/block1-2.jpg" alt="">
                </div>
                <h1>MANGO PARTY</h1>
                <h6>2020 WATZ SUMMER COLLECTION</h6>
            </div>
        </div>
    </div>
    <div class="block2 flex">
        <img class="absolute" src="images/summer/block2-2.png" alt="">
        <div class="flex">
            <div class="img-block2-1">
                <img src="images/summer/block2-1.png" alt="">
            </div>
            <h1>COOL OFF & CHILL OUT.</h1>
            <button class="btn-coral transition">CHECK ME OUT</button>
        </div>
    </div>
    <div class="modal absolute"></div>
    <div class="block3 flex">
        <div class="absolute img-summer-dot2">
            <img src="images/summer-dot2.svg" alt="">
        </div>
        <div class="absolute img-summer-yellowfruit">
            <img src="images/summer-yellowfruit.svg" alt="">
        </div>
        <div class="block3-left">
            <div class="img-block3-1">
                <img src="images/summer/block3-1.jpg" alt="">
            </div>
            <ul class="flex absolute">
                <li><img src="images/summer/block3-2.jpg" alt=""></li>
                <li><img src="images/summer/block3-3.jpg" alt=""></li>
                <li><img src="images/summer/block3-4.jpg" alt=""></li>
                <li><img src="images/summer/block3-5.jpg" alt=""></li>
            </ul>
        </div>
        <div class="block3-right flex">
            <div class="flex">
                <h3>駕鶴西瓜</h3>
                <p>襪口部採用具止滑效果的織線，不易滑脫。襪口無鬆緊帶設計，穿著柔軟舒適。使用對環境溫和的有機棉所製成。</p>
                <p>短襪<br>22-24cm<br>材質:100%純棉</p>
                <button class="btn-coral btn-seemore">SEE MORE</button>
            </div>
        </div>
    </div>
    

    <?php include __DIR__ . '/__html_footer.php' ?>
</div>
<?php include __DIR__ . '/__scripts.php' ?>

<script>
    /* // php 加入購物車

    const buy_btn = $('.buy_btn');

    buy_btn.click(function() {
        const p_item = $('.p_item');
        const sid = p_item.attr('data-sid');
        const qty = $('.qty').val();
        const sendObj = {
            action: 'add',
            sid,
            qty: qty
        }
        $.get('cart-handle.php', sendObj, function(data) {
            console.log(data);
            setCartCount(data);
        }, 'json');

        // alert(sid + ',' + qty)
        // 彈跳視窗
        $(".notice").addClass("animate__animated animate__flipInX animate__faster");
        $(".notice").addClass("success");
        setTimeout(function() {
            $(".notice").removeClass("success");
            $(".notice").removeClass("animate__animated animate__flipInX animate__faster");
        }, 800);
    }); */
</script>

<?php require __DIR__ . '/__html_foot.php' ?>