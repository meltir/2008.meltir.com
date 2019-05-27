<?php
$posttitle="About Me";;
$postkey="post0";
$postmeta="A little more about myself";
$postbody=file_get_contents("templates/about.html");
ob_start();
include ("templates/item.html");
$body=ob_get_contents();
ob_end_clean();

include_once ("templates/head.html");
include_once ("templates/body.html");
include_once ("templates/sidebar.html");
include_once ("templates/foot.html");
?>