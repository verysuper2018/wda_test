<?php
	include_once '_config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>健康促進網</title>
<link href="./home_files/css.css" rel="stylesheet" type="text/css">
<script src="./home_files/jquery-1.9.1.min.js"></script>
<script src="./home_files/js.js"></script>
</head>

<body>
<div id="alerr" style="background:rgba(51,51,51,0.8); color:#FFF; min-height:100px; width:300px; position:fixed; display:none; z-index:9999; overflow:auto;">
	<pre id="ssaa"></pre>
</div>
<iframe name="back" style="display:none;"></iframe>
	<div id="all">
    	<div id="title">
        <?=$today?> | 今日瀏覽: <?=$todayTotal?> | 累積瀏覽: <?=$allTotal?>        <span style="float:right;"><a href="index.php"">回首頁</a></span></div>
        <div id="title2">
        	<img src="home_files/02B01.jpg" title="健康促進網－回首頁" width=100%>
        </div>
        <div id="mm">
        	<div class="hal" id="lef">
<?php
	if($utype<999){
		?>
            	                	    <a class="blo" href="?do=po">分類網誌</a>
               	                     	    <a class="blo" href="?do=news">最新文章</a>
               	                     	    <a class="blo" href="?do=pop">人氣文章</a>
               	                     	    <a class="blo" href="?do=know">講座訊息</a>
               	                     	    <a class="blo" href="?do=que">問卷調查</a>
		<?php
	}else{

	}
?>

               	                 </div>
            <div class="hal" id="main">
            	<div>
            		<marquee behavior="" direction="" style="width:70%;">請民眾踴躍投稿電子報，讓電子報成為大家相互交流、分享的園地！詳見最新文章</marquee>
					<span style="width:28%; display:inline-block;">
<?php
	if($utype<1){
		?><a href="?do=login">會員登入</a><?php
	}else{
		echo "歡迎,".$_SESSION['acc'];
		if($_SESSION['acc']=='admin'){
			?><a href="?do=admin">管理 |</a><?php
		}
		?><a href="?do=logout">登出</a><?php
	}
?>                    	                    	
                    	                    </span>
                    	<div class="">
<?php
	if(isset($_GET['do'])){
		if($_GET['do']=='admin'){
			echo '請選擇管理項目';
		}else{
			include_once $_GET['do'].'.php';
		}
	}else{
		include_once 'SpryTabbedPanels.html';
	}
?>
                		                        </div>
                </div>
            </div>
        </div>
        <div id="bottom">
    	    本網站建議使用：IE9.0以上版本，1024 x 768 pixels 以上觀賞瀏覽 ， Copyright © 2014健康促進網社群平台 All Right Reserved 
    		 <br>服務信箱：health@test.labor.gov.tw<img src="./home_files/02B02.jpg" width="20">
        </div>
    </div>

</body></html>
