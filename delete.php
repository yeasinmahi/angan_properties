<?php
require 'dbConnector.php';
if (isset($_GET['id'])) {
        $sql = "Select image from image where pid = ".$_GET['id'];
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                if(file_exists($row["image"]))
                unlink($row["image"]);
            }
        }
        $conn->close();
        require 'dbConnector.php';
        $sql = "Delete FROM `image` where pid = ".$_GET['id'];
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            require 'dbConnector.php';
            $sql = "Delete FROM `projects` where id = ".$_GET['id'];
            if ($conn->query($sql) === TRUE) {
                header("Location: adminProjects.php?type=".$_GET['type']);
            }
        }
    }
//header("Location: adminProjects.php?type='.$_GET['id']).'")
?>

