<?php
include_once 'main-page-top.php';
?>
<div id="slogan">
    <h2>Những Bài Hát Hay Về Đà Lạt</h2>
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
                            title: "Nhớ Dalat - những bài hát hay nhất",
                            youtubeID: "mTVjaCdK3FA",
                            description: "Nhớ Dalat - những bài hát hay nhất",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Nhớ Dalat - những bài hát hay nhất"
                        },
                        {
                            videoType: "youtube",
                            title: "Những ca khúc hay về Dalat 1",
                            youtubeID: "jAnT7Mid7ZM",
                            description: "Những ca khúc hay về Dalat 1",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Những ca khúc hay về Dalat 1"
                        },
                        {
                            videoType: "youtube",
                            title: "Những ca khúc hay về Dalat 2",
                            youtubeID: "XjEc_AWBUaw",
                            description: "Những ca khúc hay về Dalat 2",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Những ca khúc hay về Dalat 2"
                        },
                        {
                            videoType: "youtube",
                            title: "Đồi thông hai mộ",
                            youtubeID: "297_cDQDsls",
                            description: "Đồi thông hai mộ",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Đồi thông hai mộ"
                        },
                        {
                            videoType: "youtube",
                            title: "Đồi thông hai mộ",
                            youtubeID: "AyvMbE1iljE",
                            description: "Ca sĩ: Giao Linh",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Đồi thông hai mộ"
                        },
                        {
                            videoType: "youtube",
                            title: "Dalat hoàng hôn",
                            youtubeID: "Q_4j9uvVkmY",
                            description: "Tuấn Vũ",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Dalat hoàng hôn"
                        },
                        {
                            videoType: "youtube",
                            title: "Em có về Dalat không em",
                            youtubeID: "cFiJRjqNfFE",
                            description: "Em có về Dalat không em",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Em có về Dalat không em"
                        },
                        {
                            videoType: "youtube",
                            title: "Dalat trong niềm nhớ",
                            youtubeID: "d7b4XCGlhVc",
                            description: "Dalat trong niềm nhớ",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Dalat trong niềm nhớ"
                        },
                        {
                            videoType: "youtube",
                            title: "Dalat mưa chiều kỷ niệm",
                            youtubeID: "WtMS6-z2HZU",
                            description: "Dalat mưa chiều kỷ niệm",
                            thumbImg: "../video_scripts/images/thumbnail_images/pic3.jpg",
                            info: "Dalat mưa chiều kỷ niệm"
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
    <?php
    include_once 'right-side.php';
    ?>
</div>
<?php
include_once 'footer_sub.php';
?>
</body>
</html>
