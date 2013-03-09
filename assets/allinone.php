<?php
$ROOT = realpath(__DIR__ . '/../');
include_once( realpath($ROOT . '/vendors/assetic.php') );

use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;

if( isset($_GET['css']) ) {
	$css = new AssetCollection(array(
		new FileAsset($ROOT . '/css/reset.css'),
		new FileAsset($ROOT . '/css/styled-elements.css'),
		new FileAsset($ROOT . '/css/style.css'),
		new FileAsset($ROOT . '/css/social-icons.css'),
		
		new FileAsset($ROOT . '/css/tabs.css'),
		new FileAsset($ROOT . '/js/prettyPhoto/css/prettyPhoto.css'),
		new FileAsset($ROOT . '/css/superfish.css'),
		new FileAsset($ROOT . '/js/poshytip-1.0/src/tip-twitter/tip-twitter.css'),
		new FileAsset($ROOT . '/js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css'),
		new FileAsset($ROOT . '/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css'),
		new FileAsset($ROOT . '/skins/plastic/style.css'),
	));

	header('Content-Type: text/css');
	echo $css->dump();
}

if( isset($_GET['js']) ) {
	$js = new AssetCollection(array(
		new FileAsset($ROOT . '/js/jquery-1.5.1.min.js'),
		new FileAsset($ROOT . '/js/jquery-ui-1.8.13.custom.min.js'),
		new FileAsset($ROOT . '/js/easing.js'),
		new FileAsset($ROOT . '/js/jquery.scrollTo-1.4.2-min.js'),
		new FileAsset($ROOT . '/js/quicksand.js'),
		new FileAsset($ROOT . '/js/jquery.cycle.all.js'),
		new FileAsset($ROOT . '/js/custom.js'),

		new FileAsset($ROOT . '/js/tabs.js'),
		new FileAsset($ROOT . '/js/prettyPhoto/js/jquery.prettyPhoto.js'),
		new FileAsset($ROOT . '/js/superfish-1.4.8/js/hoverIntent.js'),
		new FileAsset($ROOT . '/js/superfish-1.4.8/js/superfish.js'),
		new FileAsset($ROOT . '/js/superfish-1.4.8/js/supersubs.js'),
		new FileAsset($ROOT . '/js/poshytip-1.0/src/jquery.poshytip.min.js'),
		new FileAsset($ROOT . '/js/tweet/jquery.tweet.js'),
		new FileAsset($ROOT . '/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js'),
	));

	header('Content-Type: application/js');
	echo $js->dump();
}