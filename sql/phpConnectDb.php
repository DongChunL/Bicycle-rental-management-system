<?php

  //数据库配置信息
  $db_host = "localhost";
  $db_user = "root";
  $db_pwd = "";

  //连接数据库
  //
  //
  //
  //
  //

  $link = mysqli_connect($db_host,$db_user,$db_pwd);
  if(!$link){
  	echo "<font color='red'>数据库连接失败~</font>".mysql_error();
  	exit();
  }

  //选择数据库
  $db_name = "garage";
  if(!mysqli_select_db($link,$db_name)){
  	  	echo "<font color='red'>选择数据库失败~</font>".mysql_error();
  	exit();
  }
  //设置请求或返回数据库数据的字符集
  mysqli_query($link,"set names utf8");
ini_set("date.timezone","Asia/Chongqing");   /*调整时区，否则会相差八个小时*/

?>