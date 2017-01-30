<?php
function getProjects($type){
    require 'dbConnector.php';
    $sql = "SELECT * FROM `projects` WHERE status = ".$type;
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
function execute($sql){
    require 'dbConnector.php';
    if ($conn->query($sql) === TRUE) {
            $isSuccess=1;
        } else {
            $isSuccess=2;
        }
        $conn->close();
    return $isSuccess;
}
?>