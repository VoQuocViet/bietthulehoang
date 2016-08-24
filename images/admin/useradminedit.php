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

include '../UserDB.php';
$db= new UserDB();
$db->OpenConnection();

if (isset($_POST['save']))
    {
    $userIđEit = addslashes($_POST['txtUserId']);
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    $userstatus = addslashes($_POST['cbstatus']);
    $db->UpdateUser($userIđEit, $username, $password, $userstatus);
    echo "Cập nhật thành công!";
    
    $db->SearchUserById($userIđEit);
    $row = mysql_fetch_array($db ->query);
    echo "<form name='frmDangNhap' method='post' action='useradminedit.php'>
                <p id='lblThongBao'></p>
                <table>
                <tr style='display: none;'>
                <td>
            	<label for='username'>
					ID:
					
				</label>
                </td>
                <td>
                    <input type='text' name='txtUserId' id='userid'  value='".$row['user_id']."' />
                </td>
                </tr>
                <tr>
                <td>
            	<label for='username'>
					Tài khoản:
					
				</label>
                </td>
                <td>
                    <input type='text' name='txtUsername' id='username'  required='required' value='".$row['user_name']."' />
                </td>
                </tr>
                <tr>
                <td>
				<label for='password'>
					Mật khẩu:
					
				</label>
                </td>
                <td>
                <input type='text' name='txtPassword' id='password'  required='required' value='".$row['user_password']."'/>
                 </td>
                </tr>
                <tr>
                <td>
                <label for='userstatus'>
                    Trạng thái:
                    
                </label>
                </td>
                <td>
                <select name='cbstatus'>";?>
                <?php
                    if($row['user_status']=='1')
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
                <td>
				<input type='button' value='Close Window' onclick='javascript: return CloseWindow();' />
                
                </td>
                </table>
			</form>";
    }
    
if(isset($_GET['UserId']))
{
    $userID = $_GET['UserId'];
    if (isset($_POST['save']))
    {
    $userIđEit = addslashes($_POST['txtUserId']);
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    $userstatus = addslashes($_POST['cbstatus']);
    $db->UpdateUser($userIđEit, $username, $password, $userstatus);
    
    }
    $db->SearchUserById($userID);
    $row = mysql_fetch_array($db ->query);
    echo "<form name='frmDangNhap' method='post' action='useradminedit.php'>
                <p id='lblThongBao'></p>
                <table>
                <tr style='display: none;'>
                <td>
            	<label for='username'>
					ID:
					
				</label>
                </td>
                <td>
                    <input type='text' name='txtUserId' id='userid'  value='".$row['user_id']."' />
                </td>
                </tr>
                <tr>
                <td>
            	<label for='username'>
					Tài khoản:
					
				</label>
                </td>
                <td>
                    <input type='text' name='txtUsername' id='username'  required='required' value='".$row['user_name']."' />
                </td>
                </tr>
                <tr>
                <td>
				<label for='password'>
					Mật khẩu:
					
				</label>
                </td>
                <td>
                <input type='text' name='txtPassword' id='password'  required='required' value='".$row['user_password']."'/>
                 </td>
                </tr>
                <tr>
                <td>
                <label for='userstatus'>
                    Trạng thái:
                    
                </label>
                </td>
                <td>
                <select name='cbstatus'>";?>
                <?php
                    if($row['user_status']=='1')
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