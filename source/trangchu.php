<?php 
session_start();
?>
<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NHẠCPro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{background-color:blueviolet}
  </style>

  
</head>
<body>
<nav class="navbar navbar-inverse  ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="trangchu.php"><img src="./image/nhacpro.png" class="img-responsive"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="trangchu.php"><span class="glyphicon glyphicon-home"> Trang chủ</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thể Loại<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Trữ Tình</a></li>
              <li><a href="#">Pop</a></li>
              <li><a href="#">Âu Mỹ</a></li>
              <li><a href="#">EDM</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nghệ Sĩ<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Việt Nam</a></li>
              <li><a href="#">Âu Mỹ</a></li>
              <li><a href="#">Hàn Quốc</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bảng Xếp Hạng<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Việt Nam</a></li>
              <li><a href="#">Âu Mỹ</a></li>
              <li><a href="#">Hàn Quốc</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="dangky.php"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
        <li><a href="dangnhap.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
      </ul>
      <form class="navbar-form navbar-center" action="timkiem.php" method="GET" role="search">
        <div class="form-group input-group">
          <input type="text" name="search" class="form-control" placeholder="Tìm Kiếm...">
          <span class="input-group-btn">
            <input type="submit" name ="submit" value="Tim" class="form-control" style="width:50px; height:35px;">
                   
        </div>
       </form>
    </div>
  </div>
</nav>
<div class="container text-center">    
  <div class="row content">
    <div class="col-sm-8 text-left">
      <div class="well"><h1>Độc quyền<div id="myCarousel" class="carousel slide" data-ride="carousel">
      
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <a href="#"><img src="./image/0fa8045bf64704f4a369fdaaabffa06b.jpg"></a>            
          </div>
      
          <div class="item">
            <a href="#"><img src="./image/681f37c2e157a913c4e40306176fa1db.jpg"></a>            
          </div>
      
          <div class="item">
            <a href="#"><img src="./image/65ca8ec83fcf3629efb49480136098b2.jpg"></a>
           
          </div>
          <div class="item">
            <a href="#"><img src="./image/6beca7d076eb18ddf8c83dced52f59ab.jpg"></a>            
          </div>
          <div class="item">
            <a href="#"><img src="./image/f872de7b75b5445ea14bde9ccfe5c712.jpg"></a>            
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
      </div></div>
      <div class="well"><div class="bg-info"> <div class="container-fluid bg-4 text-center">   
            <h1 class="text-danger">BÀI HÁT MỚI</h1><br>
                    <?php
                        $query_baihat="Select * FROM baihat";
                        $results_baihat=mysqli_query($con,$query_baihat);           
                    ?>
                <ul>
                    <?php 
                         while ($baihat=mysqli_fetch_array($results_baihat,MYSQLI_ASSOC)) 
                         { 
                         ?>
                          <div class="col-sm-4">
                          <a href="chitietbaihat.php?id=<?php echo $baihat['id']; ?>"><img src="<?php echo $baihat['anh'];?>" class="img-responsive" style="width:100%" alt="Image"><p><?php echo $baihat['tenbaihat'];?>-<?php echo $baihat['tencasi'];?></p></a>
</div>

                         <?php 
                         }
                     ?>
                     </ul>          
            </div></div></div>
       <div class="well"><div class="bg-warning"> <div class="container-fluid bg-4 text-center">    
       <h1 class="text-danger">MV HOT</h1><br>
            <?php
                        $query_mv="Select * FROM mv";
                        $results_mv=mysqli_query($con,$query_mv);           
                    ?>
                <ul>
                    <?php 
                         while ($mv=mysqli_fetch_array($results_mv,MYSQLI_ASSOC)) 
                         { 
                         ?>
                          <div class="col-sm-4">
                          <a href="chitietmv.php?id=<?php echo $mv['id']; ?>"><img src="<?php echo $mv['anh'];?>" class="img-responsive" style="width:100%" alt="Image"><p><?php echo $mv['tenmv'];?>-<?php echo $mv['tencasi'];?></p></a>
</div>

                         <?php 
                         }
                     ?>
                     </ul>          
</div></div></div>
        <div class="well"><div class="bg-success"> <div class="container-fluid bg-4 text-center">    
            <h1 class="text-dark">CA SĨ NỔI BẬT</h1><br>
            <div class="row">
               <div class="col-sm-6">
                    <a href="#"><img src="./image/download (21).jpg" class="img-rounded" style="width :60%" alt="Image"><p>SƠN TÙNG MTP</p></a>
                </div>
                <div class="col-sm-6"> 
                    <a href="#"><img src="./image/download (22).jpg" class="img-rounded" style="width:60%"  alt="Image"><p>Đức Phúc</p></a>
                </div>
                <div class="col-sm-6"> 
                    <a href="#"><img src="./image/images (1).jpg" class="img-rounded" style="width:60%" alt="Image"><p>MrSiro</p></a>
                </div>
                <div class="col-sm-6">
                    <a href="#"><img src="./image/images (2).jpg" class="img-rounded" style="width:60%" alt="Image"><p>Hương Tràm</p></a>
                </div>
                </div>
              </div><br></div></div>
    </div>
 
   
    <div class="col-sm-4 sidenav">
      <div class="well"><div class="bg-info"> <div class="container-fluid bg-4 text-center">
        <h1 class="text-dark">Chủ đề hot</h1><br>
        
        <div class="item">
          <a href="#"><img src="./image/rsz_112b1529b9bdc7ddbc034c00e73870aba.jpg"></a>
        </div><br/>
        <div class="item">
          <a href="#"><img src="./image/rsz_6d22f54a6efbd739047abc976acd5dbb_1499827538.jpg"></a>
        </div><br/>
        <div class="item">
            <a href="#"><img src="./image/rsz_1705523a15bc369675fdfa415035a9a61.jpg"></a>
          </div><br/>
          <div class="item">
              <a href="#"><img src="./image/rsz_95488ad8d45bd69ef83e9403c4114375_1499827707.jpg"></a>
            </div><br/>
            <div class="item">
                <a href="#"><img src="./image/rsz_109885d0170c745889eab0b1d09b10b28_1499827727.jpg"></a>
              </div>
      </div>
        
      </div>
      <div class="well">
        <p></p>
      </div>
    </div>
  </div>
</div>

<div class="footer text-center">
    <div class="bottom">
        <div class="logo">
            <h1>Nhạc<span style="color: #FFCD43;">Online</span></h1>
            <p>Copyright © NhạcOnline.com. All Rights Reserved.</p>
            <p>Nội dung được chia sẻ miễn phí giữa các thành viên.</p>            
        </div>
        <div class="support">
            <h3>Trợ giúp</h3>
            <ul>
                <li><a href="#">Hỏi đáp</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Tin tức</a></li>
            </ul>
        </div>
        <div class="contribute">
            <h3>Đóng góp</h3>
            <ul>
                <li><a href="#">Hợp tác nội dung</a></li>
                <li><a href="#">Hợp tác ý tưởng</a></li>
                <li><a href="#">Góp ý</a></li>
            </ul>
        </div>
    </div>

</div>

</body>
</html>


 