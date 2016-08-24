<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="style.css" type="text/css" rev="stylesheet" rel="stylesheet">
    <link rel="stylesheet" href="//normalize-css.googlecode.com/svn/trunk/normalize.css" type="text/css" rev="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script type="application/javascript" rel="script" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
var popupWindow=null;

function popupCenter(url, title, w, h) {
  var left = (screen.width/2)-(w/2);
  var top = (screen.height/2)-(h/2);
  return popupWindow =window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 

function parent_disable() {
if(popupWindow && !popupWindow.closed)
popupWindow.focus();
}
</script>    
</head>
<body onFocus="parent_disable();" onclick="parent_disable();">
    <div id="m-top">

    </div>
    <div id="m-left">
        <ul>
            <li><a href="useradmin.php"> Quản Lý Người dùng</a></li>
            <li><a href="menuadmin.php"> Quản Lý Danh mục</a></li>
            <li><a href="eventadmin.php"> Quản Lý Sự kiện</a></li>
            <li><a href="promotionadmin.php"> Quản Lý Khuyến mãi</a></li>
            <li><a href="commentadmin.php"> Quản Lý Bình luận</a></li>
            <li><a href="contactadmin.php"> Quản Lý Liên hệ</a></li>
        </ul>
    </div>
     <div id="c-right">
        <div id="c-right-caption">
            <h1>Quản lý user</h1>
        </div>
        <hr/>
        <h2>Danh sách user</h2>
<?php
session_start();
if(isset($_SESSION['username']))
{
//echo"xin chao".$_SESSION['username'];

include '../UserDB.php';
$db= new UserDB();
$db->OpenConnection();
$db->Search();
if(isset($_GET['UserId']))
{
    $userID = $_GET['UserId'];
    $db->DeleteUser($userID);
    $db->Search();
}

if (isset($_POST['save']))
{
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    $userstatus = addslashes($_POST['cbstatus']);
    $db->InsertUser($username, $password, $userstatus);
    echo"<script> location.replace('useradmin.php'); </script>";
    
    
}
if(mysql_num_rows($db->query) == 0)
{
	echo "Chưa có dữ liệu!";
}
else
{
?>
            <table class="table table-bordered">
            <thead>
            <tr class="success">
                <th>ID</th>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Trạng Thái</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            </thead>
            <tbody>
<?php
while($row=mysql_fetch_array($db->query))
{
echo "<tr>
            <td>".$row['user_id']."</td>
            <td>".$row['user_name']."</td>
            <td>".$row['user_password']."</td>
            <td>".$row['user_status']."</td>
            <td>"?><a href="javascript:void(0);" onclick="popupCenter('useradminedit.php?UserId=<?php echo $row['user_id']?>', 'myPop1',450,450);">Edit</a><?php echo "</td>
            <td><a href='useradmin.php?UserId=".$row['user_id']."'>Delete</a></td>
        </tr>";
}
 }
  } 
  else
  header("location:login.php");                                               
?>

</tbody>
</table>
<hr/>
<h3>Thêm mới user</h2>
<div class="container">
<div class="col-md-4 col-md-offset-4">
    <form name="frmDangNhap" method="post" action="useradmin.php">
        <p id="lblThongBao"></p>
        <table class="table">
        <tr>
        <td>
    	<label for="username">
    		Tài khoản:
    		
    	</label>
        </td>
        <td>
            <input type="text" name="txtUsername" id="username"  required="required" />
        </td>
        </tr>
        <tr>
        <td>
    	<label for="password">
    		Mật khẩu:
    		
    	</label>
        </td>
        <td>
        <input type="text" name="txtPassword" id="password"  required="required"/>
         </td>  
        </tr>
        <tr>
        <td>
        <label for="userstatus">
            Trạng thái:
            
        </label>
        </td>
        <td>
        <select name="cbstatus">
            <option value="1">Active</option>
            <option value="0">InActive</option>
            </select>
             </td>
        </tr>
        <tr>
        <td>
    	<button type="submit" name="save">Lưu</button>
       
        </td>
        
        </table>
    </form>
</div>
</div>
</body>
</html>