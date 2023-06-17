<!-- Template 2098 Health http://www.tooplate.com/view/2098-health -->
<?php
include('php/connectdb.php');
include('headtotoe/thai_date.php');
// include('headtotoe/counter.php');
session_start();

if (empty($_SESSION['role'])) {
     header('location: login.html');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

     <title>TOYOTA Kaennakorn</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
     <!-- <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'> -->
     <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

     <script type="text/javascript" src="js/calendar.js"></script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">



</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12 text-align-center">
                         <h22>TOYOTA</h22>
                         <h21>KAENNAKORN</h21>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand" style="margin:-8px 0 0 10px">
                         <img src="images/Logo.png" class="img-responsive" alt="Image" height="50" width="100"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li>
                              <?php echo $_SESSION['role']; ?>
                         </li>
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="team.html" class="smoothScroll">โครงสร้างองค์กร</a></li>
                         <li><a href="php/more_news.php" class="smoothScroll">ข่าว</a></li>
                         <li><a href="sawasdikarn.html" class="smoothScroll">ข่าวสารHR</a></li>
                         <!-- <li><a href="promotions.html" class="smoothScroll">Promotions</a></li> -->
                         <!--<li class="appointment-btn"><a href="login.html">login</a></li>-->

                         <div class="dropdown">

                              <o>Menu</o>
                              <div class="dropdown-content">
                                   <a href="https://repairit.tkn.co.th/">แจ้งซ่อมIT</a>
                                   <a href="https://booking.tkn.co.th/">จองห้องประชุม</a>
                                   <a href="https://bookingcar.tkn.co.th/">จองรถใช้งาน</a>
                              </div>
                         </div>

                         <li><a href="php/logout.php" class="smoothScroll">ออกจากระบบ</a></li>

                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-9">
                                        <h3>เราจะทำให้คุณมีความสุขมากขึ้น</h3>
                                        <h1>บริการแจ้งซ่อม IT</h1>
                                        <a href="https://repairit.tkn.co.th/"
                                             class="section-btn btn btn-default btn-green smoothScroll">แจ้งซ่อม</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-9">
                                        <h3>คุณ</h3>
                                        <h1>มีเรื่องไม่สบายใจหรือเปล่า?</h1>
                                        <a href="appeal.html"
                                             class="section-btn btn btn-default btn-green smoothScroll">ร้องเรียน</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-9">
                                        <h3>เตรียมพบกับ</h3>
                                        <h1>ไลฟ์สไตล์ใหม่</h1>
                                        <a href="login.html"
                                             class="section-btn btn btn-default btn-green smoothScroll">login</a>
                                   </div>
                              </div>

                         </div>
                    </div>

                    <div class="theboxes">
                         <div class="col-md-2 col-sm-2">
                              <div class="box">

                                   <br><a href="https://repairit.tkn.co.th/"><img src="images/logo1.jpg"
                                             class="img-responsive" alt="Image" margin-top="30px"></a>
                                   <a href="https://repairit.tkn.co.th/">
                                        <h31>แจ้งซ่อมIT</h31>
                                   </a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2">
                              <div class="box">
                                   <a href="appeal.html"><img style="margin: 1px 1px 1px 15px; float: middle;"
                                             src="images/logo2.jpg" class="img-responsive" alt="Image" height="405"
                                             width="140">
                                        <h31>ร้องเรียน</h31>
                                   </a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2">
                              <div class="box">
                                   <br><br><a href="https://booking.tkn.co.th/"><img src="images/logo3.jpg"
                                             class="img-responsive" alt="">
                                        <a href="https://booking.tkn.co.th/">
                                             <h31>จองห้องประชุม</h31>
                                        </a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2">
                              <div class="box">
                                   <a href="https://bookingcar.tkn.co.th/"><img
                                             style="margin: 1px 1px 1px 15px; float: middle;" src="images/logo4.png"
                                             class="img-responsive" alt="Image" width="120">
                                        <a href="https://bookingcar.tkn.co.th/">
                                             <h31>จองรถใช้งาน</h31>
                                        </a>
                              </div>
                         </div>

                    </div>

     </section>

     <section id="prakad" data-stellar-background-ratio="3" style="padding-top: 43px; padding-bottom: 43px;">
          <div class="container">
               <div class="row">
                    <div class="theboxes">
                         <div class="col-md-9 col-sm-6">

                              <?php

                              $query = "SELECT pk_id, title,txtmssge, DATE(time) AS time FROM prakad ORDER BY time DESC limit 4";
                              $result = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_assoc($result)) {
                                   echo "<hr>";
                                   ?>
                                   <div class="theboxes">
                                        <div class="col-md-3 col-sm-3"><img src="images/prakad.jpg" style="width:100px; margin-left: -14px;">
                                             </img>
                                        </div>
                                        <div class="col-md-9 col-sm-9">
                                             <p>

                                                  <?php
                                                  $datetime = $row['time']; // Assuming $row['time'] contains a valid timestamp or date string
                                             
                                                  $timestamp = strtotime($datetime); // Convert the date string to a timestamp
                                                  echo thai_date($timestamp);
                                                  ?>

                                             </p>
                                             <form action="php/more_prakad.php" method="post">
                                                  <a href="javascript:;" onclick="parentNode.submit();">
                                                       <h3 style="margin-top: auto;">
                                                            <?php echo mb_strimwidth($row['title'], 0, 90, "..."); ?>
                                                       </h3>
                                                  </a>
                                                  <input type="hidden" name="morepk_id"
                                                       value="<?php echo $row['pk_id']; ?>" />
                                                  <p><strong>
                                                            <?php echo mb_strimwidth($row['txtmssge'], 0, 170, "..."); ?>
                                                       </strong></p>
                                             </form>
                                        </div>
                                   </div>
                                   <?php
                                   echo "<hr>";
                              }
                              ?>

                              <!-- </div> -->
                              <!-- <div class="box" style="width:500px; height:100px; border-radius: -5px;">
                              <div class="theboxes">
                                   <div class="col-md-3 col-sm-3"><img src="images/forms.png" style="width: 57px;">
                                   </div>
                                   <div class="col-md-9 col-sm-9" style="text-align: initial;">
                                        <h3>ประกาศ</h3></img>
                                   </div>
                              </div>
                         </div>
                         <div class="box" style="width:500px; height:100px; border-radius: -5px;">
                              <div class="theboxes">
                                   <div class="col-md-3 col-sm-3"><img src="images/forms.png" style="width: 57px;">
                                   </div>
                                   <div class="col-md-9 col-sm-9" style="text-align: initial;">
                                        <h3>ประกาศ</h3></img>
                                   </div>
                              </div>
                         </div>
                         <div class="box" style="width:500px; height:100px; border-radius: -5px;">
                              <div class="theboxes">
                                   <div class="col-md-3 col-sm-3"><img src="images/forms.png" style="width: 57px;">
                                   </div>
                                   <div class="col-md-9 col-sm-9" style="text-align: initial;">
                                        <h3>ประกาศ</h3></img>
                                   </div>
                              </div>
                         </div>
                         <div class="box" style="width:500px; height:100px; border-radius: -5px;">
                              <div class="theboxes">
                                   <div class="col-md-3 col-sm-3"><img src="images/forms.png" style="width: 57px;">
                                   </div>
                                   <div class="col-md-9 col-sm-9" style="text-align: initial;">
                                        <h3>ประกาศ</h3></img>
                                   </div>
                              </div>
                         </div>
                         <div class="box" style="width:500px; height:100px; border-radius: -5px;">
                              <div class="theboxes">
                                   <div class="col-md-3 col-sm-3"><img src="images/forms.png" style="width: 57px;">
                                   </div>
                                   <div class="col-md-9 col-sm-9" style="text-align: initial;">
                                        <h3>ประกาศ</h3></img>
                                   </div>
                              </div>
                         </div>
                         <br> -->
                              <a href="php/prakad.php">ดูทั้งหมด</a>
                         </div>
                         <div class="col-md-6 col-sm-6">


                         </div>
                    </div>
               </div>

     </section>

     <section id="new" data-stellar-background-ratio="3" style="background-position: 0px 766.4px; padding-top: 43px;">
          <!-- <div class="container"> -->
          <div class="row" style="background: darkgrey;">
               <div class="col-md-11" style="left: 5%;">
                    <div class="carousel slide multi-image-slider" id="theCarousel">
                         <div class="carousel-inner">
                              <?php
                              $sqlQuery = "SELECT a_id,img, title, DATE(datesave) AS datesave FROM articles ORDER BY datesave DESC";
                              $resultSet = mysqli_query($conn, $sqlQuery);
                              $setActive = 0;
                              $sliderHtml = '';
                              while ($row = mysqli_fetch_assoc($resultSet)) {
                                   $activeClass = "";
                                   if (!$setActive) {
                                        $setActive = 1;
                                        $activeClass = 'active';
                                   }

                                   $sliderHtml .= "<div class='item " . $activeClass . "'>";
                                   $sliderHtml .= "<div class='col-xs-4'>";
                                   $sliderHtml .= "<form action='php/more_post.php' method='post'>";
                                   $sliderHtml .= "<a href='javascript:;' onclick='parentNode.submit();'><h3 style='margin-top:10px'>" . mb_strimwidth($row['title'], 0, 60, "...") . "</h3>";
                                   $sliderHtml .= "<img src='images/" . $row['img'] . "' class='img-responsive'>";
                                   $datetime = $row['datesave'];
                                   $timestamp = strtotime($datetime);
                                   $sliderHtml .= "<p>" . thai_date($timestamp) . "</p>";
                                   $sliderHtml .= "<input type='hidden' name='more_id' value='" . $row['a_id'] . "'>";
                                   $sliderHtml .= "</a></div></div></form>";

                                   ?>

                                   <?php
                              }
                              echo $sliderHtml;
                              ?>
                         </div>
                         <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i
                                   class="glyphicon glyphicon-chevron-left"></i></a>
                         <a class="right carousel-control" href="#theCarousel" data-slide="next"><i
                                   class="glyphicon glyphicon-chevron-right"></i></a>



                    </div>
                    <a class="section-btn btn btn-default btn-green smoothScroll center"
                         href="php/more_news.php">ดูข่าวทั้งหมด</a>
               </div>
          </div>
          <!-- </div> -->


          <br><br>

     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div class="about-info">
                              <div class="theboxes">
                                   <!-- <h2 class="wow fadeInUp" data-wow-delay="0.6s">Toyota Kaennakorn
                                    <br><i class="fa fa-facebook-square"></i> TOYOTAKAENNAKORN
                                   <br><i class="fa fa-registered"></i>@TOYOTAKAENNAKORN
                              </h2> -->
                                   <div class="col-md-3 col-sm-3">
                                        <!-- <div class="col-md-4 col-sm-4"> -->
                                        <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                                             <img src="images/chok.jpg" class="img-responsive" alt="">


                                        </div>
                                        <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                                             <div class="team-info">
                                                  <h3>ชื่อ-นามสกุล</h3>
                                                  <p>ตำแหน่ง</p>
                                                  <div class="team-contact-info">
                                                       <p><i class="fa fa-phone"></i> เบอร์</p>
                                                       <p><i class="fa fa-envelope-o"></i> <a href="#">อีเมลล์</a></p>
                                                  </div>
                                                  <ul class="social-icon">
                                                       <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                       <li><a href="#" class="fa fa-facebook-square"></a></li>
                                                       <li><a href="#" class="fa fa-envelope-o"></a></li>
                                                  </ul>
                                             </div>

                                        </div>
                                   </div>

                                   <div class="col-md-9 col-sm-9">
                                        <div class="clearfix"></div>

                                        <div class="col-md-3 col-sm-3">
                                             <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                                                  <img src="images/emp.jpg" class="img-responsive" alt="">

                                                  <div class="team-info">
                                                       <h3>ชื่อ-นามสกุล</h3>
                                                       <p>ตำแหน่ง</p>
                                                       <div class="team-contact-info">
                                                            <p><i class="fa fa-phone"></i> เบอร์</p>
                                                            <p><i class="fa fa-envelope-o"></i> <a href="#">อีเมลล์</a>
                                                            </p>
                                                       </div>
                                                       <!-- <ul class="social-icon">
                                                       <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                       <li><a href="#" class="fa fa-facebook-square"></a></li>
                                                       <li><a href="#" class="fa fa-envelope-o"></a></li>
                                                  </ul> -->
                                                  </div>

                                             </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                             <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                                                  <img src="images/emp.jpg" class="img-responsive" alt="">

                                                  <div class="team-info">
                                                       <h3>ชื่อ-นามสกุล</h3>
                                                       <p>ตำแหน่ง</p>
                                                       <div class="team-contact-info">
                                                            <p><i class="fa fa-phone"></i> เบอร์</p>
                                                            <p><i class="fa fa-envelope-o"></i> <a href="#">อีเมลล์</a>
                                                            </p>
                                                       </div>
                                                       <!-- <ul class="social-icon">
                                                       <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                       <li><a href="#" class="fa fa-facebook-square"></a></li>
                                                       <li><a href="#" class="fa fa-envelope-o"></a></li>
                                                  </ul> -->
                                                  </div>

                                             </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                             <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                                                  <img src="images/emp.jpg" class="img-responsive" alt="">

                                                  <div class="team-info">
                                                       <h3>ชื่อ-นามสกุล</h3>
                                                       <p>ตำแหน่ง</p>
                                                       <div class="team-contact-info">
                                                            <p><i class="fa fa-phone"></i> เบอร์</p>
                                                            <p><i class="fa fa-envelope-o"></i> <a href="#">อีเมลล์</a>
                                                            </p>
                                                       </div>
                                                       <!-- <ul class="social-icon">
                                                       <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                       <li><a href="#" class="fa fa-facebook-square"></a></li>
                                                       <li><a href="#" class="fa fa-envelope-o"></a></li>
                                                  </ul> -->
                                                  </div>

                                             </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                             <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                                                  <img src="images/emp.jpg" class="img-responsive" alt="">

                                                  <div class="team-info">
                                                       <h3>ชื่อ-นามสกุล</h3>
                                                       <p>ตำแหน่ง</p>
                                                       <div class="team-contact-info">
                                                            <p><i class="fa fa-phone"></i> เบอร์</p>
                                                            <p><i class="fa fa-envelope-o"></i> <a href="#">อีเมลล์</a>
                                                            </p>
                                                       </div>
                                                       <!-- <ul class="social-icon">
                                                       <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                       <li><a href="#" class="fa fa-facebook-square"></a></li>
                                                       <li><a href="#" class="fa fa-envelope-o"></a></li>
                                                  </ul> -->
                                                  </div>

                                             </div>
                                        </div>


                                        <!-- <a href="team.html"
                                        class="section-btn btn btn-default btn-green smoothScroll">ดูเพิ่มเติม</a> -->

                                        <!-- <div class="col-md-12 col-sm-12">
                                        <!-- SECTION TITLE 
                                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                             <h2>ข่าว</h2>
                                        </div>
                                   </div> -->

                                   </div>
                                   <!-- <div class="col-md-12 col-sm-1"></div> -->
                              </div>
                         </div>
                    </div>
               </div>

          </div>

          <div class="theboxes">

               <!-- <div class="col-md-2 col-sm-2">
                                        <div class="about-info">
                                             <h2 class="wow fadeInUp" data-wow-delay="0.1s">ทีมของเรา</h2>
                                        </div>
                                   </div> -->


          </div>
     </section>


     <section id="news" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                    <!-- <div class="theboxes"> -->
                    <!-- <div class="col-md-4 col-sm-4">
                              <!-- NEWS THUMB --
                              <div class="news-thumb">
                                   <h31><br />ข่าว</h31><br><br>
                              </div>
                              <div class="news-thumb wow fadeInUp shadow p-3 mb-5 bg-white rounded"
                                   data-wow-delay="0.4s">

                                   <!-- <a href="news-detail.html"> -->
                    <!-- position: absolute; left: 0px; top: 0px; -->
                    <!-- <div u="slides" style=" width: 100px; height: 221px; overflow: hidden;"> --
                                   <div class="theboxes">
                                        ?php
                                        // $query = " select * from articles ORDER BY datesave DESC limit 3";
                                        $query = "SELECT a_id,img, title, DATE(datesave) AS datesave FROM articles ORDER BY datesave DESC LIMIT 3";

                                        $result = mysqli_query($conn, $query);

                                        while ($row = mysqli_fetch_assoc($result)) {
                                             ?>
                                             <div class="theboxes">
                                                  <div class="col-md-12 col-sm-12">
                                                       <img src="images/?php echo $row['img']; ?> " class="img-responsive"
                                                            alt="Image" height="50" width="360">
                                                       <br>
                                                  </div>
                                                  <div class="col-md-12 col-sm-12 " style="margin:10px">

                                                       ?php
                                                       echo $row['datesave'];
                                                       // echo "<br/>";
                                                       ?>
                                                       <!-- <a href="php/more_post.php"><h3>?php echo $row['title']; ?></h3></a>
                                                  <a href="javascript:;" onclick="parentNode.submit();"><h3>?php echo mb_strimwidth($row['title'], 0, 60, "..."); ?></h3></a> --

                                                       <form action="php/more_post.php" method="post">
                                                            <a href="javascript:;" onclick="parentNode.submit();">
                                                                 <h3 style="margin-top:10px">
                                                                      ?php echo mb_strimwidth($row['title'], 0, 60, "..."); ?>
                                                                 </h3>
                                                            </a>
                                                            <input type="hidden" name="more_id" value ="?php echo $row['a_id']; ?>">
                                                           
                                                       </form>
                                                  </div>
                                             </div>

                                             ?php
                                             // echo "<br/>";
                                             // echo $row['Role'];
                                        
                                             ?>


                                             ?php
                                        }

                                        ?>
                                        <a class="section-btn btn btn-default btn-green smoothScroll" href="php/more_news.php">ดูข่าวทั้งหมด</a>
                                   </div>
                                   <br>
                              </div>
                              </a> -->
               </div>



               <div class="col-md-4 col-sm-4">
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s" style="background-color: darkseagreen;">
                         <br>
                         <h31>ค่าตอบแทนและสวัสดิการ</h31>
                         <br>
                    </div>
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                         <br>
                         <div class="news-thumb">
                              <a href="sawasdikarn.html">
                                   <p>ค่าตอบแทน
                                        <p>
                              </a>
                         </div>
                         <div class="news-thumb">
                              <a href="sawasdikarn.html">
                                   <p>สภาพการทำงาน
                                        <p>
                              </a>
                         </div>
                         <div class="news-thumb">
                              <a href="sawasdikarn.html">
                                   <p>
                                        สวัสดิการที่เป็นตัวเงิน
                                        <p>
                              </a>
                         </div>
                         <div class="news-thumb">
                              <a href="sawasdikarn.html">
                                   <p>สวัสดิการที่ไม่เป็นตัวเงิน
                                        <p>
                              </a>
                         </div>

                         <a href="sawasdikarn.html"
                              class="section-btn btn btn-default btn-green smoothScroll">ดูเพิ่มเติม</a>

                    </div>
               </div>
               <!-- <div class="col-md-2 col-sm-3">
                                             <br><img src="images/emp.jpg" class="img-responsive" alt="Image" height="405" width="300">
                                        </div> -->
               <!-- </div> -->


               <!-- SECTION TITLE -->



               <div class="col-md-4 col-sm-4">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s" style="background-color: darkseagreen;">
                         <br>
                         <h31>โปรโมชั่น</h31>
                    </div>

                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <a href="news-detail.html">
                              <img src="images/pro1.jpg" class="img-responsive" alt="">
                         </a>
                         <div class="news-info">
                              <span>Apr 26, 2023</span>
                              <h3><a href="news-detail.html">แนวทางปฏิบัติที่ดีที่สุดหากต้องเผชิญปัญหายางระเบิด</a>
                              </h3>
                              <p>ตั้งสติ จับพวงมาลัยให้แน่น
                                   เมื่อรถยางแตกจะส่งผลให้รถเสียการทรงตัว
                                   ดังนั้นสิ่งแรกที่ควรต้องทำ
                                   คือการจับพวงมาลัยให้มั่นคง
                                   ควบคุมการส่ายของรถให้ได้

                                   รักษาความเร็วในการขับขี่ให้คงที่ อย่าเบรกกะทันหัน
                              </p>

                         </div>
                    </div>
                    <a href="promotions.html" class="section-btn btn btn-default btn-green smoothScroll">ดูเพิ่มเติม</a>
               </div>
               <div class="col-md-4 col-sm-4">
                    <div class="theboxes">
                         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                   <div class="panel-heading" role="tab" id="headingOne"  style="background-color: darkseagreen;">
                                        <h3 class="panel-title">
                                             <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                  href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  วิสัยทัศน์
                                             </a>
                                        </h3>
                                   </div>
                                   <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="panel-body">
                                             เป็นตัวแทนจำหน่ายรถยนต์โตโยต้าที่ดีที่สุดในประเทศไทย
                                             โดยเป็นบริษัท ที่น่ามาทำงาน น่ามาใช้บริการ น่ามาร่วมลงทุน
                                        </div>
                                   </div>
                                   <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo" style="background-color: darkseagreen;">
                                             <h3 class="panel-title">
                                                  <a class="collapsed" role="button" data-toggle="collapse"
                                                       data-parent="#accordion" href="#collapseTwo"
                                                       aria-expanded="false" aria-controls="collapseTwo">
                                                       พันธกิจ
                                                  </a>
                                             </h3>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingTwo">
                                             <div class="panel-body">
                                                  1. มุ่งมั่นให้บริการลูกค้า ด้วบความซื่อสัตย์ มีคุณภาพ
                                                  เพื่อความประทับใจสูงสุด<br>
                                                  2. ใส่ใจรับผิดชอบต่อสังคมและสิ่งแวดล้อม อย่างยั่งยืน<br>
                                                  3. เป็นองค์กรแห่งการเรียนรู้ และการทำงานอย่างมีความสุข<br>
                                                  4. เป็นองค์กรที่เติบโตอย่างต่อเนื่องและยั่งยืน<br>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree" style="background-color: darkseagreen;">
                                             <h3 class="panel-title">
                                                  <a class="collapsed" role="button" data-toggle="collapse"
                                                       data-parent="#accordion" href="#collapseThree"
                                                       aria-expanded="false" aria-controls="collapseThree">
                                                       ค่านิยม
                                                  </a>
                                             </h3>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingThree">
                                             <div class="panel-body">
                                                  เรียนรู้พัฒนา นำพาคุณธรรม กิจกรรมร่วมใจ มีวินัยรับผิดชอบงาน
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          </div>
          </div>
     </section>









     <!-- MAKE AN APPOINTMENT -->
     <!-- <section id="appointment" data-stellar-background-ratio="3">
               <div class="container">
                    <div class="row">

                         <div class="col-md-6 col-sm-6">
                              <img src="images/emp.jpg" class="img-responsive" alt="">
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <!-- CONTACT FORM HERE --
                              <form id="appointment-form" role="form" method="post" action="#">

                                   <!-- SECTION TITLE --
                                   <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                        <h2>นัดหมาย</h2>
                                   </div>

                                   <div class="wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="col-md-6 col-sm-6">
                                             <label for="name">ชื่อ-นามสกุล</label>
                                             <input type="text" class="form-control" id="name" name="name"
                                                  placeholder="ชื่อและนามสกุล">
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                             <label for="email">Email</label>
                                             <input type="email" class="form-control" id="email" name="email"
                                                  placeholder="อีเมลล์ของคุณ">
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                             <label for="date">เลือกวันที่จะเข้าชม</label>
                                             <input type="date" name="date" value="" class="form-control">
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                             <label for="select">เลือก</label>
                                             <select class="form-control">
                                                  <option>นายก</option>
                                                  <option>นายข</option>
                                                  <option>นางค</option>
                                             </select>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                             <label for="telephone">หมายเลขโทรศัพท์</label>
                                             <input type="tel" class="form-control" id="phone" name="phone"
                                                  placeholder="หมายเลขโทรศัพท์ของคุณ">
                                             <label for="Message">ข้อความเพิ่มเติม</label>
                                             <textarea class="form-control" rows="5" id="message" name="message"
                                                  placeholder="เนื้อหาข้อความ"></textarea>
                                             <button type="submit" class="form-control" id="cf-submit"
                                                  name="submit">ส่ง</button>
                                        </div>
                                   </div>
                              </form>
                         </div>

                    </div>
               </div>
          </section> -->


     <!-- GOOGLE MAP -->
     <section id="google-map">
          <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
     -->
          <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.0408441965005!2d102.8205024!3d16.422751900000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228a1dbd107a99%3A0x8be4d893dedd6dfa!2sToyota%20Kaennakorn!5e0!3m2!1sth!2sth!4v1682585649198!5m2!1sth!2sth"
               width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>"
          width="80%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">ข้อมูลติดต่อ</h4>
                              <p>เราให้ข้อมูลเพิ่มเติมทางโทรศัพท์,
                                   <br>หรืออีเมล
                              </p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 043-333-444</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">crtkn14225@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <p><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FToyotakaennakorn&tabs=timeline&width=400&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=914042379803128"
                              width="400" height="300" style="border:none;overflow:hidden" scrolling="no"
                              frameborder="0" allowfullscreen="true"
                              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </p>

                    <!-- <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Calendar</h4>

                              <div class="calendar">

                                   <SCRIPT LANGUAGE="JavaScript" type="text/javascript">
                                        printCalendar();
                                   </SCRIPT>

                              </div>

                         </div>
                    </div> -->

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">เวลาเปิด - ปิด
                                   </h4>
                                   <p>วันจันทร์-วันศุกร์<span>08:00 -17:00</span></p>
                                   <p>วันเสาร์ <span>08:00 -17:00</span></p>
                                   <p>วันอาทิตย์<span>ปิด</span></p>
                              </div>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2018 Klinika Fizjoterapii i Rehabilitacji
                                        Sportowej</p>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                             class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
     <script src="js/multiple-image-slider.js"></script>

</body>

</html>