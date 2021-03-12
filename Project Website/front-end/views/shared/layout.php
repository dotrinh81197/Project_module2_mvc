<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/reponsive.css">
 <link rel="stylesheet" href="css/menu.css">
 <link rel="stylesheet" href="css/banner.css">
 <link rel="stylesheet" href="css/services.css">

 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <title>Trang chủ</title>
  </head>
  <body>
    <!--header-->
    <div class="container">
          
     <img id="header"  style="width: 100%; height: 50%;" src="lib/resouce/banner/banner_main.png" alt="">
      
       
    </div>

    <!--nav-bar-->
    <div class="container">
        <nav class="navbar navbar-expand-md " style="margin-top: -5%;">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <a class="navbar-brand" href="#">---</a>
                      
                </button>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <a class="navbar-brand" href="#"><img class="logo" src="lib/resouce/banner/logo.png" alt=""></a>
                  <li class=""><a href="#">Trang chủ</a></li>
                  <li class=""><a href="#">Giới thiệu</a></li>
                  <li class=""><a href="#">Liên hệ</a></li>

                 </ul>
                               
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
              </div>
            </div>
          </nav>
      </nav>
      <!-- end nav-bar-->
      <!--search-->
      <div class="container-fluid">
        <div class="row">
          <form class="form-inline">
            <input class="form-control mr-lg-3" type="search" placeholder="Tìm kiếm cho thú cưng " aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        
          <hr style="border-color:#f5c9b2 ;">
      </div>
     <!--nav-menu-->
      <div class="container">
       
            <div class=" menu">

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myMenu">
                <a class="navbar-brand" href="#"><span>Menu</span></a>
                  
            </button>
            <div class="collapse navbar-collapse" id="myMenu">
              <ul class="clearfix">
                <li class="menu-item"><a href="#"> <i class="fa fa-paw"></i>Shop cho chó</a>
                 
                    <ul class="sub-menu">
                      <li><a href="#">Thức ăn</a></li>
                      <li><a href="#">Quần áo</a></li>
                      <li><a href="#">Phụ kiện</a></li>
                </ul>
                 
                   
                </li>
                <li  class="menu-item">
                    <a href="#"><i class="fa fa-paw"></i> Shop cho mèo </a>
     
                    <ul class="sub-menu">
                        <li><a href="#">Thức ăn</a></li>
                        <li><a href="#">Quần áo</a></li>
                        <li><a href="#">Phụ kiện</a></li>
                        <li><a href="#">Giường, chuồng</a></li>
                    </ul>
                </li>
                <li  class="menu-item">
                  <a href="#">Dịch vụ </a>
   
                  <ul class="sub-menu">
                      <li><a href="#">Cắt, tỉa lông</a></li>
                      <li><a href="#">Tắm, massage, spa</a></li>
                      <li><a href="#">Huấn luyện </a></li>
                      <li><a href="#">Thú y </a></li>
                  </ul>
              </li>
                <li  class="menu-item"><a href="#">Tin tức</a></li>
                <li  class="menu-item"><a href="#">Đơn hàng</a></li>
                <div class="shopping-cart"> <li  class="menu-item"> <a href="#">Giỏ hàng </a> <a ><i class="fas fa-shopping-cart"></i></a></li>
                </div>
                
        </ul>
            </div>
                      
          </div>
     </div>
       <!--end nav-menu-->

    
    </div>
    <div class="banner">
      <div class="container">

        <div class="row">
          <div class="col-md-8">
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="lib/resouce/banner/1.png" alt="Chania">
                <div class="carousel-caption">
                  <h3>Thứ 6 online</h3>
                  <p>giảm 5 % cho cát vệ sinh, thuốc và y tế</p>
                </div>
              </div>
          
              <div class="item">
                <img src="lib/resouce/banner/2.png" alt="Chicago">
                <div class="carousel-caption">
                  <h3>Nature cature</h3>
                 <p>Chăm sóc thú cưng từ thiên nhiên</p>
                </div>
              </div>
          
              <div class="item">
                <img src="lib/resouce/banner/3.png" alt="New York">
                <div class="carousel-caption">
                  <h3>Thanh toán</h3>
                  <p>Mua sắm thả ga bằng thanh toán 1 chạm QR pay</p>
                </div>
              </div>
              <div class="item">
                <img src="lib/resouce/banner/4.png" alt="New York">
                <div class="carousel-caption">
                  <h3>Sữa tắm cho thú cưng</h3>
                  <p>Bốn mùa tắm sạch cùng Zyn's pet store</p>
                </div>
              </div>
            </div>
          
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
     
    
      <div class="col-md-4 banner-right">
       
          <div id="myCarousel1" class="carousel slide" data-ride="carousel1">
           <!-- Indicators -->
           <ol class="carousel-indicators">
             <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
             <li data-target="#myCarousel1" data-slide-to="1"></li>
             <li data-target="#myCarousel1" data-slide-to="2"></li>
           </ol>
         
           <!-- Wrapper for slides -->
           <div class="carousel-inner">
             <div class="item active">
               <img src="lib/resouce/banner/thuc-an-cho-cho-banner-right.png" alt="Chania">
               <div class="carousel-caption">
                 <h3>Thức ăn cho chó</h3>
               </div>
             </div>
         
             <div class="item">
               <img src="lib/resouce/banner/thuc-an-cho-meo-banner-right.jpg" alt="Chicago">
               <div class="carousel-caption">
                 <h3>Thức ăn cho mèo</h3>
               </div>
             </div>
             <div class="item">
              <img src="lib/resouce/banner/dich-vu-tam-cho-cho-meo-banner-right.jpg" alt="Chicago">
              <div class="carousel-caption">
                <h3>Dịch vụ</h3>
              </div>
            </div>
         
             <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>

        </div>
      </div>
  
    </div>
    </div>
   
   <div class="content">
     <div class="container">
      <div class="products-content" > <h2>Sản phẩm bán chạy</h2></div>
      <div class="row main-content" style="height: 300px;">
        <div class="col-lg-3 col-md-4 col-sm-6 " style="background-color: blueviolet; height: 300px;">

        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 "  style="background-color: rgb(44, 179, 167); height: 300px;">
          
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 "  style="background-color: rgb(149, 16, 46); height: 300px;" >
          
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6   "  style="background-color: rgb(240, 80, 88); height: 300px;">
          
        </div>
        
      </div>
      </div>
      <div class="container">
        <div class="products-content"><h2>Sản phẩm khuyến mãi</h2></div>
        <div class="row  main-content" style="height: 300px;">
          <div class="col-lg-3 col-md-4 col-sm-6 " style="background-color: blueviolet; height: 300px;">
  
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 "  style="background-color: rgb(44, 179, 167); height: 300px;">
            
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 "  style="background-color: rgb(149, 16, 46); height: 300px;" >
            
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6   "  style="background-color: rgb(240, 80, 88); height: 300px;">
            
          </div>
          
        </div>
     </div>
     
     <div class="container">
      <div class="products-content"> <h2>Dành cho chó</h2></div>
      <div class="row  main-content" style="height: 300px;">
        <div class="col-lg-3 col-md-4 col-sm-6 " style="background-color: blueviolet; height: 300px;">

        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 "  style="background-color: rgb(44, 179, 167); height: 300px;">
          
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 "  style="background-color: rgb(149, 16, 46); height: 300px;" >
          
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6   "  style="background-color: rgb(240, 80, 88); height: 300px;">
          
        </div>
        
      </div>
   </div>
   <div class="container">
    <div class="products-content"> <h2>Dành cho mèo</h2></div>
    <div class="row  main-content" style="height: 300px;">
      <div class="col-lg-3 col-md-4 col-sm-6 " style="background-color: blueviolet; height: 300px;">

      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 "  style="background-color: rgb(44, 179, 167); height: 300px;">
        
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 "  style="background-color: rgb(149, 16, 46); height: 300px;" >
        
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6   "  style="background-color: rgb(240, 80, 88); height: 300px;">
        
      </div>
      
    </div>
  </div>
    <div class="container services">
    <div class="row">
    <div class="col-12 col-sm-12 ">
    <h2>Dịch vụ</h2>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 services">
    <a href="" >
    <img src="https://assets.petco.com/petco/image/upload/h_200,f_auto,q_100/Icon_Grooming_Scissors" >
    <p>Tắm, tỉa lông</p>
    </a>
   
    </div>
    <div class="col-lg-3 services">
     <a href="">  <img src="https://assets.petco.com/petco/image/upload/h_200,f_auto,q_100/Icon_DogTraining_Ribbon" >
      <p>Huấn luyện</p>
    </a>  
  
  
    </div>
    <div class="col-lg-3 services">
        <a href=""><img src="https://assets.petco.com/petco/image/upload/h_200,f_auto,q_100/Icon_Vet_Stethoscope" >
    <p>Chăm sóc thú y</p>
    </a>
    </div>
    <div class="col-lg-3 services">
       <a href=""> <img src="https://assets.petco.com/petco/image/upload/h_200,f_auto,q_100/Icon_Pharmacy_PillBottle" >
  <p>Dược phẩm</p></a> 

    </div>
    </div>
    </div>
    </div>
  </div>
  


  <!--footer-->
  <div class="container modal-footer">
    <div class="row footer">
        <div class="col-12 col-md-3">
            <div class="media-wrap">
                <a href="https://mobirise.com/">
                    <img src="assets/images/logo2.png">
                </a>
            </div>
        </div>
        <div class="col-12 col-md-3 ">
            <h5 class="pb-3">
                Address
            </h5>
            <p class="mbr-text">
                25 Nguyễn Tri Phương
                <br> thành phố Huế, Việt Nam
            </p>
        </div>
        <div class="col-12 col-md-3 ">
            <h5 class="pb-3">
                Contacts
            </h5>
            <p class="mbr-text">
                Email: support@zynpet.com
                <br>Phone:  (+84) 076 356 4100
                <br>Fax: +1 (0) 000 0000 002
            </p>
        </div>
        <div class="col-12 col-md-3 ">
            <h5 class="pb-3">
                Links
            </h5>
            <p class="mbr-text">
                <a class="text-white" href="">Website builder</a>
                <br><a class="text-white" href=""></a>
            </p>
        </div>
        <div class="footer-lower">
          <div class="row">
              <div class="col-sm-12">
                  <hr>
              </div>
          </div>
          <div class="row copyright">
              <div class="col-sm-6 copyright ">
                  <p class=" ">
                      © Copyright 2021 - All Rights Reserved
                  </p>
              </div>
              <div class="col-sm-6 fllowus" > 
                <span class="follow u">Fllow us </span>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
              </div>
             
            </div>
      </div>
    </div>
    
  </div>
   
  </body>
</html>
