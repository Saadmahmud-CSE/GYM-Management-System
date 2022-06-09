<?php include 'connection.php'; ?>
<?php
    $aid = $_REQUEST['sid'];
    $str = "DELETE FROM staff WHERE ID=$aid";
    if(mysqli_query($conn, $str)){
        header('Location: StaffInfoTable.php');
    }
?>