<?php
$ROOT = realpath(__DIR__ . '/../');
include_once( realpath($ROOT . '/vendors/assetic.php') );

$js = new \Assetic\Asset\AssetCollection(array(
	//JS files
	new \Assetic\Asset\FileAsset($ROOT . '/js/jquery-1.5.1.min.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/jquery-ui-1.8.13.custom.min.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/easing.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/jquery.scrollTo-1.4.2-min.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/quicksand.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/jquery.cycle.all.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/custom.js'),

	new \Assetic\Asset\FileAsset($ROOT . '/js/tabs.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/prettyPhoto/js/jquery.prettyPhoto.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/superfish-1.4.8/js/hoverIntent.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/superfish-1.4.8/js/superfish.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/superfish-1.4.8/js/supersubs.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/poshytip-1.0/src/jquery.poshytip.min.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/tweet/jquery.tweet.js'),
	new \Assetic\Asset\FileAsset($ROOT . '/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js'),
));

header('Content-Type: application/js');
echo $js->dump();