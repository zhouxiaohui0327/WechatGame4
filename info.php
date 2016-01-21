<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2016/1/21
 * Time: 20:54
 */
?>

<html>
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport"/>
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="./css/base.css"/>
    <script src="./js/jquery-2.1.4.js"></script>
    <title>2016迎新春六猴送福</title>
</head>
<body>
<div class="wrap">
    <div class="bg-wrap">
        <img src="./images/info.jpg" width="100%" alt=""/>
    </div>

    <div class="info-wrap">                                                                <!--中奖填写信息 选择广场-->
        <div class="info_box">
            <img src="./images/monkey.png" class="monkey_pic" alt=""/>
            <div class="info">
                <form action="" id="info_form">
                    <input type="text" name="name" placeholder="姓名:"/>
                    <input type="text" name="number" placeholder="电话:"/>
                    <input style="display:none" type="text" name="place_name"/>
                    <p class="hint">领取奖品请在下方选择所在城市万达广场</p>
                    <div class="place_box">
                        <p class="chose_text">---请选择---</p>
                        <ul class="place_row">
                            <li class="row">合肥包河万达广场</li>
                            <li class="row">合肥天鹅湖万达广场</li>
                            <li class="row">芜湖镜湖万达广场</li>
                            <li class="row">蚌埠万达广场</li>
                            <li class="row">马鞍山万达广场</li>
                            <li class="row">阜阳颍州万达广场</li>
                        </ul>
                    </div>
                    <button type="submit" class="sureBtn">确定</button>
                </form>
            </div>
        </div>
    </div>

    <div class="success_bg" style="display: none">                                   <!--中奖信息礼品弹出框-->
        <img src="./images/gongxizhongjiang.jpg" width="100%" alt=""/>
        <div class="information">
            <p>姓名</p>
            <p>电话</p>
            <p>礼品</p>
            <p>广场</p>
        </div>
        <div class="last_monkey">
            <img src="./images/queding.png" id="monkey-sure" alt=""/>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(".place_row .row").click(function(){
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
            var place = $(this).html();
            $('input[name=place_name]').val(place);
        });
    })
</script>
</body>
</html>