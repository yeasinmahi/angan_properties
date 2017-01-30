<?php
require 'dbConnector.php';
if (isset($_GET['id'])) {
$sql = "SELECT * FROM `projects` as p join image as i on p.id = i.pid where status = 3 and p.id = ".$_GET['id'];
$content = '';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$content .= '<div id="slides">';
    while($row = $result->fetch_assoc()) {
		$content .= '<img src="/angan/'.$row["image"].'" alt="" >';
	}
}
$content .= '</div>';

}
include('index.php');
?>