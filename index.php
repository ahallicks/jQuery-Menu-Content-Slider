<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<title>jQuery Animated Menu Items</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<style type="text/css">
* {
	margin: 0;
	padding: 0;
}
html, body {
	font: 12px Arial, sans-serif;
	overflow-x: hidden;
}
h1, h2, p {
	margin: 12px 0;
}
#w {
	border: 1px solid #CCC;
	margin: 20px auto;
/*	overflow: hidden;*/
	width: 1000px;

	-moz-border-radius: 5px;
	border-radius: 5px;
}
#menu1,
#menu2 {
	float: left;
	padding: 20px;
	width: 160px;
}
#menu1 {
	list-style: none;
	position: relative;
}
	#menu1 li {
		margin: 6px 0;
		width: 160px;
	}
	#menu1 a {
		color: #5090D0;
		text-decoration: none;
	}
#content {
	border: solid #CCC;
	border-width: 0 1px;
	float: left;
	overflow: hidden;
	padding: 20px;
	position: relative;
	width: 558px;
}
#pages {
	left: 20px;
	position: absolute;
	top: 20px;
	width: 10000px;
}
.apage {
	float: left;
	margin-right: 20px;
	width: 558px;
}
#ajax-loader {
	left: 50%;
	margin: -24px 0 0 -24px;
	position: absolute;
	top: 50%;
	z-index: 10;
}
#f {
	clear: both;
	text-align: center;
}
	</style>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
	<script type="text/javascript" src="jquery.movingmenu.js"></script>
	<script type="text/javascript">
$(function()
{

//	HCDSlider.Init();
	$("#w").PageSlider();

});
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-2100376-17']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
		})();
	</script>
</head>
<body>

	<div id="w">

		<ul id="menu1">
			<li>
				<a href="/" title="" data="page1">Home</a>
			</li>
			<li>
				<a href="/projects" title="" data="page2">Projects</a>
			</li>
			<li>
				<a href="/gallery" title="" data="page3">Gallery</a>
			</li>
			<li>
				<a href="/portfolio" title="" data="page4">Portfolio</a>
			</li>
			<li>
				<a href="/contact" title="" data="page5">Contact</a>
			</li>
		</ul>

		<div id="content">

			<div id="pages">

				<div id="page1" class="apage">

					<h1>Some content</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque consequat ante, sit amet sollicitudin quam congue imperdiet. Ut feugiat posuere turpis ac feugiat. Donec tristique, ante dignissim dictum ornare, purus enim consectetur nunc, id malesuada ante neque nec arcu. Maecenas at eros nunc, id malesuada massa. Morbi blandit ligula sit amet diam bibendum ornare. Nunc gravida rhoncus dui nec facilisis. Integer massa dui, porta sodales consequat at, fermentum id purus. Suspendisse posuere nunc id enim cursus pretium. Nunc et tincidunt sapien. Sed semper tortor at erat porta dictum.</p>

					<h2>Some heading</h2>

					<p>Duis consectetur quam vel mi accumsan fringilla. Nam aliquam sem at risus molestie malesuada. Donec velit eros, fringilla ut sollicitudin nec, hendrerit in dolor. Quisque luctus elementum rutrum. Sed malesuada urna lectus, ut tempus leo. Nunc accumsan auctor mi, sed congue magna rutrum commodo. Nam turpis felis, suscipit ac accumsan eget, interdum in odio. Praesent venenatis augue a diam laoreet aliquet scelerisque vel sapien. Vivamus vel dui turpis. Morbi placerat consequat placerat. Proin pharetra pretium imperdiet. Nulla euismod mi neque, vitae scelerisque urna. Vivamus laoreet pretium posuere. Sed dictum vulputate metus eget aliquam. Pellentesque porttitor porttitor odio, nec adipiscing velit fermentum hendrerit. Nullam non eros a mi tempus laoreet sed vel tortor.</p>

					<p>Quisque consequat facilisis faucibus. Sed lacus justo, tempus malesuada suscipit quis, vehicula non justo. Aenean sed lorem lobortis velit pretium viverra. Donec mi dui, consequat quis placerat non, convallis nec leo. Praesent euismod cursus mi, eu accumsan eros suscipit non. Maecenas sed risus urna, semper convallis ante. Praesent feugiat sodales vestibulum. Cras a massa libero, vel facilisis nibh. Ut faucibus augue id nisl tempor tincidunt. Vestibulum id massa magna. Nam eu justo eros, eget tempus erat. Nunc venenatis, diam in pellentesque ultrices, risus quam accumsan risus, sit amet bibendum sem est eget sem. Proin at libero a arcu aliquet laoreet et quis mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>

				</div>

			</div>

		</div>

		<div id="f">
			<p>A footer</p>
		</div>

	</div>

</body>
</html>