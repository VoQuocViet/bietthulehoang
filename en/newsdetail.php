<?php
session_start();

include 'main-page-top.php';
?>
<div id="slogan">
    <h2>Tin Tức</h2> <br>

</div>

<div id="i-main content" class="container">
    <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 ">
        <div class="" style="text-align: justify">
            <?php
            $link_string = "";
            $link_string = substr($_SERVER['REQUEST_URI'],4,3);
            //echo $_SERVER['REQUEST_URI']."<br/>";
            //echo $link_string;
            
            //$identrys = trim($link_string,"-");
            include 'EntryDB.php';
            $db = new EntryDB();
            $db->OpenConnection();
            $db->SearchEntryById($link_string);

            while ($row = mysql_fetch_array($db->query)) {
                echo "<div class='post'>
                        <br>
                        <p>
                        <h2 style='color: #f90;'>" . $row['entry_name'] . "</h2> 
			<i style='font-size: 13px'>Ngày cập nhật: " . $row['entry_datetime'] . "</i><br><br>
                        " . $row['entry_content'] . "
                        </p>
                        
                        </div>";
            }

            ?>
        </div>
    </div>
</div>
<?php
$db->CloseConnection();
include 'footer_sub.php';
?>
</body>
</html>
