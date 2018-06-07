<?php

header('content-type:text/html;localhost=utf8');

mysql_connect("127.0.0.1","root","root");
mysql_select_db("www");
mysql_query("set names utf8");

$sql = "select * from liu";

$res = mysql_query($sql);
while ($data = mysql_fetch_assoc($res)) {
    $arr[] = $data;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>展示</title>
</head>
<body>
<center>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>用户名</td>
            <td>内容</td>
            <td>时间</td>
        </tr>
        <?php foreach ($arr as $key => $val) { ?>
            <tr>
                <td><?php echo $val['id'] ?></td>
                <td><?php echo $val['name'] ?></td>
                <td><?php echo $val['nei'] ?></td>
                <td><?php echo @date("Y-m-d,H:i:s",$val['time']) ?></td>
            </tr>
        <?php } ?>
    </table>
</center>
</body>
</html>