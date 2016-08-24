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
    Biệt Thự Nghỉ Dưỡng Đà Lạt | Khách Sạn Đà Lạt | Đặt Phòng Đà Lạt
</title>
<!-- <base href="http://bietthulehoang.com/vi/" extention=".php" /> -->
<!--============= Mobile Specific Metas =============== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="google-site-verification" content="9mwgXr3AkgEIeolSvfLX3OIZ3MVPpRZtV9cbnfdTkHM" />
<meta name="description" content="Biệt thự nghỉ dưỡng Đà lạt nằm ngay trung tâm thành phố. Biệt thự 5 sao, giá ưu đãi, điểm đến lý tưởng cho mọi gia đình. Gọi ngay: 063 3522.678" />
<meta name="keywords" content="Biệt thự Đà Lạt, Khách sạn Đà Lạt, Đà Lạt Hotel, Đà Lạt Villa, Khách sạn trung tâm Đà Lạt, Đặt phòng Đà Lạt, Khách sạn tại Đà Lạt" />
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
    <h2>Video Clip</h2>
</div>

<div style="clear: both"></div>
<div id="page-content" class="container-fluid" align="center">
    <div class="row col-lg-10 col-lg-offset-1">
        <link rel="stylesheet" href="../video_scripts/css/videoPlayerMain.css" type="text/css">
        <link rel="stylesheet" href="../video_scripts/css/videoPlayer.theme1.css" type="text/css">
        <link rel="stylesheet" href="../video_scripts/css/videoPlayer.theme1_Playlist.css" type="text/css"
              media="screen"/>
        <link rel="stylesheet" href="../video_scripts/css/font-awesome.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
        <script src="../video_scripts/js/froogaloop.js" type="text/javascript"></script>
        <script src="../video_scripts/js/IScroll4Custom.js" type="text/javascript"></script>
        <script src='../video_scripts/js/THREEx.FullScreen.js'></script>
        <script src="../video_scripts/js/videoPlayer.js" type="text/javascript"></script>
        <script src="../video_scripts/js/Playlist.js" type="text/javascript"></script>

        <script type="text/javascript" charset="utf-8">
            $(document).ready(function ($) {
                videoPlayer = $("#video").Video({
                    autohideControls: 4,
                    videoPlayerWidth: 900,
                    videoPlayerHeight: 500,
                    playlist: "Right playlist",
                    autoplay: true,
                    vimeoColor: "F11116",
                    youtubeSkin: "dark",
                    youtubeColor: "red",
                    videoPlayerShadow:"effect1",
                    posterImg: "../video_scripts/images/preview_images/3.jpg",
                    onFinish: "Play next video",
                    nowPlayingText: "Yes",
                    fullscreen: "Fullscreen native",
                    rightClickMenu: true,
                    shareShow: "Yes",
                    facebookLink: "http://codecanyon.net/",
                    twitterLink: "http://codecanyon.net/",
                    logoShow: "Yes",
                    logoClickable: "Yes",
                    logoPath: "../video_scripts/images/logo/logo.png",
                    logoGoToLink: "http://codecanyon.net/",
                    logoPosition: "bottom-right",
                    embedShow: "Yes",
                    embedCodeSrc: "www.yourwebsite.com/player/index.html",
                    embedCodeW: "900",
                    embedCodeH: "500",
                    videos: [
                        {
                            videoType: "youtube",
                            title: "Danh lam thắng cảnh Dalat",
                            youtubeID: "fDcLnk8j494",
//                            vimeoID: "46515976",
//                            mp4: "http://player.pageflip.com.hr/videos/Big_Buck_Bunny_Trailer.mp4",
//                            webm: "http://player.pageflip.com.hr/videos/Big_Buck_Bunny_Trailer.webm",
//                    videoAdShow:"yes",
//                    videoAdGotoLink:"http://codecanyon.net/",
//                    mp4AD:"http://player.pageflip.com.hr/videos/Sintel_Trailer.mp4",
//                    webmAD:"http://player.pageflip.com.hr/videos/Sintel_Trailer.webm",
                            description: "Danh lam thắng cảnh Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Danh lam thắng cảnh Dalat"
                        },
                        {
                            videoType: "youtube",
                            title: "Thông tin cần biết về Dalat",
                            youtubeID: "dIoFlNoo3U8",
                            description: "Thông tin cần biết về Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Thông tin cần biết về Dalat"
                        },
                        {
                            videoType: "youtube",
                            title: "Dalat travel guide - Introduction",
                            youtubeID: "9ykOAHwKCZU",
                            description: "Dalat travel guide - Introduction",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Dalat travel guide - Introduction"
                        },
                        {
                            videoType: "youtube",
                            title: "Dalat xưa và nay",
                            youtubeID: "6H9tPgXzC_k",
                            description: "Dalat xưa và nay",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Dalat xưa và nay"
                        },
                        {
                            videoType: "youtube",
                            title: "Dalat xưa",
                            youtubeID: "rYhsYwAIOuI",
                            description: "Dalat xưa",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Dalat xưa"
                        },
                        {
                            videoType: "youtube",
                            title: "Dalat ngày cũ",
                            youtubeID: "gdV4bHvV1JI",
                            description: "Dalat ngày cũ",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Dalat ngày cũ"
                        },
                        {
                            videoType: "youtube",
                            title: "Những hình ảnh Dalat xưa",
                            youtubeID: "iUxPVPB_T2Y",
                            description: "Những hình ảnh Dalat xưa",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Những hình ảnh Dalat xưa"
                        },
                        {
                            videoType: "youtube",
                            title: "Kinh nghiệm du lịch Dalat",
                            youtubeID: "j8u0OKLJRHQ",
                            description: "Kinh nghiệm du lịch Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Kinh nghiệm du lịch Dalat"
                        },
                        {
                            videoType: "youtube",
                            title: "Ngắm cảnh Dalat",
                            youtubeID: "Xp-K_bbr9y0",
                            description: "Ngắm cảnh Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Ngắm cảnh Dalat"
                        },
                        {
                            videoType: "youtube",
                            title: "Dalat mưa bay",
                            youtubeID: "CZZfjjbW1Qg",
                            description: "Dalat mưa bay",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Dalat mưa bay "
                        },
                        {
                            videoType: "youtube",
                            title: "Thung lũng Tình yêu",
                            youtubeID: "QgbkUKONcgc",
                            description: "Thung lũng Tình yêu",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Thung lũng Tình yêu"
                        },
                        {
                            videoType: "youtube",
                            title: "Núi Lang Biang Dalat",
                            youtubeID: "QhtIHsuJDcg",
                            description: "Núi Lang Biang Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Núi Lang Biang Dalat"
                        },
                        {
                            videoType: "youtube",
                            title: "Đồi mộng mơ",
                            youtubeID: "TiCCKmuHOWc",
                            description: "Đồi mộng mơ",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Đồi mộng mơ"
                        },
                        {
                            videoType: "youtube",
                            title: "Hoa Anh đào Dalat",
                            youtubeID: "QcrmgGghlZU",
                            description: "Hoa Anh đào Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Hoa Anh đào Dalat"
                        },
                        {
                            videoType: "youtube",
                            title: "Dalat hoa Mimosa",
                            youtubeID: "VqEoslR4y6s",
                            description: "Dalat hoa Mimosa",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Dalat hoa Mimosa"
                        },
                        {
                            videoType: "youtube",
                            title: "Hoa Mimosa Dalat",
                            youtubeID: "9UZaNHw1Tcs",
                            description: "Hoa Mimosa Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Hoa Mimosa Dalat"
                        },
                        {
                            videoType: "youtube",
                            title: "Bí ẩn ngôi nhà ma ở Dalat",
                            youtubeID: "sNC-sG4h03c",
                            description: "Bí ẩn ngôi nhà ma ở Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Bí ẩn ngôi nhà ma ở Dalat"
                        },
                        {
                            videoType: "youtube",
                            title: "Kỳ lạ về bàn gỗ tự xoay ở Dalat",
                            youtubeID: "tq7s7ZcQlII",
                            description: "Kỳ lạ về bàn gỗ tự xoay ở Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Kỳ lạ về bàn gỗ tự xoay ở Dalat"
                        },
                        {
                            videoType: "youtube",
                            title: "Thác Cam ly Dalat",
                            youtubeID: "IomCbc9hhqA",
                            description: "Thác Cam ly Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Thác Cam ly Dalat"
                        },
                        {
                            videoType: "youtube",
                            title: "Hồ Than thở Dalat",
                            youtubeID: "s0JxMfHwSI8",
                            description: "Hồ Than thở Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Hồ Than thở Dalat"
                        },
                        {
                            videoType: "youtube",
                            title: "Hồ Xuân Hương",
                            youtubeID: "p4Q3ntlwN6E",
                            description: "Hồ Xuân Hương",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Hồ Xuân Hương"
                        },
                        {
                            videoType: "youtube",
                            title: "Hồ Xuân hương - sáng sớm tinh mơ",
                            youtubeID: "47VtROxU2P4",
                            description: "Hồ Xuân hương - sáng sớm tinh mơ",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Hồ Xuân hương - sáng sớm tinh mơ"
                        },
                        {
                            videoType: "youtube",
                            title: "Làng Cù lần",
                            youtubeID: "iZFEQjDity0",
                            description: "Làng Cù lần",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Làng Cù lần"
                        },
                        {
                            videoType: "youtube",
                            title: "Đường hầm đất sét ở Dalat",
                            youtubeID: "rMVCgpRqQv4",
                            description: "Đường hầm đất sét ở Dalat",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Đường hầm đất sét ở Dalat"
                        }
                    ]
                });
            });

        </script>
        <style>
            .embed-container {
                position: relative;
                padding-bottom: 56.25%;
                height: 0;
                overflow: hidden;
                max-width: 100%;
            }

            .embed-container iframe, .embed-container object, .embed-container embed {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
        <div class='embed-container'>
            <br/>
            <div id="video"></div>
        </div>
    </div>
</div>
<?php
include_once 'right-side.php';
include_once 'bottom-side.php';
include_once 'footer_sub.php';
?>
</body>
</html>
