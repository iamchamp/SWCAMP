<!-- 
	type : view
	file_name : home.php
    file_type : php
    author : Jedsadakorn Sirikunpan
    details : homepage
	start_date : 16/9/2557
    end_Date : -
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ระบบ จัดการการส่งเสริม ทัต</title>
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script> <!-- น้เข้าปลั๊กอิน  jquery-->

    <script type="text/javascript">
		$(document).ready(function() {
		 $( "#province" )
			.click(function() {
				var str = "";
					$( "select#province option:selected" ).each(function() {
						str += $( this ).val() + " ";
					});
						$.post("<?php echo base_url()?>index.php/home/test1",
						  {
							provinceId:str
						  },
						  function(data){
							$("#district").removeAttr('disabled');
							$("#canton").attr('disabled','disabled');
							$("#zipcode").attr('disabled','disabled');
							$('#district').html(data);
						  });
				})
		.trigger( "change" );
		  
		 $( "#district" )
			.change(function() {
				var str = "";
					$( "select#district option:selected" ).each(function() {
						str += $( this ).val() + " ";
					});
						$.post("<?php echo base_url()?>index.php/home/test2",
						  {
							districtId:str
						  },
						  function(data){
							 
							$('#canton').html(data);
						  });
				})
		.trigger( "change" );
		
		 $( "#canton" )
			.change(function() {
				var str = "";
					$( "select#canton option:selected" ).each(function() {
						str += $( this ).val() + " ";
					});
						$.post("<?php echo base_url()?>index.php/home/test3",
						  {
							cantonId:str
						  },
						  function(data){
							  $('#zipcode').removeAttr("disabled");
							$('#zipcode').val(data);
						  });
				})
		.trigger( "change" );
	
		});
	</script>
</head>
<body>
<form action="<?php echo base_url()?>index.php/home/ss" method="post">
<p>
  <label for="province">จังหวัด:</label>
  <select name="province" id="province">
  <option value="0">------</option>
  <?php foreach($province as $p){?>
  <option value="<?php echo $p['provinceId']?>"><?php echo $p['provinceName']?></option>
  <?php }?>
  </select>
  
</p>
<p>
  <label for="district">อำเภอ:</label>
  <select name="district"  id="district" disabled>
    <option>------</option>

  </select>
</p>
<p>
  <label for="canton">ตำบล:</label>
 <select name="canton"  id="canton" disabled>
 
    <option value="0">------</option>

  </select>
</p>
<p>
  <label for="textfield">รหัสไปรษณีย์:</label>
  <input name="zipcode" type="text"  id="zipcode" size="5" maxlength="5" disabled  readonly>
</p>
<input type="submit" name="button" id="button" value="Button">
</form>
</body>
</html>