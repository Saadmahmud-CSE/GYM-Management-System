<?php include 'connection.php'; ?>
<?php
    $mid = $_REQUEST['mid'];
    $str = "DELETE FROM member WHERE ID=$mid";
    if(mysqli_query($conn, $str)){
        header('Location: MemberInfoTable.php');
    }
?>