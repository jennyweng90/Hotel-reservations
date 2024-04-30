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

    <div
      class="hero page-inner overlay"
      style="background-image: url('images/聖心6.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
            預約訂房
            </h1>

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
                  預約訂房
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-3 mb-3 mb-lg-0"
            data-aos="fade-up"
            data-aos-delay="100">
            <div class="contact-info">
              <div class="address mt-2">
                
               
              </div>
            </div>
          </div>

          
          <form method="post" action="dblink4.php">
          <input type="hidden" name="dbaction4" value="insert4">
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <form action="#">
              <div class="row">
                <div class="col-8 mb-3">
                
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="姓名(非管理員請輸入與帳號相同的姓名):"
                    required="required"
                  />
                </div>
                <div class="col-8 mb-3">
                  <input
                    type="text"
                    name="phone"
                    class="form-control"
                    placeholder="手機:"
                    required="required"
                  />
                </div>
                <div class="col-8 mb-3">
                  <form>
                  <label>選擇房型:</label>
                    <select name="type">
                        <option value="豪華單人房">豪華單人房</option>
                        <option value="尊榮單人房">尊榮單人房</option>
                        <option value="豪華雙床房">豪華雙床房</option>
                        <option value="尊榮雙人房">尊榮雙人房</option>
                        <option value="貴賓聖心套房">貴賓聖心套房</option>
                    </select>
                    </form>
                </div>
                <div class="col-8 mb-3">
                    <label for="start">訂房日期:</label>
                    <input
                    type="date" id="start" name="startdate"
                    class="form-control"
                    required="required"
                    />
                  </div>
                <div class="col-8 mb-3">
                    <label for="end">退房日期:</label>
                    <input
                    type="date" id="end" name="enddate"
                    class="form-control"
                    required="required"
                   />
                </div>

                <div class="col-8">
                  <input
                    type="submit"
                    value="送出資料"
                    class="btn btn-primary"
                  />
                </div>
              </div>
            </form>
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
