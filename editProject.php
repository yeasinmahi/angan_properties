<?php
require 'dbConnector.php';
$projectName = $_POST["projectName"];
$location = $_POST["location"];
$details = $_POST["details"];
$isSuccess=0;
if(isset($_GET["id"])){
    $sql = "UPDATE `projects` SET projectName=".$projectName.",location=".$location.",details=".$details." WHERE id =".$_GET["id"];
    if ($conn->query($sql) === TRUE) {
        }
        header("Location: adminProjects.php?type=".$_GET["type"]);
}
?>