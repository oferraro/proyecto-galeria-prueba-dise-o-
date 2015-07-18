<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<title>Gallery</title>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

	
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
	<!-- Fancy Box -->
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	
	<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" media="screen" />
	<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>

	<script src="js/jquery.bxslider.min.js"></script>
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>

<section class="slider">
	<ul class="bxslider">
	  <li><img src="galeria/auricular1.jpg" title="Funky roots" /></li>
	  <li><img src="galeria/camara2.jpg" title="The long and winding road" /></li>
	  <li><img src="galeria/camara3.jpg" title="The long and winding road" /></li>
	</ul>

</section>

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
					<a class="fancybox" rel="group" href="galeria/grandes/<?php echo $f; ?>">
						<img <?php shuffle($sizes);?> style="width: <?php echo $sizes[0]; ?>px" src="galeria/<?php echo $f; ?>" alt="<?php echo $f;?>">
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
	
<section id="gallery-mixit">
		<h1>Portfolio 2</h1>
<?php
	$dirName = 'galeria';
	$d = opendir($dirName);
	$ignore = array('.', '..');
	$nameToShow = "";
	$sizes = array('200', '400', '350', '800', '90', '500');
	$categories = array('all', 'Electronica', 'Fotografia', 'Otra', 'Nose'); ?>
<?php	
	foreach ($categories as $c): ?>
	<span class="filter" data-filter=".<?php echo $c;?>"><?php echo $c;?></span>
<?php	
	endforeach; ?>
	<div style="clear: both"></div>
<?php
	while ($f = readdir($d)):
		if (!in_array($f, $ignore) && !is_dir($dirName.'/'.$f)): 
		 $nameToShow = explode ('.', $f); ?>
			<article class="mix <?php $thisCategory = $categories[rand(0, count($categories)-1)]; echo $thisCategory; ?>">
				<figure>
					<a  class="fancybox" rel="<?php echo $thisCategory; ?>" href="galeria/grandes/<?php echo $f; ?>">
						<img <?php shuffle($sizes);?> style="width: <?php echo $sizes[0]; ?>px" src="galeria/<?php echo $f; ?>" alt="<?php echo $f;?>">
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
	
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
		$('#gallery-mixit').mixItUp();
	});	
	
	
var slider = $('.bxslider').bxSlider({
	mode: 'horizontal',
	speed: 50,
	autoStart: true,
	pager: true,
	infiniteLoop: true,
	auto: true,	
});

$('#reload-slider').click(function(e){
  e.preventDefault();
  $('.bxslider').append('<li><img src="galeria/auricular1.jpg"></li>');
  slider.reloadSlider();
});

	
</script>
	
</body>

</html>