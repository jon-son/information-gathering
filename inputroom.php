<?php
	header("Content-Type: text/html; charset=UTF-8");
	if(!isset($_POST['submit'])){  
    header("location:indexroom.html");  
}  	  
		$Classname=$_POST['Classname'];
		$Name=$_POST['Name'];
		$ID=$_POST['ID'];
		$Room=$_POST['Room'];
		if($Name == "")  
        {  
            echo "<script>alert('请输入姓名！'); history.go(-1);</script>";  
            exit;
        } 
        else if($ID == "")  
        {  
            echo "<script>alert('请输入学号！'); history.go(-1);</script>";  
             exit;
        }  
        else if($Room == "")  
        {  
            echo "<script>alert('请输入寝室号！'); history.go(-1);</script>";  
             exit;
        } 
              
        if(strlen($ID)!=8||!is_numeric($ID))  
        {  
            echo "<script>alert('学号格式错误，请重新填写！'); history.go(-1);</script>";  
            exit;
        } 

$con = mysql_connect("localhost","root","xxxx");
if (!$con)
  {
  die('<script language="JavaScript">;alert("信息提交失败，请重试！");location.href="indexroom.html";</script>;');exit;
  }

mysql_select_db("Cloud", $con);
mysql_query("set names utf8");
$select="select ID from IN".$Classname;
$result=mysql_query($select);
while($row=mysql_fetch_assoc($result))
{
	if($ID==$row[ID])
	{

	mysql_select_db("Cloud", $con);
	mysql_query("set names utf8");
	$sql="UPDATE IN".$Classname." SET Room='".$Room."' WHERE  ID='".$ID."'";
  	 if (!mysql_query($sql,$con))
  {
  die('<script language="JavaScript">;alert("信息录入失败，请重试！");location.href="indexroom.html";</script>;');mysql_close($con);exit; 
  }
echo '<script language="JavaScript">;alert("成功更新提交信息！");location.href="indexroom.html";</script>;';exit;

	}


}


$select="select Name,ID from SET".$Classname;
$result=mysql_query($select);
$test=1;
while($row=mysql_fetch_assoc($result))
{
	if($ID==$row[ID])
	{
		if($Name==$row[Name])
		{
			$sql="UPDATE IN".$Classname." SET Room='".$Room."' WHERE  ID='".$ID."'";
			if (!mysql_query($sql,$con))
  			{
  				die('<script language="JavaScript">;alert("信息提交失败，请重试！");location.href="indexroom.html";</script>;');exit;
  			}
			echo '<script language="JavaScript">;alert("成功提交信息！");location.href="indexroom.html";</script>;';
			mysql_close($con);exit;	
		}
		else if($Name!=$row[Name])
		{
			echo '<script language="JavaScript">;alert("学号与姓名不符合哟，赶紧回去检查一下！");history.go(-1); </script>;';exit;
		}
		$test=0;
	}

}
if($test==1){
	echo '<script language="JavaScript">;alert("你不是这个班宝宝哟，检查下班级是否选择错误，或者学号是否有误。");history.go(-1); </script>;';exit;
}
exit;
			
		

?>


