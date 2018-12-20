<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>云计算2班资料</title>
		<meta http-equiv="refresh" content="60">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"/>
	</head>
	<body style="background:#F5F5F5;">
	</br>
	<h2 align="center">2017年云计算2班新生资料</h2>
<table class="table table-bordered">
	<tr>
		<th>&emsp;序号</th>
    <th>&emsp;姓名</th>
    <th>&emsp;学号</th>
    <th>&emsp;籍贯</th>
    <th>&emsp;身份证</th>
    <th>&emsp;家庭住址</th>
    <th>&emsp;微信号</th>
    <th>&emsp;QQ号</th>
    <th>&emsp;邮箱</th>
    <th>&emsp;本人联系手机</th>
    <th>&emsp;父亲姓名</th>
    <th>&emsp;父亲联系手机</th>
    <th>&emsp;母亲姓名</th>
    <th>&emsp;母亲联系手机</th>
    <th>&emsp;家庭电话</th>
    <th>&emsp;寝室号</th>
 </tr>
 </br>
 <?php
  	$conn=mysql_connect('localhost','root','lsj520883')or die("信息加载失败");
  	mysql_select_db('Cloud',$conn);
  	mysql_query("set names utf8");
  	$q="select * from INCloud2";
  	$result=mysql_query($q);
  	$num=0;
  	while($row=mysql_fetch_assoc($result)){
  		$num=$num+1;
 echo"<tr><td>&emsp;$num</td><td>$row[Name]</td><td>$row[ID]</td><td>$row[Origin]</td><td>$row[ID_card]</td><td>$row[Home]</td><td>$row[Wechat]</td><td>$row[QQ]</td><td>$row[Email]</td>
 	<td>$row[Phone]</td><td>$row[FName]</td><td>$row[FPhone]</td><td>$row[MName]</td><td>$row[MPhone]</td><td>$row[HPhone]</td><td>$row[Room]</td></tr>";
 }
 mysql_close($con);
 ?>
  </table>


	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

	</body>
</html>
