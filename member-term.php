<?php require __DIR__ . '/__connect_db.php';
$pageName = 'member-term';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>

<!-- 自己另外的CSS插件 <link> 請放這邊 (nav.css及google fonts共用的不用放) -->

<style>
        body {
            width: 100vw;
            background-image: url(images/BG2.svg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .wrapper {
            height: 120vh;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .bg-term{
            flex-direction: row;
            justify-content:center;
            align-items: center;
        }
        .selector {
            width: 120px;
            flex-direction: column;
            justify-content: flex-start;
            margin-right: 20%;
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
        .background{
            background: #ffffff;
            width: 870px;
            height: 670px;
            border-radius: 15px;
        }
        .background li{
            align-items: center;
            justify-content: center;
        }
        .background li h6{
            width: 700px;
            align-items: center;
            justify-content: center;
            margin: 60px;
        }
        @media screen and (max-width: 992px) {
            body {
                background-image: none;
                background-position: center;
            }
            .wrapper{
                width: 100%;
                height:100%;
                margin-top: 100px;
            }
            .bg-term{
                flex-direction: column;
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
            .background{
                width: 80vw;
                height: 100%;
            }
            .background li h6{
                width: 65vw;
            }
        }
    </style>

<div class="container flex">
    <!-- 如果container有其它class要自己加上 -->

    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="wrapper flex">
            <div class="bg-term flex">
            <div class="selector flex">
                <div class="box"><a href="">會員資料</a></div>
                <div class="box"><a href="">訂單紀錄</a></div>
                <div class="box"><a href="">會員條款</a></div>
                <div class="box"><a href="">隱私權政策</a></div>
            </div>
            <ul class="background">
                <li class="flex">
                    <h6 class="flex">當您成為WATZ網站的會員時，即表示您已詳細閱讀、明確瞭解並同意接受本服務條款之所有內容。<br>

                    <br>此外，當您使用WATZ官網的特定服務時，可能會依據該特定服務之性質，而須遵守WATZ官網所另行公告之服務條款
                    或相關規定。若您為未滿二十歲，應於您的家長（或監護人）閱讀、瞭解並同意本服務條款之所有內容，方得使用本服
                    務。當您使用或繼續使用本服務時，即推定您的家長（或監護人）已閱讀、瞭解並同意接受本服務條款之所有內容及其
                    後修改變更。<br>
                    <br>
                    下列情況發生時本網站無須負擔任何責任：
                    　<br>０１．WATZ官網服務之風險會由您個人承擔，會員同意使用WATZ官網各項服務基於會員的個人意願並同意自付任
                    何風險，包括因為自WATZ官網下載資料或圖片，或是自WATZ官網服務中獲得之資料導致發生任何資源流失等結果。<br>
                    <br>０２．會員在WATZ官網填寫的物件資料、個人資料、上傳圖片等行為，純屬會員個人行為，官網對其內容之真實性
                    或完整不負任何責任。<br>
                    <br>０３．任何由於電腦病毒侵入或發作、因政府管制而造成暫時性關閉等影響網路正常經營之不可抗力而造成的資料毀
                    損、丟失、被盜與用或被竄改等官網無關。<br>
                    <br>０４．WATZ官網就各項服務不負任何明示或默示之擔保責任。WATZ官網不保證各項服務之穩定、安全、無誤及不中
                    斷；會員明示承擔使用官網服務之所有風險極可能發生之任何損害。<br>
                    <br>０５．維持並更新您個人會員資料，確保其為正確、最新及完整。若您提供任何錯誤、不實或不完整的資料，WATZ
                    有權暫停或終止您的帳號，並拒絕您使用本服務之全部或部分。<br>
                    <br>０６．對於會員透過WATZ官網刊登或發布虛假、違法資訊、侵害他人權益及欺騙、敲詐行為者，純屬會員個人行為
                    ，WATZ官網對此而產生的一切糾紛不負任何責任！<br>
                    
                    <br>特此聲明</h6>
                </li>
            </ul>
        </div>
            <div class="btn-top flex transition" id="goTop">
                <img src="images/arrow-top.svg" alt="">
                <h3>TOP</h3>
                <div class="bg-btn-top transition"></div>
            </div>
            
            <div class="mobile-show fixedlist">
                <div class="fixedlist-icon flex">
                    <a class="icon-wrapper" href=""><img src="images/icon-faq.svg" alt=""></a>
                    <a class="icon-wrapper" href=""><img src="images/icon-sock.svg" alt=""></a>
                    <a class="icon-wrapper" href=""><img src="images/icon-member.svg" alt=""></a>
                    <a class="icon-wrapper" href="cart.html"><img src="images/icon-cart.svg" alt=""></a>
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