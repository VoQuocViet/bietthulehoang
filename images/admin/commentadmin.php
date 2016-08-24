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
            <h1>Quản lý comment</h1>
        </div>
        <hr/>
        
        
<?php
session_start();
if(isset($_SESSION['username']))
{
//echo"xin chao".$_SESSION['username'];

include '../CommentDB.php';
include '../EntryDB.php';
$db= new CommentDB();
$db->OpenConnection();
$db2= new EntryDB();
$db2->OpenConnection();

$db2->SearchForComment();
if(isset($_GET['IdComment']))
{
    $commentID = $_GET['IdComment'];
    $db->Deletecomment($commentID);
    echo"<script> location.replace('commentadmin.php'); </script>";
}
if (isset($_POST['search']))
{
    $entryid = addslashes($_POST['cbentry']);
    if($entryid != '')
    {
    $db->SearchcommentByEntryId($entryid);
    
    if(mysql_num_rows($db->query) == 0)
    {
    	echo "Chưa có dữ liệu!";
        echo "<form name='frmBaiViet' method='post' action='commentadmin.php'>
                
                <table>
                
                <td>
                <label for='entryname'>
                    Bài viết:
                    
                </label>
                </td>
                <td>
                <select name='cbentry'>
                    <option value=''>-Chọn bài viết-</option>";?>
                    <?php
                    while($rowEntry=mysql_fetch_array($db2->query))
                    {
                            echo "<option value='".$rowEntry['entry_id']."'>".$rowEntry['entry_name']."</option>";
                    }?>
                    <?php echo"
                </select>
                     </td>
                </tr>
                <tr>
                <td>
				<button type='submit' name='search'>Xem</button>
                
                </td>
                
                </table>
			</form>
            
            <h2>Danh sách comment</h2>
            <table class='table table-bordered'>
            <thead>
            <tr class='success'>
                <th>Bài viết</th>
                <th>ID</th>
                <th>Nội dung</th>
                <th>Tên</th>
                <th>Số ĐT</th>
                <th>Email</th>
                <th>Ngày đăng</th>
                <th>Trạng Thái</th>
               
                <th>Xóa</th>
            </tr>
            </thead>
            <tbody><?php
 }
    $db->CloseConnection();
    $db2->CloseConnection();   
  } 
  else
  header('location:login.php');
                                              
?>

</tbody>
</table>";
    }
    else
    {
    ?>
            
                <h3>Tìm Kiếm theo bài viết</h2>
                <form name="frmBaiViet" method="post" action="commentadmin.php">
                
                <table>
                
                <td>
                <label for="entryname">
                    Bài viết:
                    
                </label>
                </td>
                <td>
                <select name="cbentry">
                   
                    <?php
                    while($rowEntry=mysql_fetch_array($db2->query))
                    {
                            echo "<option value='".$rowEntry['entry_id']."'>".$rowEntry['entry_name']."</option>";
                    }?>
                    <option value=''>-Chọn bài viết-</option>
                </select>
                     </td>
                </tr>
                <tr>
                <td>
				<button type="submit" name="search">Xem</button>
                
                </td>
                
                </table>
			</form>
            
            <h2>Danh sách comment</h2>
            <table class="table table-bordered">
            <thead>
            <tr class="success">
                <th>Bài viết</th>
                <th>ID</th>
                <th>Nội dung</th>
                <th>Tên</th>
                <th>Số ĐT</th>
                <th>Email</th>
                <th>Ngày đăng</th>
                <th>Trạng Thái</th>
               
                <th>Xóa</th>
            </tr>
            </thead>
            <tbody>
<?php
while($row=mysql_fetch_array($db->query))
{
echo "<tr>
            <td>".$row['entry_id']."</td>
            <td>".$row['comment_id']."</td>
            <td>".$row['comment_content']."</td>
            <td>".$row['comment_username']."</td>
            <td>".$row['comment_phoneno']."</td>
            <td>".$row['comment_email']."</td>
            <td>".$row['comment_datetime']."</td>
            <td>".$row['comment_status']."</td>
            
            <td><a href='commentadmin.php?IdComment=".$row['comment_id']."'>Delete</a></td>
        </tr>";
}
 }
 }
 else
 {
    echo"<script> location.replace('commentadmin.php'); </script>";
 }
 }
 else
 {
    ?><h3>Tìm Kiếm theo bài viết</h2>
        
<form name="frmBaiViet" method="post" action="commentadmin.php">
                
                <table>
                
                <td>
                <label for="entryname">
                    Bài viết:
                    
                </label>
                </td>
                <td>
                <select name="cbentry">
                    <option value=''>-Chọn bài viết-</option>
                    <?php
                    while($rowEntry=mysql_fetch_array($db2->query))
                    {
                            echo "<option value='".$rowEntry['entry_id']."'>".$rowEntry['entry_name']."</option>";
                    }?>
                </select>
                     </td>
                </tr>
                <tr>
                <td>
				<button type="submit" name="search">Xem</button>
                
                </td>
                
                </table>
			</form>
            
            <h2>Danh sách comment</h2>
            <table class="table table-bordered">
            <thead>
            <tr class="success">
                <th>Bài viết</th>
                <th>ID</th>
                <th>Nội dung</th>
                <th>Tên</th>
                <th>Số ĐT</th>
                <th>Email</th>
                <th>Ngày đăng</th>
                <th>Trạng Thái</th>
               
                <th>Xóa</th>
            </tr>
            </thead>
            <tbody><?php
 }
    $db->CloseConnection();
    $db2->CloseConnection();   
  } 
  else
  header("location:login.php");
                                              
?>

</tbody>
</table>
<hr/>

</body>
</html>