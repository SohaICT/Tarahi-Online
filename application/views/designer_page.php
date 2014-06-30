<html>
<head>
<title>designer_page</title>
</head>
<body>

<?php echo $info['name']; ?>
</br>
<?php echo $info['intro']; ?>
</br>

<?php foreach ($gallery['photos'] as $photo):?>
	<?php echo $photo['file_name'];?>
	</br>
<?php endforeach;?>

</body>
</html>
