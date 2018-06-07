<?php

header("content-type:text/html;charset=utf8");

mysql_connect('127.0.0.1','root','root');
mysql_select_db("www");
mysql_query('set names utf8');

$username = $_POST['username'];
$nei = $_POST['nei'];
$time = time();
// var_dump($username);die;

$sql = "insert into liu(name,nei,time) values('$username','$nei','$time')";

$arr = mysql_query($sql);
if ($arr) {
    echo "<script>alert('添加成功');location.href='show.php'</script>";
}else{
    echo "<script>alert('添加失败');location.href='show.php'</script>";
}
//git修改
?>