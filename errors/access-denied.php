<?php include('./config/config.php'); ?>
<html>
<?php include('./code/head.php'); ?>
<head>
<title>Access was denied to SQL Database</title>
</head>
<body style="background: <?php if (isset($background_color) && background_color !=null {echo $background_color;} ?>">
<div class ="container centered" style="margin-top: -100px">
<div class="columns">
<div class="column col-12 col-xs-12">
<div class="panel" style="background: #fff; position: sticky; top: 0; z-index: 200">
<div class="panel-body" style="margin-top: 5px' margin-bottom: 15px">
<div class="toast toast-error" style="margin-bottom: 20px">
The SQL settings in config.php are not correct, please check the information provided and try again
</div>
<div class="columns">
<div class="column col-12 col-xs-12">
<hr>
<h3>Current SQL Settings</h3>
<ul>
<li><b>Hostname:</b><code><?php echo $hostname; ?></code></li>
<li><b>Port:</b><code><?php echo $port; ?></code></li>
<li><b>Database:</b><code><?php echo $database; ?></code></li>
<li><b>Username:</b><code><?php echo $username; ?></code></li>
<li><b>Password:</b><code><?php echo $password; ?></code></li>
</ul>
<p>Once you change config.php reload the page</p>
</div>
</body>
</html>
