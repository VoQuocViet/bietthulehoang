
<?php
	session_name("fancyform");
	session_start();
	mysql_query("SET character set 'utf8'");
	$to="info@bietthulehoang.com";
	$subject='this is my email';
	
	$name =$_POST['name'];
	$sdt= $_POST['sdt'];
	$email =$_POST['email'];
	
	$message =$_POST['message'];
	
	$body =<<<EMAIL
	
	Hi ! My name is $name
	
	$message
	
	From: $name
	o year, my email is $email .
	and my telephone $sdt
	
EMAIL;
	
	$headers = "MIME-Version: 1.0" . "\r\n";
  	$headers .= "Content-type: text/html; charset=utf-8\r\nFrom: $email\r\nReply-to: $email";
  	$headers .= "From: ".$email. "\r\n";
	if($_POST){
		mb_language('uni'); 
		mb_internal_encoding('UTF-8');
		mb_send_mail($to, $subject, $body, $header);
		
		$feedback='thank for the worthless email';
	}
?>

<?php
include 'main-page-top.php';
?>
<div id="slogan">
    <h1>Phản Hồi Của Khách Hàng</h1>
</div>
<style type="text/css">
#center{ margin-left:350px;}
#text{height:28px; width:450px; background-color:#ECECEC; margin-top:7px; margin-bottom:5px; text-align:justify}
#text1{height:130px; width:450px; background-color:#ECECEC; margin-top:7px;margin-bottom:5px; text-align:justify}
</style>
<div id="page-content" class="container-fluid" style="align-items: center">
    <div class="row col-lg-offset-1">
        <div>
        	<p>Cám ơn quý khách dành thời gian viết phản hồi cho chúng tôi. <br/>
Biệt Thự Lê Hoàng và Cộng Sự chúc quý khách luôn mạnh khỏe và giữ mãi nụ cười hạnh phúc.</p>
		</div>

        <div>
			<p align="center"><?php echo $feedback;?></p>
        	<form action="?" method="post" >
            	
            	<div id="center">
                	<label for="name"> Họ Tên</label><br/>
                    <input type="text" id="text" name="name" width="300" required="required">
                </div>
                <div id="center">
                	<label for="sdt"> Sdt</label><br/>
                    <input type="text" id="text" name="sdt" required="required">
                </div>
                <div id="center">
                	<label for="email"> Email</label><br/>
                    <input type="email" id="text" name="email" required="required">
                </div>
                <div id="center">
                	<label for="date"> Ngày Phản Hồi</label><br/>
                    <input type="date" id="text" name="date" required="required">
                </div>
                
                <div id="center">
                	<label for="message"> Nội Dung Phản Hồi</label><br/>
                    <input type="text" id="text1" name="message" required="required">
                </div>
                
                <div id="center">
                
                    <input type="submit" name="submit">
                </div><br/><br/>
                
            </form>
    
            
        </div>

		<h2>
			PHẢN HỒI TỪ KHÁCH HÀNG:
		</h2>
		<?php
		include 'PhanHoiDB.php';
		$db = new PhanHoiDB();
		$db->OpenConnection();
		if ($db->SearchEntryComment()) {
			echo "Sự kiện đang được cập nhật.";
		} else {

			while ($row = mysql_fetch_array($db->query)) {
				$username = $row['comment_username'];
				$content = $row['comment_content'];
				$content = $row['comment_datetime'];
				echo "<div id='gioithieu' class='col-lg-10' style='text-align: left'>

                        <h3>
                        ".$row['comment_username']."
                        </h3>
                        <h5>
                        ".$row['comment_datetime']."
                        </h5>
                        <i style='font-size: 14px'>".$row['comment_content']."</i><br>


                    </div>";
			}
		}
		?>
    </div>

</div>
<?php
include 'footer_sub.php';
?>
</body>
</html>
