<?php
require 'dbConnector.php';
$sql = "SELECT * FROM `projects` as p join image as i on p.id = i.pid where status = 1 and i.image like '%-0%'";
$result = $conn->query($sql);
$content = '';
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $content .= '<a href="#" class="project-gallery">
		<img  src="/angan/'.$row["image"].'"/>'.$row["location"].'
		</a>
		
        ';
    }
} 

include('index.php');
?>