<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top" id="top-menu">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#myNavbar">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html" id="nav-brand-left-id">Biệt Thự Lê
				Hoàng</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="index.html">Trang Chủ</a></li>
				<li><a href="biet-thu-nghi-duong-da-lat.html">Giới Thiệu</a></li>
				<li><a href="phong-biet-thu-da-lat.html">Phòng</a></li>
				<li><a href="tien-nghi-biet-thu-da-lat.html">Tiện Nghi</a></li>
				<li><a href="dich-vu-biet-thu-da-lat.html">Dịch Vụ</a></li>
				<li class="dropdown"><a class="dropdown-toggle"
					data-toggle="dropdown" href="tin-tuc-da-lat.html">Tin Tức<span
						class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span class="glyphicon glyphicon-star-empty"
								aria-hidden="true"></span> Tin Tức Khuyến Mãi</a></li>
						<li><a href="tin-tuc-da-lat.html"><span
								class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
								Tin Tức Đà Lạt</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-star-empty"
								aria-hidden="true"></span> Thắng Cảnh Đà Lạt</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-star-empty"
								aria-hidden="true"></span> Du Lịch Đà Lạt</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-star-empty"
								aria-hidden="true"></span> Ẩm Thực Đà Lạt</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-star-empty"
								aria-hidden="true"></span> Sắc Hoa Đà Lạt</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-star-empty"
								aria-hidden="true"></span> Festival Hoa Đà Lạt 2015</a></li>
					</ul></li>
				<li><a href="bang-gia-biet-thu-da-lat.html">Bảng Giá</a></li>
				<li><a href="lien-he-dat-phong-da-lat.html">Liên Hệ</a></li>
				<li class="an-ipad"><a href="dat-phong-biet-thu-da-lat.html"
					style="padding-top: 0px; padding-bottom: 0px;"><img
						class="img-responsive" src="../images/icon/book-now.gif"
						width="130px" style="margin-top: 5px;"></a></li>
				<li class="an-ipad"><a href="" style="font-size: 18px; color: #FFFFE0"><span
						class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
						090.2868.122</a></li>
				<li class="hien-ipad">
					<p style="padding: 5px;margin: 0;"><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"><img	class="img-responsive img-ipad" src="../images/icon/247-icon.png" ></a></p>
					<div id="light" class="white_content">
						<a class="colse" href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">X</a>
						<div class="hien-ipad-box1">090.2868.122</div>
						<div class="hien-ipad-box2"><a href="dat-phong-biet-thu-da-lat.html"><img class="img-responsive" src="../images/icon/book-now.gif" ></a></div>
					</div>
					<div id="fade" class="black_overlay"></div>
				</li>
			</ul>
		</div>

	</div>
</nav>
<style>
@media only screen and (min-width: 768px) and (max-width: 1024px){
	.navbar-nav>li.an-ipad {display: none;}
	.navbar-nav>li.hien-ipad{display: block !important;position: absolute;top: 0;right: 0;}
	/*.nav>li>a {padding: 10px 13px !important;}*/
	.nav>li>a{padding: 14.5px 12px !important;}
	.navbar-nav{margin: 0 -15px;}
}
.hien-ipad{display:none !important;}
.img-ipad{width: 40px;height: 40px;}
.black_overlay{
    display: none;
    position: absolute;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.50);
    z-index:1001;
    -moz-opacity: 0.8;
    opacity:.80;
    filter: alpha(opacity=80);
}
 
.white_content {
	display: none;
    position: absolute;
    top: 50px;
    right: 0;
    width: 330px;
    height: 82px;
    padding: 16px;
    background-color: white;
    z-index: 1002;
    overflow: auto;    
    background: #EEE8AA;
    border-radius: 10px 0 0 10px;
    color: red;
    font-size: x-large;
}
#light a.colse{    color: red;
    position: absolute;
    top: 0;
    right: 0;
    padding: 2px 5px;
    border-radius: 25%;
    background:rgba(247, 255, 205, 0.80);}
.hien-ipad-box1{position: absolute;top: 24px;right: 0;border: 2px solid #F90;padding: 10px;background: beige;border-radius: 5px;}
.hien-ipad-box2{position: absolute;top: 24px;left: 0;border: 2px solid #F90;border-radius: 5px;width: 160px;}
</style>