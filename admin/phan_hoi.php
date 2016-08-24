<?php
include_once 'main-page-top.php';
?>
    <div id="slogan">
        <h2>Khuyến mãi</h2> <br>
        
    </div>

<div id="page-content" class="container-fluid">
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-9">
            <?php
                include 'EntryDB.php';
                $db= new EntryDB();
                $db->OpenConnection();
                $db->SearchEntryPromotion();
            if($db->SearchEntryPromotion() == 0)
            {
                echo "Thông tin khuyến mãi đang được cập nhật.";
            }
            else {
                while ($row = mysql_fetch_array($db->query)) {
                    $tomtat = substr($row['entry_content'], 0, 500);
                    echo "<div class='post'>
                        <br>
                        <img class='feature-img img-responsive' src='../images/promotion/".$row['entry_img']."'>
                        <p>
                        <h2>" . $row['entry_name'] . "</h2> <br>
                        <i style='font-size: 11px'>" . $row['entry_datetime'] . "</i><br><br>
                        " . $tomtat . "..." . "
                        </p>
                        <a class='btn btn-info' href ='promotiondetail.php?entryid=" . $row['entry_id'] . "'> Đọc tiếp</a>
                        </div>";
                }
            }
                
            ?>
            <hr style="color: #000;">
            
            <br>
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

    <script type="text/javascript">
    </script>
    <?php
        $db->CloseConnection();
        include_once 'footer_sub.php';
    ?>
</body>
</html>
