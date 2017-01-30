<?php
require 'dbConnector.php';
$sql = "SELECT * FROM `projects` as p join image as i on p.id = i.pid where status = 2 and i.image like '%-0%'";
$result = $conn->query($sql);
$content = '';
if ($result->num_rows > 0) { 
$content = '<div style="text-align:right;color:rgb(181,15,25);font-weight: 600;
    font-size: 35px;">Ongoing Projects</div><div class="project-container">';
    while($row = $result->fetch_assoc()) {
        $content .= '<a href="/angan/ongoings.php?id='.$row["pid"].'" class="project-gallery">
		<img  src="/angan/'.$row["image"].'"/><span>'.$row["projectName"].' <br> @'.$row["location"].'</span>
		</a>
		
        ';
    }
	$content .= '</div>';
} 

include('index.php');
?>