<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body bgcolor="#3399ff">
<a href="/limitt/index.php/addproduct/index">HOME</a><h1><center>ระบบสมัครสมาชิค</h1> </center><br>
<?php 

	if(count($error) > 0)
{
	foreach($error as $key => $value)
	{
		echo $value . '<br>';
	}
}
?>
<center><h2><FONT COLOR=#ffcc99>*******************************************************</FONT></h2></center>

<center>
<form method="post" action=" ">
<h3> username : <input type="text" name="setname"><br/></h3><br>
ยอมรับ <input type="radio" name="setuser" value="user">


<h3>password : <input type="password" name="setpass"><br/></h3>

<input type="submit" value = "summit"><br>
</form>
</center>

 <td colspan="2" align="center"><a href="<?php echo base_url();?>index.php/home/logout">Logout</a></td>
            </tr>


</center>
</body>
</html>