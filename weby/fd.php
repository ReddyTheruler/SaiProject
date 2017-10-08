<?php

$effectiveDate = date("Y/m/d") ;



$effectiveDate = strtotime("+3 months", strtotime($effectiveDate));
$effectiveDate = strftime ( '%Y-%m-%d' , $effectiveDate );
echo $effectiveDate;

?>