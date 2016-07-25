<!DOCTYPE html>
<head>
	<title>Armstrong Robotics</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body onscroll="scroll()">

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
			 <ul>
  				<li><a href="#">ABOUT</a></li>
  				<li><a href="#">TUTORIAL</a></li>
  				<li><a href="#">MEDIA</a></li>
  				<li><a href="#">ASSESSMENT</a></li>
  				<li><a href="#">BLOG?</a></li>
			</ul> 
	</div>

	<div id="content">