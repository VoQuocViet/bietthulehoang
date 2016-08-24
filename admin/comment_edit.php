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
    <style type="text/css">
    .title-cart{
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}
.title-cart td{
    border-bottom: 1px solid #dbdbdb;
    color:#372626;
    padding: 6px 10px;
    text-align: center;
    vertical-align: middle;
}
    
    </style>
     <div id="c-right">
        <div id="c-right-caption">
            <h1>Quản lý comment</h1>
        </div>
        <hr/>
  <?php
        $db= mysql_connect("localhost", "lehoangadm_dba", "12345");
	mysql_select_db("lehoangadm_dlvilla");
	if(!$db)
	{
		echo "Không thể kết nối CSDL";
		exit;	
	}
	
		$id= $_REQUEST["id"];
		
		$result= mysql_query("SELECT * FROM `tbl_comment` where comment_id like '$id'");
		if(mysql_num_rows($result)<>0)
		{
			while($row = mysql_fetch_row($result))
			{
				$id= $row[0];
				$content= $row[1];
				$hoten= $row[2];
				$sdt= $row[3];
				$email= $row[4];
				
				$date= $row[5];
				$status= $row[6];
			}	
		}
?>
<form action="comment_edit.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" align="center">
    <tbody>
      <tr class='title-cart' align="center" bgcolor="#F3AF40" style="font-size: 24px; color: #F9E108; font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;">
        <td colspan="2" bgcolor="#F4B17D"><b>Duyệt Thông Tin Phản Hồi</b><span style="font-size: 24px; text-align: center;"></span></td>
      </tr>
      <tr class='title-cart'>
        <td width="112">Mã Phản Hồi:</td>
        <td width="272"><input name="id" type="text" id="id" value="<?php echo $id;?>" width="200" readonly="true"></td>
      </tr>
      <tr class='title-cart'>
        <td>Nội Dung:</td>
        <td><input name="content" type="text" id="content" width="200" value="<?php if(isset($_POST["content"])) echo $_POST["content"]; else echo $content;?>" readonly="true"></td>
      </tr>
      <tr class='title-cart'>
        <td>Họ Tên:</td>
        <td><input name="hoten" type="text" id="hoten"  width="200" value="<?php if(isset($_POST["hoten"]))  echo $_POST["hoten"]; else echo $hoten;?>" readonly="true"></td>
      </tr>
      
      
      <tr class='title-cart'>
        <td>Số Điện Thoại:</td>
        <td><input name="sdt" type="text" id="sdt" width="200" value="<?php if(isset($_POST["sdt"]))  echo $_POST["sdt"]; else echo $sdt;?>" readonly="true"></td>
      </tr>
      <tr class='title-cart'>
        <td>Email:</td>
        <td><input name="email" type="text" id="email" width="200" value="<?php if(isset($_POST["email"]))  echo $_POST["email"]; else echo $email;?>" readonly="true"></td>
      </tr>
      <tr class='title-cart'>
        <td>Ngày Phản Hồi</td>
        <td><input name="date" type="date" id="date" width="200" value="<?php if(isset($_POST["date"]))  echo $_POST["date"]; else echo $date;?>"></td>
      </tr>
      <tr class='title-cart'>
        <td>Trạng Thái:</td>
        <td><input name="status" type="text" id="status" width="200" value="<?php if(isset($_POST["status"]))  echo $_POST["status"]; else echo $status;?>"></td>
      </tr>
      
      
      <tr class='title-cart'>
        <td colspan="2" style="text-align: center"><input name="submit" type="submit" id="submit" formaction="comment_edit.php" value="Cập Nhật" formmethod="POST"></td>
      </tr>
    </tbody>
  </table>
 
</form>
<?php
	if(isset($_POST["hoten"]))
	{
		$id= $_POST["id"];
		$content= $_POST["content"];
		$hoten= $_POST["hoten"];
		$sdt= $_POST["sdt"];
		$email= $_POST["email"];
		$date= $_POST["date"];
		$status= $_POST["status"];
		
		
		$result= mysql_query("UPDATE `tbl_comment` SET `comment_content`='$content',`comment_username`='$hoten',`comment_phoneno`='$sdt',`comment_email`='$email',`comment_datetime`='$date',`comment_status`='$status' WHERE comment_id like '$id'");
		mysql_query("SET character set utf8");
		echo "<p align='center'>Cập nhật thành công</p>";
	}
	else
	{
		
		}
	
	
?>

</tbody>
</table>
<hr/>

</body>
</html>