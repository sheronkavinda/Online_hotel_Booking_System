<?php
    require 'config.php';

   $sql="SELECT id,event_type,package,event_date,name,email,address,mobile,status FROM reservation";

   $result=$con->query($sql);

   if($result->num_rows>0)
   {
        while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['event_type']."</td>
                <td>".$row['package']."</td>
                <td>".$row['event_date']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['address']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['status']."</td>
              </tr>";
        }

   }

   else
   {
        echo "<tr><td>No Results</td></tr>";
   }
?>