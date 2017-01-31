<?php
require 'dbConnector.php';
if (isset($_GET['id'])) {
$sql = "SELECT * FROM `projects` as p join image as i on p.id = i.pid where status = 1 and p.id = ".$_GET['id'];
$content = '';
$result = $conn->query($sql);
$rowN = 1;
$row_cnt = $result->num_rows;
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if($rowN ==1){
			$content .= '<div style="text-align:right; font-weight:600; font-size: 35px;color:rgb(181,15,25);">'.$row["projectName"].'</div><div id="slides">';
		}
		$content .= '<img src="/angan/'.$row["image"].'" alt="" >';
		
		if($rowN==$row_cnt)
		{
			$content .= '</div><div style="float:right">'.$row["details"].'</div>';
		}
		++$rowN;
	}
}

}
include('index.php');
?>