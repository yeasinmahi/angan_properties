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
        echo $msg; 
    }
require 'dbConnector.php';
$sql = "SELECT * FROM `projects` WHERE status = 1 ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<form action="submitStatusChange.php" method="post">
    <table>
    <tr>
        <th>Project Name</th>
        <th>Location</th>
        <th>Details</th>
        <th>Project Status</th>
        <th>Action</th>
    </tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
            <td>'.$row["projectName"].'</td>
            <td>'.$row["location"].'</td>
            <td>'.$row["details"].'</td>
            <td>Up Coming </td>
            <td><a href="submitStatusChange.php?id='.$row["id"].'" class="btn btn-default">Submit</a></td>
        </tr>';
    }
} else {
    echo "0 results";
}
echo '</table>';
$conn->close();

?>