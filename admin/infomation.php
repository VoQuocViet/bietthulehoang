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
            <li><a href="infomation.php"> Quản Lý Tin Tức</a></li>
            <li><a href="promotionadmin.php"> Quản Lý Khuyến mãi</a></li>
            <li><a href="commentadmin.php"> Quản Lý Bình luận</a></li>
            <li><a href="contactadmin.php"> Quản Lý Liên hệ</a></li>
            
        </ul>
    </div>
     <div id="c-right">
        <div id="c-right-caption">
            <h1>Quản lý sự kiện</h1>
        </div>
        <hr/>
        <h2>Danh sách sự kiện</h2>
<?php /*?><?php
session_start();
if(isset($_SESSION['username']))
{
//echo"xin chao".$_SESSION['username'];

include '../EntryDB.php';
$db= new EntryDB();
$db->OpenConnection();
$db->SearchEntryEvent();
if(isset($_GET['EntryId']))
{
    $entryID = $_GET['EntryId'];
    $db->DeleteEntry($entryID);
    $db->SearchEntryEvent();
}

if (isset($_POST['save']))
{
    $entryname = addslashes($_POST['txtName']);
    $entrycontent = addslashes($_POST['txtContent']);
    $entrynameen = addslashes($_POST['txtNameEn']);
    $entrycontenten = addslashes($_POST['txtContentEn']);
    $entryimg = addslashes($_POST['txtImg']);
    $entrystatus = addslashes($_POST['cbstatus']);
    $db->InsertEntryEvent($entryname, $entrycontent, $entrynameen, $entrycontenten, $entryimg, $entrystatus);
    echo"<script> location.replace('eventadmin.php'); </script>";
    
    
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
                <th>Tên bài viết</th>
                <th>Nội dung</th>
                <th>Tên bài viết - Tiếng Anh</th>
                <th>Nội dung - Tiếng Anh</th>
                <th>Hình ảnh</th>
                <th>Thời gian gửi</th>
                <th>Trạng thái</th>
                <th>ID Menu</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            </thead>
            <tbody>
<?php
while($row=mysql_fetch_array($db->query))
{
            $subStr1 = substr( $row['entry_content'],  0, 200);
            $subStr2 = substr( $row['entry_content_en'],  0, 200);
            echo "<tr>
            <td>".$row['entry_id']."</td>
            <td>".$row['entry_name']."</td>
            <td>".$subStr1."..."."</td>
            <td>".$row['entry_name_en']."</td>
            <td>".$subStr2."..."."</td>
            <td>".$row['entry_img']."</td>
            <td>".$row['entry_datetime']."</td>
            <td>".$row['entry_status']."</td>
            <td>".$row['menu_id']."</td>
            <td>"?><a href="javascript:void(0);" onclick="popupCenter('entryadminedit.php?EntryId=<?php echo $row['entry_id']?>', 'myPop1',450,450);">Edit</a><?php echo "</td>
            <td><a href='eventadmin.php?EntryId=".$row['entry_id']."'>Delete</a></td>
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
<h3>Thêm mới sự kiện</h2>
<div class="container">
<div class="col-md-4 col-md-offset-4">
    <form name="frmDangNhap" method="post" action="eventadmin.php">
        <p id="lblThongBao"></p>
        <table class="table">
        <tr>
        <td>
    	<label for="entryname">
    		Tên bài viết:
    		
    	</label>
        </td>
        <td>
            <input type="text" name="txtName" id="entryname"  required="required" />
        </td>
        </tr>
        <tr>
        <td>
    	<label for="entrycontent">
    		Nội dung:
    		
    	</label>
        </td>
        <td>
        <textarea name="txtContent" id="entrycontent"  required="required"></textarea>
         </td>  
        </tr>
        <tr>
       <td>
    	<label for="entrynameen">
    		Tên bài viết - Tiếng Anh:
    		
    	</label>
        </td>
        <td>
            <input type="text" name="txtNameEn" id="entrynameen"  required="required" />
        </td>
        </tr>
        <tr>
        <td>
    	<label for="entrycontenten">
    		Nội dung - Tiếng Anh:
    		
    	</label>
        </td>
        <td>
        <textarea name="txtContentEn" id="entrycontenten"  required="required"></textarea>
         </td>  
        </tr>
        <tr>
        <td>
    	<label for="entryimg">
    		Tên hình:
    		
    	</label>
        </td>
        <td>
            <input type="text" name="txtImg" id="entryimg"  required="required" />
        </td>
        </tr>
        <tr>
        <td>
        <label for="entrystatus">
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
    <?php */?>
    
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
.table1{ width:1079 px;}
    </style>
    <?php
        $db= mysql_connect("localhost", "lehoangadm_dba", "12345");
	mysql_select_db("lehoangadm_dlvilla");
	mysql_query("SET character set utf8");
	if(!$db)
	{
		echo "Không thể kết nối CSDL";
		exit;	
	}
	
	$result= mysql_query("SELECT * FROM tbl_entry");
	if(mysql_num_rows($result)<>0)
	{
		echo "<p class='style35' align='center'>Thông Tin Sự Kiện</p>";
		echo "<table class='table1' width='95%' align='center' border='1' cellpadding='1' cellspacing='1'>";
			echo "<tr class='title-cart'>";
			echo "<td align='center' width='50'><b>ID</b></td>";
			echo "<td align='center' width='50'><b>Entry Name</b></td>";
			echo "<td align='center' width='50'><b>Entry Name En</b></td>";
			echo "<td align='center' width='400'><b>Entry Content</b></td>";
			echo "<td align='center' width='300'><b>Entry Content En</b></td>";
			echo "<td align='center' width='50'><b>Entry Img</b></td>";
			echo "<td align='center' width='100'><b>Entry Datetime</b></td>";
			echo "<td align='center' width='50'><b>Menu ID</b></td>";
			echo "<td align='center' width='30'><b> Entry Status</b></td>";
			echo "<td align='center' width='70'><b> Chọn thao tác</b></td>";
			echo "<td align='center' width='70'><b> Chọn thao tác</b></td>";
			
		$stt=0;
		while ($row= mysql_fetch_row($result))
		{
			$id= $row[0];
			$entry_name= $row[1];
			$entry_name_en= $row[2];
			$entry_content= $row[3];
			$entry_content_en= $row[4];
			$entry_image= $row[5];
			$entry_datetime= $row[6];
			$menu_id= $row[7];
			$entry_status= $row[8];
			
		
			//$image_link="<img src='$image_link1'>";
			
			
			if($stt%2==0)
			echo "<tr class='title-cart'>";
			else
			echo "<tr class='title-cart'>";
				echo "<td>$id</td>";
				echo "<td>$entry_name</td>";
				echo "<td>$entry_name_en</td>";
				echo "<td>$entry_content</td>";
				echo "<td>$entry_content_en</td>";
				
				echo "<td>$entry_image</td>";
				
				echo "<td>$entry_datetime</td>";
				
				echo "<td>$menu_id</td>";
				echo "<td>$entry_status</td>";
				echo "<td><a href='eventadmin_edit.php?id=".$id."'>Sửa</a></td>";
				echo "<td><a href='eventadmin_del.php?id=".$id."'>Xóa</a></td>";
				
				
			$stt= $stt+1;
			echo "</tr>";
		}
		echo "</table>";
				
	}
?>
</div>
</div>

</body>
</html>