<?php
$isSuccess=0;
if (isset($_GET['id'])) {
    require 'dbConnector.php';
    $id = $_GET['id'];
    $sql = "UPDATE `projects` SET `status`=3 where id = ".$id." ";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
        $isSuccess=1;
    } else {
        $isSuccess=2;
    }
    $conn->close();
    header("Location: admin_on_going.php?id=".$isSuccess);
}

?>