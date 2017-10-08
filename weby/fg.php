<?php
require('db.php');
include("auth.php");

if(isset($_POST["button1id"])) {

$accnum = mysqli_real_escape_string($conn,$_POST['accnum']);
$accname = mysqli_real_escape_string($conn,$_POST['accname']);
$schten = mysqli_real_escape_string($conn,$_POST['schten']);
$accop = mysqli_real_escape_string($conn,$_POST['accopn']);

$acco = strtotime($accop);
$newformat = date('Y-m-d',$acco);

echo $newformat;


#$occopn = DATE_FORMAT("$accop", "%M %e %Y");


$valmon = mysqli_real_escape_string($conn,$_POST['valmon']);
$accmat = mysqli_real_escape_string($conn,$_POST['accmat']);



$memacnum = mysqli_real_escape_string($conn,$_POST['memacnum']);
$deno = mysqli_real_escape_string($conn,$_POST['deno']);
$accvill  = mysqli_real_escape_string($conn,$_POST['accvill']);
$agnam  = mysqli_real_escape_string($conn,$_POST['agnam']);
$agcode = mysqli_real_escape_string($conn,$_POST['agcode']);
$accell = mysqli_real_escape_string($conn,$_POST['accell']);
$adhar = mysqli_real_escape_string($conn,$_POST['adhar']);







  $query = "INSERT INTO details (accnum, accname, schten, accopn, valmon, accmat, memacnum, deno, accvill, agnam, agcode, accell, adhar)
   VALUES('$accnum','$accname','$schten', '$accopn','$valmon','$accmat','$memacnum','$deno','$accvill','$agnam','$agcode','$accell','$adhar')"; 
 }
           if (!mysqli_query($conn,$query))
      {
      die('Error: ' . mysqli_error($conn));
      }
    else
    {
    	header('Location: view.php');
    }
    mysqli_close($conn);


    ?>