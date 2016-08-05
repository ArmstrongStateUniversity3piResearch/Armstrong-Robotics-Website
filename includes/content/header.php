<!DOCTYPE html>
<head>
	<title>Armstrong Robotics</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script>
	var p;
	p = '<?php 
		if(isset($_GET['p']) && !empty($_GET['p'])){
			echo htmlspecialchars($_GET['p']);
		} else {
			echo 'clanguage';
		}
	?>';
</script>
<body onscroll="scroll()" onload="renderPage(p)">

	<script>
	function scroll() {

		var MIN_SCROLL = 165;

		var body = document.getElementsByTagName("body")[0];
		var navigation = document.getElementById("navigation");
		var tableOfContents = document.getElementById("TOC");
		var content = document.getElementById("content");

		if (document.body.scrollTop > MIN_SCROLL || 
			document.documentElement.scrollTop > MIN_SCROLL) {

    		navigation.className = "fixed";
    		tableOfContents.className = "fixedTOC";

    		content.className = "adjustContent";
  		} else {
  			navigation.className = "static";
  			tableOfContents.className = "staticTOC";
  			content.className = "fixContent";
  		}

	}
	</script>

	<div id="header">

		<div id="headimg">
			<img src="https://www.armstrong.edu/images/uploads/ASU_logo.svg" />
			<hr>
			<center><img src="robotics_in_style.png" /></center>
		</div>

	</div>

	<div id="navigation" class="staticnav">
			 <ul class="nav">
  				<li class="nav"><a href="#">ABOUT</a></li>
  				<li class="nav"><a href="#">TUTORIAL</a></li>
  				<li class="nav"><a href="#">MEDIA</a></li>
  				<li class="nav"><a href="#">ASSESSMENT</a></li>
  				<li class="nav"><a href="#">BLOG?</a></li>
			</ul>
	</div>

	<div id="content">
		<div id="ltp">
		</div>
