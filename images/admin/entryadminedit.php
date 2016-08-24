<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="style.css" type="text/css" rev="stylesheet" rel="stylesheet">
    <link rel="stylesheet" href="//normalize-css.googlecode.com/svn/trunk/normalize.css" type="text/css" rev="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script type="application/javascript" rel="script" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    function CloseWindow() {
        window.close();
        window.opener.location.reload();
    }
    window.onunload = function(){
  window.opener.location.reload();
};
</script>    
</head>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
{
//echo"xin chao".$_SESSION['username'];

include '../EntryDB.php';
$db= new EntryDB();
$db->OpenConnection();

if (isset($_POST['save']))
    {
    $idEntry = addslashes($_POST['txtID']);
    $entryname = addslashes($_POST['txtName']);
    $entrycontent = addslashes($_POST['txtContent']);
    $entrynameen = addslashes($_POST['txtNameEn']);
    $entrycontenten = addslashes($_POST['txtContentEn']);
    $entryimg = addslashes($_POST['txtImg']);
    $entrystatus = addslashes($_POST['cbstatus']);
    $db->UpdateEntry($idEntry, $entryname, $entrycontent, $entrynameen, $entrycontenten, $entryimg, $entrystatus);
    echo "Cập nhật thành công!";
    
    $db->SearchEntryById($idEntry);
    $row = mysql_fetch_array($db ->query);
    echo "<form name='frmDangNhap' method='post' action='entryadminedit.php'>
        <p id='lblThongBao'></p>
        <table class='table'>
        <tr>
        <td>
    	<label for='id'>
    		ID:
    		
    	</label>
        </td>
        <td>
            <input type='text' name='txtID' id='entryid' value='".$row['entry_id']."'   required='required' />
        </td>
        </tr>
        <tr>
        <td>
    	<label for='entryname'>
    		Tên bài viết:
    		
    	</label>
        </td>
        <td>
            <input type='text' name='txtName' id='entryname' value='".$row['entry_name']."' required='required' />
        </td>
        </tr>
        <tr>
        <td>
    	<label for='entrynameen'>
    		Tên bài viết - Tiếng Anh:
    		
    	</label>
        </td>
        <td>
            <input type='text' name='txtNameEn' id='entrynameen' value='".$row['entry_name_en']."' required='required' />
        </td>
        </tr>
        <tr>
        <td>
    	<label for='entrycontent'>
    		Nội dung:
    		
    	</label>
        </td>
        <td>
        <textarea name='txtContent' id='entrycontent'  required='required'>".$row['entry_content']."</textarea>
         </td>  
        </tr>
        <tr>
        <td>
    	<label for='entrycontenten'>
    		Nội dung - Tiếng Anh:
    		
    	</label>
        </td>
        <td>
        <textarea name='txtContentEn' id='entrycontenten'  required='required'>".$row['entry_content_en']."</textarea>
         </td>  
        </tr>
        <tr>
        <td>
    	<label for='entryimg'>
    		Tên hình:
    		
    	</label>
        </td>
        <td>
            <input type='text' name='txtImg' id='entryimg' value='".$row['entry_img']."' required='required' />
        </td>
        </tr>
        <tr>
        <td>
        <label for='entrystatus'>
            Trạng thái:
            
        </label>
        </td>
        <td>
        <select name='cbstatus'>";?>
                <?php
                    if($row['entry_status']=='1')
                    {
                        echo "<option value='1'>Active</option>
                              <option value='0'>InActive</option>";
                    }
                    else
                    {
                        echo "<option value='0'>Inctive</option>
                              <option value='1'>Active</option>";
                    }
                ?>
                <?php echo "</select>
             </td>
        </tr>
        <tr>
        <td>
    	<button type='submit' name='save'>Lưu</button>
       
        </td>
        
        </table>
    </form>";
    }
    
if(isset($_GET['EntryId']))
{
    $entryID = $_GET['EntryId'];
    if (isset($_POST['save']))
    {
    $idEntry = addslashes($_POST['txtID']);
    $entryname = addslashes($_POST['txtName']);
    $entrycontent = addslashes($_POST['txtContent']);
    $entrynameen = addslashes($_POST['txtNameEn']);
    $entrycontenten = addslashes($_POST['txtContentEn']);
    $entryimg = addslashes($_POST['txtImg']);
    $entrystatus = addslashes($_POST['cbstatus']);
    $db->UpdateEntry($idEntry, $entryname, $entrycontent, $entrynameen, $entrycontenten, $entryimg, $entrystatus);
    
    }
    $db->SearchEntryById($entryID);
    $row = mysql_fetch_array($db ->query);
    echo "<form name='frmDangNhap' method='post' action='entryadminedit.php'>
        <p id='lblThongBao'></p>
        <table class='table'>
        <tr>
        <td>
    	<label for='id'>
    		ID:
    		
    	</label>
        </td>
        <td>
            <input type='text' name='txtID' id='entryid' value='".$row['entry_id']."'   required='required' />
        </td>
        </tr>
        <tr>
        <td>
    	<label for='entryname'>
    		Tên bài viết:
    		
    	</label>
        </td>
        <td>
            <input type='text' name='txtName' id='entryname' value='".$row['entry_name']."' required='required' />
        </td>
        </tr>
        <tr>
        <td>
    	<label for='entrynameen'>
    		Tên bài viết - Tiếng Anh:
    		
    	</label>
        </td>
        <td>
            <input type='text' name='txtNameEn' id='entrynameen' value='".$row['entry_name_en']."' required='required' />
        </td>
        </tr>
        <tr>
        <td>
    	<label for='entrycontent'>
    		Nội dung:
    		
    	</label>
        </td>
        <td>
        <textarea name='txtContent' id='entrycontent'  required='required'>".$row['entry_content']."</textarea>
         </td>  
        </tr>
        <tr>
        <td>
    	<label for='entrycontenten'>
    		Nội dung - Tiếng Anh:
    		
    	</label>
        </td>
        <td>
        <textarea name='txtContentEn' id='entrycontenten'  required='required'>".$row['entry_content_en']."</textarea>
         </td>  
        </tr>
        <tr>
        <td>
    	<label for='entryimg'>
    		Tên hình:
    		
    	</label>
        </td>
        <td>
            <input type='text' name='txtImg' id='entryimg' value='".$row['entry_img']."' required='required' />
        </td>
        </tr>
        <tr>
        <td>
        <label for='entrystatus'>
            Trạng thái:
            
        </label>
        </td>
        <td>
        <select name='cbstatus'>";?>
                <?php
                    if($row['entry_status']=='1')
                    {
                        echo "<option value='1'>Active</option>
                              <option value='0'>InActive</option>";
                    }
                    else
                    {
                        echo "<option value='0'>Inctive</option>
                              <option value='1'>Active</option>";
                    }
                ?>
                <?php echo "</select>
             </td>
        </tr>
        <tr>
        <td>
    	<button type='submit' name='save'>Lưu</button>
       
        </td>
        
        </table>
    </form>";
}
}
?>
</body>
</html>