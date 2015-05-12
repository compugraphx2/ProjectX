<?php 
	include_once("../uvcore/uvcore.php");
	
	$sociallinks = uvAddMedia($sociallinks);
	
	uvGetMainFeed();
	
	$sociallinkslist = uvGetFeed($sociallinks);
	$sociallinks = uvGetSocialList($sociallinkslist);
	
	include_once("../global/functions.php");
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<html xmlns='http://www.w3.org/1999/xhtml'
	  xml:lang='en' version='XHTML+RDFa 1.0' dir='ltr'
      xmlns:og='http://ogp.me/ns#'
      xmlns:fb='http://www.facebook.com/2008/fbml'
      xmlns:fb='http://ogp.me/ns/fb#'>
      
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<?=$metatags;?>
	<title><?=$pagetitle;?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<link rel="shortcut icon" href="<?=$uv_url;?>/imateq/www/favicon.png">
	
	<link rel="stylesheet" type="text/css" href="<?=$uv_url;?>/css/gotham.css"/>
	<link rel="stylesheet" type="text/css" href="<?=$uv_url;?>/css/fontello.css"/>
	<link rel="stylesheet" type="text/css" href="<?=$uv_url;?>/css/fontawesome.css"/>
	<link rel="stylesheet" type="text/css" href="<?=$uv_url;?>/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?=$uv_url;?>/css/base.css"/>
	<?php echo($page_css); ?>
		
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
	<script>
		var uv_url = '<?=$uv_url;?>';
		var server = '<?=$server;?>';
	</script>
</head>

<body class='<?=$pageclass;?>'>

<div class='uv-page'>
	
	<div class='uv-content-container'>
		<div class='uv-content'>
	
			<h1>Hello World</h1>
	
	
	
		</div>
	</div>
</div>
</body>
</html>