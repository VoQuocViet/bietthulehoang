<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        unset($_SESSION["username"]);
       
		header("location:login1.php");
    }
    else
    {
        echo "";
    }
?>
</body>
</html>