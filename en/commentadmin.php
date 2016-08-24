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
            <h1>Quản lý commentlllll</h1>
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
	
	$result= mysql_query("SELECT * FROM tbl_comment");
	if(mysql_num_rows($result)<>0)
	{
		echo "<p class='style35' align='center'>Thông Tin Phản Hồi</p>";
		echo "<table align='center' width='780' border='1' cellpadding='2' cellspacing='2'>";
			echo "<tr class='title-cart'>";
			echo "<td align='center' width='50'>Mã Phản Hồi</td>";
			echo "<td align='center' width='50'>Tên Khách</td>";
			echo "<td align='center' width='100'>Số Điện Thoại</td>";
			echo "<td align='center' width='70'>Email</td>";
			echo "<td align='center' width='50'>Ngày Phản Hồi</td>";
			echo "<td align='center' width='50'>Nội Dung</td>";
			echo "<td align='center' width='150'>Trạng Thái</td>";
			
		$stt=0;
		while ($row= mysql_fetch_row($result))
		{
			$id= $row[0];
			$hoten= $row[1];
			$sdt= $row[2];
			$email= $row[3];
			$date= $row[4];
			$content= $row[5];
			
			$status= $row[6];
			
		
			//$image_link="<img src='$image_link1'>";
			
			
			if($stt%2==0)
			echo "<tr bgcolor='#EEC9F7'>";
			else
			echo "<tr class='title-cart'>";
				echo "<td>$id</td>";
				echo "<td>$hoten</td>";
				echo "<td>$sdt</td>";
				echo "<td>$email</td>";
				echo "<td>$date</td>";
				echo "<td>$content</td>";
				echo "<td>$status</td>";
				
				
				echo "<td><a href='edit_customer_edit.php?id=".$id."'>Sửa</a></td>";
				
				
			$stt= $stt+1;
			echo "</tr>";
		}
		echo "</table>";
				
	}
?>


</tbody>
</table>
<hr/>

</body>
</html>