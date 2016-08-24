<?php
session_start();
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<!-- HEADE START -->
<head>
    <?php
    include_once 'header.php';
    ?>
    
</head>
<!-- HEAD END -->
<!-- BODY START -->
<body class="">
<?php
include_once 'menu-top.php';
include_once("analyticstracking.php");
?>
<div class="rw-ui-container"></div>
<div style="clear: both"></div>
<div id="mp-outerlogo">
    <div id="mp-logo">
        <img src="../images/logo4.png">
    </div>
</div>
<div id="slogan">
    <h2>Tin Tức</h2> <br>

</div>

<div id="i-main content" class="container">
    <div class="row  row_no_margin row_no_padding col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12">
        <div class="" style="text-align: justify">
            <?php
            $link_string = "";
            $link_string = substr($_SERVER['REQUEST_URI'],4,3);
            //echo $_SERVER['REQUEST_URI']."<br/>";
            //echo $link_string;
            
            //$identrys = trim($link_string,"-");
            include 'EntryDB.php';
            $db = new EntryDB();
            $db->OpenConnection();
            $db->SearchEntryById($link_string);

            while ($row = mysql_fetch_array($db->query)) {
                echo "<div class='post'>
                        <br>
                        <p>
                        <a href='" .$row['entry_id']."-".$row['tieude_khongdau'].".html'>
                        <h1 style='color: #f90;'>" . $row['entry_name'] . "</h1> 
                        </a>
			<i style='font-size: 13px'>Ngày cập nhật: " . $row['entry_datetime'] . "</i><br><br>
                        " . $row['entry_content'] . "
                        </p>
                        
                        </div>";
            }

            ?>
        </div>
    </div>
</div>
<?php
$db->CloseConnection();
include 'footer_sub.php';
?>
</body>
</html>
