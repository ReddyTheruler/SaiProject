<?php

require('db.php');

?>



<?php

$dt = date("Y-m-d");

$datew = new DateTime($dt);

date_modify($datew, '+15 day');



#$datew->modify('+15 day');

#$df=$datew->format('Y-m-d');

$df =date_format($datew, 'Y-m-d');



#$sel_query="SELECT * FROM details WHERE accmat BETWEEN '$dt >= $dt' AND  '$dt <= $df' ";

#echo $sel_query;



 $sql="SELECT * FROM `details` WHERE `accmat` BETWEEN '$dt>= $dt' and '$df <= $dt'";  

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf(" %d  \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }


?>
 
        
















