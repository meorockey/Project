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
  body{background-color:white}
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
<div id="main">
    <div id="left">
				<?php 
					if(isset($_REQUEST['submit']))
					{
                        $search=$_GET['search'];
                        
						if(empty($search))
						{
							echo "<p>Yêu cầu nhập dữ liệu vào ô trống</p>";
						}
						else
						{
							$query="SELECT * FROM baihat, WHERE tenbaihat, like '%$search%' or tencasi, like '%$search%'";
							$results=mysqli_query($con,$query);
        ?>
                            <ul>
							<?php while ($chitietbaihat=mysqli_fetch_array($results,MYSQLI_ASSOC)) 
							{ ?>
						 <div class="col-sm-4">
                          <a href="chitietbaihat.php?id=<?php echo $chitietbaihat['id']; ?>"><img src="<?php echo $chitietbaihat['anh'];?>" class="img-responsive" style="width:100%" alt="Image"><p><?php echo $chitietbaihat['tenbaihat'];?>-<?php echo $chitietbaihat['tencasi'];?></p></a>
</div>	<?php	
							}
						}
					}
				?>
	</div>
		
   

</div>
                </body>
                </html>