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

include '../MenuDB.php';
$db= new MenuDB();
$db->OpenConnection();

if (isset($_POST['save']))
    {
    $menuIđEit = addslashes($_POST['txtMenuId']);
    $menuname = addslashes($_POST['txtMenuName']);
    $menustatus = addslashes($_POST['cbstatus']);
    $db->UpdateMenu($menuIđEit, $menuname, $menustatus);
    echo "Cập nhật thành công!";
    
    $db->SearchMenuById($menuIđEit);
    $row = mysql_fetch_array($db ->query);
    echo "<form name='frmDangNhap' method='post' action='menuadminedit.php'>
                <p id='lblThongBao'></p>
                <table>
                <tr>
                <td>
            	<label for='menuid'>
					Id Menu:
					
				</label>
                </td>
                <td>
                    <input type='text' name='txtMenuId' id='menuid'   value='".$row['menu_id']."' />
                </td>
                </tr>
                <tr>
                <td>
            	<label for='menuname'>
					Tên Menu:
					
				</label>
                </td>
                <td>
                    <input type='text' name='txtMenuName' id='menuname'  required='required' value='".$row['menu_name']."'/>
                </td>
                </tr>
                
                <tr>
                <td>
                <label for='menustatus'>
                    Trạng thái:
                    
                </label>
                </td>
                <td>
                <select name='cbstatus'>
                    <option value='1'>Active</option>
                    <option value='0'>InActive</option>
                    </select>
                     </td>
                </tr>
                <tr>
                <td>
				<button type='submit' name='save'>Lưu</button>
                
                </td>
                <td>
				<input type='button' value='Close Window' onclick='javascript: return CloseWindow();' />
                
                </td>
                </table>
			</form>";
    }
    
if(isset($_GET['MenuId']))
{
    $menuID = $_GET['MenuId'];
    
    $db->SearchMenuById($menuID);
    $row = mysql_fetch_array($db ->query);
    echo "<form name='frmDangNhap' method='post' action='menuadminedit.php'>
                <p id='lblThongBao'></p>
                <table>
                <tr style='display: none;'>
                <td>
            	<label for='menuid'>
					Id Menu:
					
				</label>
                </td>
                <td>
                    <input type='text' name='txtMenuId' id='menuid'   value='".$row['menu_id']."' />
                </td>
                </tr>
                <tr>
                <td>
            	<label for='menuname'>
					Tên Menu:
					
				</label>
                </td>
                <td>
                    <input type='text' name='txtMenuName' id='menuname'  required='required' value='".$row['menu_name']."'/>
                </td>
                </tr>
                
                <tr>
                <td>
                <label for='menustatus'>
                    Trạng thái:
                    
                </label>
                </td>
                <td>
                <select name='cbstatus'>
                    <option value='1'>Active</option>
                    <option value='0'>InActive</option>
                    </select>
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