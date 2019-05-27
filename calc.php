<?php
$mies=$_REQUEST['mies'];
$stopa=$_REQUEST['stopa'];
$kwota=$_REQUEST['kwota'];
$mies=intval($mies);
if (!empty($stopa)) {
  $p_stopa=$stopa*0.01;
  $i=$p_stopa/12;
  $n=$mies;
  $P=$kwota;
  $y=pow(($i+1),$n)-1;
  $x=$i*pow($i+1,$n);
  $A=$P*($x/$y);
}
// prowizja
//$prowizja=($kwota+($kwota*0.05))*0.05;
// koszt całkowity kredytu

?>
<html>
<body>
<form action="" method="post">
miesiecy: <input name="mies" value="<?php echo $mies;?>"><br />
stopa roczna: <input name="stopa" value="<?php echo $stopa;?>"><br />
kwota: <input name="kwota" value="<?php echo $kwota;?>"><br />
<input type="submit" value="OK">
</form>
Rata miesieczna=<?php echo $A; ?>
</body>
</html>