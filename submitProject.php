<?php
session_start();
require 'dbConnector.php';
$projectName = $_POST["projectName"];
$location = $_POST["location"];
$details = $_POST["details"];
	
$sql = "INSERT INTO `projects`(`projectName`, `location`,  `details`) VALUES 
('".$projectName."','".$location."','".$details."');";
$pid=0;
if ($conn->query($sql) === TRUE) {
    $pid=mysqli_insert_id($conn);
    if($pid>0){
        $isUpload = imageUpload($pid);
        if($isUpload===TRUE){
            echo "success";
        }else{
            echo "insert fail";
        }
    }
	
    
} else {
    echo "fail";
}
$conn->close();

function imageUpload($pid) {
    
    $total = count($_FILES['image']['name']);
    // Loop through each file
    for($i=0; $i<$total; $i++) {
    //Get the temp file path
    $tmpFilePath = $_FILES['image']['tmp_name'][$i];

    //Make sure we have a filepath
    if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "images/projects/" . $pid.'-'.$i.'.'.pathinfo($_FILES['image']['name'][$i],PATHINFO_EXTENSION);
        
        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {
            require 'dbConnector.php';
            $sql = "INSERT INTO `image`(`pid`, `image`) VALUES ('".$pid."','".$newFilePath."');";
            if ($conn->query($sql) === TRUE) {
            }
            else{
                return false;
            }
        }else{
            return false;
        }
        $conn->close();
        
    }
    }
    return TRUE;
}

?>