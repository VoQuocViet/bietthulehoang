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
            <h1>Quản lý Sự Kiện</h1>
        </div>
        <hr/>
  <?php
        $db= mysql_connect("localhost", "lehoangadm_dba", "12345");
		mysql_query("SET character set utf8");
	mysql_select_db("lehoangadm_dlvilla");
	if(!$db)
	{
		echo "Không thể kết nối CSDL";
		exit;	
	}
	
	
?>
<form action="eventadmin_add.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" align="center">
    <tbody>
      <tr class='title-cart' align="center" bgcolor="#F3AF40" style="font-size: 24px; color: #F9E108; font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;">
        <td colspan="2" bgcolor="#F4B17D"><b>Thêm  Tin Mới</b><span style="font-size: 24px; text-align: center;"></span></td>
      </tr>
      <tr class='title-cart'>
        <td width="112">ID:</td>
        <td width="272"><input name="id" type="text" id="id" value="<?php echo $id;?>" width="200" readonly></td>
      </tr>
      <tr class='title-cart'>
        <td>Entry Name:</td>
        <td><input name="entry_name" type="text" id="entry_name" width="200" value="<?php if(isset($_POST["entry_name"])) echo $_POST["entry_name"]; else echo $entry_name;?>"></td>
      </tr>
      <tr class='title-cart'>
        <td>Entry Name En:</td>
        <td><input name="entry_name_en" type="text" id="entry_name_en"  width="200" value="<?php if(isset($_POST["entry_name_en"]))  echo $_POST["entry_name_en"]; else echo $entry_name_en;?>"></td>
      </tr>
      
      
      <tr class='title-cart'>
        <td>Entry Content:</td>
        <td><input name="entry_content" type="text" id="entry_content" width="200" height="400px" value="<?php if(isset($_POST["entry_content"]))  echo $_POST["entry_content"]; else echo $entry_content;?>"></td>
      </tr>
      <tr class='title-cart'>
        <td>Entry Content EN:</td>
        <td><input name="entry_content_en" type="text" id="entry_content_en" width="200" height="400px" value="<?php if(isset($_POST["entry_content_en"]))  echo $_POST["entry_content_en"]; else echo $entry_content_en;?>"></td>
      </tr>
      <tr class='title-cart'>
        <td>Hình Minh Họa:</td>
        <td>
            <input type="file" name="file_name">
        </td>
      </tr>
      <tr class='title-cart'>
        <td>Entry Datetime:</td>
        <td><input name="entry_datetime" type="text" id="entry_datetime" width="200" value="<?php if(isset($_POST["entry_datetime"]))  echo $_POST["entry_datetime"]; else echo $entry_datetime;?>"></td>
      </tr>
      <tr class='title-cart'>
        <td>Menu Id:</td>
        <td><input name="menu_id" type="number" id="menu_id" width="200" value="<?php if(isset($_POST["menu_id"]))  echo $_POST["menu_id"]; else echo $menu_id;?>" readonly></td>
      </tr>
       <tr class='title-cart'>
        <td>Entry Status:</td>
        <td><input name="entry_status" type="number" id="entry_status" width="200" value="<?php if(isset($_POST["entry_status"]))  echo $_POST["entry_status"]; else echo $entry_status;?>" ></td>
      </tr>
      
      <tr class='title-cart'>
        <td colspan="2" style="text-align: center"><input name="submit" type="submit" id="submit" formaction="eventadmin_edit.php" value="Cập Nhật" formmethod="POST"></td>
      </tr>
    </tbody>
  </table>
 
</form>
<?php
	if(isset($_POST["entry_name"]))
	{
			$id= $_POST["id"];
			$entry_name= $_POST["entry_name"];
			$entry_name_en= $_POST["entry_name_en"];
			$entry_content= $_POST["entry_content"];
			$entry_content_en= $_POST["entry_content_en"];
			$entry_image= "";
			$entry_datetime= $_POST["entry_datetime"];
			$menu_id= $_POST["menu_id"];
			$entry_status= $_POST["entry_status"];
		
		
		$result= mysql_query("UPDATE `tbl_entry` SET `entry_name`='$entry_name',`entry_name_en`='$entry_name_en',`entry_content`='$entry_content',`entry_content_en`='$entry_content_en',`entry_image`='$entry_image',`entry_datetime`='$entry_datetime',`menu_id`='$menu_id',`entry_status`='$entry_status' WHERE entry_id like '$id'");
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