<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<title>Gallery</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
	
	<section>
		<h1>Portfolio</h1>
<?php
	$dirName = 'galeria';
	$d = opendir($dirName);
	$ignore = array('.', '..');
	while ($f = readdir($d)):
		if (!in_array($f, $ignore) && !is_dir($dirName.'/'.$f)): ?>
			<article>
				<figure>
					<a href="galeria/grandes/<?php echo $f; ?>">
						<!-- :before -->
						<img src="galeria/<?php echo $f; ?>" alt="<?php echo $f;?>">
						<!-- :after -->
					</a>
				</figure>
				<h2><?php echo $f;?></h2>
				<div>Electronica </div>
			</article>
<?php		
		endif;
	endwhile;
?>
		
	</section>
	
</body>

</html>