<?php
include'../model/head.php';
include '../../sql/phpConnectDb.php';
$id = $_GET['id'];

//浏览次数
$sql = "UPDATE news SET counts=counts+1 WHERE id = '$id'";
if(!$query = mysqli_query($link,$sql)){
    echo mysqli_error($link);
    exit();
}

//新闻信息
$sql= "SELECT * FROM news WHERE id = '$id'";
if(!$query = mysqli_query($link,$sql)){
    echo mysqli_error($link);
    exit();
}
$arr = mysqli_fetch_array($query);
?>
    <html>
    <head>
        <meta charset="utf-8">
        <title>新闻资讯</title>
        <style>
            /*nav*/
            nav{
                width: 100%;
                background: darkslategrey;
                height: 60px;
            }
            nav li{
                display: inline-block;
                width: 100px;
                text-align: center;
                height: 56px;
                line-height: 56px;
                margin-top: 2px;
                padding-right: 15px;
                padding-left: 15px;
            }
            /*        nav li:last-child{
                        background-color: red; !* 浏览器不支持时显示 *!
                        background-image: linear-gradient(#ffffff, #ff0000);
                    }*/
            nav li a{
                color: white!important;
                font-size: 22px!important;
                height: 36px;
                line-height: 36px;
                width: 80px;
                font-weight: bold;
            }
            nav ul li:nth-child(4){
                background: white;
            }
            nav ul li:nth-child(4) a{
                color: darkgreen!important;
            }
            nav a:hover{
                color: yellow!important;
            }
        </style>
        <link rel="stylesheet" href="../Css/news.css">
        <link rel="stylesheet" href="../Css/headso.css">
        <link rel="stylesheet" href="../Css/global.css">

    </head>
    <body>
    <!--导航-->
    <nav class="navigation">
        <section class="center">
            <ul>
                <li><a href="../../index.php">首页</a></li>
                <li><a href="publicInfos.php">出租信息</a></li>
                <li><a href="seekInfos.php">求租信息</a></li>
                <Li><a href="newInfos.php">租赁资讯</a></Li>
                <Li><a href="help.php">帮助中心</a></Li>
                <Li><a href="about.php">关于我们</a></Li>
            </ul>
        </section>
    </nav>
    <div class="bodyMid" style="min-height: 650px;">
        <div class="midLeft">
            <div class="newsCon_border">
                <h5>
                    <a href="../../index.php">首页</a>&gt;&gt;<a href="newInfos.php">租赁资讯</a>&gt;&gt;<a href="news.php?id=<?php  echo $arr['id']?>"><?php  echo $arr['title']?></a>
                </h5>
                <!--数据部分-->
                <p class="NconTitle">
                    <?php  echo $arr['title']?>
                </p>
                <p class="newsTime">
                   浏览次数：<?php echo $arr['counts']?>&nbsp;&nbsp;&nbsp;&nbsp;
                    发布时间：<?php  echo $arr['updated_at']?>
                </p>
                <div class="content" style="word-break: break-all; word-wrap: break-word;">
                    <?php  echo $arr['content']?>
                    <p class="come">
                        信息来源：
                        <?php  echo $arr['author']?>
                    </p>
                    <!--end数据部分-->
                    <input name="HidKeyWord" id="HidKeyWord" type="hidden">
                    <br>

                </div>
                <div class="updown">
                    <span id="preart">上一篇：</span><a id="PreLink" href="news.php?id=<?php  echo  $before =$id-1;?>">
                        <?php
                        $sql = "SELECT title FROM news WHERE id='$before'";
                        if ($query=mysqli_query($link,$sql)){
                            $arr = mysqli_fetch_array($query);
                            echo $arr['title'];
                            }?>
                            </a>
                    &nbsp;&nbsp;&nbsp;&nbsp; <span id="nextart">下一篇：</span><a id="NextLink" href="news.php?id=<?php  echo $after =$id+1;?>">                       <?php
                        $sql = "SELECT title FROM news WHERE id='$after'";
                        if ($query=mysqli_query($link,$sql)){
                            $arr = mysqli_fetch_array($query);
                            echo $arr['title'];
                        }?></a></div>
            </div>
        </div>
    </div>
    <div style="clear:both"></div>
    </body>
    </html>
<?php
include '../model/footer.html';
?>