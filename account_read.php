<?php
    require 'config.php';

   $sql="SELECT email,password,user_type FROM account_details";

   $result=$con->query($sql);

   if($result->num_rows>0)
   {
        while ($row = $result->fetch_assoc()) {
        echo "<tr>
                
                <td>".$row['email']."</td>
                <td>".$row['user_type']."</td>
              </tr>";
        }

   }

   else
   {
        echo "<tr><td>No Results</td></tr>";
   }
?>