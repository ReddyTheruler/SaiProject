<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "sahara");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM details";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
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
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
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
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>