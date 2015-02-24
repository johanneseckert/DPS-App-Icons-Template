<txp:php>
function selfURL() {
	$s = empty($_SERVER["HTTPS"]) ? ''
		: ($_SERVER["HTTPS"] == "on") ? "s"
		: "";
	$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
	$port = ($_SERVER["SERVER_PORT"] == "80") ? ""
		: (":".$_SERVER["SERVER_PORT"]);
	$url = $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];
	$url = explode("?",$url);
	return $url[0];
//	return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];
}
function strleft($s1, $s2) {
	return substr($s1, 0, strpos($s1, $s2));
}
</txp:php>
<!doctype html>
<html lang="en" class="no-js" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><txp:page_title /></title>

	<meta property="fb:page_id" content="126867120728167" />
	<meta property="og:title" content="<txp:article form="pure-title" pgonly="0" />"/> 
	<meta property="og:type" content="article"/> 
	<meta property="og:author" content="Johannes Henseler" />
	<meta property="og:url" content="<?php print(selfURL()); ?>"/> 
	<meta property="og:image" content="http://donemag.cc/images/<txp:php>echo htmlspecialchars($GLOBALS['thisarticle']['article_image']);</txp:php>t.jpg"/> 
	<meta property="og:site_name" content="DONE magazine"/> 
	<meta property="og:description" content="Diesen Artikel teilen"/> 
<!--	<meta property="fb:admins" content="1461478115142"/>	-->
		
	<link rel="stylesheet" href="/css/style.css?v=2">
<txp:php>

$output1 = '
	<link rel="stylesheet" href="/css/DONE-mobile.css?v=2">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	';

	if (($_GET["m"] == "1") or ($_GET["c"] == "1"))
// **********************
// * RESSOURCEN FÜR MOBILE VERSION ONLY
// **********************
		echo $output1
	else
		echo $output2;

	} else {
// **********************
// * RESSOURCEN FÜR VOLLE VERSION ONLY
// **********************
</txp:php>
	<meta name="viewport" content="width=1024, initial-scale=0.75">
	<meta name="apple-itunes-app" content="app-id=460927848">

	<txp:feed_link flavor="atom" format="link" label="Atom" />
	<txp:feed_link flavor="rss" format="link" label="RSS" />
	<link rel="home" href="<txp:site_url />" />
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<script type="text/javascript" src="http://use.typekit.com/jqd5myg.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<script src="/js/libs/modernizr-1.7.min.js"></script>
	<link rel="stylesheet" href="/css/DONE.css?v=2">
	<link rel="stylesheet" href="/css/960.css?v=2">
<txp:php>		
	}
</txp:php>
</head>

<body id="<txp:if_section name="">home<txp:else /><txp:section /></txp:if_section>" class="<txp:php> if ($_GET["m"] == "1") echo "mobile"; </txp:php><txp:php> if ($_GET["q"] == "1") echo " quicky"; </txp:php><txp:php> if ($_GET["c"] == "1") echo " counter"; </txp:php>">

<script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'donemag'; // required: replace example with your forum shortname
            var disqus_url = '<?php print(selfURL()); ?>';
</script>

<!-- frontline -->
	<div id="frontline" class="container_12">
	<div class="grid_6">
		<div class="fb-like" id="fb-fanpage" data-href="http://www.facebook.com/DONEmag" data-send="false" data-width="450" data-show-faces="false" data-font="lucida grande"></div>
	</div>
	<div class="grid_6 navigation">
		<a href="/">Home</a>
		<a href="/about">About</a>
		<a href="http://digitalpublishing.tumblr.com">DPS Blog</a>
		<a href="http://nordsueddesign.de">nordsueddesign.de</a>
	</div>
	</div>