<?php
session_start();

include 'main-page-top.php';
?>
<div id="slogan">
    <h2>Sự Kiện</h2> <br>
<style>
#p{
    font-size:17px;
    margin-left:130px;
    margin-top:30px;
    margin-bottom:50px;
}
</style>
</div>

<div id="i-maincontent" class="container-fluid">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" style="text-align: justify">
        <br/><br/>
        <?php
        $identry = $_GET['event_id'];
        include 'EventDB.php';
        $db = new EventDB();
        $db->OpenConnection();
        $db->SearchEventById($identry);

        while ($row = mysql_fetch_array($db->query)) {
            echo "<div class='' style='border: orangered; border-radius: 8px; border-style: dashed; background-color: #F7ECB5'>
			<i style='font-size: 13px'>" . $row['event_date'] . " </i><br>
                            <p>
                            ".$row['event_content']."
                            </p>
                 </div>";
        }
        ?>
        <br/><br/>
        <div style="clear: both"></div>
    </div>
    <?php
        include_once 'right-side.php';
        ?>
</div>
<?php
$db->CloseConnection();
include_once 'footer_sub.php';
?>
</body>
</html>
