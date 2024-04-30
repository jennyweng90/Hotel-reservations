<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>
     輔大聖心教學旅館
    </title>
  </head>
  <body>
  <?php
    session_start();
    ?>
    <?php
   
    $date_now=date("Y-m-d");
    ?>

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

   <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <div class="logo m-0 float-start">輔大聖心教學旅館</div>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li><a href="首頁.php">首頁</a></li>
              <li>
                <a href="房型種類.php">房型種類</a>
              <li><a href="預約訂房.php">預約訂房</a></li>
              <li class="active"><a href="取消訂房.php">取消訂房</a></li>
              <li><a href="營運報表.php">營運報表</a></li>
              <li><a href="訂房一覽表.php">後臺管理</a></li>
              <li><?php
                
                  if($_SESSION['name']<>"")
                    {
                    echo "您好",$_SESSION['name'],"&nbsp;<a href=登出.php>登出</a>";
                    }
                    else
                    {
                      ?>
                    <a href="登入.php">登入系統</a>
                    <?php
                    }
                    ?></a></li></ul>


            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div
      class="hero page-inner overlay"
      style="background-image: url('images/聖心6.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">取消訂房</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="首頁.php">回首頁</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                 取消訂房
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
      
      
    <div class="section section-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-10">
                <div class="col-lg-8 mb-3">
              <script src="http://code.jquery.com/jquery.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
              <table class="table table-hover table-bordered" style="border-color:lightgray;">
                <h2 class="font-weight-bold heading text-primary mb-4">
                訂房資料
                </h2>
                
                
                <br>
                <br>
              <script src="http://code.jquery.com/jquery.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
              <table class="table table-hover table-bordered" style="border-color:lightgray;">
                <tr bgcolor="teal">
                <td><font color="white">訂房者姓名</font></td>
                <td><font color="white">手機</font></td> 
                <td><font color="white">預定房型</font></td> 
                <td><font color="white">訂房日期</font></td>
                <td><font color="white">退房日期</font></td>
                <td><font color="white">取消訂房</font></td>
                </tr>  
                
                <?php
                    $link=mysqli_connect('localhost','root','12345678','inn');
                    if($_SESSION['level'] == "訪客"){
                    $sql="select * from reserve where name like '%".$_SESSION['name']."%'";
                    }
                    else{
                        $sql="select * from reserve ";
                    }
                    $result=mysqli_query($link,$sql);

                    

                    while($row=mysqli_fetch_assoc($result)){
                        if($row['startdate'] == $date_now){
                            $apple=1;
                        }
                        else{
                            $apple=0;
                        }

                        if($apple == 0 || $_SESSION['level'] == "管理員"){
                            $edit = "[取消訂房]";
                            $blue ="'取消訂房資料.php?name=";
                         }
                         else if($apple == 1){
                            $edit = "入住當天無法取消訂房";
                            $blue ="#";
                         }


                        echo "<tr><td>" ,$row['name'],"</td><td>",$row['phone'],"</td><td>",
                            $row['type'],"</td><td>",$row['startdate'],"</td><td>",$row['enddate'],
                            "</td><td><a href=$blue",$row['name'],"'>$edit</a></tr>";
                   }
                          
    
                      ?>
            </table>
        </div>
      </div>
    </div>
</div>    
    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h2>聯絡我們</h2>
              <ul class="list-unstyled links">
                <li>連絡電話:<a href="tel://02 2905 3597">02 2905 3597</a></li>
                <li>地址:<a href="https://www.google.com/maps/place/%E8%BC%94%E5%A4%A7%E8%81%96%E5%BF%83%E6%95%99%E5%AD%B8%E6%97%85%E9%A4%A8/@25.0372232,121.4298409,17z/data=!3m1!4b1!4m5!3m4!1s0x3442a7d7c3b520c7:0xcd303ddaa83a8b22!8m2!3d25.0372232!4d121.4298409">新北市新莊區中正路510號</a></li>
                <li>信箱:
                  <a href="http://login.mail.fju.edu.tw/">057909@mail.fju.edu.tw</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h2>營業時間</h2>
              <ul class="list-unstyled float-start links">
                <li>週一:	24 小時營業</li>
                <li>週二:	24 小時營業</li>
                <li>週三:	24 小時營業</li>
                <li>週四:	24 小時營業</li>
                <li>週五:	24 小時營業</li>
                <li>週六:	24 小時營業</li>
                <li>週日:	24 小時營業</li>
              </ul>
              </div>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h2>相關網站</h2>
              <ul class="list-unstyled links">
                <li><a href="https://www.rhim.fju.edu.tw/首頁.php/space-and-facilities/2016-04-15-09-05-36">輔大餐旅管理學系</a></li>
                <li><a href="https://www.fju.edu.tw/">輔大全球資訊網</a></li>
                </ul>
        </div>
    </div>
</div>
      <!-- /.container -->
   
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
            </div>
          </div>
        </div>
  </body>
</html>
