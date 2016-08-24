<?php
    include_once 'main-page-top.php';
    include 'ContactDB.php';
    $db2= new ContactDB();
    $db2->OpenConnection();
?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div style="clear: both"></div>
    <div id="slogan">
        <h2>Liên Hệ</h2>
    </div>
    <div id="main-contact">

        <div class="i-main" align="center">
            <h4 align="center"> Bản đồ hướng dẫn đường đi đến Lê Hoàng Villa:</h4>
            <div class="img-responsive">
                <img src="../images/BanDo12.png" width=80% alt="ban-do"/>
                </div>
                <br /><br />
            <div class="col-md-8 col-md-offset-2">

            <div><b>Quý khách có nhu cầu đặt phòng, vui lòng để lại đầy đủ thông tin (Họ tên, số điện thoại, email) để chúng tôi sớm liên lạc lại</b></div>
		<br />
        <div class="fb-comments" data-href="http://bietthulehoang.com/vi/contact.php" data-width="700" data-numposts="50"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    </script>
    <?php
        $db2->CloseConnection();
        include_once 'footer_sub.php';
    ?>
</body>
</html>
