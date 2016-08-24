<?php
include_once 'gallery_top.php';
?>
<div id="slogan">
    <h2>Gallery</h2>
</div>
<div class="i-main">
    <div id="" class="container page-gallery">
        <div id="tab-container" class="col-md-3">
            <!-- <div id="pkl-dropdown" class="">
                <button id="dLabel" class="btn btn-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Chọn Phòng
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li><a href="gallery01.php">Ngoại thất</a></li>
                    <li><a href="gallery02.php">Phòng khách-xem phim</a></li>
                    <li><a href="gallery03.php">Phòng sinh hoạt chung</a></li>
                    <li><a href="gallery04.php">Phòng ăn - Bếp</a></li>
                    <li><a href="gallery05.php">Phòng Karaoke</a></li>
                    <li><a href="gallery06.php">Sảnh - Gara</a></li>
	                <li><a href="gallery07.php">Phòng Junior Suite</a></li>
	                <li><a href="gallery08.php">Phòng Deluxe #1</a></li>
	                <li><a href="gallery09.php">Phòng Deluxe #2</a></li>
	                <li><a href="gallery10.php">Phòng Deluxe #3</a></li>
	                <li><a href="gallery11.php">Phòng Deluxe #4</a></li>
	                <li><a href="gallery12.php">Phòng Deluxe #5</a></li>
	                <li><a href="gallery13.php">Phòng Superior (2 phòng)</a></li>
	                </ul>
            </div> -->
            <div class="dropdown-gallery">
            <button onclick="myFunction()" class="dropdown-gallery">Dropdown</button>
                <div id="myDropdown" class="dropdown-gallery-content">
                    <a href="gallery01.php">Ngoại thất</a>
                    <a href="gallery02.php">Phòng khách-xem phim</a>
                    <a href="gallery03.php">Phòng sinh hoạt chung</a>
                    <a href="gallery04.php">Phòng ăn - Bếp</a>
                    <a href="gallery05.php">Phòng Karaoke</a>
                    <a href="gallery06.php">Sảnh - Gara</a>
                    <a href="gallery07.php">Phòng Junior Suite</a>
                    <a href="gallery08.php">Phòng Deluxe #1</a>
                    <a href="gallery09.php">Phòng Deluxe #2</a>
                    <a href="gallery10.php">Phòng Deluxe #3</a>
                    <a href="gallery11.php">Phòng Deluxe #4</a>
                    <a href="gallery12.php">Phòng Deluxe #5</a>
                    <a href="gallery13.php">Phòng Superior (2 phòng)</a>
                </div>
            </div>
            <ul id="pkl-dropdown1">
                <li><a href="gallery01.php">Ngoại thất</a></li>
                <li><a href="gallery02.php">Phòng khách-xem phim</a></li>
                <li><a href="gallery03.php">Phòng sinh hoạt chung</a></li>
                <li><a href="gallery04.php">Phòng ăn - Bếp</a></li>
                <li><a href="gallery05.php">Phòng Karaoke</a></li>
                <li><a href="gallery06.php">Sảnh - Gara</a></li>
                <li><a href="gallery07.php">Phòng Junior Suite</a></li>
                <li><a href="gallery08.php">Phòng Deluxe #1</a></li>
                <li><a href="gallery09.php">Phòng Deluxe #2</a></li>
                <li><a href="gallery10.php">Phòng Deluxe #3</a></li>
                <li><a href="gallery11.php">Phòng Deluxe #4</a></li>
                <li><a href="gallery12.php">Phòng Deluxe #5</a></li>
                <li><a href="gallery13.php">Phòng Superior (2 phòng)</a></li>
            </ul>
        </div>
        <div id="main-container" class="col-md-9">
                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">

<style>
.dropdown-gallery {background-color:bisque;color: #000;padding: 5px 0;font-size: 16px;border: none;cursor: pointer;border-radius: 5px;width: 230px;display: none;margin: 0 auto;}
.dropdown-gallery:hover, .dropdown-gallery:focus {background-color: bisque;}
.dropdown-gallery {position: relative;}
.dropdown-gallery-content {display: none;/*position: absolute;*/background-color: #f7ecb5;width:220px;overflow: auto;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);margin: 0 0 0 5px;}
.dropdown-gallery-content a {color: black;padding: 10px 16px;text-decoration: none;display: block;}
.dropdown-gallery-content a + a{border-top:1px solid #ccc; }
.dropdown-gallery a:hover {background-color: #C29C44;color: #fff;}
.show {display:block;}
@media all and (max-width: 768px) {
.i-main{width: 100%;}
.dropdown-gallery{display: block !important;}
#pkl-dropdown1{display: none !important;}
#tab-container{width: 100%;margin: 0 0 10px 0;max-width: 100% !important;}
}
</style>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropdown-gallery')) {

    var dropdowns = document.getElementsByClassName("dropdown-gallery-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>