<?php
    require_once 'config.php';
?>
<?php

if (isset($_GET['delete_ac'])) {
    $delete = $_GET['delete_ac'];

    $query = "DELETE FROM user WHERE User_id = '{$delete}' LIMIT 1";
    $result = mysqli_query($con, $query);
    if ($result) {
        header('Location: homepage.php');
    }
}

mysqli_close($con);

?>