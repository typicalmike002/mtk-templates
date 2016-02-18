<!DOCTYPE html>
<?php

include('Page.php');
$page = new Page( $_GET['page'] );

?>
<html>
<head>
	<title>MTK Tavern | <?php echo $page->title; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="wrap">
		<?php include('templates/header.html'); ?>
		<?php include('templates/' . $page->request . '.html'); ?>
		<?php include('templates/footer.html'); ?>
	</div>
</body>
</html