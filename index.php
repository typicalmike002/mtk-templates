<!DOCTYPE html>
<?php

include('Page.php');
$page = new Page( $_GET['page'] );
$content = $page->request;
$title = $page->title;

?>
<html>
<head>
	<title>MTK Tavern | <?php $title; ?></title>
</head>

<body>
	<?php include('templates/header.html'); ?>
	<?php include('templates/$content.html'); ?>
	<?php include('templates/footer.html'); ?>
</body>
</html>