<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<title>ล็อกอิน</title>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>
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
		echo $value .  '<br>';
	}
}
	
?>
 <div class="container" >
<div class="col-md-5" >
    <div class="form-area" >  
      
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">สมัครสมาชิก</h3>
					<form method="post" action=" ">
    				<div class="form-group">
    					<h5 style="margin-bottom: 25px; text-align;">ชื่อ</h5>
						<input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ" required>
					
						<h5 style="margin-bottom: 25px; text-align;">สกุล</h5>
						<input type="text" class="form-control" id="lastname" name="lastname" placeholder="สกุล" required>
					
						<h5 style="margin-bottom: 25px; text-align;">Username</h5>
						<input type="text" class="form-control" id="username" name="username" placeholder="รหัสนักศึกษา" required>
					
						<h5 style="margin-bottom: 25px; text-align;">Password</h5>
						<input type="text" class="form-control" id="password" name="password" placeholder="วัน/เดือน/ปีเกิด** ค.ศ." required>
					</div>
                    <div class="checkbox" style="center;">
                        <label>
                            <input type="checkbox" name="status" value="user"> ยอมรับข้อตกลง
                        </label>
                    </div>
            
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" value = "summit">ยืนยันการสมัครสมาชิก</button>
        </form>
		
    </div>
</div>
</div>