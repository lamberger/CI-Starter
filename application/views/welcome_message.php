<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Starting template</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" media="screen" />
	<script type="text/javscript" src="<?php echo base_url();?>js/scripts.js"/></script>
</head>
<body>

<div class="container">
	<h1>Dynamically loaded by CodeIgniter</h1>
	<h2>Version: <?php echo CI_VERSION; ?>&nbsp;&nbsp;&nbsp;<a href="http://codeigniter.com/" target="_blank">Check latest version</a></h2>

	<div class="content">

		<p>This view is located at:</p>
		<code><span><?php echo base_url();?>application/views/welcome_message.php</span></code>

		<p>The controller for this page is found at:</p>
		<code><span><?php echo base_url();?>application/controllers/welcome.php</span></code>

		<p>CSS files for this project is found at:</p>
		<code><span><?php echo base_url();?>css/style.css</span></code>

		<p>Javascript files for this project is found at:</p>
		<code><span><?php echo base_url();?>js/scripts.js</span></code>

		<p>Images folder for this project is found at:</p>
		<code><span><?php echo base_url();?>images/ci_logo_flame.jpg</span></code>

		<p>Start by reading the <a href="http://codeigniter.com/user_guide/" target="_blank">User Guide</a>.</p>
	</div><!-- end content -->

	<p class="footer">Page rendered in <span>{elapsed_time}</span> seconds</p>
</div> <!-- end container -->

</body>
</html>