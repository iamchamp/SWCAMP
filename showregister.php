<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<center>
<body bgcolor="#6699FF">
<h1>ระบบสมัครสมาชิก</h1><br>


<fieldset style="width:700px;height:500px;">
<legend>
กรุณากรอกข้อมูลให้ครบถ้วน:
</legend>
		<form name="frmMain" method="post" action="">

<?php 
if(count($error) > 0)
{
	foreach($error as $key => $value)
	{
		echo $value . '<br>';
	}

}

	if(count($suscess) > 0)
{
	foreach($suscess as $key => $value)
	{
		echo $value . '<br>';
	}
}
	
?>


<br/> <br/> <b>ชื่อ : </b> <input type="text" name="name" placeholder="ชื่อ" style="background: #FFF0F5">
<b>นามสกุล :   </b> <input type="text" name="lastname" placeholder="นามสกุล"style="background: #FFF0F5" ><br/> <br/> <br/> 

															
<b> User : </b> <input type="text" name="user" placeholder="รหัสนักศึกษา" style="background: #FFF0F5" maxlength=9 >
<b> Password : </b> <input type="password" name="password" placeholder="วัน/เดือน/ปีเกิด **ค.ศ "style="background: #FFF0F5" maxlength=8> <br /><br /> <br /> 
<input type="radio" name="status" value="user"> ยอมรับข้อตกลง <br /><br />
<input type="submit" value="สมัครสมาชิก"><br /><br />
</form>



															 
	



</fieldset>


</body>
</center>
</html>