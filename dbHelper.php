<?php
function getProjects($type){
    require 'dbConnector.php';
    $sql = "SELECT * FROM `projects` WHERE status = ".$type;
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

?>