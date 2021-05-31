<?php
session_start();
include "csdl.php";
?>
<?php
	if(isset($_POST['capnhat']))
	{
		capnhatnguoidung($_GET['username'],$_POST['ten'],$_POST['email'],$_POST['role']);
		header("Location: quantridanhmuc.php");
	}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
 <meta charset="utf-8" />
    <title></title>
    <meta name="author" content="" />
    <meta name="description" content="Học làm web đơn giản" />
    <meta name="keyword" content="Hoc html, huong dan html, html co ban" />
	<link type="text/css" href="style.css" rel="stylesheet">
	    <script src="js\jssor.slider.min.js" type="text/javascript"></script>
</head>
<body>
<div id="menu">
<ul class="aaa">
<li><a href="index.php">Trang chủ</a></li>
<li><a href="#">Danh Mục</a>
<ul class="sub">
<?php
	
	menudanhmuc();
?>
</ul>
</li>
<li><a href="gioithieu.php">Giới Thiệu</a></li>
<li><a href="upload.php" onclick="<?php if($_SESSION['username']=="")
{echo "alert('Bạn chưa đăng nhập hệ thống')";} ?>">Upload</a></li>
<li><a href="thongke.php">Thống kê</a></li>
<li><a href="nhom.php">Nhóm</a></li>
<li><a href="canhan.php">Cá nhân</a></li>
<li><a href="taochuky.php">Tạo chữ ký</a></li>
<li><a href="kiemtra.php">Kiểm tra</a></li>
<?php
if($_SESSION['username']=="")
{echo "<li><a href='http://localhost/webdemo/login/login.php'>Đăng nhập</a></li>";}
else
{echo "<li><a href='logout.php' onclick=' return logout()'>Đăng xuất</a></li>";}
?>
</ul>
<script>
function logout()
{return confirm('Bạn có muốn đăng xuất không?')}
</script>
<div class="search-form">

        <form id="searchform" method="get" action="timkiem.php">
  <div class="searchform-wrapper"><input type="text" value="" name="s" id="s" placeholder="Tìm kiếm..." />
  <input type="submit" class="send" name="searchsubmit"  /></div>
</form>      
</div>

</div>
<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:500,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
              {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb053 .i {position:absolute;cursor:pointer;}
        .jssorb053 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb053 .i:hover .b {fill-opacity:.7;}
        .jssorb053 .iav .b {fill-opacity: 1;}
        .jssorb053 .i.idn {opacity:.3;}

        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:480px;overflow:hidden;">
           <div>
                <img data-u="image" src="images/banner2.jpg" />
            </div>
            <div>
                <img data-u="image" src="album\game2.jpg" />
            </div>
            <div>
                <img data-u="image" src="album\game3.jpg" />
            </div>
            <div>
                <img data-u="image" src="album\game4.jpg" />
            </div>
            <div>
                <img data-u="image" src="album\game5.png" />
            </div>
            <div>
                <img data-u="image" src="album\game6.png" />
            </div>
			<div>
                <img data-u="image" src="album\game7.jpg" />
            </div>

        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
	<br>
	<div class="main" style="background: url('images/bgqt.jpg') no-repeat; background-size:1400px 900px;">
	Cập nhật tài liệu
	<form method='post' name='formcapnhat' action=''>
		<table>
			<tr>
				<td>Tên danh mục</td>
				<td><input type='text' name='ten' value='<?php echo $_GET['tendm']; ?>' style='width:150px'></td>
			</tr>
			<tr>
				<td>Đường dẫn hình</td>
				<td><input type='text' name='email' value='<?php echo $_GET['email']; ?>' style='width:150px'></td>
			</tr>
		</table>
		<input type='submit' name='capnhat' value='Cập nhật' >
	</form>
	</div>
	<br>
	<div class="footer">
	<div class="leftft">
	<h2 style="color:yellow;">XÂY DỰNG WEBSITE:</h2>
	<hr>
	<br>
	<h3>Hồ Mạnh Cường</h3>

	</div>
	<div class="rightft"> 
		<h3>Địa chỉ: Phú Thượng, Tây Hồ, Hà Nội</h3>
	<h3>Số ĐT:1234567890</h3>
	<h3>Email:homanhcuong@gmail.com</h3>
	</div>
	</div>
	<style>
	body{
	overflow-x:hidden;
}
*{
	margin:0;
	padding:0;
	font-family:sans-serif;
}
#lienhe{
	height:30px;
	width:500px;
	margin-left:1045px;
}
#lienhe p{
	margin-left:5px;
	margin-top:7px;
	float:left;
	width:150px;
}
#lienhe img{
	float:left;
	width:20px;
	margin-left:7px;
	margin-top:5px;
}

.header{
	height:120px;
	/*width:95%;*/

	/*margin-left:2.5%;*/
}
#logo{
	height:120px;
	width:220px;
	margin-left:50px;
	float:left;
}
#logo img{
	height:98%;
	width:96%;
	margin-top:-13px;
}
#banner 
{float:right;
	width:800px;
	height:100%;

	margin-right:245px;
}
#banner p{
	
	color:blue;
	font-family:League Gothic;
	font-size:60px;
	text-align:center;
	margin-top:25px;
}
#menu{
	width:100%;
	height:50px;
	background-color:#1f568b;
}
#menu ul.aaa{
	margin-left:0%;

}
#menu ul.aaa li a{
	display:block;
	
	
}
#menu ul.aaa li{
	list-style:none;
	float:left;
	height:50px;
	line-height:50px;
	width:108px;
	text-align:center;
	background-color:#1f568b;
	position:relative;
}
#menu ul.sub li{
	list-style:none;
	float:left;
	height:50px;
	line-height:50px;
	width:171px;
	text-align:center;
	background-color:#1f568b;
	position:relative;
}
#menu ul.aaa li>a:hover{
	color:black;
	background:#f1f1f1;
}
/*
#menu ul.aaa li :hover{
	color:black;
	background:#f1f1f1;
		display:block;
}*/
#menu ul.aaa li a{
	text-decoration:none;
		font-size:17px;
	font-family:sans-serif;
	color:white;
}
ul.aaa li>.sub{
	position:absolute;
	background:#1f568b;
	display:none;
	border-bottom:1px solid white;
}
ul.aaa li:hover>.sub{
	display:block;
	z-index:30;
}
ul.aaa li .sub{
	top:0;
	left:100px;
	
}
ul.aaa>li>.sub{
	top:100%;
	left:0;
}
ul .sub li {
	border-bottom:1px solid white;
}

#searchform .searchform-wrapper {
    height: 31px;
    position: relative;
    width: 100%;
}
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    border: none;
    margin: 0;
    padding: 0;
    vertical-align: baseline;
}

user agent stylesheet
div {
    display: block;
}

#searchform .searchform-wrapper #s {
    color: #aaaaaa;
    font-size: 13px;
    height: 19px;
    padding: 5px 0 5px 3%;
    position: absolute;
    left: 1080px;
    top: 9px;
    width: 16%;
    -webkit-appearance: none;
    -moz-appearance: none;
}

#searchform .searchform-wrapper #s {
    border-radius: 15px;
}
user agent stylesheet
 input:not([type]), input[type="email" i], input[type="number" i], input[type="password" i], input[type="tel" i], input[type="url" i], input[type="text" i] {
    padding: 1px 0px;
}
input[type="text"], input[type="file"], input[type="password"], input[type="number"], input[type="search"], input[type="email"], input[type="url"], textarea, select {
    background-color: #f2f2f2;
    border: 1px solid #e6e6e6;
    color: #333333;
    line-height: normal;
    padding: 5px;
    width: 50%;
}
* {
    margin: 0;
    padding: 0;
}
/*hover vao tài liệu mới tài liệu nổi bật*/
.tailieumoi .xam {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    /* background: #8080806b; */
}

.tailieumoi:hover .xam {
    cursor: pointer;
}

.tailieumoi:hover .xam {
    background: #827e7e5c!important;
}

user agent stylesheet
input:not([type]), input[type="email" i], input[type="number" i], input[type="password" i], input[type="tel" i], input[type="url" i], input[type="text" i] {
    padding: 1px 0px;
}
user agent stylesheet
input {
    -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    cursor: text;
    padding: 1px;
    border-width: 2px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
}
user agent stylesheet
input, textarea, select, button {
    text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    margin: 0em;
    font: 400 13.3333px Arial;
}
user agent stylesheet
input, textarea, select, button, meter, progress {
    -webkit-writing-mode: horizontal-tb !important;
}

#searchform .searchform-wrapper .send {
    border: none;
    color: white;
    cursor: pointer;
    font-family: ElegantIcons !important;
    font-size: 15px;
    height: 31px;
    line-height: 31px;
    margin: 0;
    padding: 0;
    position: absolute;
    right: 18px;
    top: 9px;
    text-align: center;
    width: 31px;
    z-index: 20;
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-transition: background-color 1s ease;
    -moz-transition: background-color 1s ease;
    -o-transition: background-color 1s ease;
    -ms-transition: background-color 1s ease;
    transition: background-color 1s ease;
}
#searchform .searchform-wrapper .send {
    background: url(images/searchicon_png.png) no-repeat center;
    cursor: pointer;
    text-indent: -9999px;
}
user agent stylesheet
 input[type="button" i], input[type="submit" i], input[type="reset" i] {
    -webkit-appearance: push-button;
    user-select: none;
    white-space: pre;
}
user agent stylesheet
 input[type="button" i], input[type="submit" i], input[type="reset" i], input[type="file" i]::-webkit-file-upload-button, button {
    align-items: flex-start;
    text-align: center;
    cursor: default;
    color: buttontext;
    background-color: buttonface;
    box-sizing: border-box;
    padding: 2px 6px 3px;
    border-width: 2px;
    border-style: outset;
    border-color: buttonface;
    border-image: initial;
}
user agent stylesheet
 input[type="button" i], input[type="submit" i], input[type="reset" i], input[type="file" i]::-webkit-file-upload-button, button {
    padding: 1px 6px;
}
input[type="submit"], input[type="reset"] {
    background: #6596dd;
    border: none;
    border-radius: 0 !important;
    box-shadow: none;
    color: white !important;
    cursor: pointer;
    font-size: 15px;
    height: auto;
    margin-top: 5px;
    padding: 7px 10px;
    text-align: center;
    text-decoration: none;
    text-shadow: none;
    -webkit-transition: background-color 1s ease;
    -moz-transition: background-color 1s ease;
    -o-transition: background-color 1s ease;
    -ms-transition: background-color 1s ease;
    transition: background-color 1s ease;
}
* {
    margin: 0;
    padding: 0;
}
user agent stylesheet
input[type="button" i], input[type="submit" i], input[type="reset" i], input[type="file" i]::-webkit-file-upload-button, button {
    padding: 1px 6px;
}
user agent stylesheet
input[type="button" i], input[type="submit" i], input[type="reset" i], input[type="file" i]::-webkit-file-upload-button, button {
    align-items: flex-start;
    text-align: center;
    cursor: default;
    color: buttontext;
    background-color: buttonface;
    box-sizing: border-box;
    padding: 2px 6px 3px;
    border-width: 2px;
    border-style: out;
    border-color: buttonface;
    border-image: initial;
}
user agent stylesheet
input[type="button" i], input[type="submit" i], input[type="reset" i] {
    -webkit-appearance: push-button;
    user-select: none;
    white-space: pre;
}
user agent stylesheet
input {
    -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    cursor: text;
    padding: 1px;
    border-width: 2px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
}
user agent stylesheet
input, textarea, select, button {
    text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    margin: 0em;
    font: 400 13.3333px Arial;
}
user agent stylesheet
input, textarea, select, button, meter, progress {
    -webkit-writing-mode: horizontal-tb !important;
}
div.main{
	width:95%;
    height: 900px;
	background-color:#F7F1F1;
	margin-left:2.5%;
	border:1px solid lightblue;
	border-radius:10px;
	overflow-x:auto;
}
.footer{
	width:100%;
	height:200px;
	background-color:#74a1fb;
	color:white;
}
.leftft{
	float:left;
	margin-left:15px;
	margin-top: 45px;
	width:28%;
}
.rightft{
		float:right;
	margin-right:15px;
	margin-top: 94px;
	width:40%;
}


.footer-bar
{
    display: block;
    width: 100%;
    height: 45px;
    line-height: 45px;
    background: #111;
    border-top: 1px solid #E62600;
    position: fixed;
    bottom: 0;
    left: 0;
}
.footer-bar .article-wrapper{
    font-family: arial, sans-serif;
    font-size: 14px;
    color: #888;
    float: left;
    margin-left: 10%;
}
.footer-bar .article-link a, .footer-bar .article-link a:visited{
    text-decoration: none;
    color: #fff;
}
.site-link a, .site-link a:visited{
    color: #888;
    font-size: 14px;
    font-family: arial, sans-serif;
    float: right;
    margin-right: 10%;
    text-decoration: none;
}
.site-link a:hover{
    color: #E62600;
}
/*css xin chào, admin*/
.xinchao {
    float: right;
    margin-right: 50px;
	color:#58e600;
    margin-top: -18px;
	font-size:20px;
}
/*css hiển thị tài liệu mới*/
.tailieumoi{
    width: 220px;
    height: 300px;
    text-align: center;
    position: relative;
}
.tailieumoi a{
	text-decoration:none;
	font-size:20px;
	color:black;
}
.tailieumoi a p:hover{
	color:lightblue;
}
.boc {
    display: flex;
    justify-content: space-around;
}
/*css icon& chữ tài liệu mới và tài liệu nổi bật*/
.tieude{
	width:450px;
	height:50px;
}
.icontieude{
	float:left;
	margin-right:10px;
    height: 45px;
	width:50px;
    margin-left: 20px;
}
.icontieude img {
    height: 45px;
    width: 45px;
}
.tieude p{
    margin-top: 10px;
    width: 300px;
    height: 50px;
    padding-top: 5px;
    font-size: 30px;
	color:white;
	text-decoration:underline;
}
/*css bình luận*/
.binhluan{
width:645px;
height:400px;
overflow:auto;
background:white;
}
/*css dowload*/
.tailieu{
	display:block;
	height:250px;
	width:700px;
}
img #anhdown {
height: 30px;
float:left;
margin-left:20px;

}
img#anhdown {
    height: 30px;
	border-radius: 50px;
}
.tailieu p{
	color:black;
	text-decoration:none;
	font-size:20px;
	margin-left:10px;
	height:30px;
	width:200px;
}
.tailieumoi p{
	background:lightblue;
	height:30px;
	width:230px;
	margin-left: 0px;
	padding-top: 10px;
}
.tailieu p:hover{
	color:lightblue;
}
.tailieu{
    font-size: 20px;
    border: 1px solid lightblue;
    border-radius: 10px;
	display: block;
    height: 316px;
    width: 642px;
    padding-top: 20px;
}
.tailieu h1 {
    font-size: 30px;
    padding-left: 80px;
    padding-left: 243px;
	color:blue;
}
img#anhdaidien {
width: 200px;
    height: 250px;
    float: left;
}
.borderanh{
	width: 203px;
    height: 253px;
	float:left;
	margin-left: 20px;
    margin-right: 20px;
	border:1px solid lightblue;
}
p#tenfile {
    margin-left: 280px;
    margin-top: -29px;
	#1075f3
}
p#tenfile:hover{
	color:#1075f3;
}
/*hết css download*/
/*hover ảnh tài liệu mới*/
.tailieumoi:hover img {
    opacity: 0.5;
	
}
.tailieumoi:hover p {
       transform: translateY(-40px);
	   color:white;
	   background:gray;
	
}

/*css lại phần slider và quảng cáo---------------------------------------------------*/
div.slider{
	height:480px;

}

.leftqc img{
    float: left;
    height: 521px;
    width: 184.015617px;
}

div.jssor_1{
    position: relative;
    margin: 0px auto;
    top: 0px;
    left: 0px;
    width: 980px;
    height: 480px;
    overflow: hidden;
    visibility: visible;
    z-index: 20;
    float: left;

}
element.style {
    position: relative;
    margin: 0px auto;
    left: -98px;
    top: 0px;
    width: 980px;
    height: 480px;
    overflow: hidden;
    visibility: visible;
    z-index: 20;
}
.rightqc img{
    float: right;
    height: 520px;
    width: 185px;
	margin-top: -18px;
}
/*hết phần slider và quảng cáo---------------------------------------------------*/

.tailieulienquan {
    width: 450px;
	height:600px;
    float: right;
    margin-top: -300px;
}

.tailieulienquan img{
	width: 185px;
    height: 100%;
	float:left;
	margin-right:10px;
}
.tailieulienquan p {
    font-size: 25px;
    font-weight: bold;
}
.motfilelienquan {
    height: 125px;
    width: 100%;
}
.motfilelienquan p,a{
	font-size: 20px;
    font-weight: bold;
text-decoration:none;
}
p#tenfilelienquan {
    /* padding-left: 139px; */
    padding-top: 98px;
    /* text-decoration: none; */
    color: black;
}
hr#hrlienquan {
    width: 420px;
}
.motfilelienquan:hover img {
    opacity: 0.5;
	
}
.motfilelienquan:hover p#tenfilelienquan {
       /* transform: translateY(-50px); */
	   color: #58e600;
	
}
/*------------------------css-upload----------------*/
.form-upload{
	height:300px;
	width:600px;
    margin-left: 316px;
	margin-top:150px;
}

h2.form-signin-heading {
    /* margin-left: 35px; */
    font-size: 30px;
	color:blue;
    text-align: center;

}
.formthongtin {
    margin-left: 100px;
    margin-top: 30px;
}
button#up {
    margin-left: 216px;
    margin-top: 10px;
    border-radius: 5px;
    cursor: pointer;
    height: 30px;
    width: 80px;
    text-align: center;
    color: white;
    font-size: 15px;
    background: #1f568b;
	float:left;
}
button#huy {
	margin-left: 12px;
	    margin-top: 10px;
    border-radius: 5px;
    cursor: pointer;
    height: 30px;
    width: 80px;
    text-align: center;
    color: white;
    font-size: 15px;
    background: #1f568b;
	float:left;
}
.content1{
	width:100%;
	height: 900px;
}
.main1{
	width:800px;
	height:100%;
	background-color:#F7F1F1;
	margin-left:2.5%;
	border:1px solid lightblue;
	border-radius:10px;
	float:left;
	overflow: auto;
}
.danhmuckhac{
	float:right;
	width:400px;
	height:25%;
    margin-top: -900px;
    margin-right: -10px;
}
.quangcao {
    height: 50%;
    width: 450px;
    float: right;
    margin-top: -680px;
}
.quangcao img {
    width: 90%;
	margin-top:25px;
}
.dmkhac{
	font-size:30px;
	
}
.danhmuc {
    margin-top: 20px;
    margin-left: 20px;
    font-size: 20px;
    color: blue;
}
.motfiledanhmuc {
    height: 248px;
}
.anhdanhmuc ,.anhdanhmuc img{
    width: 310px;
    height: 190px;
    margin-top: 24px;
    float: left;
    margin-right: 30px;
    margin-left: 20px;
    border-radius: 20px;
    border: 2px solid darkgrey;
	    background: #BABABA;
}
.ngaydang {
    margin-top: 22px;
    /* font-size: 20px; */
}

img#icondanhmuc {
    width: 30px;
    height: 100%;
    float: left;
    margin-top: -6px;
}
.ngaydang p {
    margin-left: 390px;
}
#ten{
	font-size:30px;
    margin-left: 390px;
}
.dmkhac {
    font-size: 20px;
    font-weight: bold;
}
div#cacdanhmuc {
    padding-left: 30px;
}
div#kocotailieu {
    font-size: 18px;
    margin: 20px 40px;
}

.select{
	width:300px;
	border-radius:5px;
	background:white;
}
table#gtthongke {
    width: 590px;
    text-align: center;
    border: 1px solid;
    border-collapse: collapse;
    margin-left: 337px;
    margin-top: 28px;
    background: #ccf9e8;

}
table#gtthongke1 {
    width: 950px;
    text-align: center;
    border: 1px solid;
    border-collapse: collapse;
    margin-left: 163px;
    margin-top: 28px;
    background: #ccf9e8;

}
tr,.td,th{
	border: 1px solid black;
	border-collapse:collapse;
}
table#formthongke {
    text-align: center;
    margin-left: 425px;
    margin-top: 150px;
	font-weight:bold;
}
.mucquantri {
    margin: 20px 30px;
}
table#gtquantri {
    margin-left: 230px;
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
    margin-top: 2px;
    width: 830px;
    height: 120px;
	background: lavender;
}
a.aqt {
    color: black;
    font-size: 17px;
    font-weight: 200;
}
a.set:hover,a.xoa:hover{
	color:red;
    font-weight: 350;
	text-decoration:underline;
}
input#themdm {
    margin-left: 573px;
    margin-top: 25px;
    border-radius: 10px;
    width: 132px;
    height: 40px;
    color: red;
    border-radius: 10px;
    background: #0c9ee4;
    cursor: pointer;
	font-weight:bold;
	border: 2px solid #8eb2de;
}
input#themdm:hover {
    border-radius: 10px;
    color: red;
    background: gray;
}
table#themdm {
    margin-left: 408px;
    margin-top: 50px;
}
input#nuttdm {
    margin-left: 575px;
    height: 30px;
    width: 100px;
    /* border-radius: 154px; */
background-color:#3889ec;
    cursor: pointer;
	border: 2px solid #8eb2de;
}
.tieudetdm {
    margin-left: 509px;
    margin-top: 30px;
    font-size: 30px;
    font-weight: bold;
	color:blue;
}
form#formcn {
    margin-left: 460px;
    margin-top: 30px;
    /* text-align: center; */
    /* border: 1px solid; */
    height: 200px;
	width: 400px;
}
#menud ul.aaab{
	width:80%;
	background:green;
	text-align:center;
}
#menud li{
	height:50px;
	line-height:50px;
	list-style:none;
	border-bottom:1px solid white;
	clear:both;

}
#menud li a{
text-decoration:none;
color:white;
}
#menud li a:hover{
	background:lightblue;
	color:red;
	display:block;
}
</style>
</body>
</html>