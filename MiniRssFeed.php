<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jobs.ge RSS</title>
<link rel="stylesheet" href="MiniRssFeed_Style.css"/>
</head>

<body>
<?php 
	$file = 'http://www.jobs.ge/rss/jobs/';
	$feed = simplexml_load_file($file);
?>
<header>
    <h1> <?php  echo $feed->channel->title; ?> </h1>
</header>
<section>
	<ol>
    	<?php
				foreach($feed->channel->item as $item){
					echo "<li>$item->description;</li>";
					}
		?>
    </ol>
</section>
</body>
</html>