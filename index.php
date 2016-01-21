<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2016/1/21
 * Time: 11:59
 */

?>
<html>
<head>
    <meta charset="utf-8"/>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
    <meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport"/>
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="./css/base.css"/>
    <script src="./js/jquery-2.1.4.js"></script>
    <title>2016迎新春六猴送福</title>
</head>
<body>
<div id="d-mask" style="display: none"></div>
<div class="wrap">
    <div class="guize_pop-up" style="display: none">                                <!--规则弹出框-->
        <img src="./images/guize.png" style="width: 85%" alt=""/>
        <div class="guize-wrap">
            <div class="guize_text" style="width: 80%;margin: 0 auto">
                <p>粉丝在规定时间内根据所接物品累计分；总分888分以上的参与者在游戏结束后即可以领取猴年礼品一份，进入中奖页面选择距离自己最近的万达广场登记信息，即可在2016年2月1日～2月5日凭中奖信息领取相应的礼品；每个用户每天可参与6次，通过转发游戏页面可增加参与次数1次，（每个用户仅可中奖一次，中奖后不可重复中奖），奖品数量有限，先兑先得的原则，兑完即止。</p>
                <p>本期奖品如下：</p>
                <p>合肥包河万达广场提供：袜子，牛奶，新年福袋，抽纸，可口可乐共计570份，奖品随机</p>
                <p>合肥天鹅湖万达广场提供精美餐具套餐200份</p>
                <p>芜湖镜湖万达提供新年欢乐福袋100份</p>
                <p>蚌埠万达提供齐天大圣玩偶100份</p>
                <p>马鞍万达提供苏宁200元代金券100份</p>
                <p>阜阳万达提供50元餐饮券100份</p>
            </div>
        </div>
    </div>

    <div class="bg-img">
        <img src="./images/bg.jpg" alt=""/>
        <div class="btn-box">
            <img src="./images/wodejiangpin.png" style="width: 20%" alt=""/>
            <img src="./images/kaishi.png" onclick="game()"  style="width: 30%;margin-left: 6%;margin-right: 6%;" alt=""/>
            <img src="./images/guizeBtn.png" id="guizeBtn"  style="width: 20%" alt=""/>
        </div>
    </div>
    
</div>
<script>
    $(document).ready(function(){
        $("#guizeBtn").click(function(){
            $(".guize_pop-up , #d-mask").css({display:"block"});
        });
        $("#d-mask").click(function(){
            $(".guize_pop-up , #d-mask").css({display:"none"});
        });
        $(".guize_pop-up").click(function(){
            $(".guize_pop-up , #d-mask").css({display:"none"});
        })
    })
    function game(){
        window.self.location="./game.php";
    }
</script>
</body>
</html>