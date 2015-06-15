<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<title>user</title>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>


<div class="container">
<div class="resume" style="text-align:center;">
    <header class="page-header">
    <h1 class="page-title">ข้อมูลส่วนตัว</h1>
  </header>
<div class="row" style="text-align:center;">
  <div class="col-xs-12">
            <div class="col-xs-12" style="text-align:center;">
              <ul class="list-group" style="text-align:center;">
                <li class="list-group-item"><?php echo $loginData['membername'];	?> </li>
                <li class="list-group-item">	<?php echo $loginData['memberlastname'];	?></li>
                <li class="list-group-item"><?php echo $loginData['status'];	?> </li>
             
              </ul>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4" style="text-align:center;">
            <a href="<?php echo base_url();?>index.php/home/logout" class="btn btn-lg btn-success btn-block">ออกจากระบบ</a>
          </div>

          </div>
        </div>
      </div>
  </div>
</div>
    
</div>