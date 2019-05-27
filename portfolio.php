<?php
include("data/portfolio_data.php");
ob_start();
$postkey='null';
$posttitle='Examples of my work';
$postmeta='&nbsp;';
$postbody='Some of my previous projects. The ones i remember, the ones i like, the ones i enjoyed for some reason.<br />
No point in showing all of them, especially since some have been offline for quite a while,
others have been rebuilt.<br />
I want to note that none of these graphic designs are mine.<br />
I\'m a web developer, not a graphic artist - my job was to implement designs that were given to me in
.png form, using technologies relevant to the specific project.<br />
In some cases - none of the visible parts of the projects were my work - i was sometimes
responsible for developing the entire backend (model and controller) of a website,
while someone else was responsible for the view.';

include("templates/item.html");
ksort($data);
$data=array_reverse($data);
foreach ($data as $key=>$value) {
	$url=$value['url'];

	$about=$value['about'];
	$preview=$value['preview'];
	include("templates/portfolio_item.html");
}
$body=ob_get_contents();
ob_end_clean();
include_once ("templates/head.html");
include_once ("templates/body.html");
include_once ("templates/sidebar.html");
include_once ("templates/foot.html");
?>