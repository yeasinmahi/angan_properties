<?php
function getProjects($type){
    require 'dbConnector.php';
    $sql = "SELECT * FROM `projects` WHERE status = 1 ";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

?>