<?php 
	session_start();
	$logo = 'images/logo.png';
	$banner = 'gifs/banner.gif';
	$home_address ='index.php';
	$news_address ='news.php';
	$highlights_address = 'highlights.php';
	$tutorial_address = 'tutorial.php';
	$f1 = 'https://www.youtube.com/embed/QpG54cm2Lec';
	$f2 = 'https://www.youtube.com/embed/MhVt4oxqGQQ';
	$f3 = 'https://www.youtube.com/embed/5yPnKDdBilc';
	$f4 = 'https://www.youtube.com/embed/qsvnzOz7-To';
	$f5 = 'https://www.youtube.com/embed/sf_xAjBNpaw';
	$f6 = 'https://www.youtube.com/embed/ePplhBU1J40';
	$f7 = 'https://www.youtube.com/embed/TeK5XDhVrYw';
	$f8 = 'https://www.youtube.com/embed/lz_WwPLhHdk';
	$fb_logo = 'images/fb.png';
	$ig_logo = 'images/ig.png';
	$twit_logo = 'images/twitter.png';
	$funny_address = 'funny.php';
	$epic_address = 'epic.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <title>Home Page</title> 
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="body">
		<div class="header">
		    <img src="<?php echo $logo; ?>">
		    <h3>SkillOwls</h3>
		    <div class="navbar">
		        <a href="<?php echo $home_address; ?>">HOME</a>
		        <a href="<?php echo $news_address;?>">NEWS</a>
		        <a class="active" href="<?php echo $highlights_address; ?>">HIGHLIGHTS</a>
		        <a href="<?php echo $tutorial_address; ?>">TUTORIALS</a>
		    </div>
		    <div class="searchbox"><span class="material-symbols-outlined" style="font-size: 25px; font-weight: bold">search</span>
		     </div>
		</div>
		<nav class="menu">  		
		    <a href="<?php echo $home_address;?>">HOME</a>      	
		    <a href="<?php echo $news_address; ?>">NEWS</a>        	
		    <a class="active" href="<?php echo $highlights_address; ?>">HIGHLIGHTS</a>
		    <a href="<?php echo $tutorial_address; ?>">TUTORIALS</a>   
		</nav>
	    <div class="miyahead"><a href="<?php echo $highlights_address; ?>" style="color: white"><?php echo 'Look Here! Savage Moments of Some MLBB Heroes'; ?></a></div>
	    <div class="main">
	    <div class="miyahead" style="margin-top: 10px"><a href="<?php echo $epic_address; ?>" style="color: white"><?php echo 'Watch Now! Epic Moments o f MLBB Heroes'; ?></a></div>
	    <div class="miyahead"  style="margin-top: 10px; margin-bottom: 10px"><a href="<?php echo $funny_address; ?>" style="color: white"><?php echo 'Watch Now! Funny Moments of MLBB Heroes';?></a></div>
	    	<iframe style="max-width: 45%" src="<?php echo $f1; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $f2; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $f3; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $f4; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $f5; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $f6; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $f7; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $f8; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe> 
		</div>
		<div class="footer">
			<?php 	
			    echo '<h4>SkillOwls</h4>';
			  	echo '<p>&copy; 2022 . All rights reserved . <br> Exclusive Collaboration of Myracel J. Diokno &&  Angelica Mae A. Escala</p>';
			?>
		   	<a href="#"><img src="<?php echo $fb_logo; ?>"></a>
		    <a href="#"><img src="<?php echo $ig_logo; ?>"></a>
		    <a href="#"><img src="<?php echo $twit_logo; ?>"></a>
		</div>
	</div>
</body>