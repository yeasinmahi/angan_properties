<?php
require 'dbConnector.php';
if (isset($_GET['id'])) {
$sql = "SELECT * FROM `projects` as p join image as i on p.id = i.pid where status = 2 and p.id = ".$_GET['id'];
$content = '';
$result = $conn->query($sql);
$rowN = 1;
$row_cnt = $result->num_rows;
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if($row_cnt==1){
			$content .= '<div style="text-align:right;margin-bottom: 10px; font-weight:600; font-size: 35px;color:rgb(181,15,25);">'.$row["projectName"].'</div><div class="projects-back"><div style="width:550px; height:380px;float: left;overflow: hidden;display: block;padding: 10px;background-color: #e6e6e6;" >';
			$content .= '<img  src="/angan/'.$row["image"].'" alt="" style="margin:auto;display:block">';
			$text = str_replace("\n", '<br />', $row["details"]);
			$content .= '</div><div style="float:right;max-width:250px;height:380px;background-color:#e6e6e6;padding:10px;"><div style="font-size: 25px;text-align:center;margin-bottom: 10px;">'.$row["projectName"].'</div>'.$text.'</div></div>';
		}
		else{
		if($rowN ==1){
			$content .= '<div style="text-align:right; margin-bottom: 10px; font-weight:600; font-size: 35px;color:rgb(181,15,25);">'.$row["projectName"].'</div><div class="projects-back"><div style="float: left;overflow: hidden;display: block;padding: 10px;background-color: #e6e6e6;" id="slides">';
		}
		$content .= '<img src="/angan/'.$row["image"].'" alt="" style="">';
		
		if($rowN==$row_cnt)
		{
			$text = str_replace("\n", '<br />', $row["details"]);
			$content .= '</div><div style="float:right;max-width:230px;height:380px;background-color:#e6e6e6;padding:10px;"><div style="font-size: 25px;text-align:center;margin-bottom: 10px;">'.$row["projectName"].'</div>'.$text.'</div></div>';
		}
		++$rowN;
		}
	}
}

}
include('index.php');
?>