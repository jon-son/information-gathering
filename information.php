 <?php
 	
$fromurl1="http://www.szpc-society.cn/17cloud/query.php";
$fromurl2="http://szpc-society.cn/17cloud/query.php";
if($_SERVER['HTTP_REFERER'] != $fromurl1 && $_SERVER['HTTP_REFERER'] != $fromurl2)
{
header("Location:query.html");
exit;
}

  	$conn=mysql_connect('localhost','root','xxxx')or die("信息加载失败");
  	mysql_select_db('Cloud',$conn);
  	mysql_query("set names utf8");
  	$q="select * from IN".$_GET['Classname']." WHERE ID=".$_GET['ID_card'];
  	$result=mysql_query($q);
  	while($row=mysql_fetch_assoc($result)){
 	$Name=$row[Name];
 	$ID=$row[ID];
 	$Origin=$row[Origin];
 	$ID_card=$row[ID_card];
 	$Home=$row[Home];
 	$Wechat=$row[Wechat];
 	$QQ=$row[QQ];
 	$Email=$row[Email];
 	$Phone=$row[Phone];
 	$FName=$row[FName];
 	$FPhone=$row[FPhone];
 	$MName=$row[MName];
 	$MPhone=$row[MPhone];
 	$HPhone=$row[HPhone];
 }
 mysql_close($con);
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>信息查询结果</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
	</head>
	<body style="background:#F5F5F5;">
		<div class="container-fluid" align="center"></br></br></br></br>
			
			<h3 align="center">信息查询结果</h3></br>
		</div>
		
		<div class="container-fluid">

		<form class="form-horizontal" method="post" action="reput.php?Classname=<?php echo $_GET['Classname'];?>&ID_card=<?php echo $_GET['ID_card'];?>">
			
			
 		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
    			<div class="col-sm-10" style="color:steelblue; font-family: '微软雅黑';">
      				<?php echo $Name ?>
    			</div>
 		</div>	
 		<div class="form-group" >
    		<label for="inputPassword3" class="col-sm-2 control-label">学号</label>
    		<div class="col-sm-10" style="color:steelblue; font-family: '微软雅黑';">
					<?php echo $ID ?>
    		</div>
  		</div>
  		
  		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">籍贯</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" placeholder="<?php echo $Origin ?>" name="Origin">
    			</div>
 		</div>	  		
 		
 		<div class="form-group">
    		<label for="inputPassword3" class="col-sm-2 control-label">身份证</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" placeholder="<?php echo $ID_card ?>" name="ID_card">
    		</div>
  		</div>

 		
 		
  		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">家庭住址</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" placeholder="<?php echo $Home ?>" name="Home">
    			</div>
 		</div>	

		 <div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">微信号</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" placeholder="<?php echo $Wechat ?>" name="Wechat">
    			</div>
 		</div>
 		
		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">QQ号</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" placeholder="<?php echo $QQ ?>" name="QQ">
    			</div>
 		</div>
		
 		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" id="inputEmail3" placeholder="<?php echo $Email ?>" name="Email">
    			</div>
 		</div>


 		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">本人联系手机</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" placeholder="<?php echo $Phone ?>" name="Phone">
    			</div>
 		</div>

 		
 		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">父亲姓名</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" placeholder="<?php echo $FName ?>" name="FName">
    			</div>
 		</div>
 		
 		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">父亲联系手机</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" placeholder="<?php echo $FPhone ?>" name="FPhone">
    			</div>
 		</div>
 		
 		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">母亲姓名</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" placeholder="<?php echo $MName ?>" name="MName">
    			</div>
 		</div> 		
 		
 		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">母亲联系手机</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" placeholder="<?php echo $MPhone ?>" name="MPhone">
    			</div>
 		</div>
		
 		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">家庭电话</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" placeholder="<?php echo $HPhone ?>" name="HPhone">
    			</div>
 		</div>		</br>

  		<div class="form-group"  style="float:left;width: 50%;">
    		<div class="col-sm-offset-2 col-sm-10" > 
    			<input type="submit" name='submit'  class="btn-primary btn-lg btn-block" value="更新信息">
    		</div>
  		</div>
  		
  		<div class="form-group" style="float:right;width: 50%;">
  		    <div class="col-sm-offset-2 col-sm-10" >
    			<a href="query.html"><input type="button" name='button'  class="btn-primary btn-lg btn-block" value="返回查询页面"  style="float:right"></a>
    		</div>
  		</div>
  		
  	
		</form>
	</div>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	</body>
</html>