<?php
$ROOT = __DIR__ . '/../';
include_once( $ROOT . '/vendors/assetic/autoload.php' );

use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;

if( isset($_GET['css']) ) {
	$css = new AssetCollection(array(
		new FileAsset($ROOT . '/assets/css/reset.css'),
		new FileAsset($ROOT . '/assets/css/styled-elements.css'),
		new FileAsset($ROOT . '/assets/css/style.css'),
		new FileAsset($ROOT . '/assets/css/social-icons.css'),
		new FileAsset($ROOT . '/assets/css/tabs.css'),
		new FileAsset($ROOT . '/assets/js/prettyPhoto/css/prettyPhoto.css'),
		new FileAsset($ROOT . '/assets/css/superfish.css'),
		new FileAsset($ROOT . '/assets/js/poshytip-1.0/src/tip-twitter/tip-twitter.css'),
		new FileAsset($ROOT . '/assets/js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css'),
		new FileAsset($ROOT . '/assets/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css'),
		new FileAsset($ROOT . '/assets/skins/plastic/style.css'),
	));

	header('Content-Type: text/css');
	echo $css->dump();
}

if( isset($_GET['js']) ) {
	$js = new AssetCollection(array(
		new FileAsset($ROOT . '/assets/js/jquery-1.5.1.min.js'),
		new FileAsset($ROOT . '/assets/js/jquery-ui-1.8.13.custom.min.js'),
		new FileAsset($ROOT . '/assets/js/easing.js'),
		new FileAsset($ROOT . '/assets/js/jquery.scrollTo-1.4.2-min.js'),
		new FileAsset($ROOT . '/assets/js/quicksand.js'),
		new FileAsset($ROOT . '/assets/js/jquery.cycle.all.js'),
		new FileAsset($ROOT . '/assets/js/custom.js'),

		new FileAsset($ROOT . '/assets/js/tabs.js'),
		new FileAsset($ROOT . '/assets/js/prettyPhoto/js/jquery.prettyPhoto.js'),
		new FileAsset($ROOT . '/assets/js/superfish-1.4.8/js/hoverIntent.js'),
		new FileAsset($ROOT . '/assets/js/superfish-1.4.8/js/superfish.js'),
		new FileAsset($ROOT . '/assets/js/superfish-1.4.8/js/supersubs.js'),
		new FileAsset($ROOT . '/assets/js/poshytip-1.0/src/jquery.poshytip.min.js'),
		new FileAsset($ROOT . '/assets/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js'),
	));

	header('Content-Type: application/js');
	echo $js->dump();
}