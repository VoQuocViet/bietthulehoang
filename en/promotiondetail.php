<?php
    session_start();
    
    include 'main-page-top.php';
?>
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
