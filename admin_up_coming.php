<?php
if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $msg="";
        if($id==0){
            $msg="nothing";
        }elseif($id==1){
            $msg="Success";
        }elseif($id==2){
            $msg="Failed";
        }else{
            $msg="Unknows Error";
        }
        //echo $msg; 
    }
require 'dbConnector.php';
$sql = "SELECT * FROM `projects` WHERE status = 1 ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    if (isset($msg)) {
        $content = $msg;
    }
    else $content = "";
    $content .= '
    <table class="project-table">
    <tr>
        <th>Project Name</th>
        <th>Location</th>
        <th>Details</th>
        <th>Project Status</th>
        <th>Action</th>
    </tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $content .= '<tr >
            <td>'.$row["projectName"].'</td>
            <td>'.$row["location"].'</td>
            <td>'.$row["details"].'</td>
            <td>Upcoming Project</td>
            <td>Project Ongoing? <a href="submitStatusChange.php?id='.$row["id"].'" class="btn btn-default">Yes</a></td>
        </tr>';
    }
} else {
    $content = "0 results";
}
$content .= '</table>';
include("index.php");
$conn->close();

?>