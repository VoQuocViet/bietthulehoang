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
<div style="clear: both"></div>
<div id="home-slideshow">
    <div id="home-logo" class="">
        <img src="../images/logo4.png" alt="logo4">
    </div>
    <div id="home-slider1" class="flexslider">
        <ul class="slides">
            <li>
                <img src="../images/slider/BannerSlider01.png" alt="BannerSlider01"/>

                <div class="flex-caption">
                    Biệt thự cao cấp.
                </div>
            </li>
            <li>
                <img src="../images/slider/BannerSlider02.png" alt="BannerSlider02"/>

                <div class="flex-caption">
                    <p>
                        Biệt thự nghỉ dưỡng cao cấp
                    </p>
                </div>
            </li>
            <li>
                <img src="../images/slider/BannerSlider03.png" alt="BannerSlider03"/>

                <div class="flex-caption">
                    Biệt thự nghỉ dưỡng cao cấp
                </div>
            </li>
            <li>
                <img src="../images/slider/BannerSlider04.png" alt="BannerSlider04"/>

                <div class="flex-caption">
                    Biệt thự nghỉ dưỡng cao cấp
                </div>
            </li>
            <li>
                <img src="../images/slider/BannerSlider05.png" alt="BannerSlider05"/>

                <div class="flex-caption">
                    Biệt thự nghỉ dưỡng cao cấp
                </div>
            </li>
            <li>
                <img src="../images/slider/BannerSlider06.png" alt="BannerSlider06"/>

                <div class="flex-caption">
                    Biệt thự nghỉ dưỡng cao cấp
                </div>
            </li>
        </ul>
    </div>
</div>
<div style="clear: both"></div>
<div class="container" style="backgound: #FFFEE2">
    <div style="clear: both"></div>
    <div class="col-md-8 col-md-push-2 d-home-clip" align="center">
        <br/><br/>
        <style>.embed-container {
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
            }</style>
        <div class='embed-container'>
            <iframe src='https://www.youtube.com/embed/bZief7LAmlw?rel=0&autoplay=1' frameborder='0'
                    allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="container-fluid home-showgrid">
    <div class="row col-md-10 col-md-offset-1">
        <br/><br/>

        <div class="col-sm-4 show-box " style="font-size: medium">
            <div class="">
                <div class="show-box-img">
                    <a href="bang-gia.php"><img width="150" height="150" src="../images/icon/saleIcon.jpg"
                                                  class="wp-post-image" alt="img-circle211"/></a>
                </div>
                <br/>
                <h4>
                    <a href="bang-gia.php">Khuyến Mãi</a>
                </h4>
            </div>
        </div>
        <div class="col-sm-4 show-box">
            <div class="">
                <div class="show-box-img">
                    <a href="gallery01.php">
                        <img width="150" height="150" src="../images/icon/photosIcon.png" class="wp-post-image"
                             alt="photosIcon"/></div>
                </a>
                <br/>
                <h4><a href="gallery01.php">Hình Ảnh</a></h4>
            </div>
            <div class="clear"></div>
        </div>
        <div class="col-sm-4 show-box">
            <div class="">
                <div class="show-box-img">
                    <a href="video.php">
                        <img width="150" height="150" src="../images/icon/videoIcon.png"
                             class="wp-post-image" alt="videoIcon"/></div>
                </a>
                <br/>
                <h4><a href="video.php">Video Clip</a></h4>
            </div>
            <br/><br/><br/>
        </div>
    </div>
    <div style="clear: both"></div>
    <?php
    include_once 'right-side.php';
    ?>
</div>
<?php
include_once 'footer_base.php';
?>
<!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">
    $(window).load(function () {
        $('#home-slider1').flexslider({
            animation: "fade",
            controlNav: true,
            directionNav: false,
            controlsContainer: '.flex-container'
        });
    });
</script>
</body>	
</html>
