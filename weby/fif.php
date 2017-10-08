<?php
require('db.php');
include("auth.php");
?>



<?php

$bdd = new PDO('mysql:host=localhost;dbname=sahara;charset=utf8', 'root', '');



$dt=date("Y-m-d"); 




$datew = new DateTime($dt);

$datew->modify('+10 day');

$df=$datew->format('Y-m-d');




#$sql="SELECT * FROM `details` WHERE `accmat` BETWEEN '$df' AND '$dt'";

$sql="SELECT * FROM `details` WHERE `accmat` BETWEEN ".$dt." >= '".$dt."' AND ".$dt." <= '".$df."'";



echo "<div class=\"table-responsive\">";
echo "<table width=\"100%\" align=\"center\"  class=\"table-bordered\" class=\"fariffsTbl\">";
 echo "<tr align=\"center\">";
  echo   "<th align=\"center\"><h5 align=\"center\">S.No</h5></th>";
  echo "<th align=\"center\"><h5 align=\"center\">Acc.Num</h5></th>";
   echo " <th align=\"center\"><h5 align=\"center\">Acc.HolderName</h5></th>";
   echo " <th align=\"center\"><h5 align=\"center\">SchemeTenture</h5></th>";
    echo "<th align=\"center\"><h5 align=\"center\">Acc.OpenDate</h5></th>";
  echo "<th align=\"center\"><h5 align=\"center\">Months</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">Acc.MaturityDate</h5></th>";
 echo "<th align=\"center\"><h5 align=\"center\">Membership AccNum</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">Deno </h5></th>";
 echo "<th align=\"center\"><h5 align=\"center\">Village</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">Agn.Name</h5></th>";
 echo "<th align=\"center\"><h5 align=\"center\">Agn.Code</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">CellNum</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">AdharNo</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">Edit</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">Delete</h5></th>";




$resultats2=$bdd->query($sql); // on prépare notre requête
$resultats2->setFetchMode(PDO::FETCH_OBJ);
while( $resultat = $resultats2->fetch() )
{
  
  
  
  echo '<div class="col-md-4">';
          echo "<tr align=\"center\">";
          echo "<td >".$resultat->id."</td>"; 
          echo "<td>".$resultat->accnum."</td>"; 
          echo "<td>".$resultat->accname."</td>"; 
          echo "<td>".$resultat->schten."</td>";
          echo "<td>".$resultat->accopn."</td>";
           echo "<td>".$resultat->valmon."</td>";
            echo "<td>".$resultat->accmat."</td>";
             echo "<td>".$resultat->memacnum."</td>";
              echo "<td>".$resultat->deno."</td>";
               echo "<td>".$resultat->accvill."</td>";
                echo "<td>".$resultat->agnam."</td>";
  echo "<td>".$resultat->agcode."</td>";
  echo "<td>".$resultat->accell."</td>";  
  echo "<td>".$resultat->adhar."</td>";














        echo "</tr>";

  
  
  
  
}

?>