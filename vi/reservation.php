<?php
ob_start ();
session_start ();
?>
<? ob_flush();?>
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
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/jquery-ui.js"></script>
<link rel="stylesheet" href="../css/jquery-ui.css">
<link rel="stylesheet" href="../css/style_reservation.css">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
			<div class="" style="height: 50px"></div>
			<div class="search" style="background-color: #fff">
            <?php
												$db = mysql_connect ( "localhost", "root", "" );
												mysql_query ( "set names 'utf8'" );
												mysql_select_db ( "lehoangadm_dlvilla" );
												?>
                            <form class="availForm center"
					id="change_dates" action="reservation.php" method="POST">
					<div class="search_wrapper">
						<div class="search_dates_arrival">
							<label>CHECK IN:</label> <input type="date" name="date_arrival"
								id="datepicker1" />
						</div>
						<div class="search_dates_departure">
							<label>CHECK OUT:</label> <input type="date"
								name="date_departure" id="datepicker2" />
						</div>
						<div class="search_guests">
							<label>Khách:</label> <select id="guests_adults" name="adults"
								class="glyphicon glyphicon-chevron-down">
								<option selected value="1">01 Người Lớn</option>
								<option value="2">02 Người Lớn</option>
								<option value="3">03 Người Lớn</option>
								<option value="4">04 Người Lớn</option>
								<option value="5">05 Người Lớn</option>
								<option value="6">06 Người Lớn</option>
								<option value="7">07 Người Lớn</option>
								<option value="8">08 Người Lớn</option>
								<option value="9">09 Người Lớn</option>
								<option value="10">10 Người Lớn</option>
								<option value="11">11 Người Lớn</option>
								<option value="12">12 Người Lớn</option>
								<option value="13">13 Người Lớn</option>
								<option value="14">14 Người Lớn</option>
								<option value="15">15 Người Lớn</option>
								<option value="16">16 Người Lớn</option>
								<option value="17">17 Người Lớn</option>
								<option value="18">18 Người Lớn</option>
							</select> <select name="children" id="guests_children"
								class="glyphicon glyphicon-chevron-down">

								<option selected value="0">00 Trẻ Em</option>
								<option value="1">01 Trẻ Em</option>
								<option value="2">02 Trẻ Em</option>
								<option value="3">03 Trẻ Em</option>
								<option value="4">04 Trẻ Em</option>
								<option value="5">05 Trẻ Em</option>
								<option value="6">06 Trẻ Em</option>
								<option value="7">07 Trẻ Em</option>
								<option value="8">08 Trẻ Em</option>
								<option value="9">09 Trẻ Em</option>
								<option value="10">10 Trẻ Em</option>
							</select>

						</div>
						<table class="table" style="color:; text-align: left;">
							<thead>
								<tr style="color: blue">
									<th></th>
									<th></th>
									<th>Ngày Thường</th>
									<th>Ngày Lễ</th>
								</tr>
							</thead>
							<tbody style="font-weight:">
								<tr class="success">
									<td width="" style="vertical-align: middle;"><input
										type="checkbox" name="check_list[]" value="Superior"> Superior</td>

									<td style="vertical-align: middle; text-align: center;"><img
										src="http://bietthulehoang.com/images/gallery/gallery09/img0901.jpg"
										width="200px" /><br /> <input type="button" class=""
										data-toggle="modal" name="myModal1" value="Xem thêm"
										style="width: 200px" data-target="#myModal1" /> <!-- Modal -->

										<div id="myModal1" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Phòng Superior</h4>
													</div>
													<div class="modal-body">
														<?php include_once 'show_superior.php';?>
														<h3>Đặc Điểm Phòng</h3>
														<div
															class="col-lg-10 col-lg-offset-3 col-md-10 col-md-offset-3 col-sm-12 col-xs-12"
															style="text-align: left; margin-left: 20px; color: blue">
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Diện tích: 15m2 - 17m2
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Giường King 1m6 x 2m
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> 2 phòng dùng chung 1 toilet
																bên ngoài
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> View hướng phố
															</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="" data-dismiss="modal">Close</button>
														</div>
													</div>

												</div>
											</div></td>

									<td style="vertical-align: middle;">800.000 VND</td>
									<td style="vertical-align: middle;">1.050.000 VND</td>
								</tr>
								<tr class="info">
									<td width="" style="vertical-align: middle;"><input
										type="checkbox" name="check_list[]" value="Deluxe 1"> Phòng
										Deluxe #1</td>
									<td style="vertical-align: middle; text-align: center;"><img
										src="http://bietthulehoang.com/images/gallery/gallery08/img0801.jpg"
										width="200px" /><br />
										<button type="button" class="" data-toggle="modal"
											style="width: 200px" name="myModal2" data-target="#myModal2">Xem
											thêm</button> <!-- Modal -->

										<div id="myModal2" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Phòng Deluxe #1</h4>
													</div>
													<div class="modal-body">
														<?php include_once 'show_deluxe1.php';?>
														<h3>Đặc Điểm Phòng</h3>
														<div
															class="col-lg-10 col-lg-offset-3 col-md-10 col-md-offset-3 col-sm-12 col-xs-12"
															style="text-align: left; margin-left: 20px; color: blue">
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Diện tích: 25m2 - 27m2
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Giường King 1m6 x 2m
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Toilet riêng trong phòng
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Có cửa sổ, ban công
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Toilet riêng trong phòng
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> View hướng phố
															</p>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="" data-dismiss="modal">Close</button>
													</div>
												</div>

											</div>
										</div></td>

									<td style="vertical-align: middle;">1.250.000 VND</td>
									<td style="vertical-align: middle;">1.600.000 VND</td>
								</tr>
								<tr class="info">
									<td width="" style="vertical-align: middle;"><input
										type="checkbox" name="check_list[]" value="Deluxe 2"> Phòng
										Deluxe #2</td>
									<td style="vertical-align: middle; text-align: center;"><img
										src="http://bietthulehoang.com/images/gallery/gallery09/img0904.jpg"
										width="200px" /><br />
										<button type="button" class="" data-toggle="modal"
											style="width: 200px" name="myModal3" data-target="#myModal3">Xem
											thêm</button> <!-- Modal -->

										<div id="myModal3" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Phòng Deluxe #2</h4>
													</div>
													<div class="modal-body">
														<?php include_once 'show_deluxe2.php';?>
														<h3>Đặc Điểm Phòng</h3>
														<div
															class="col-lg-10 col-lg-offset-3 col-md-10 col-md-offset-3 col-sm-12 col-xs-12"
															style="text-align: left; margin-left: 20px; color: blue">
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Diện tích: 25m2 - 27m2
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Giường King 1m6 x 2m
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Toilet riêng trong phòng
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Có cửa sổ, ban công
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Toilet riêng trong phòng
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> View hướng phố
															</p>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="" data-dismiss="modal">Close</button>
													</div>
												</div>

											</div>
										</div></td>

									<td style="vertical-align: middle;">1.250.000 VND</td>
									<td style="vertical-align: middle;">1.600.000 VND</td>
								</tr>
								<tr class="info">
									<td width="" style="vertical-align: middle;"><input
										type="checkbox" name="check_list[]" value="Deluxe 3"> Phòng
										Deluxe #3</td>
									<td style="vertical-align: middle; text-align: center;"><img
										src="http://bietthulehoang.com/images/gallery/gallery10/img1001.jpg"
										width="200px" /><br />
										<button type="button" class="" data-toggle="modal"
											style="width: 200px" name="myModal4" data-target="#myModal4">Xem
											thêm</button> <!-- Modal -->

										<div id="myModal4" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Phòng Deluxe #3</h4>
													</div>
													<div class="modal-body">
														<?php include_once 'show_deluxe3.php';?>
														<h3>Đặc Điểm Phòng</h3>
														<div
															class="col-lg-10 col-lg-offset-3 col-md-10 col-md-offset-3 col-sm-12 col-xs-12"
															style="text-align: left; margin-left: 20px; color: blue">
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Diện tích: 25m2 - 27m2
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Giường King 1m6 x 2m
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Toilet riêng trong phòng
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Có cửa sổ, ban công
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Toilet riêng trong phòng
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> View hướng phố
															</p>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="" data-dismiss="modal">Close</button>
													</div>
												</div>

											</div>
										</div></td>

									<td style="vertical-align: middle;">1.250.000 VND</td>
									<td style="vertical-align: middle;">1.600.000 VND</td>
								</tr>
								<tr class="info">
									<td width="" style="vertical-align: middle;"><input
										type="checkbox" name="check_list[]" value="Deluxe 4"> Phòng
										Deluxe #4</td>
									<td style="vertical-align: middle; text-align: center;"><img
										src="http://bietthulehoang.com/images/gallery/gallery11/img1102.jpg"
										width="200px" /><br />
										<button type="button" class="" data-toggle="modal"
											style="width: 200px" name="myModal5" data-target="#myModal5">Xem
											thêm</button> <!-- Modal -->

										<div id="myModal5" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Phòng Deluxe #4</h4>
													</div>
													<div class="modal-body">
														<?php include_once 'show_deluxe4.php';?>
														<h3>Đặc Điểm Phòng</h3>
														<div
															class="col-lg-10 col-lg-offset-3 col-md-10 col-md-offset-3 col-sm-12 col-xs-12"
															style="text-align: left; margin-left: 20px; color: blue">
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Diện tích: 25m2 - 27m2
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Giường King 1m6 x 2m
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Toilet riêng trong phòng
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Có cửa sổ, ban công
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Toilet riêng trong phòng
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> View hướng phố
															</p>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="" data-dismiss="modal">Close</button>
													</div>
												</div>

											</div>
										</div></td>

									<td style="vertical-align: middle;">1.250.000 VND</td>
									<td style="vertical-align: middle;">1.600.000 VND</td>
								</tr>
								<tr class="info">
									<td width="" style="vertical-align: middle;"><input
										type="checkbox" name="check_list[]" value="Deluxe 5"> Phòng
										Deluxe #5</td>
									<td style="vertical-align: middle; text-align: center;"><img
										src="http://bietthulehoang.com/images/gallery/gallery12/img1201.jpg"
										width="200px" /><br />
										<button type="button" class="" data-toggle="modal"
											style="width: 200px" name="myModal6" data-target="#myModal6">Xem
											thêm</button> <!-- Modal -->

										<div id="myModal6" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Phòng Deluxe #5</h4>
													</div>
													<div class="modal-body">
														<?php include_once 'show_deluxe5.php';?>
														<h3>Đặc Điểm Phòng</h3>
														<div
															class="col-lg-10 col-lg-offset-3 col-md-10 col-md-offset-3 col-sm-12 col-xs-12"
															style="text-align: left; margin-left: 20px; color: blue">
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Diện tích: 25m2 - 27m2
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Giường King 1m6 x 2m
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Toilet riêng trong phòng
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Có cửa sổ, ban công
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Toilet riêng trong phòng
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> View hướng phố
															</p>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="" data-dismiss="modal">Close</button>
													</div>
												</div>

											</div>
										</div></td>

									<td style="vertical-align: middle;">1.250.000 VND</td>
									<td style="vertical-align: middle;">1.600.000 VND</td>
								</tr>
								<tr class="warning">
									<td width="" style="vertical-align: middle;"><input
										type="checkbox" name="check_list[]" value="Junior Suite">
										Junior Suite</td>
									<td style="vertical-align: middle; text-align: center;"><img
										src="http://bietthulehoang.com/images/gallery/gallery07/img0701.jpg"
										width="200px" /><br />
										<button type="button" class="" data-toggle="modal"
											style="width: 200px" data-target="#myModal7">Xem thêm</button>
										<!-- Modal -->
										<div id="myModal7" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Phòng Junior Suite</h4>
													</div>
													<div class="modal-body">
													<?php include_once 'show_juniorsuite.php';?>
													<h3>Đặc Điểm Phòng</h3>
														<div
															class="col-lg-10 col-lg-offset-3 col-md-10 col-md-offset-3 col-sm-12 col-xs-12"
															style="text-align: left; margin-left: 20px; color: blue">
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Diện tích: 38m2
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Giường Super King 2m x 2m
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Toilet riêng trong phòng
																hướng thiên nhiên
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Phòng thay đồ
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Có cửa sổ, ban công
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> View hướng phố
															</p>
															<p>
																<span class="glyphicon glyphicon-star"
																	aria-hidden="true"></span> Sàn lát gỗ
															</p>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="" data-dismiss="modal">Close</button>
													</div>
												</div>

											</div>
										</div></td>

									<td style="vertical-align: middle;">1.600.000 VND</td>
									<td style="vertical-align: middle;">2.000.000 VND</td>
								</tr>
								<tr class="danger">
									<td width="" style="vertical-align: middle;"><input
										type="checkbox" name="check_list[]" value="Villa"> Villa</td>
									<td style="vertical-align: middle; text-align: center;"><img
										src="http://bietthulehoang.com/images/gallery/gallery01/img0101.jpg"
										width="200px" /><br />
										<button type="button" class="" data-toggle="modal"
											style="width: 200px" data-target="#myModal8">Xem thêm</button>
										<!-- Modal -->
										<div id="myModal8" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Villa</h4>
													</div>
													<div class="modal-body">
													<?php include_once 'show_villa.php';?>
													</div>
													<div class="modal-footer">
														<button type="button" class="" data-dismiss="modal">Close</button>
													</div>
												</div>

											</div>
										</div></td>

									<td style="vertical-align: middle;">9.450.000 VND</td>
									<td style="vertical-align: middle;">12.100.000 VND</td>
								</tr>
								<tr class="danger">
									<td width="" style="vertical-align: middle;"><input
										type="checkbox" name="check_list[]" value="Extra person"> Extra person</td>
									<td style="vertical-align: middle; text-align: center;"></td>

									<td style="vertical-align: middle;">150.000 VND</td>
									<td style="vertical-align: middle;">150.000 VND</td>
								</tr>
								<tr class="danger">
									<td width="" style="vertical-align: middle;"><input
										type="checkbox" name="check_list[]" value="Extra bed"> Extra bed</td>
									<td style="vertical-align: middle; text-align: center;"></td>

									<td style="vertical-align: middle;">300.000 VND</td>
									<td style="vertical-align: middle;">300.000 VND</td>
								</tr>
							</tbody>
						</table>
						<div class="search_wrapper button">
							<input class="btn search-btn" type="submit" name="submit"
								value="  NEXT  ">
						</div>
					</div>
				</form>
                <?php
																if (isset ( $_POST ['submit'] )) {
																	
																	if ($_POST ["date_arrival"] == '' || $_POST ["date_departure"] == '' || $_POST ["adults"] == '' || $_POST ["children"] == '') {
																	} else {
																		$_SESSION ["date_arrival"] = $_POST ["date_arrival"];
																		$_SESSION ["date_departure"] = $_POST ["date_departure"];
																		$_SESSION ["adults"] = $_POST ["adults"];
																		$_SESSION ["children"] = $_POST ["children"];
																		
																		$roomtype = '';
																		// Xử lý list check box
																		// START ==>
																		if (! empty ( $_POST ['check_list'] )) {
																			// Counting number of checked checkboxes.
																			$checked_count = count ( $_POST ['check_list'] );
																			echo "You have selected following " . $checked_count . " option(s): <br/>";
																			// Loop to store and display values of individual checked checkbox.
																			foreach ( $_POST ['check_list'] as $selected ) {
																				echo "<p>" . $selected . "</p>";
																				$roomtype .= $selected;
																			}
																			echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
																		} else {
																			echo "<b>Please Select At least One Option.</b>";
																		}
																		// <== END
																		$_SESSION ["roomtype"] = $roomtype;
																		header ( "location:reservation_next.php?date_arrival=" . $_SESSION ["date_arrival"] . "&date_departure=" . $_SESSION ["date_departure"] . "&adults=" . $_SESSION ["adults"] . "&children=" . $_SESSION ["children"] . "&roomtype=" . $roomtype . "" );
																	}
																}
																?>
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
