<?php
// Connection to the database
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="lehoangadm_dlvilla"; // Database name 
$tbl_name="tbl_comment"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_query("set names 'utf8'");
mysql_select_db("$db_name")or die("cannot select DB");

if(isset($_POST['checkbox'])){$checkbox = $_POST['checkbox'];
if(isset($_POST['activate'])?$activate = $_POST["activate"]:$deactivate = $_POST["deactivate"])
$comment_id = "('" . implode( "','", $checkbox ) . "');" ;
$sql="UPDATE $tbl_name SET comment_status = '".(isset($activate)?'Yes':'No')."' WHERE comment_id IN $comment_id" ;
$result = mysql_query($sql) or die(mysql_error());
}
 
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset="utf-8"" />
<title>Update multiple rows in mysql with checkbox</title>

<script type="text/javascript">
<!--
function un_check(){
for (var i = 0; i < document.frmactive.elements.length; i++) {
var e = document.frmactive.elements[i];
if ((e.name != 'allbox') && (e.type == 'checkbox')) {
e.checked = document.frmactive.allbox.checked;
}}}
//-->
</script>

</head>
<body>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="frmactive" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1">
<tr>
<td colspan="5"><input name="activate" type="submit" id="activate" value="Activate" />
<input name="deactivate" type="submit" id="deactivate" value="Deactivate" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td colspan="4"><strong>Update multiple rows in mysql with checkbox</strong> </td>
</tr><tr>
<td align="center"><input type="checkbox" name="allbox" title="Select or Deselct ALL" style="background-color:#ccc;"/></td>
<td align="center"><strong>Comment Id</strong></td>
<td align="center"><strong>Họ Tên</strong></td>
<td align="center"><strong>Số ĐT</strong></td>
<td align="center"><strong>Email</strong></td>
<td align="center"><strong>Ngày cập nhật</strong></td>
<td align="center" width="300px"><strong>Nội dung</strong></td>
<td align="center"><strong>Status</strong></td>
</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td align="center"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $rows['comment_id']; ?>"></td>
<td><?php echo $rows['comment_id']; ?></td>
<td><?php echo $rows['comment_username']; ?></td>
<td><?php echo $rows['comment_phoneno']; ?></td>
<td><?php echo $rows['comment_email']; ?></td>
<td><?php echo $rows['comment_datetime']; ?></td>
<td  width="300px"><?php echo $rows['comment_content']; ?></td>
<td align="center" style="background-color: yellow; color: red"><?php echo $rows['comment_status']; ?></td>
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
</body>
</html>