<?php
	header("Content-Type: text/html; charset=UTF-8");
	if(!isset($_POST['submit'])){  
    header("location:index.html");  
}  	  
		$Classname=$_POST['Classname'];
		$Name=$_POST['Name'];
		$ID=$_POST['ID'];
		$Origin=$_POST['Origin'];			
        $ID_card=$_POST['ID_card'];
        $Home=$_POST['Home'];
        $Wechat=$_POST['Wechat'];
        $QQ=$_POST['QQ'];
        $Email=$_POST['Email'];
        $Phone=$_POST['Phone'];
        $HPhone=$_POST['HPhone'];
		$FName=$_POST['FName'];        
		$MName=$_POST['MName'];
        $FPhone=$_POST['FPhone'];
        $MPhone=$_POST['MPhone'];
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
        else if($Origin == "")  
        {  
            echo "<script>alert('请输入籍贯 ！'); history.go(-1);</script>";  
             exit;
        }  
                
        else if($ID_card == "")  
        {  
            echo "<script>alert('请输入身份证！'); history.go(-1);</script>";  
             exit;
        } 
        else if($Home == "")  
        {  
            echo "<script>alert('请输入家庭住址！'); history.go(-1);</script>";  
             exit;
        }  
                
        else if($Wechat == "")  
        {  
            echo "<script>alert('请输入微信号！'); history.go(-1);</script>";  
             exit;
        }  
        else if($QQ == "")  
        {  
            echo "<script>alert('请输入QQ号！'); history.go(-1);</script>";  
             exit;
        } 
        else if($Email == "")  
        {  
            echo "<script>alert('请输入邮箱    ！'); history.go(-1);</script>";  
             exit;
        } 
        else if(($FPhone == "" || $FName == "") && ($MPhone == "" || $MName == ""))  
        {  
            echo "<script>alert('请输入父母姓名或者父母联系手机！'); history.go(-1);</script>";  
             exit;
        }

        
        if(strlen($ID)!=8||!is_numeric($ID))  
        {  
            echo "<script>alert('学号格式错误，请重新填写！'); history.go(-1);</script>";  
            exit;
        } 
        else if(strlen($ID_card)!=18)  
        {  
            echo "<script>alert('身份证格式错误，请重新填写！'); history.go(-1);</script>";  
             exit;
        } 		

       	else if((strlen($Phone)!=11||!is_numeric($Phone))&&((strlen($FPhone)!=11||!is_numeric($FPhone))||(strlen($MPhone)!=11||!is_numeric($MPhone))))  
        {  
            echo "<script>alert('手机格式错误，请重新填写！'); history.go(-1);</script>";  
             exit;
        }
       	else if(!strpos($Email,"@")||strstr($Email,"@")=="@")
        {
            echo "<script>alert('邮箱格式错误，请重新填写！'); history.go(-1);</script>";  
             exit;
        }
        

$con = mysql_connect("localhost","root","xxxx");
if (!$con)
  {
  die('<script language="JavaScript">;alert("信息提交失败，请重试！");location.href="index.html";</script>;');exit;
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
 	$sql1="DELETE FROM IN".$Classname." where ID=$ID";
 	
 	if (!mysql_query($sql1,$con))
  {
  die('<script language="JavaScript">;alert("信息提交失败，请重试！");location.href="index.html";</script>;');mysql_close($con);exit; 
  }
 	 $sql="INSERT INTO IN".$Classname."(Name,ID,Origin,ID_card,Home,Wechat,QQ,Email,Phone,FName,FPhone,MName,MPhone,HPhone)  VALUES('$Name','$ID','$Origin','$ID_card','$Home','$Wechat','$QQ','$Email','$Phone',
 	 '$FName','$FPhone','$MName','$MPhone','$HPhone')";
  	 if (!mysql_query($sql,$con))
  {
  die('<script language="JavaScript">;alert("信息录入失败，请重试！");location.href="index.html";</script>;');mysql_close($con);exit; 
  }
echo '<script language="JavaScript">;alert("成功更新提交信息！");location.href="index.html";</script>;';exit;

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
			$sql="INSERT INTO IN".$Classname."(Name,ID,Origin,ID_card,Home,Wechat,QQ,Email,Phone,FName,FPhone,MName,MPhone,HPhone)  VALUES('$Name','$ID','$Origin','$ID_card','$Home','$Wechat','$QQ','$Email','$Phone',
 	 '$FName','$FPhone','$MName','$MPhone','$HPhone')";
			if (!mysql_query($sql,$con))
  			{
  				die('<script language="JavaScript">;alert("信息提交失败，请重试！");location.href="index.html";</script>;');exit;
  			}
			echo '<script language="JavaScript">;alert("成功提交信息！");location.href="index.html";</script>;';
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


