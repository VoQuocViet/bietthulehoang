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
   Kinh Nghiệm Du lịch Đà Lạt từ A đến Z | Tin tức Đà Lạt</title>
<!-- <base href="http://bietthulehoang.com/vi/" extention=".php" /> -->
<!--============= Mobile Specific Metas =============== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="google-site-verification" content="9mwgXr3AkgEIeolSvfLX3OIZ3MVPpRZtV9cbnfdTkHM" />
<meta name="description" content="Trải nghiệm mới nhất về du lịch Đà Lạt với những kinh nghiệm về chỗ ở, ẩm thực, địa điểm du lịch Đà Lạt với Biệt thự Lê Hoàng. Gọi ngay: 063.3522.678" />
<meta name="keywords" content="tin tuc du lich da lat, tin tức du lịch đà lạt" />
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
    <h2>Tin Tức</h2>

</div>
<div id="page-content" class="container-fluid" style="min-height: 500px">
    <div class="row col-lg-offset-1">

        <?php
        include 'EntryDB.php';
        $db = new EntryDB();
        $db->OpenConnection();
        if ($db->SearchEntryNews()) {
            echo "Sự kiện đang được cập nhật.";
        } else {

            while ($row = mysql_fetch_array($db->query)) {
                $tomtat = substr($row['entry_content'], 0, 200);
               
                ?>
                    <div id="gioithieu" class="col-lg-10">
                        <div class="col-lg-8" style="float: right;">
                        <h3>
                         <!-- <a href ="newsdetail.php?entryid=<?php echo $row['entry_id'] ?>&tieude_khongdau=<?php echo $row['tieude_khongdau'] ?>"><?php echo $row['entry_name'] ?> </a>--> 
                        <a href ="<?php echo $row['entry_id'] ?>-<?php echo $row['tieude_khongdau'] ?>.html"><?php echo $row['entry_name'] ?> </a>
                        </h3>
                        <i style="font-size: 12px">Ngày cập nhật: <?php echo $row['entry_datetime'] ?> </i><br><br>
                        <?php echo $tomtat ?>...
                        <a class="btn btn-info" href ="<?php echo $row['entry_id'] ?>-<?php echo $row['tieude_khongdau'] ?>.html">Đọc tiếp</a>
                        </div>
                        <div class="col-lg-4">
                            <img class="feature-img img-responsive" src="../images/tintuc/<?php echo $row['entry_img'] ?>">
                        </div>
                    </div>
		<?php 
            }
        }
        ?>
    </div>
    <?php
    include_once 'right-side.php';
    ?>
</div>

<script type="text/javascript">
</script>
<?php
$db->CloseConnection();
include_once 'footer_sub.php';
?>
</body>
</html>
