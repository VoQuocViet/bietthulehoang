<?php
include_once 'main-page-top.php';
?>
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
                echo "
                    <div id='gioithieu' class='col-lg-10'>
                        <div class='col-lg-8' style='float: right;'>
                        <h3>
                        <a href ='newsdetail.php?entryid=".$row['entry_id']."'> ".$row['entry_name']."</a>
                        </h3>
                        <i style='font-size: 12px'>".$row['entry_datetime']."</i><br><br>
                        " . $tomtat . "..." . "
                        <a class='btn btn-info' href ='newsdetail.php?entryid=".$row['entry_id']."'>Đọc tiếp</a>
                        </div>
                        <div class='col-lg-4'>
                            <img class='feature-img img-responsive' src='../images/tintuc/" . $row['entry_img'] . "'>
                        </div>
                    </div>";
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
