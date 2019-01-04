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
<?php include('connect.php') ?>
<?php
if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min_range'=>1))){
        $id=$_GET['id'];
    }
    else{
        header('Location:trangchu.php');
        exit();
    }
    $query_chitietmv="select * from mv where id ='".$id."'";
    $results_chitietmv=mysqli_query($con,$query_chitietmv);
    $chitietmv=mysqli_fetch_array($results_chitietmv,MYSQLI_ASSOC);
?>
<div class="container text-center">
<div class="row content">
    <div class="well"><div class="bg-info"><div class="container-fluid bg-4 text-center">
<div id='main'>
<div id='left'>
<label>Tên MV: <?php echo $chitietmv['tenmv']?></label><br/>
    <iframe src="<?php echo $chitietmv['link'];?>" width="840px" height="400px">
    </iframe><br/>
        <label>Ca sĩ: <?php echo $chitietmv['tencasi']?></label>
</div></div></div></div></div>
</body>
</html>