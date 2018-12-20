<?php
	header("Content-Type: text/html; charset=UTF-8");
	if(!isset($_POST['submit'])){  
    header("location:query.html");  
}  	  
		$Classname=$_POST['Classname'];
		$Name=$_POST['Name'];	
        $ID_card=$_POST['ID_card'];

		if($Name == "")  
        {  
            echo "<script>alert('请输入姓名！'); history.go(-1);</script>";  
            exit;
        } 
                
        else if($ID_card == "")  
        {  
            echo "<script>alert('请输入身份证！'); history.go(-1);</script>";  
             exit;
        } 
      
        

        if(strlen($ID_card)!=18)  
        {  
            echo "<script>alert('身份证格式错误，请重新填写！'); history.go(-1);</script>";  
             exit;
        } 		



$con = mysql_connect("localhost","root","xxxx");
if(!$con)
  {
  die('<script language="JavaScript">;alert("信息查询失败，请重试！");location.href="query.html";</script>;');exit;
  }
mysql_select_db("Cloud", $con);
mysql_query("set names utf8");
$select="select Name,ID_card,ID from IN".$Classname;
$result=mysql_query($select);
$test=1;
while($row=mysql_fetch_assoc($result))
{
	if($ID_card==$row[ID_card])
	{
		if($Name==$row[Name])
		{

			echo '<script language="JavaScript">;location.href="information.php?Classname='.$Classname.'&ID_card='.$row[ID].'";</script>;';
			mysql_close($con);exit;	
			
		}
		else if($Name!=$row[Name])
		{
			echo '<script language="JavaScript">;alert("身份证与姓名不符合哟，赶紧回去检查一下！");history.go(-1); </script>;';exit;
		}
		$test=0;
	}

}
if($test==1){
	echo "<script> if(confirm( '你还没有填写资料或者班级选择错误，是否前往信息填写页面？ '))  location.href='index.html';else history.go(-1); </script>";exit;
}
exit;
			
		

?>


