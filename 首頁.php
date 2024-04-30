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
              <li class="active"><a href="首頁.php">首頁</a></li>
              <li><a href="房型種類.php">房型種類</a>
              <li><a href="預約訂房.php">預約訂房</a></li>
              <li><a href="取消訂房.php">取消訂房</a></li>
              <li><a href="營運報表.php">營運報表</a></li>
              <li><a href="訂房一覽表.php">後臺管理</a></li>
              <li><?php
                  session_start();
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

    <div class="hero">
      <div class="hero-slide">
        <div
          class="img overlay"
          style="background-image: url('images/聖心6.jpg')"
        ></div>
        
      </div>

      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up">聖心教學旅館</h1>
             </div>
        </div>
      </div>
      </div>
         
    <div class="section section-4 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-5">
            <h1 class="font-weight-bold heading text-primary mb-4">
              <marquee bgcolor="teal" width="400" height="50"><font color="white">公告區</font></marquee>
            </h1>
          </div>
        </div>
        
          <div class="col-lg-6">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
              <div class="feature-text">
                <h3>訂房須知</h3>
                <br>
                <?php
              $searchtxt=$_POST['searchtxt'];
                ?>
                <div>
                <form action="首頁.php" method="post">
                <input type=text name="searchtxt" value="<?php echo $searchtxt;?>"><input type="submit" value="search">
                </form>
                </div>
                <br>
                <?php if($_SESSION['level'] == "管理員"){ ?>
                <div><a href="新增公告.php"><input type="reset" value="新增公告"></a></div>
                <?php } ?>
                <br>
                <table width=900 height=200 border=1>
                        <tr>
                            <td>編號</td>
                            <td>公告</td>
                            <td></td>
                        </tr>
                
                    <?php
                    $link=mysqli_connect('localhost','root','12345678','inn');
    
                    if(empty($searchtxt))
                      {
                    $sql="select* from announce1";
                      }
                    else{
                    $sql="select* from announce1 where announcement1 like '%".$searchtxt."%'";
                    }
                    $result=mysqli_query($link,$sql);

                    if($_SESSION['level'] == "管理員"){ 
                      while($row=mysqli_fetch_assoc($result))
                          {echo "<tr><td>" ,$row['num1'],"</td><td>",$row['announcement1'],"</td><td><a href='修改公告.php?num1=",$row['num1'],"'>[修改]</a>
                              <a href='刪除公告.php?num1=",$row['num1'],"'>[刪除]</a></tr>";
                        }}
                        else{
                          while($row=mysqli_fetch_assoc($result))
                          {echo "<tr><td>" ,$row['num1'],"</td><td>",$row['announcement1'],"</td></tr>";
                        }
                        }
    
    
                      ?>
                </table>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
              <div class="feature-text">
                <h3>住房須知</h3>
                <br>
                <?php
              $searchtxt=$_POST['searchtxt'];
                ?>
                <div>
                <form action="首頁.php" method="post">
                <input type=text name="searchtxt" value="<?php echo $searchtxt;?>"><input type="submit" value="search">
                </form>
                </div>
                <br>
                <?php if($_SESSION['level'] == "管理員"){ ?>
                <div><a href="新增公告2.php"><input type="reset" value="新增公告"></a></div>
                <?php } ?>
                <br>
                <table width=900 height=200 border=1>
                        <tr>
                            <td>編號</td>
                            <td>公告</td>
                            <td></td>
                        </tr></caption>
                
                        <?php
                      $link=mysqli_connect('localhost','root','12345678','inn');
    
                      if(empty($searchtxt))
                      {
                      $sql="select* from announce2";
                      }
                      else{
                      $sql="select* from announce2 where announcement2 like '%".$searchtxt."%'";
                      }
                      $result=mysqli_query($link,$sql);
                      
                      if($_SESSION['level'] == "管理員"){ 
                        while($row=mysqli_fetch_assoc($result))
                            {echo "<tr><td>" ,$row['num2'],"</td><td>",$row['announcement2'],"</td><td><a href='修改公告2.php?num2=",$row['num2'],"'>[修改]</a>
                                <a href='刪除公告2.php?num2=",$row['num2'],"'>[刪除]</a></tr>";
                          }}
                          else{
                            while($row=mysqli_fetch_assoc($result))
                            {echo "<tr><td>" ,$row['num2'],"</td><td>",$row['announcement2'],"</td></tr>";
                          }
                          }
                      ?>
                </table>
              </div>
            </div>

            <div class="d-flex feature-h">
              <div class="feature-text">
                
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
      <!-- /.container -->
        </div>
     </div>
</div>
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
    </div>
</div>
          
  </body>
</html>
