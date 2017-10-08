<?php
$connect = mysqli_connect("localhost", "root", "", "sahara");
$sql = "SELECT * FROM details";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Export MySQL data to Excel in PHP</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                         <th>Acount Num</th>  
                         <th>Acc Name</th>  
                         <th>schten</th> 
                         <th>Account Opening</th>  
                         <th>value months</th>  
                         <th>account maturity</th>  
                         <th>Memacnum</th>  
                         <th>Deno</th>  
                         <th>Accvill</th>  
                         <th>Ag.Nam</th>  
                         <th>Ag.code</th>  
                         <th>Acc.cell</th>  
                         <th>Adhar</th>  
                        


     
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["accnum"].'</td>  
         <td>'.$row["accname"].'</td>  
          <td>'.$row["schten"].'</td>  
         <td>'.$row["accopn"].'</td>  
          <td>'.$row["valmon"].'</td>  
         <td>'.$row["accmat"].'</td>  
          <td>'.$row["memacnum"].'</td>  
         <td>'.$row["deno"].'</td>  
         <td>'.$row["accvill"].'</td>  
          <td>'.$row["agnam"].'</td>  
          <td>'.$row["agcode"].'</td>  
         <td>'.$row["accell"].'</td>  
          <td>'.$row["adhar"].'</td>  
       


         
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>