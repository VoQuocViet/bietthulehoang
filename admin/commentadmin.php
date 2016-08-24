<?php

// Connection to the database

$host="localhost"; // Host name 

$username="bietthuleh_dba"; // Mysql username 

$password="zxcVBN123"; // Mysql password 

$db_name="bietthuleh_db"; // Database name 

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

<!-- 

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

     -->

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

            <h1>Quản lý comment</h1>

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

<td><?php echo $rows['comment_content']; ?></td>

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

</div>

<hr/>



</body>

</html>