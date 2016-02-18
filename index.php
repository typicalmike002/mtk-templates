<!DOCTYPE html>
<?php

include('Page.php');
$page = new Page( $_GET['page'] );

?>
<html>
<head>
	<title>MTK Tavern | <?php echo $page->title; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php include('templates/header.html'); ?>
	<div id="main">
		<?php include('templates/' . $page->request . '.html'); ?>
	</div>
	<?php include('templates/footer.html'); ?>
</body>
</html