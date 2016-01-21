<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2016/1/21
 * Time: 12:51
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

<!--<div id="d-mask" style="display: block"></div>-->

<div class="wrap" style="background: url('./images/gameBg.jpg')center;background-size: 100% 100%">

    <div class="tanchu over" style="display: none">                                                                                <!--游戏结束弹出框-->
        <img src="./images/over.png" id="shareBtn" style="width: 80%;margin: 0 auto;display:block" alt=""/>
    </div>
    <div class="tanchu success" style="display: none">                                                                                <!--游戏中奖弹出框-->
        <img src="./images/zhongjiang.png" id="successBtn" style="width: 80%;margin: 0 auto;display:block" alt=""/>
    </div>

    <div class="d-mask1 share_text" style="position: absolute;width: 100%;z-index: 2000;display: none">         <!--分享弹出-->
        <img src="images/share_text.png" id="share_textBtn" style="width:100%" alt=""/>
    </div>

    <div class="fall" style="position: absolute;display: none">
        <img class="fall-img" src="./images/monkey1.png" style="width: 60px" alt=""/>
    </div>

    <p class="score">score:<span style="color:yellow">880</span></p>
    <p class="time">time:<span style="color:yellow">90</span></p>

    <div class="lanzi_wrap">                                                                                    <!--篮子-->
        <img src="./images/lanzi.png" style="width: 25%" alt=""/>
    </div>

    <div class="d-mask" style="display: block">                                                                 <!--游戏指导-->
        <img src="./images/youxishuoming1.png" class="game_state" alt=""/>
        <div class="startBtn">
            <img src="images/youxikaishi.png" id="startBtn" style="width: 30%" alt=""/>
        </div>
    </div>
</div>

<script>
    xx=$(document).height();
    ww = $(document).width()-60;
    $(".game_state , .wrap").css({height:xx});
    $("#startBtn").click(function(){
    $(".d-mask").css({display:"none"});
       for(var i=0;i<90;i++){
           var x = new Array();
           var w = new Array();
            x[i]= Math.ceil(Math.random()*6);
            w[i] = Math.ceil(Math.random()*ww);
           $('.fall-img').attr("src","./images/monkey"+x[i]+".png");
           $('.fall').css({"top":"-20","left":w[i],"display":"block"});
           $('.fall').animate({top:xx},2000);
       }
    });

    $('#shareBtn').click(function(){
        $('.share_text').css({display:"block"})
    });

    $("#successBtn").click(function(){
        $(".success").css({display:"none"})
    })
    $('#share_textBtn').click(function(){
        $(".d-mask1").css({display:"none"})
    })





</script>

</body>
</html>