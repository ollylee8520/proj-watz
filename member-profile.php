<?php require __DIR__ . '/__connect_db.php';
$pageName = 'aboutWATZ';  // 這裡放你的pagename

$id = isset($_SESSION['member']['id']) ? intval($_SESSION['member']['id']) : 0;
$sql = "SELECT * FROM `members` WHERE `id`= $id";
$row = $pdo->query($sql)->fetch();

// if(empty($row)){
//     header('Location: ab-list.php');
//     exit;
// }
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
    .container{
        justify-content: space-between;
        min-height: 100vh;
    }

    .wrapper {
        margin-top: 140px;
        align-items: center;
        justify-content: center;
    }

    .bg-membercard {
        flex-direction: column;
        align-items: flex-end;
    }

    .membercard {
        width: 680px;
        height: 460px;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .membercard-img {
        background-image: url(images/user_card_before_1.svg);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center center;
        width: 680px;
        height: 460px;
        position: absolute;

    }

    .member-info {
        justify-content: center;
        /* margin-top: 10%; */
    }

    .bg-photo {
        width: 190px;
        height: 350px;
        z-index: 2;
        align-items: center;
        justify-content: center;
    }

    .member-photo {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: darkcyan;
        position: absolute;
        overflow: hidden;

    }

    .member-photo img {
        width: 100%;
        height: 100%;
    }

    .bg-form {
        width: 400px;
        height: 350px;
        z-index: 1;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        margin-top: 30px;
    }

    .bg-name .membercard ul li {
        align-items: center;
    }

    .membercard ul li h5 {
        font-weight: 400;
        letter-spacing: 3px;
        color: #707070;
        margin-left: 30px;
    }

    .form-name {
        width: 336px;
        height: 56px;
        border-radius: 26px;
        align-items: center;
        margin-left: 10px;
    }

    .form-item {
        width: 336px;
        height: 56px;
        border-radius: 26px;
        align-items: center;
        margin-left: 10px;

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

    .btn-blue {
        width: 200px;
        margin-right: 30px;
    }

    .btn-blue:hover {
        background: #FF9685;
    }

    .adress {
        white-space: nowrap;
    }

    @media screen and (max-width: 992px) {
        body {
            background-image: url(images/BG-mobile2.svg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container {
            min-height: 0;
        }

        .wrapper {
            margin-top: 110px;
            flex-direction: column;
            width: 100%;
            justify-content: flex-start;
            height: 80vh;
        }

        .bg-membercard {
            align-items: center;
        }

        .membercard-img {
            background-image: url(images/user_card_mobile_before.svg);
            width: 94vw;
            height: 100vw;
            top: 0;
        }

        .membercard {
            position: relative;
            width: 94vw;
            height: 100vw;
            align-items: flex-start;
        }

        .bg-photo {
            width: 100vw;
            height: 40vw;
        }

        .member-photo {
            width: 30vw;
            height: 30vw;
        }

        .member-info {
            flex-direction: column;
            align-items: center;
            margin-top: 10%;
        }

        .bg-form {
            width: 80vw;
            height: 35vw;
        }

        .membercard ul li h5 {
            margin-left: 15px;
        }

        .form-name {
            height: 45px;
            width: unset;
            margin: 0;
        }

        .form-item {
            width: 50vw;
            margin: 0;

        }

        .form-name .name-content {
            margin-left: 0;
        }

        .selector {
            width: 94vw;
            flex-direction: row;
            justify-content: center;
            margin-right: 0;
            margin-bottom: 20px;
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

        .btn-blue {
            width: 170px;
            margin: 0;
        }
    }
</style>

<div class="container flex">
    <!-- 如果container有其它class要自己加上 -->

    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="wrapper flex">
        <div class="selector flex">
            <div class="box"><a href="<?= WEB_ROOT ?>/member-profile.php">會員資料</a></div>
            <div class="box"><a href="<?= WEB_ROOT ?>/member-historylist.php">訂單紀錄</a></div>
            <div class="box"><a href="<?= WEB_ROOT ?>/member-historylist.php">會員條款</a></div>
            <div class="box"><a href="<?= WEB_ROOT ?>/member-historylist.php">隱私權政策</a></div>
        </div>
        <div class="bg-membercard flex">
            <div class="membercard flex">
                <img class="membercard-img" src="" alt="">
                <div class="member-info flex">
                    <div class="bg-photo flex">
                        <div class="member-photo flex">
                            <img src="images/red square-01.jpg" alt="">
                        </div>
                    </div>
                    <ul class="bg-form flex">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">

                        <li class="form-name flex">
                            <h5>姓名</h5>
                            <h5 class="name-content"><?= htmlentities($row['name']) ?></h5>
                        </li>
                        <li class="form-item flex">
                            <h5>電話</h5>
                            <h5><?= htmlentities($row['mobile']) ?></h5>
                        </li>
                        <li class="form-item flex">
                            <h5>信箱</h5>
                            <h5><?= htmlentities($row['email']) ?></h5>
                        </li>
                        <li class="form-item flex">
                            <h5 class="adress">地址</h5>
                            <h5><?= htmlentities($row['address']) ?></h5>
                        </li>
                        <li class="form-item flex">
                            <h5>密碼</h5>
                            <h5>**********</h5>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bg-btn flex"></div>
            <button class="btn-blue" onclick="javascript:location.href='<?= WEB_ROOT ?>/member-profilemodify.php?id=<?= $row['id'] ?>'">修改會員資料</button>
        </div>
    </div>
<?php include __DIR__ . '/__html_footer.php' ?>

</div>
</div>
<?php include __DIR__ . '/__scripts.php' ?>
<?php require __DIR__ . '/__html_foot.php' ?>