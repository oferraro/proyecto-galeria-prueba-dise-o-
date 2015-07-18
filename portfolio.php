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
	$nameToShow = "";
	$sizes = array('200', '400', '350', '800', '90', '500');
	while ($f = readdir($d)):
		if (!in_array($f, $ignore) && !is_dir($dirName.'/'.$f)): 
		 $nameToShow = explode ('.', $f); ?>
			<article>
				<figure>
					<a href="galeria/grandes/<?php echo $f; ?>">
						<!-- :before -->
						<img <?php shuffle($sizes);?> style="width: <?php echo $sizes[0]; ?>px" src="galeria/<?php echo $f; ?>" alt="<?php echo $f;?>">
						<!-- :after -->
					</a>
				</figure>
				<h2><?php echo $nameToShow[0];?></h2>
				<div>Electronica </div>
			</article>
<?php		
		endif;
	endwhile;
?>
		
	</section>
	
</body>

</html>