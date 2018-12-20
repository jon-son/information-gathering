<?php
  
		$Classname=$_GET['Classname'];
		$XID_card=$_GET['ID_card'];
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


   		$con = mysql_connect("localhost","root","xxxx");
		if (!$con)
		{
			die('<script language="JavaScript">;alert("信息提交失败，请重试！");location.href="query.html";</script>;');exit;
		}
        mysql_select_db("Cloud", $con);
		mysql_query("set names utf8");


        if($Origin != "")  
        {  


			$sql="UPDATE IN".$Classname." SET Origin='".$Origin."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("籍贯修改失败！");</script>;');
   			}

        }  
                
        if($ID_card != "")  
        {  

        	if(strlen($ID_card)!=18)
        	{
        		echo "<script>alert('身份证格式错误，请重新填写！'); history.go(-1);</script>";  
            	exit;
        	}

			$sql="UPDATE IN".$Classname." SET ID_card='".$ID_card."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("身份证修改失败！");</script>;');
   			}

        } 
        if($Home != "")  
        {  
   	
			$sql="UPDATE IN".$Classname." SET Home='".$Home."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("家庭住址修改失败！");</script>;');
   			}
        }  
                
        if($Wechat != "")  
        {  
   
			$sql="UPDATE IN".$Classname." SET Wechat='".$Wechat."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("微信修改失败！");</script>;');
   			}
        }  
        if($QQ != "")  
        {  

			$sql="UPDATE IN".$Classname." SET QQ='".$QQ."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("QQ修改失败！");</script>;');
   			}
        } 
        if($Email != "")  
        {  
        	if(!strpos($Email,"@")||strstr($Email,"@")=="@")
        	{
            	echo "<script>alert('邮箱格式错误，请重新填写！'); history.go(-1);</script>";  
             	exit;
        	}

			$sql="UPDATE IN".$Classname." SET Email='".$Email."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("邮箱修改失败！");</script>;');
   			}
        } 
        
        
        if($Phone != "") 
        {  
        	if(strlen($Phone)!=11)  
        	{  
        	    echo "<script>alert('本人联系手机格式错误，请重新填写！'); history.go(-1);</script>";  
             	exit;
        	}

			$sql="UPDATE IN".$Classname." SET Phone='".$Phone."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("本人联系手机修改失败！");</script>;');
   			}
        }
        
        if($FPhone != "") 
        {  
        	if(strlen($FPhone)!=11)  
        	{  
        	    echo "<script>alert('父亲联系手机格式错误，请重新填写！'); history.go(-1);</script>";  
             	exit;
        	}

			$sql="UPDATE IN".$Classname." SET FPhone='".$FPhone."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("父亲联系手机修改失败！");</script>;');
   			}
        }
		if($FName != "") 
        {  

			$sql="UPDATE IN".$Classname." SET FName='".$FName."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("父亲姓名修改失败！");</script>;');
   			}
        }
        if($MPhone != "") 
        {  
        	if(strlen($MPhone)!=11)  
        	{  
        	    echo "<script>alert('母亲联系手机格式错误，请重新填写！'); history.go(-1);</script>";  
             	exit;
        	}

			$sql="UPDATE IN".$Classname." SET MPhone='".$MPhone."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("母亲联系手机修改失败！");</script>;');
   			}
        }
        
		if($MName != "") 
        {  
   
	
			$sql="UPDATE IN".$Classname." SET MName='".$MName."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("母亲姓名修改失败！");</script>;');
   			}
        }
        if($HPhone != "") 
        {  

			$sql="UPDATE IN".$Classname." SET HPhone='".$HPhone."' WHERE  ID='".$XID_card."'";
			if (!mysql_query($sql,$con))
			{
		  		die('<script language="JavaScript">;alert("家庭电话修改失败！");location.href="query.html";</script>;');
   			}
        }
    mysql_close($con);
		echo '<script language="JavaScript">;alert("成功更新提交信息！");location.href="index.html";</script>;';
		exit;	
?>