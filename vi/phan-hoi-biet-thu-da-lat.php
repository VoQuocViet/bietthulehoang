<?php
ob_start ();
session_start ();
ob_flush ();
?>
<?php
/*
 * EDIT.PHP
 * Allows user to edit specific entry in database
 */

// creates the edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($name, $sdt, $email, $date, $message, $error) {
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
<meta charset="UTF-8" de/>
<title>
    Đánh giá biệt thự Đà Lạt | Trải nghiệm tại Biệt Thự Nghĩ Dưỡng Đà Lạt
</title>
<!-- <base href="http://bietthulehoang.com/vi/" extention=".php" /> -->
<!--============= Mobile Specific Metas =============== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="google-site-verification" content="9mwgXr3AkgEIeolSvfLX3OIZ3MVPpRZtV9cbnfdTkHM" />
<meta name="description" content=""Biệt thự tiện nghi sạch sẽ, nhân viên phục vụ nhiệt tình, hẹn gặp lại lần sau!" Hãy đến với chúng tôi để cùng trải nghiệm. Gọi ngay: 063.3522.678" />
<meta name="keywords" content="biet thu da lat, biệt thự đà lạt" />
<meta name="dc.language" content="vi-VN" />
<meta name="geo.region" content="VN-35" />
<meta name="geo.placename" content="Dalat" />
<meta name="geo.position" content="11.941244;108.451844" />
<meta name="ICBM" content="11.941244, 108.451844" />
<meta name="robots" content="index, follow" />
<link href="../images/logo4.png" rel="icon" />
<link rel="alternate" hreflang="en" href="http://bietthulehoang.com/en/index.php" />
<link rel="alternate" hreflang="vi" href="http://bietthulehoang.com/vi/index.php" />
<!--CSS Reser-->
<link rel="stylesheet" href="//normalize-css.googlecode.com/svn/trunk/normalize.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../css/style-reset.css">

<!--Jquery-->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!--BootStrap-->
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- it works the same with all jquery version from 1.x to 2.x -->
<!--JS Reset-->
<script type="javascript" src="../js/modernizr.js"></script>

<!--FlexSlider-->
<link rel="stylesheet" type="text/css" href="../css/flexslider.css">
<script type="text/javascript" src="../js/jquery.flexslider.js"></script>

<!--Jssor Slider-->
<link type="text/css" rel="stylesheet" href="../css/jssor.css">
<!-- <script type="text/javascript" src="../js/jssor.js"></script> -->
<!-- <script type="text/javascript" src="../js/jssor.slider.js"></script> -->
<script type="text/javascript" src="../js/html5gallery.js"></script>

<!--Responsive Nav-->
<link type="text/css" rel="stylesheet" href="../css/responsive-nav.css">
<link type="text/css" rel="stylesheet" href="../css/responsive-nav-styles.css">
<script type="text/javascript" src="../js/responsive-nav.js"></script>
<link href="../css/tabstyle.css" rel="stylesheet" type="text/css" />
<!--<script src="../js/jquery-1.9.1.min.js"></script>-->
<script src="../js/jquery-ui.js"></script>
<!--Iframe Responsive-->
<script type="text/javascript" src="../js/jquery.responsiveiframe.js"></script>
<!--PKL-->
<script type="text/javascript" src="../js/js.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
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
    <h1>Phản Hồi Của Khách Hàng</h1>
</div>
<style type="text/css">
#center{ margin-left:350px;}
#text{height:28px; width:450px; background-color:#ECECEC; margin-top:7px; margin-bottom:5px; text-align:justify}
#text1{height:130px; width:450px; background-color:#ECECEC; margin-top:7px;margin-bottom:5px; text-align:justify}
@media only screen and (min-width: 320px) and (max-width: 991px)
{#center{ margin-left:0;padding: 5px;}
#text,#text1{width: 100%;}
}
</style>
<div id="page-content" class="container-fluid" style="align-items: center">
    <div class="row col-lg-offset-1">
        <div>
        	<p>Cám ơn quý khách dành thời gian viết phản hồi cho chúng tôi. <br/>
Biệt Thự Lê Hoàng và Cộng Sự chúc quý khách luôn mạnh khỏe và giữ mãi nụ cười hạnh phúc.</p>
		</div>

        <div>
        <?php
				// if there are any errors, display them
				if ($error != '') {
					echo '<div style="padding:4px; border:1px solid red; color:red;">' . $error . '</div>';
				}
				
				//print_r($_SESSION);
				
			?>
			<p align="center"><?php echo $feedback;?></p>
        	<form action="?" method="post" >
            	
            	<div id="center">
                	<label for="name"> Họ Tên</label><br/>
                    <input type="text" id="text" name="name" width="300" required="required">
                </div>
                <div id="center">
                	<label for="sdt"> Sdt</label><br/>
                    <input type="text" id="text" name="sdt" required="required">
                </div>
                <div id="center">
                	<label for="email"> Email</label><br/>
                    <input type="email" id="text" name="email" required="required">
                </div>
                <div id="center">
                	<label for="date"> Ngày Phản Hồi</label><br/>
                    <input type="date" id="text" name="date" required="required">
                </div>
                
                <div id="center">
                	<label for="message"> Nội Dung Phản Hồi</label><br/>
                    <input type="text" id="text1" name="message" required="required">
                </div>
                
                <div id="center">
                
                    <input type="submit" name="submit">
                </div><br/><br/>
                
            </form>
    
            
        </div>

		<h2>
			PHẢN HỒI TỪ KHÁCH HÀNG:
		</h2>
		<?php
		include 'PhanHoiDB.php';
		$db = new PhanHoiDB();
		$db->OpenConnection();
		if ($db->SearchEntryComment()) {
			echo "Sự kiện đang được cập nhật.";
		} else {

			while ($row = mysql_fetch_array($db->query)) {
				$username = $row['comment_username'];
				$content = $row['comment_content'];
				$content = $row['comment_datetime'];
				echo "<div id='phanhoi' class='col-lg-10' style='text-align: left'>
                        <h4>
                        ".$row['comment_username']."                        </h4>
                        <h5>
                        ".$row['comment_datetime']."
                        </h5>
                        <i style='font-size: 14px'>".$row['comment_content']."</i><br>


                    </div>";
			}
		}
		?>
    </div>

</div>
<?php

	include_once 'right-side.php';

	?>
<?php
include 'footer_sub.php';
?>
</body>
</html>
<?php
}
                 // Database Variables (edit with your own server information)
                 $server = 'localhost';
                 $user = 'bietthuleh_dba';
                 $pass = 'zxcVBN123';
                 $db = 'bietthuleh_db';
                 
                 // Connect to Database
                 $connection = mysql_connect ( $server, $user, $pass ) or die ( "Could not connect to server ... \n" . mysql_error () );
                 mysql_query("set names 'utf8'");
                 mysql_select_db ( $db ) or die ( "Could not connect to database ... \n" . mysql_error () );
                 

					mysql_query ( "SELECT * from tbl_comment");
					
					// check if the form has been submitted. If it has, start to process the form and save it to the database
					if (isset ( $_POST ['submit'] )) {
						
						$comment_id = '';
						$sql1 = mysql_query ( "SELECT * FROM tbl_comment ORDER BY comment_id DESC LIMIT 1" );
						if (mysql_num_rows ( $sql1 ) > 0)
						{
							while ( $row = mysql_fetch_row ( $sql1 ) )
							{
								$comment_id = isset($row [0]) ? ($row [0] + 1) : '1';
							}
						}
						// get form data, making sure it is valid
						$name = mysql_real_escape_string ( htmlspecialchars ($_POST ["name"]));;
						$sdt = mysql_real_escape_string ( htmlspecialchars ($_POST ["sdt"]));
						$email = mysql_real_escape_string ( htmlspecialchars ($_POST ["email"]));
						$date = mysql_real_escape_string ( htmlspecialchars ($_POST ["date"]));
						$message = mysql_real_escape_string ( htmlspecialchars ($_POST ["message"]));
						$isActivated = 0;
						// check to make sure both fields are entered
						if ($name == '' || $sdt == '' || $email == '' || $date == '' || $message == '') {
							// generate error message
							$error = 'ERROR: Please fill in all required fields!';
					
							// if either field is blank, display the form again
							renderForm($name, $sdt, $email, $date, $message, $error);
						} else {
							// save the data to the database
							mysql_query ( "INSERT tbl_comment SET comment_id='$comment_id', comment_content='$message', comment_username='$name', comment_phoneno='$sdt', comment_email='$email', comment_datetime='$date', comment_status='$isActivated'" ) or die ( mysql_error () );
					
							// once saved, redirect back to the view page
							header ( "Location: index.php" );
						}
					} else// if the form hasn't been submitted, display the form
					{
						renderForm ( '', '', '', '', '', '' );
					}
				?>
