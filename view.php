<?php
    include "core.php";
    if($_GET['url'] != ""){
        $flink = $_GET['url'];
        $fdata = facebookstream($flink);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/video.js/5.11.9/video-js.min.css">
        <link rel="stylesheet" media="screen" href="./template_view.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/videojs-resolution-switcher/0.4.2/videojs-resolution-switcher.min.css" />
		<style>
            html,body{
            	height: 100%;
            	width: 100%;
            	margin: 0;
            }
	    </style>
    </head>
    <body oncontextmenu="return false;">
	<div id="myElement"></div>
    <script src="//ssl.p.jwpcdn.com/player/v/7.11.2/jwplayer.js"></script>
	<script>jwplayer.key="EK7bMlCv59GsAn7yyvaV5fI2FKXVRDGFLHWURw==";</script>
	<script>
		var playerInstance = jwplayer("myElement");
		playerInstance.setup({
        <?php
        echo $fdata;
        ?>
		width:"100%",
		height:"100%",
		preload:"auto",
		autostart: "false",
		skin: {
        name:'seven',
        active: '#408BEA',
        inactive: 'white',
        background: 'rgba(22, 26, 37, 0.2)',
},
		});
	</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./script_view.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/5.11.9/ie8/videojs-ie8.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/5.11.9/video.min.js"></script>
    </body>
</html>
