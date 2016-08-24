<?php
include_once 'main-page-top.php';
?>
    <div id="slogan">
        <h2>Promotion</h2> <br>
        
    </div>

<div id="page-content" class="container-fluid">
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-9">
            <?php
                include 'EntryDB.php';
                $db= new EntryDB();
                $db->OpenConnection();
                $db->SearchEntryPromotion();
            
                while($row=mysql_fetch_array($db->query))
    	        {
        		  $tomtat = substr( $row['entry_content_en'],  0, 500);
        		  echo"<div class='post'>
                        <br>
                        <img class='feature-img img-responsive' src='../images/promotion/".$row['entry_img']."'>
                        <p>
                        <h2>".$row['entry_name_en']."</h2> <br>
                        <i style='font-size: 11px'>".$row['entry_datetime']."</i><br><br>
                        ".$tomtat."..."."
                        </p>
                        <a class='btn btn-info' href ='promotiondetail.php?entryid=".$row['entry_id']."'> Read More</a>
                        </div>";
        	    }            
                
            ?>
            <hr style="color: #000;">
            
            <br>
        </div>
        <div class="col-md-3 sidebar-right">
            <div class="">
                <h2>About US</h2> <br>
                <p>
                    The villa located in 4C Yersin, Ward 10, at the center of Dalat city, 300 meters from Xuan Huong Lake, 500m  from the Big C supermarket, 200m from the station of Dalat. Le Hoang Villa is the ideal destination for family.
                </p>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
    </script>
    <?php
        $db->CloseConnection();
        include_once 'footer.php';
    ?>
</body>
</html>
