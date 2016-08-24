<?php 
  		session_start();
  		
  
  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Đăng Nhập</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<style type="text/css">
    .example{
        margin: 20px;
    }
</style>
</head>
<body>
<div class="example">
<div class="container">
    <div class="row">
    <h2>Đăng Nhập</h2>
<?php 
	mysql_connect("localhost", "lehoangadm_dba", "12345");
	mysql_select_db("lehoangadm_dlvilla");
?>
		
<?php
	
	if(isset($_SESSION["username"]))
	{
		//echo "Xin chào ad:".$_SESSION["username"];
		unset($_SESSION["username"]);	
	}
	else
	{
		if(!isset($_POST["submit"]))	
		{
			echo '
			<fieldset>
        <form action="login.php" method="post">
        <div class="form-group">
            <label>Tên Đăng Nhập</label>
            <input type="text" name="username" class="form-control" placeholder="Username must be between 8 and 20 characters"  required="required">
        </div>
        <div class="form-group">
            <label>Mật Khẩu</label>
            <input type="password" name="password" class="form-control" placeholder="Password must be between 8 and 20 characters"  required="required">
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary" value="Đăng Nhập" formaction="login_news.php" formmethod="POST">
    </form>
	</fieldset>
			
			';
			}
		else{
			$sql= mysql_query("SELECT * FROM tbl_user where user_name='".$_POST["username"]."' and user_password='".$_POST["password"]."'");
			if (empty($_POST["username"]) || empty($_POST["password"])) 
			{
        		echo "<script>";
        		echo "alert('Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.')";
        		echo "</script>";
        		exit;
    		}
			if(mysql_num_rows($sql)>0)
			{
				echo "<h3>Đăng nhập thành công</h3>";
				echo "<form method='post'>";

				$_SESSION["username"]=$_POST["username"];
				echo "<tr bgcolor='#000000' align='center'><td>";
				echo "<font color='#000000'>Xin chào AD <b>".$_SESSION['username']."</b><br>";
				
				echo "<a href='admin_news.php' class='btn btn-info'>Vào trang Quản Lý Tin Tức</a><br /><br />";
				echo "<a href='dangxuat.php' class='btn btn-info'>Thoát</a>";
				echo "</td></tr>";
				echo "</form>";

			}
			else if(mysql_num_rows($sql)==0)
			{
				
				echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại tên đăng nhập hoặc mật khẩu.";
				echo '
			<fieldset>
        <form action="login.php" method="post">
        <div class="form-group">
            <label>Tên Đăng Nhập</label>
            <input type="text" name="username" class="form-control" placeholder="Username must be between 8 and 20 characters"  required="required">
        </div>
        <div class="form-group">
            <label>Mật Khẩu</label>
            <input type="password" name="password" class="form-control" placeholder="Password must be between 8 and 20 characters"  required="required">
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary" value="Đăng Nhập" formaction="login.php" formmethod="POST">
    </form>
	</fieldset>
			
			';
				exit;
			}
		}
		
	}
?>
    </div>
</div>
     
</div>
</body>
</html>