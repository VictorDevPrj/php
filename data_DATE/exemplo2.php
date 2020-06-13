<?php

//echo strtotime("1995-02-17");

//$ts = strtotime("1995-02-17");
$ts = strtotime("+1 week");
echo date("l, d/m/Y", $ts);

?>