<?php include 'connection.php'; ?>
<?php
    $aid = $_REQUEST['aid'];
    $str = "DELETE FROM admin WHERE ID=$aid";
    if(mysqli_query($conn, $str)){
        header('Location: AdminInfoTable.php');
    }
?>