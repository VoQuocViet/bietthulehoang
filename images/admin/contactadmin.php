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
            <h1>Quản lý liên hệ</h1>
        </div>
        <hr/>
        <h2>Danh sách liên hệ</h2>
<?php
session_start();
if(isset($_SESSION['username']))
{
//echo"xin chao".$_SESSION['username'];

include '../ContactDB.php';
$db= new ContactDB();
$db->OpenConnection();
$db->Search();
if(isset($_GET['IdContact']))
{
    $contactID = $_GET['IdContact'];
    $db->DeleteContact($contactID);
    $db->Search();
}

if(mysql_num_rows($db->query) == 0)
{
	echo "Chua co du lieu";
}
else
{
?>
            <table class="table table-bordered">
            <thead>
            <tr class="success">
                <th>ID</th>
                <th>Tên</th>
                <th>Số ĐT</th>
                <th>Email</th>
                <th>Nội dung</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            </thead>
            <tbody>
<?php
while($row=mysql_fetch_array($db->query))
{
echo "<tr>
            <td>".$row['contact_id']."</td>
            <td>".$row['contact_name']."</td>
            <td>".$row['contact_phoneno']."</td>
            <td>".$row['contact_email']."</td>
            <td>".$row['contact_content']."</td>
            <td>".$row['contact_datetime']."</td>
            <td><a href='contactadmin.php?IdContact=".$row['contact_id']."'>Delete</a></td>
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

</body>
</html>