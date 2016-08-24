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
function renderForm($client_name, $client_address, $client_phone, $client_email, $date_checkin, $date_checkout, $adults_count, $children_count, $roomtype, $client_note, $error) {
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
<meta charset="UTF-8" de />
<title>Biệt Thự Nghỉ Dưỡng Đà Lạt | Khách Sạn Đà Lạt | Đặt Phòng Đà Lạt
</title>
<!-- <base href="http://bietthulehoang.com/vi/" extention=".php" /> -->
<!--============= Mobile Specific Metas =============== -->
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="google-site-verification"
	content="9mwgXr3AkgEIeolSvfLX3OIZ3MVPpRZtV9cbnfdTkHM" />
<meta name="description"
	content="Biệt thự nghỉ dưỡng Lê Hoàng đem đến cho gia đình bạn những phút giây bên nhau GẮN KẾT YÊU THƯƠNG – NÂNG TẦM HẠNH PHÚC." />
<meta name="keywords"
	content="Biệt thự Đà Lạt, Khách sạn Đà Lạt, Đà Lạt Hotel, Đà Lạt Villa, Khách sạn trung tâm Đà Lạt, Đặt phòng Đà Lạt, Khách sạn tại Đà Lạt" />
<meta name="dc.language" content="vi-VN" />
<meta name="geo.region" content="VN-35" />
<meta name="geo.placename" content="Dalat" />
<meta name="geo.position" content="11.941244;108.451844" />
<meta name="ICBM" content="11.941244, 108.451844" />
<meta name="robots" content="index, follow" />
<link href="http://bietthulehoang.com/images/logo4.png" rel="icon" />
<!--CSS Reser-->
<link rel="stylesheet"
	href="//normalize-css.googlecode.com/svn/trunk/normalize.css"
	type="text/css" />
<link rel="stylesheet" type="text/css"
	href="http://bietthulehoang.com/css/style-reset.css">
<!--BootStrap-->
<link rel="stylesheet" type="text/css"
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript"
	src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!--JS Reset-->
<script type="javascript"
	src="http://bietthulehoang.com/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css"
	href="http://bietthulehoang.com/css/flexslider.css">
<script type="text/javascript"
	src="http://bietthulehoang.com/js/jquery.flexslider.js"></script>
<link type="text/css" rel="stylesheet"
	href="http://bietthulehoang.com/css/jssor.css">
<script type="text/javascript"
	src="http://bietthulehoang.com/js/jssor.js"></script>
<script type="text/javascript"
	src="http://bietthulehoang.com/js/jssor.slider.js"></script>
<script type="text/javascript"
	src="http://bietthulehoang.com/js/html5gallery.js"></script>
<link type="text/css" rel="stylesheet"
	href="http://bietthulehoang.com/css/responsive-nav.css">
<link type="text/css" rel="stylesheet"
	href="http://bietthulehoang.com/css/responsive-nav-styles.css">
<script type="text/javascript"
	src="http://bietthulehoang.com/js/responsive-nav.js"></script>
<link href="http://bietthulehoang.com/css/tabstyle.css" rel="stylesheet"
	type="text/css" />
<script type="text/javascript"
	src="http://bietthulehoang.com/js/jquery.responsiveiframe.js"></script>
<script type="text/javascript" src="http://bietthulehoang.com/js/js.js"></script>
<link rel="stylesheet" type="text/css"
	href="http://bietthulehoang.com/css/style.css">
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/jquery-ui.js"></script>
<link rel="stylesheet" href="../css/jquery-ui.css">
<link rel="stylesheet" href="../css/style_reservation.css">
</head>
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
		<h1>ĐẶT PHÒNG ONLINE</h1>
	</div>
	<div id="" class="container">
		<div
			class="row row_no_margin row_no_padding col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
			<div class="" style="height: 50px">
			<?php
				// if there are any errors, display them
				if ($error != '') {
					echo '<div style="padding:4px; border:1px solid red; color:red;">' . $error . '</div>';
				}
				
				//print_r($_SESSION);
				
			?> 
			</div>
                        
			<div class="search">
				<form class="availForm center" id="change_dates"
					action="reservation_next.php" method="post">
					<div class="search_wrapper">
						<table class="table">
							<!-- 							    <thead> -->
							<!-- <tr style="color: blue">  -->
							<!-- 							        <th> </th> -->
							<!-- 							        <th>Ngày Thường</th> -->
							<!-- 							        <th>Ngày Lễ</th> -->
							<!-- 							      </tr> -->
							<!-- 							    </thead> -->
							<tbody>
								<tr>
									<td>Họ Tên Khách Hàng:</td>
									<td><input type="text" name="client_name" placeholder="Enter your name" value="<?php echo $client_name; ?>"/></td>
								</tr>
								<tr>
									<td>Địa Chỉ:</td>
									<td><input type="text" name="client_address" placeholder="Enter your address" value="<?php echo $client_address; ?>"/></td>
								</tr>
								<tr>
									<td>Điện thoại:</td>
									<td><input type="text" name="client_phone" placeholder="Enter your phone number" value="<?php echo $client_phone; ?>"/></td>
								</tr>
								<tr>
									<td>Email:</td>
									<td><input type="text" name="client_email" placeholder="Enter your email" value="<?php echo $client_email; ?>"/></td>
								</tr>
								<tr>
									<td>Ghi chú:</td>
									<td><textarea type="text" name="client_note" placeholder="Enter your note"> <?php echo $client_note; ?></textarea></td>
								</tr>
							</tbody>
						</table>
						<div class="search_wrapper button">
							<input class="btn search-btn" name="submit" type="submit" value="FINISH">
						</div>
					</div>
				</form>
                 
			</div>
			<div class="" style="height: 150px"></div>
		</div>
		<script type="text/javascript" src="../js/scripts_reservation.js"></script>
	</div>
	</div>
	
	<?php
include_once 'right-side.php';
include_once 'bottom-side.php';
include_once 'footer_sub.php';
?>
</body>
</html>

<?php } ?>
<?php
                 // Database Variables (edit with your own server information)
                 $server = 'localhost';
                 $user = 'bietthuleh_dba';
                 $pass = 'zxcVBN123';
                 $db = 'bietthuleh_db';
                 
                 // Connect to Database
                 $connection = mysql_connect ( $server, $user, $pass ) or die ( "Could not connect to server ... \n" . mysql_error () );
                 mysql_query("set names 'utf8'");
                 mysql_select_db ( $db ) or die ( "Could not connect to database ... \n" . mysql_error () );
                 

					mysql_query ( "SELECT * from tbl_booking");
					
					// check if the form has been submitted. If it has, start to process the form and save it to the database
					if (isset ( $_POST ['submit'] )) {
						
						$booking_id = '';
						$sql1 = mysql_query ( "SELECT * FROM tbl_booking ORDER BY booking_id DESC LIMIT 1" );
						if (mysql_num_rows ( $sql1 ) > 0)
						{
							while ( $row = mysql_fetch_row ( $sql1 ) )
							{
								$booking_id = isset($row [0]) ? ($row [0] + 1) : '1';
							}
						}
						// get form data, making sure it is valid
						$client_name = mysql_real_escape_string ( htmlspecialchars ($_POST ["client_name"]));;
						$client_address = mysql_real_escape_string ( htmlspecialchars ($_POST ["client_address"]));
						$client_phone = mysql_real_escape_string ( htmlspecialchars ($_POST ["client_phone"]));
						$client_email = mysql_real_escape_string ( htmlspecialchars ($_POST ["client_email"]));
						$note = mysql_real_escape_string ( htmlspecialchars ($_POST ["client_note"]));
						
						$date_checkin = isset($_SESSION ["date_checkin"]) ? $_SESSION ["date_checkin"] : '';
						$date_checkout = isset($_SESSION ["date_checkout"]) ? $_SESSION ["date_checkout"] : '';
						$adults_count = isset($_SESSION ["adults"]) ? $_SESSION ["adults"] : '';
						$children_count = isset($_SESSION ["children"]) ? $_SESSION ["children"] : '';
						$roomtype = isset($_SESSION ["roomtype"]) ? $_SESSION ["roomtype"] : '';
					
						// check to make sure both fields are entered
						if ($client_name == '' || $client_address == '' || $client_phone == '' || $client_email == '') {
							// generate error message
							$error = 'ERROR: Please fill in all required fields!';
					
							// if either field is blank, display the form again
							renderForm($client_name, $client_address, $client_phone, $client_email, $date_checkin, $date_checkout, $adults_count, $children_count, $roomtype, $note, $error);
						} else {
							// save the data to the database
							mysql_query ( "INSERT tbl_booking SET booking_id='$booking_id', client_name='$client_name', client_address='$client_address', client_phone='$client_phone', client_email='$client_email', date_checkin='$date_checkin', date_checkout='$date_checkout', adults_count='$adults_count', children_count='$children_count', roomtype='$roomtype', note='$note'" ) or die ( mysql_error () );
					
							// SEND MAIL
							mysql_query ( "SET character set 'utf8'" );
							$to = "bietthulehoang1@gmail.com";
							$subject = '[BietThuLeHoang] V/v Dat Phong Online';
							
							$body = <<<EMAIL
									THÔNG TIN LIÊN HỆ KHÁCH HÀNG::
									Tên Người Đặt: $client_name
									Địa Chỉ: $client_address
									Số Điện Thoại: $client_phone
									Email: $client_email
					
									THÔNG TIN ĐẶT PHÒNG:
									Ngày Check-In: $date_checkin
									Ngày Check-Out: $date_checkout
									Người Lớn: $adults_count
									Trẻ Em: $children_count
									Loại Phòng: $roomtype
									Ghi Chú: $note
									
									Thanks & best regards,
									$client_name
EMAIL;
							
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type: text/html; charset=utf-8\r\nFrom: $client_email\r\nReply-to: $client_email";
							$headers .= "From: " . $client_email . "\r\n";
							
							if ($_POST)
							{
								mb_language ( 'uni' );
								mb_internal_encoding ( 'UTF-8' );
								mb_send_mail ( $to, $subject, $body, $header );
									
								$feedback = 'thank for the worthless email';
							}
							// once saved, redirect back to the view page
							header ( "Location: index.php" );
						}
					} else// if the form hasn't been submitted, display the form
					{
						renderForm ( '', '', '', '', '', '', '', '', '', '', '');
					}
					
				?>