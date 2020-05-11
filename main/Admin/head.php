<?php
session_start();
include '../../sql/phpConnectDb.php';
?>
<html><head>
    <meta charset="utf-8">
    <style>
        /*全局*/
        *{
            margin: 0;
            padding: 0;
        }
        a{
            text-decoration: none;
        }
        li{
            list-style: none;
        }
        .center{
            width: 960px;
            margin: 0 auto;
        }

        /*header*/
        .headerBackground{
         /*   background-color: azure;*/
        }
        .userInfo{
            width: 960px;
            height: 50px;
        }
        .userInfo ul{
            float: right;
        }
        .userInfo ul li{
            display: inline-block;
            vertical-align: top;
            height: 20px;
        }
        .userInfo ul li a{
            font-size: 16px;
            height: 50px;
            line-height: 50px;
            color: white;
        }
        .userInfo ul li a:hover{
            font-size: 16px;
            height: 50px;
            line-height: 50px;
            color: orange;
        }
        .headerBody{
            margin-top: 10px;
            width: 960px;
        }
        .headerBody img{
            width: 80px;
            height: 64px;
            display: inline-block;
        }
        .headerBody .headerCity{
            display: inline-block;
            vertical-align: top;
            text-align: center;
            padding-top: 16px;
            height: 64px;
            width: 80px;
        }
        .headerBody .headerCity h1{
            color: red;
            font-size: 19px;
        }
        .headerSearch{
            display: inline-block;
            vertical-align: top;
        }
        .headerBody .headerCity a{
            font-size: 12px;
            color: #444444;
        }
        .headerBody .searchTab{
            width:790px;
        }
        .headerBody .searchTab li{
            display: inline-block;
            width: 70px;
            border-right: 1px solid rgba(0,128,0,0.3);
            /*background: url("../image/so_button.gif")no-repeat;*/
            text-align: center;
        }
        .headerBody .searchTab li:first-child{
            background: url("../../image/so_button.gif")no-repeat;
        }
        .headerSearch li a{
            width: 70px;
            color: white;
        }
        .headerSearch li a:hover{
            width: 70px;
            color: white;
        }
        .headerSearch .searchText{
            background: rgb(217,237,200);
            height: 40px;
            width: 562px;
            display: inline-block;
        }
        .headerSearch .searchText input:nth-child(1){
            border: 1px solid rgb(169,201,150);
            width: 500px;
            height: 30px;
            border-right: none;
            margin-top: 5px;
        }
        .headerSearch .searchText input:nth-child(2){
            background: url("../../image/search_button.png") repeat-x;
            width: 60px;
            height: 32px;
            vertical-align: bottom;
            border: 1px solid rgb(169,201,150);
            border-left: none;
        }
        .headerSearch  span a{
            font-size:10px;
            color: grey;
        }
        .headerSearch img{
            float: right;
            width: 165px;
            height: 40px;
            margin-top: 6px;
        }
        .headerBackground{
            background-color: darkslategrey;
        }
    </style>
</head>
<body></body>
</html>
<header class="headerBackground" style="background-color darkslategrey!important;">
    <section class="center">
        <div class="userInfo">
            <ul>
                <?php
                if(isset($_SESSION['admin'])){
                    echo "<li><a href='#' onclick='' style='font-weight: bold;'>". $_SESSION['admin']. "</a></li><li><a href='../User/session/sessionUnset.php' target='_top' id='out'>&nbsp;&nbsp;&nbsp;&nbsp;[退出]</a></li>";
                }else{
                    echo" no session";
                }?>
            </ul>
        </div>
    </section>
</header>