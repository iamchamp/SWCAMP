<!-- 
	type : view
	file_name : home.php
    file_type : php
    author : Jedsadakorn Sirikunpan
    details : homepage
	start_date : 16/9/2557
    end_Date : -
-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ระบบทันตสุขภาพเด็ก โรงพยาบาลสมเด็จพระยุพราชเด่นชัย</title>
  <link rel="stylesheet" href="<?php echo base_url();?>css/menu.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/header.css">
</head>

<body>
<div id="header"><div class="p">ระบบทันตสุขภาพเด็ก โรงพยาบาลสมเด็จพระยุพราชเด่นชัย</div><div class="img"><img src="<?php echo base_url();?>img/logo.png" width="200px"></div></div>
<div id="menu">
<ul class="dropdown">
      <li>
        <a class="mainMenu" href="#">จัดการข้อมูลเด้ก</a>
        <ul>
          <li><a class="submenu" href="#">เด็กในเขตความรับผิดชอบ</a></li>
           <li><a class="submenu" href="#">ข้อมูลประวัติเด็ก</a></li>
        </ul>
      </li>
      <li>
        <a class="mainMenu" href="#">จัดการข้อมูลการตรวจ</a>
        <ul>
          <li><a class="submenu" href="#">ระยะเวลาการตรวจ</a>
          <ul>
              <li><a class="submenusub" href="#">3เดือน</a></li>
               <li><a class="submenusub" href="#">6เดือน</a></li>
                <li><a class="submenusub" href="#">12เดือน</a></li>
              </ul>
          
          </li>
          		
          <li><a class="submenu" href="#">พฤติกรรมทัตสุขภาพ</a></li>
          <li><a class="submenu" href="#">ตารางการนัดเด็กของฉัน</a>    </li>      

        </ul>
      </li>
      <li>
        <a class="mainMenu" href="#">จัดการมูลบุคลากร</a>
        <ul>
          <li><a class="submenu"  href="#">ตามเขตรับผิดชอบ</a></li>
        </ul>
      </li>
     <li><a class="mainMenu" href="#">รายงานข้อมูลสถิติ</a>
        <ul>
          <li><a class="submenu" href="#">สถิติโดยรวมทั้งหมด</a></li>
           <li><a class="submenu" href="#">สถิติโดยแบ่งตามพื้นที่</a></li>
           <li><a class="submenu" href="#">สถิติโดยแบ่งตามพฤติกรรม</a></li>
           <li><a class="submenu" href="#">สถิติเด็กในเขตของฉัน</a>
           		  <ul>
        		           <li><a class="submenu" href="#">สถิติโดยรวมในเขตของฉัน</a></li>
                           <li><a class="submenu" href="#">สถิติโดยแบ่งตามพฤติกรรม</a></li>
       			 </ul>
            <li>
           <li><a class="submenu" href="#">สถิติเด็กการตรวจของฉัน</a>
          	  <ul>
        		        <li><a class="submenu" href="#">แบ่งตามพฤษติกรรม</a></li>
                        <li><a class="submenu" href="#">แบ่งตามช่วงอายุ</a>
                            <ul>
       		       				<li><a class="submenusub" href="#">3เดือน</a></li>
                               <li><a class="submenusub" href="#">6เดือน</a></li>
                                <li><a class="submenusub" href="#">12เดือน</a></li>
             	 			</ul>
                        <li><a class="submenu" href="#">ข้อมูลการตรวจรายบุคคล</a>
       			 </ul>
            <li>
        </ul>
      </li>
    </ul>
    <script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>js/menu/tendina.min.js"></script>
    <script>
      $('.dropdown').tendina({
        // This is a setup made only
        // to show which options you can use,
        // it doesn't actually make sense!
        animate: true,
        speed: 500,
        onHover: false,
        hoverDelay: 300,
        activeMenu: $('#deepest'),
        openCallback: function(clickedEl) {
          console.log('Hey dude!');
        },
        closeCallback: function(clickedEl) {
          console.log('Bye dude!');
        }
      })
    </script>
    </div>
</body>
</html>
