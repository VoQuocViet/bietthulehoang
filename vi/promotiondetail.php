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
        <h2>Khuyến Mãi</h2> <br>
        
    </div>
    
    <div id="i-maincontent" class="container-fluid">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-9">
            <?php
                $identry = $_GET['entryid'];
                include 'EntryDB.php';
                $db= new EntryDB();
                $db->OpenConnection();
                $db->SearchEntryById($identry);
            
                while($row=mysql_fetch_array($db->query))
    	        {
        		  echo"<div class='post'>
                        <br>
                        <img class='feature-img img-responsive' src='../images/promotion/".$row['entry_img']."'>
                        <p>
                        <h2>".$row['entry_name']."</h2> <br>
                        <i style='font-size: 11px'>".$row['entry_datetime']." </i><br><br>
                        ".$row['entry_content']."
                        </p>
                        
                        </div>";
        	    }            
                
            
                    include 'CommentDB.php';
                    
                                                $db2= new CommentDB();
                                                $db2->OpenConnection();
                                                $db2->SearchcommentByEntryId($identry);
                                                //$db->SearchMenu();
                                               
                                                	while($row2=mysql_fetch_array($db2->query))
                                                    {
                                                        
                                                        if(isset($_SESSION['username']))
                                                        {
                                                            echo "<br/><div class='comment'><img style='width: 80px; height: 80px' src='../images/icon/user_avatar.png'/>
                                                            <p>
                                                                ".$row2['comment_username']."".$row2['comment_datetime']."<br/>
                                                                ".$row2['comment_content']."
                                                            </p></div>";
                                                        }
                                                        else
                                                        {
                                                            echo "<br/><div class='comment'><img style='width: 80px; height: 80px' src='../images/icon/user_avatar.png'/>
                                                            <p>
                                                                ".$row2['comment_username']."".$row2['comment_datetime']."<br/>
                                                                ".$row2['comment_content']."
                                                            </p></div>";
                                                        }
                                                    }
                                                
                                                

                    ?>
                
                
			<?php	if (isset($_POST['binhluan']))
            {
               
                $namecomment = addslashes($_POST['txtName']);
                $phonecomment = addslashes($_POST['txtPhoneNo']);
                $emailcomment = addslashes($_POST['txtEmail']);
                $comment = addslashes($_POST['txtContent']);
               
                $db2->Insertcomment($identry,$namecomment,$phonecomment ,$emailcomment,$comment);
                echo"<script> location.replace('promotiondetail.php?entryid=".$identry."'); </script>";
            }
            ?>
                <div style="clear: both"></div>
                <div>
                    <form method="post" action="">
                        <table class="table">
                            <h4 class="text-left"> Gửi bình luận:</h4>
                            <tr>
                                <td>Tên: </td>
                                <td><input type="text" name="txtName" required="required" ></td>
                            </tr>
                            <tr>
                                <td>Email: </td>
                                <td><input type="text" name="txtEmail" required="required" ></td>
                            </tr>
                            <tr>
                                <td>Số ĐT: </td>
                                <td><input type="text" name="txtPhoneNo" required="required" ></td>
                            </tr>
                            <tr>
                                <td>Nội Dung: </td>
                                <td><textarea name="txtContent" required="required"></textarea></td>
                            </tr>
                        </table>
                        <input type="submit" name="binhluan" class="btn btn-info" value="Gửi">
                        <br>
                        <br>
                    </form>
                </div>
            </div>
            <div class="col-md-3 sidebar-right">
            <div class="">
                <h2>Giới thiệu</h2> <br>
                <p>
                    Là biệt thự nghỉ dưỡng tại 4C Yersin, phường 10, ngay tại trung tâm thành phố Đà Lạt, cách hồ Xuân hương 300m, cách siêu thị BigC 500m, cách ga Đà Lạt 200m. Le Hoang Villa là điểm đến lý tưởng cho mọi gia đình. 
                </p>
            </div>
        </div>
        </div>
    </div>
    <?php
        $db->CloseConnection();
        $db2->CloseConnection();
        include 'footer_sub.php';
    ?>
</body>
</html>
