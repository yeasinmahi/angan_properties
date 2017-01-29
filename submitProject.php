<?php
session_start();
require 'dbConnector.php';

$projectName = $_POST["projectName"];

$location = $_POST["location"];
$details = $_POST["details"];
	
$sql = "INSERT INTO `projects`(`projectName`, `location`,  `details`) VALUES 
('".$projectName."','".$location."','".$details."');";
if ($conn->query($sql) === TRUE) {
	imageUpload();
    echo "success";
} else {
    echo "fail";
}
$conn->close();

function imageUpload() {
    $total = count($_FILES['image']['name']);

// Loop through each file
for($i=0; $i<$total; $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['image']['tmp_name'][$i];

  //Make sure we have a filepath
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "images/projects/" . $_FILES['image']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
      

    }
  }
}
}



?>