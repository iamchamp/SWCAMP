<!DOCTYPE html>
<html>
<head>
<base href="http://sdaffairs.northcm.ac.th/">
<meta http-equiv="Content-Language" content="en-us">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="สำนักกิจการนักศึกษา มหาวิทยาลัยนอร์ท-เชียงใหม่">
<meta name="Description" content="สำนักกิจการนักศึกษา มหาวิทยาลัยนอร์ท-เชียงใหม่">
<title>สำนักกิจการนักศึกษา มหาวิทยาลัยนอร์ท-เชียงใหม่  - ข่าวสาร</title>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

Stylesheets -->
<link href="./templates/Default/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="./templates/Default/css/fontello.css" rel="stylesheet" type="text/css">
<link href="./templates/Default/css/flexslider.css" rel="stylesheet" type="text/css">
<link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
<link href="./templates/Default/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="./templates/Default/css/responsive-calendar.css" rel="stylesheet" type="text/css">
<link href="./templates/Default/css/chosen.css" rel="stylesheet" type="text/css">
<link href="jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />
<link href="./templates/Default/css/cloud-zoom.css" rel="stylesheet" type="text/css" />
<link href="./templates/Default/css/style.css" rel="stylesheet" type="text/css">


<style type="text/css">
    .no-fouc {display:none;}
</style>

<!-- jQuery -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>

<!-- Preloader -->
<script src="js/jquery.queryloader2.min.js"></script>

<script type="text/javascript">
$('html').addClass('no-fouc');

        $(document).ready(function(){

            $('html').show();

            var window_w = $(window).width();
            var window_h = $(window).height();
            var window_s = $(window).scrollTop();

            $("body").queryLoader2({
                backgroundColor: '#f2f4f9',
                barColor: '#63b2f5',
                barHeight: 4,
                percentage:false,
                deepSearch:true,
                minimumTime:1000,
                onComplete: function(){

                    $('.animate-onscroll').filter(function(index){

                        return this.offsetTop < (window_s + window_h);

                    }).each(function(index, value){

                        var el = $(this);
                        var el_y = $(this).offset().top;

                        if((window_s) > el_y){
                            $(el).addClass('animated fadeInDown').removeClass('animate-onscroll');
                            setTimeout(function(){
                                $(el).css('opacity','1').removeClass('animated fadeInDown');
                            },2000);
                        }

                    });

                }
            });

        });
</script>
</head>
<body class="sticky-header-on tablet-sticky-header">
<!-- Container -->
<div class="container">


    <!-- Header -->
    <header id="header" class="animate-onscroll">

        <!-- Main Header -->
        <div id="main-header">

            <div class="container">

            <div class="row">



                <!-- Logo -->
                <div id="logo" class="col-lg-4 col-md-4 col-sm-4">

                    <a href="index.php"><img src="./templates/Default/images/logo.png" alt="Logo"></a>

                </div>
                <!-- /Logo -->



                <!-- Main Quote -->
                <div class="col-lg-3 col-md-3 col-sm-3">



                </div>
                <!-- /Main Quote -->



                <!-- Newsletter -->
                <div class="col-lg-4 col-md-5 col-sm-5">
                <div class='sitemap'>
                    <ul class='header-menu'>
                        <li><a href='index.php'><i class="icons icon-home"></i>หน้าแรก</a></li>
                        <li>|</li>
                        <li><a href='sitemap/'><i class="icons icon-sitemap"></i>แผนผังเว็บไซต์</a></li>
                        <li>|</li>
                        <li><a href='admin/'><i class="icons icon-lock-open-alt"></i>สำหรับเจ้าหน้าที่</a></li>
                    </ul>
                    </div>
                    <div class='clear'></div>
                    <form id="newsletter" action="" method="POST">
                        <div class="newsletter-form">
                            <div class="newsletter-email">
                                <input type="text" name="newsletter-email" placeholder="Enter Keyword...">
                            </div>

                            <div class="newsletter-submit">
                                <input type="submit" value="">
                                <i class="icons icon-search"></i>
                            </div>

                        </div>

                    </form>

                </div>
                <!-- /Newsletter -->



            </div>

            </div>

        </div>
        <!-- /Main Header -->





        <!-- Lower Header -->
        <div id="lower-header">

            <div class="container">
            <div id="menu-button">
                <div>
                <span></span>
                <span></span>
                <span></span>
                </div>
                <span>เมนู</span>
            </div>

            <ul id="navigation">
                <li class="home-button {L_HOME_ACTIVE}"><a href="index.php"><i class="icons icon-home"></i></a></li>
                <li class='{L_ABOUT_ACTIVE}'><a href='javascript:void(0);'>เกี่ยวกับสำนัก</a>
                    <ul>
                        <li><a href="about/">ปณิธาน/ วิสัยทัศน์/พันธกิจ</a></li>
                        <li><a href="about/structure/">โครงสร้างการบริหาร</a></li>
                        <li><a href="about/staff/">บุคลากร</a></li>
                    </ul>
                </li>
                <li class='{L_QUALITY_ACTIVE}'><a href='qualitys/'>การประกันคุณภาพ</a></li>
                <li class='{L_SERVICE_ACTIVE}'><a href='service/'>งานบริการ</a></li>
                <li class='current-menu-item'><a href='javascript:void(0);'>ข่าวสาร</a>
                    <ul>
                        <li><a href="article/new/">ข่าวประชาสัมพันธ์</a></li>
                        <li><a href="article/activity/">ข่าวกิจกรรม</a></li>
                    </ul>
                </li>
                <li class='{L_DOWNLOAD_ACTIVE}'><a href="download/">ดาวน์โหลด</a></li>
                <li class='donate-button {L_CONTACT_ACTIVE}'><a href='contact/'>ติดต่อเรา</a></li>
            </ul>

            </div>

        </div>
        <!-- /Lower Header -->


    </header>
    <!-- /Header -->
<section id="content">

            <!-- Page Heading -->
            <section class="section page-heading animate-onscroll">

                <h1>ข่าวสาร</h1>
                <p class="breadcrumb"><a href="index.php">Home</a> / ข่าวสาร</p>

            </section>
            <!-- Page Heading -->


            <!-- Section -->
            <section class="section full-width-bg gray-bg">

                <div class="row">

                    <div class="col-lg-9 white-box animate-onscroll">

                        <ul class="popular-news">
                            <li><div class="thumbnail"><a href="article/new/20/"><img src="images/articles/2015_06/20/10455644_1600895683516834_5385506599447664719_n.jpg" alt="" title="โครงการอบรมและการแข่งขันกีฬาวู้ดบอล อบต. ในจ.เชียงใหม่ ในระหว่าง วันที่ 24-25 มิถุนายน 2558"></a></div> <div class="post-content"><h6><a href="article/new/20/" class="mtitle">โครงการอบรมและการแข่งขันกีฬาวู้ดบอล อบต. ในจ.เชียงใหม่ ในระหว่าง วันที่ 24-25 มิถุนายน 2558</a></h6> <div class="post-meta"><span><i class="icons icon-calendar"></i> 26 มิ.ย. 2558</span> <span><i class="icons icon-user"></i> 26 มิ.ย. 2558</span></div></div></li>
                            <li><div class="thumbnail"><a href="article/new/19/"><img src="images/articles/2015_06/19/อินชี.jpg" alt="" title="&gt;ขอเชิญชวนร่วมงานลูกอินทรี&gt;&gt;คืนรัง&gt;&gt;ช่วงเวลาที่ดีที่สุด"></a></div> <div class="post-content"><h6><a href="article/new/19/" class="mtitle">>ขอเชิญชวนร่วมงานลูกอินทรี>>คืนรัง>>ช่วงเวลาที่ดีที่สุด</a></h6> <div class="post-meta"><span><i class="icons icon-calendar"></i> 9 มิ.ย. 2558</span> <span><i class="icons icon-user"></i> 9 มิ.ย. 2558</span></div></div></li>
                            <li><div class="thumbnail"><a href="article/new/18/"><img src="images/articles/2015_06/18/11258064_1591769177762818_5815918395972068846_n.jpg" alt="" title="โครงการ การอบรมสัมมนาผู้นำนักศึกษา 2558 วันที่2- 5 มิถุนายน 2558"></a></div> <div class="post-content"><h6><a href="article/new/18/" class="mtitle">โครงการ การอบรมสัมมนาผู้นำนักศึกษา 2558 วันที่2- 5 มิถุนายน 2558</a></h6> <div class="post-meta"><span><i class="icons icon-calendar"></i> 9 มิ.ย. 2558</span> <span><i class="icons icon-user"></i> 9 มิ.ย. 2558</span></div></div></li>
                            <li><div class="thumbnail"><a href="article/new/17/"><img src="images/articles/2015_04/17/10439394_945843642132892_6313081090329376663_n.jpg" alt="" title="โครงการปัจฉิมนิเทศ นักศึกษา ชั้นปีที่ 4 ประจำปีการสึกษา2557"></a></div> <div class="post-content"><h6><a href="article/new/17/" class="mtitle">โครงการปัจฉิมนิเทศ นักศึกษา ชั้นปีที่ 4 ประจำปีการสึกษา2557</a></h6> <div class="post-meta"><span><i class="icons icon-calendar"></i> 23 เม.ย. 2558</span> <span><i class="icons icon-user"></i> 23 เม.ย. 2558</span></div></div></li>
                            <li><div class="thumbnail"><a href="article/new/16/"><img src="images/articles/2015_04/16/553231_1575176462742210_2838298087055502652_n.jpg" alt="" title="โครงการ สรงน้ำพระวันที่ 13 เมษายน 2558"></a></div> <div class="post-content"><h6><a href="article/new/16/" class="mtitle">โครงการ สรงน้ำพระวันที่ 13 เมษายน 2558</a></h6> <div class="post-meta"><span><i class="icons icon-calendar"></i> 23 เม.ย. 2558</span> <span><i class="icons icon-user"></i> 23 เม.ย. 2558</span></div></div></li>
                            <li><div class="thumbnail"><a href="article/new/15/"><img src="images/articles/2015_04/15/11026479_924165787635397_984114792_n.jpg" alt="" title="ประกาศ!! รับสมัครนายกองค์การนักศึกษา และ นายกสโมสรนักศึกษาคณะ ประจำปีการศึกษา 2558 เพื่อเป็นผู้นำนักศึกษามหาวิทยาลัยนอร์ท-เชียงใหม่"></a></div> <div class="post-content"><h6><a href="article/new/15/" class="mtitle">ประกาศ!! รับสมัครนายกองค์การนักศึกษา และ นายกสโมสรนักศึกษาคณะ ประจำปีการศึกษา 2558 เพื่อเป็นผู้นำนักศึกษามหาวิทยาลัยนอร์ท-เชียงใหม่</a></h6> <div class="post-meta"><span><i class="icons icon-calendar"></i> 3 เม.ย. 2558</span> <span><i class="icons icon-user"></i> 3 เม.ย. 2558</span></div></div></li>
                            <li><div class="thumbnail"><a href="article/new/14/"><img src="images/articles/2015_03/14/aaaaaa.jpg" alt="" title="สำนักกิจการนักศึกษา ร่วมกับสโมสรนักศึกษาคณะวิทยาศาสตร์และเทคโนโลยี จัดกิจกรรมจิตอาสาปลูกสนามหญ้าเพื่อน้องๆ มูลนิธินิมิตใหม่เพื่อชีวิต"></a></div> <div class="post-content"><h6><a href="article/new/14/" class="mtitle">สำนักกิจการนักศึกษา ร่วมกับสโมสรนักศึกษาคณะวิทยาศาสตร์และเทคโนโลยี จัดกิจกรรมจิตอาสาปลูกสนามหญ้าเพื่อน้องๆ มูลนิธินิมิตใหม่เพื่อชีวิต</a></h6> <div class="post-meta"><span><i class="icons icon-calendar"></i> 25 มี.ค. 2558</span> <span><i class="icons icon-user"></i> 25 มี.ค. 2558</span></div></div></li>
                            <li><div class="thumbnail"><a href="article/new/13/"><img src="images/thumb-news.jpg" border="0"></a></div> <div class="post-content"><h6><a href="article/new/13/" class="mtitle">ฟุตบอล 7 คน North-Chiang Mai Cup 2015 ครั้งที่ 3</a></h6> <div class="post-meta"><span><i class="icons icon-calendar"></i> 19 มี.ค. 2558</span> <span><i class="icons icon-user"></i> 19 มี.ค. 2558</span></div></div></li>
                            <li><div class="thumbnail"><a href="article/new/11/"><img src="images/articles/2015_02/11/usrfile_736314_080320.jpg" alt="" title="โครงการ น้อมจิตวันทาบูรพคณาจารย์"></a></div> <div class="post-content"><h6><a href="article/new/11/" class="mtitle">โครงการ น้อมจิตวันทาบูรพคณาจารย์</a></h6> <div class="post-meta"><span><i class="icons icon-calendar"></i> 20 ก.พ. 2558</span> <span><i class="icons icon-user"></i> 20 ก.พ. 2558</span></div></div></li>
                            <li><div class="thumbnail"><a href="article/new/10/"><img src="images/articles/2015_02/10/บริจากโร.jpg" alt="" title="ขอเชิญร่วมบริจาคโลหิต ในวันพฤหัสบดีที่ 26 กุมภาพันธ์ 2558 ตั้งแต่เวลา 9.00-15.00 น"></a></div> <div class="post-content"><h6><a href="article/new/10/" class="mtitle">ขอเชิญร่วมบริจาคโลหิต ในวันพฤหัสบดีที่ 26 กุมภาพันธ์ 2558 ตั้งแต่เวลา 9.00-15.00 น</a></h6> <div class="post-meta"><span><i class="icons icon-calendar"></i> 20 ก.พ. 2558</span> <span><i class="icons icon-user"></i> 20 ก.พ. 2558</span></div></div></li>
                            <li><div class="thumbnail"><a href="article/new/9/"><img src="images/articles/2015_02/9/usrfile_281140_080354.jpg" alt="" title="โครงการ ncu music award 2015 รอบ ตัดสิน"></a></div> <div class="post-content"><h6><a href="article/new/9/" class="mtitle">โครงการ ncu music award 2015 รอบ ตัดสิน</a></h6> <div class="post-meta"><span><i class="icons icon-calendar"></i> 19 ก.พ. 2558</span> <span><i class="icons icon-user"></i> 19 ก.พ. 2558</span></div></div></li>
                        </ul>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-3 col-md-3 col-sm-4 sidebar">
                      <div class="social-media animate-onscroll">
                            <span class="small-caption">ติดตามเราผ่านทาง:</span>
                            <ul class="social-icons">
                                <li class="facebook"><a href="https://www.facebook.com/NCUFUN" target='_blank' class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
                                <li class="twitter"><a href="https://twitter.com/NCUFriend/" target='_blank' class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>
                                <li class="google"><a href="#" class="tooltip-ontop" title="Google Plus"><i class="icons icon-gplus"></i></a></li>
                                <li class="youtube"><a href="http://www.youtube.com/NCUChannel/" target='_blank' class="tooltip-ontop" title="Youtube"><i class="icons icon-youtube-1"></i></a></li>
                                <li class="email"><a href="https://mail.northcm.ac.th/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fmail.northcm.ac.th%2fowa%2f%3fbO%3d1" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>
                            </ul>
                            <ul class="social-buttons">
                                <li>
                                   <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNCUFUN&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
                                </li>
                            </ul>
                        </div>
                        <!-- Calendar -->
                        <div class="sidebar-box comments-box white animate-onscroll">
                            <h3><i class='icons icon-calendar'></i> Calendar</h3>
                            <div class="responsive-calendar sidebar-calendar">
                                <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;mode=AGENDA&amp;height=350&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=r17ai7ebm34c07pu74o6k22m5g%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=Asia%2FBangkok" style=" border-width:0 " width="280" height="350" frameborder="0" scrolling="no"></iframe>
                            </div>
                        </div>
                        <!-- /Calendar -->

                    </div>
                    <!-- /Sidebar -->

                </div>

            </section>
            <!-- /Section -->

        </section>
<!-- Footer -->
            <footer id="footer">

                <!-- Main Footer -->
                <div id="main-footer">

                    <div class="row">

                        <div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">

                            <h4>คณะ/ภาควิชา</h4>

                            <ul class="menu">
                                    <li><a href="http://eng.northcm.ac.th/" target='_blank'>คณะวิศวกรรมศาสตร์</a></li>
                                    <li><a href="http://www.science-ncu.com/" target='_blank'>คณะวิทยาศาสตร์และเทคโนโลยี</a></li>
                                    <li><a href="http://ba.northcm.ac.th/" target='_blank'>คณะบริหารธุรกิจ</a></li>
                                    <li><a href="http://www2.northcm.ac.th/faculty/law/" target='_blank'>คณะนิติศาสตร์</a></li>
                                    <li><a href="http://www2.northcm.ac.th/faculty/social/" target='_blank'>คณะสังคมศาสตร์และศิลปศาสตร์</a></li>
                                </ul>

                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">

                            <h4>หน่วยงานภายใน</h4>

                                <ul class="menu">
                                    <li><a href="http://offpres.northcm.ac.th/" target='_blank'>สำนักอธิการบดี</a></li>
                                    <li><a href="http://academic.northcm.ac.th/" target='_blank'>สำนักวิชาการ</a></li>
                                    <li><a href="http://qa.northcm.ac.th/" target='_blank'>สำนักประกันคุณภาพ</a></li>
                                    <li><a href="http://ows.northcm.ac.th/" target='_blank'>สำนักสวัสดิการและกิจการพิเศษ</a></li>
                                    <li><a href="http://research.northcm.ac.th/" target='_blank'>สถาบันวิจัย</a></li>
                                    <li><a href="http://lib.northcm.ac.th/" target='_blank'>ศูนย์บรรณาสารและสื่อการศึกษา</a></li>
                                    <li><a href="http://services.northcm.ac.th/" target='_blank'>ศูนย์บริการการศึกษา</a></li>
                                    <li><a href="http://services.northcm.ac.th/" target='_blank'>ศูนย์ศิลปวัฒนธรรม</a></li>
                                    <li><a href="http://information.northcm.ac.th/" target='_blank'>ศูนย์สื่อสารองค์กร</a></li>
                                    <li><a href="http://exp.northcm.ac.th/" target='_blank'>ศูนย์สหกิจศึกษาและแนะแนวการทำงาน</a></li>
                                    <li><a href="http://it.northcm.ac.th/" target='_blank'>ศูนย์คอมพิวเตอร์และเทคโนโลยีสารสนเทศ</a></li>
                                </ul>


                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 twitter-widget-area animate-onscroll">

                            <h4>ติดต่อเรา</h4>

                            <div class="">
                             <strong>สำนักกิจการนักศึกษา มหาวิทยาลัยนอร์ท-เชียงใหม่</strong>
                             <p>ติดต่อสอบถามได้ที่อาคาร 1 ชั้น 2</p>
                             <p>โทร.0-5381-9910-2 โทรสาร. 0-5381-9998</p>
                             <p>อีเมล์: arunya@northcm.ac.th</p>
                            </div>

                            <a href="#" class="button twitter-button">Follow us on twitter</a>

                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">

                            <h4>Like us on facebook</h4>

                            <iframe src="http://www.facebook.com/plugins/likebox.php?id=109590162483191&amp;width=270&amp;height=240&amp;colorscheme=dark&amp;header=false&amp;show_faces=true&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:100%; height:240px;"></iframe>


                        </div>

                    </div>

                </div>
                <!-- /Main Footer -->




                <!-- Lower Footer -->
                <div id="lower-footer">

                    <div class="row">

                        <div class="col-lg-7 col-md-7 col-sm-7 animate-onscroll">

                            <p class="copyright">© 2014 North-Chiang Mai University. All Rights Reserved.</p>

                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5 animate-onscroll">

                            <div class="social-media">
                                <ul class="social-icons">
                                    <li class="facebook"><a href="https://www.facebook.com/NCUFUN" target='_blank' class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
                                    <li class="twitter"><a href="https://twitter.com/NCUFriend/" target='_blank' class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>
                                    <li class="google"><a href="#" class="tooltip-ontop" title="Google Plus"><i class="icons icon-gplus"></i></a></li>
                                    <li class="youtube"><a href="http://www.youtube.com/NCUChannel/" target='_blank' class="tooltip-ontop" title="Youtube"><i class="icons icon-youtube-1"></i></a></li>
                                    <li class="email"><a href="https://mail.northcm.ac.th/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fmail.northcm.ac.th%2fowa%2f%3fbO%3d1" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>
                                    <li class="flickr"><a href="admin/" class="tooltip-ontop" title="Login"><i class="icons icon-lock-open-alt"></i></a></li>
                                </ul>
                                <ul class="social-buttons">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /Lower Footer -->


            </footer>
            <!-- /Footer -->


            <!-- Back To Top -->
            <a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>

        </div>
        <!-- /Container -->

       <!-- JavaScript -->

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- Modernizr -->
        <script type="text/javascript" src="js/modernizr.js"></script>

        <!-- Sliders/Carousels -->
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>

        <!-- Revolution Slider  -->
        <script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Calendar -->
        <script type="text/javascript" src="js/responsive-calendar.min.js"></script>

        <!-- Raty -->
        <script type="text/javascript" src="js/jquery.raty.min.js"></script>

        <!-- Chosen -->
        <script type="text/javascript" src="js/chosen.jquery.min.js"></script>

        <!-- jFlickrFeed -->
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>

        <!-- InstaFeed -->
        <script type="text/javascript" src="js/instafeed.min.js"></script>

        <!-- Twitter -->
        <script type="text/javascript" src="php/twitter/jquery.tweet.js"></script>

        <!-- MixItUp -->
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>

        <!-- JackBox -->
        <script type="text/javascript" src="jackbox/js/jackbox-packed.min.js"></script>

        <!-- CloudZoom -->
        <script type="text/javascript" src="js/zoomsl-3.0.min.js"></script>

        <!-- Main Script -->
        <script type="text/javascript" src="js/script.js"></script>


        <!--[if lt IE 9]>
            <script type="text/javascript" src="js/jquery.placeholder.js"></script>
            <script type="text/javascript" src="js/script_ie.js"></script>
        <![endif]-->

</body>
</html>
