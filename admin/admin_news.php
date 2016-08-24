<?php
// Connection to the database
$host="localhost"; // Host name 
$username="lehoangadm_dba"; // Mysql username 
$password="12345"; // Mysql password 
$db_name="lehoangadm_dlvilla"; // Database name 
$tbl_name="tbl_entry"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_query("set names 'utf8'");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name where menu_id='8' ORDER BY entry_id DESC";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
?>
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
<!--      <div id="c-right"> -->
        <div id="c-right-caption">
            <h1>Quản lý Tin Tức</h1>
        </div>
        <hr/>
        <div style="margin-left: 30px">
  <table width="1300" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="frmactive" method="post" action="">
<table width="1300" border="1" cellpadding="3" cellspacing="1">
<tr>
<td colspan="5"><input name="activate" type="submit" id="activate" value="Activate" />
<input name="deactivate" type="submit" id="deactivate" value="Deactivate" /></td>
</tr>
<tr>

</tr><tr>
<td align="center"><input type="checkbox" name="allbox" title="Select or Deselct ALL" style="background-color:#ccc;"/></td>
<td align="center"><strong>Mã Tin Tức</strong></td>
<td align="center"><strong>Tựa Đề (VI)</strong></td>
<td align="center"><strong>Tựa Đề (EN)</strong></td>
<td align="center"><strong>Nội Dung (VI)</strong></td>
<td align="center"><strong>Nội Dung (EN)</strong></td>
<td align="center" width="300px"><strong>Hình Ảnh</strong></td>
<td align="center"><strong>Ngày Cập Nhật</strong></td>
<td align="center"><strong>Menu ID</strong></td>
<td align="center"><strong>Trang Thái</strong></td>
</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td align="center"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $rows['comment_id']; ?>"></td>
<td><?php echo $rows['entry_id']; ?></td>
<td><?php echo $rows['entry_name']; ?></td>
<td><?php echo $rows['entry_name_en']; ?></td>
<td><?php echo $rows['entry_content']; ?></td>
<td><?php echo $rows['entry_content_en']; ?></td>
<td><?php echo $rows['entry_img']; ?></td>
<td><?php echo $rows['entry_datetime']; ?></td>
<td><?php echo $rows['menu_id']; ?></td>
<td><?php echo $rows['entry_status']; ?></td>
</tr>
<?php
}
?>
<tr>
<td colspan="5" align="center">&nbsp;</td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</div>
<hr/>

</body>
</html>