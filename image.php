<?php
$fh=fopen('./sig.jpg','r');
header("Content-type: image/jpg");
while (!feof($fh)) {
	echo fread($fh,1024);
}
fclose($fh);
$row=date('d:m:Y G:j:s')." Przegladarka:".$_SERVER['HTTP_USER_AGENT'].", AdresIP:".$_SERVER['REMOTE_ADDR']."(".gethostbyaddr($_SERVER['REMOTE_ADDR'])."), Jezyk systemu:".$_SERVER['HTTP_ACCEPT_LANGUAGE'];
//$fh=fopen('./log.txt','a+');
//fwrite($fh,$row."\n");
//fclose($fh);
//phpinfo();
?>