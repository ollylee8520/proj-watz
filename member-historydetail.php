<?php require __DIR__ . '/__connect_db.php';
$pageName = 'aboutWATZ';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>

<!-- 自己另外的CSS插件 <link> 請放這邊 (nav.css及google fonts共用的不用放) -->

<style>
        h4,
        h5 {
            color: #707070
        }

        body {
            width: 100vw;
            background-image: url(images/BG2.svg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .wrapper {
            max-width: 100vw;
            position: relative;
            height: 180vh;
            align-items: center;
            justify-content: center;
        }

        .bg-orderpage {
            flex-direction: row;
        }

        .selector {
            width: 120px;
            flex-direction: column;
            justify-content: flex-start;
            margin: 210px 100px 0 0;
        }

        .box {
            width: 120px;
            height: 70px;
            justify-content: flex-start;

        }

        .selector a {
            padding: 10px;
            margin-bottom: 10px;
            border-bottom: 4px solid transparent;
            transition: .2s;

        }

        .selector a:hover {
            border-bottom: 4px solid #FF9685;
        }

        .btn-blue {
            width: 170px;
            margin-left: 30px;
        }

        .btn-blue:hover {
            background: #FF9685;
        }

        .bg-detail {
            flex-direction: column;
        }

        .bg-order-content {
            width: 870px;
            height: 1235px;
            background: #ffffff;
            border-radius: 15px;
            margin-top: 25px;
            flex-direction: column;
            align-items: center;
        }

        p {
            display: inline-block;
            /* width: 100px; */
            text-align: center;
        }

        .block1 {
            flex-direction: column;
            margin: 70px 0;
        }

        .order-info1 {
            width: 720px;
            justify-content: space-between;
            align-items: center;
        }

        .order-num {
            width: 300px;
            height: 50px;
            justify-content: space-between;
            align-items: center;
        }

        .title {
            width: 720px;
            height: 50px;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #DFDFDF;
            margin-bottom: 30px;
        }

        .block2 {
            width: 720px;
            flex-direction: column;

        }

        .product-info {
            flex-direction: column;
        }

        .bg-bill {
            width: 720px;
            flex-direction: column;
            align-items: flex-end;
        }

        .bg-bill h5 {
            margin-bottom: 15px;
        }

        .bg-address {
            width: 720px;
            flex-direction: column;
        }

        .address-title h4 {
            width: 100px;
            height: 40px;
            align-items: center;
            justify-content: center;
            margin: 25px 0;
            border: 1px solid #707070;
        }

        .address-info {
            flex-direction: column;
            margin-left: 70px;
        }

        .address-info h5 {
            margin-bottom: 20px;
        }

        .btn-blue.gray {
            background: #707070;
            width: 170px;
            align-items: flex-end;

        }

        .btn-blue.gray:hover {
            background: #03588C;
        }

        .block3 {
            flex-direction: column;
            align-items: flex-end;
        }

        @media screen and (max-width: 992px) {
            body {
                background-image: url(images/BG-mobile2.svg);
                background-position: center;
            }

            .wrapper {
                width: 80vh;
                height: 140vh;
                justify-content: center;
            }

            .bg-orderpage {
                flex-direction: column;
                align-items: center;

            }

            .selector {
                width: 94vw;
                flex-direction: row;
                justify-content: center;
                margin-top: 20px;
                margin-right: 0;
            }

            .box {
                width: 30vw;
                height: 10vw;
                line-height: 30px;
                text-align: center;
                margin-top: 15px;
            }

            .selector a {
                white-space: nowrap;
            }

            .bg-detail {
                width: 80vw;
                height: 100%;
            }

            .bg-order-content {
                width: 80vw;
                height: 100%;
            }

            .block1 {
                width: 66vw;
                margin: 50px;
            }

            .order-info1 {
                flex-direction: column;
                align-items: flex-start;
                width: 70vw;
            }

            .order-num {
                justify-content: flex-start;
            }

            .margin {
                margin-left: 30px;
            }

            .block2 {
                width: 80vw;
            }

            .product-info {
                width: 80vw;
                align-items: center;
            }

            .product-info h5 {
                display: inline-block;
                width: 100px;
                text-align: center;
            }

            .title {
                width: 70vw;
            }

            .bg-bill {
                width: 73vw;
            }

            .block3 {
                width: 80vw;
                align-items: center;
            }

            .bg-address {
                width: 80vw;
            }

            .address-title {
                width: 21vw;
                justify-content: center;
            }

            .btn-blue.gray {
                width: 18vw;
            }
            .button-box{
                width: 70vw;
                justify-content: flex-end;
                margin-bottom: 20px;
            }
        }
    </style>

<div class="container flex">
    <!-- 如果container有其它class要自己加上 -->

    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="wrapper flex">
            <div class="bg-orderpage flex">
                <div class="selector flex">
                    <div class="box"><a href="">會員資料</a></div>
                    <div class="box"><a href="">訂單紀錄</a></div>
                    <div class="box"><a href="">會員條款</a></div>
                    <div class="box"><a href="">隱私權政策</a></div>
                </div>
                <div class="bg-detail flex">
                    <div class="flex">
                        <button class="btn-blue">回上一頁</button>
                    </div>
                    <div class="bg-order-content flex">
                        <div class="block1 flex">
                            <div class="order-info1 flex">
                                <div class="order-num flex">
                                    <p>訂購編號</p>
                                    <p class="margin">20200730</p>
                                </div>
                                <div class="order-num flex">
                                    <p>訂購時間</p>
                                    <p class="margin">2020/07/30</p>
                                </div>
                            </div>
                            <div class="order-info1 flex">
                                <div class="order-num flex">
                                    <p>出貨狀態</p>
                                    <p class="margin">待出貨</p>
                                </div>
                                <div class="order-num flex">
                                    <p>貨運單號</p>
                                    <a class="margin" href="">123456789</a>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------------------------------------------>
                        <div>
                            <div class="block2 flex">
                                <div class="product-info flex">
                                    <div class="title flex">
                                        <h5>商品名稱</h5>
                                        <h5>款式</h5>
                                        <h5>數量</h5>
                                        <h5>小計</h5>
                                    </div>
                                    <div class="title flex">
                                        <h5>偶素襪子</h5>
                                        <h5>黑色</h5>
                                        <h5>1</h5>
                                        <h5>NT.190</h5>
                                    </div>
                                    <div class="title flex">
                                        <h5>偶素襪子</h5>
                                        <h5>黑色</h5>
                                        <h5>1</h5>
                                        <h5>NT.190</h5>
                                    </div>
                                    <div class="title flex">
                                        <h5>偶素襪子</h5>
                                        <h5>黑色</h5>
                                        <h5>1</h5>
                                        <h5>NT.190</h5>
                                    </div>
                                    <div class="title flex">
                                        <h5>偶素襪子</h5>
                                        <h5>黑色</h5>
                                        <h5>1</h5>
                                        <h5>NT.190</h5>
                                    </div>
                                </div>
                                <div class="bg-bill flex">
                                    <div>
                                        <h5>運費: NT.60</h5>
                                    </div>
                                    <div>
                                        <h5>Coupon折抵: NT.-100</h5>
                                    </div>
                                    <div>
                                        <h5>應付金額: NT.1,300</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------------------------------------------------>
                        <div class="block3 flex">
                            <div class="bg-address flex">
                                <div class="address-title flex">
                                    <h4 class="flex">收件資訊</h4>
                                </div>
                                <div class="address-info flex">
                                    <h5>姓名:王小明</h5>
                                    <h5>電話:0912345678</h5>
                                    <h5>地址:106台北市大安區復興南路一段390號2樓</h5>
                                </div>
                            </div>
                            <div class="bg-address flex">
                                <div class="address-title flex">
                                    <h4 class="flex">付款資訊</h4>
                                </div>
                                <div class="address-info flex">
                                    <h5>付款方式:信用卡</h5>
                                    <h5>卡號:xxxx-xxxx-xxxx-5055</h5>
                                </div>
                            </div>
                            <div class="button-box flex">
                                <button class="btn-blue gray">退貨申請</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>

    <?php include __DIR__ . '/__html_footer.php' ?>
</div>
<?php include __DIR__ . '/__scripts.php' ?>

<script>
    // 這邊放你自己寫的JS
</script>

<?php require __DIR__ . '/__html_foot.php' ?>