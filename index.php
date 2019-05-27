<?php
/**
 * Meltir's simple CMS
 *
 */
include_once ("data/index_data.php");
ob_start();
foreach ($data as $key=>$value) {
	$postkey=$key;
	$posttitle=$value['posttitle'];
	$postmeta=$value['postmeta'];
	$postbody=$value['postbody'];
	include ("templates/item.html");
}
$body=ob_get_contents();
ob_end_clean();
include_once ("templates/head.html");
include_once ("templates/body.html");
include_once ("templates/sidebar.html");
include_once ("templates/foot.html");
?>