<!doctype html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Login</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,600' rel='stylesheet' type='text/css'/>
<link href="demo.css" rel="stylesheet" type="text/css"/>
<?php
    include_once 'header.php';
?>
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
<script>
    function checkdata()
    {
        document.getElementById("lblThongBao").innerHTML="loi roi";
    }
</script>
</head>

<body>
<?php

if (isset($_GET['do'])=='logout')
{
session_start();
session_destroy();
header("location:login.php");
}

//ini_set('session.gc_maxlifetime', 20);
    //session_set_cookie_params(20);
    session_start();
    $now = time();
    if (isset($_SESSION['discard_after']) && $now > $_SESSION['discard_after']) {
    // this session has worn out its welcome; kill it and start a brand new one
    session_unset();
    session_destroy();
    session_start();
}

// either new or old, it should live at most for another hour
$_SESSION['discard_after'] = $now + 180;

if (isset($_POST['dangnhap']))
{
    include '../UserDB.php';
    $db= new UserDB();
    $db->OpenConnection();
     
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    
    if (!$username || !$password) {
        echo "<script>";
        echo "alert('Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.')";
        echo "</script>";
        exit;
    }
     
  
    $db->SearchUserByUserName($username);
    if (mysql_num_rows($db->query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.";
        exit;
    }
     
    $row = mysql_fetch_array($db->query);
    if ($password != $row['user_password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại.";
        exit;
    }
    
     
    $_SESSION['username'] = $username;
    
    header("location:login.php");
    die();
}

if(isset($_SESSION['username']))
{ ?> 
    <div class="overlay" >
	<div class="login-wrapper">
		<div class="login-content">
			
			<h3>Đăng nhập thành công</h3>
			<form method="post">
                
                <?php echo "Xin chào " . $_SESSION['username'] . ". Bạn đã đăng nhập thành công.</br>"?>
				<a class="btn btn-info" href='useradmin.php' style="text-decoration: none; color:white;">Đến trang quản trị</a>
                <a class="btn btn-info" href='login.php?do=logout' style="text-decoration: none; color:white;">Đăng xuất</a>
			
			</form>
		</div>
	</div>
</div>
<?php } else {?>
<div class="overlay" >
	<div class="login-wrapper">
		<div class="login-content">
			
			<h3>Đăng Nhập</h3>
			<form name="frmDangNhap" method="post" action="login.php?do=login">
                <p id="lblThongBao"></p>
            	<label for="username">
					Tài khoản:
					<input type="text" name="txtUsername" id="username" placeholder="Username must be between 8 and 20 characters" required="required" />
				</label>
				<label for="password">
					Mật khẩu:
					<input type="password" name="txtPassword" id="password" placeholder="Password must contain 1 uppercase, lowercase and number"  required="required"/>
				</label>
				<button type="submit" onsubmit="checkdata()" name="dangnhap">Đăng nhập</button>
			</form>
		</div>
	</div>
</div>
<?php } ?>
<div class="footer-bar">
    <span class="article-wrapper">
</div>
    
</body>
</html>