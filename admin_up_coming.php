<?php
require 'dbHelper.php';
require 'utility.php';

if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $msg=getErrorMsg($id);
    }
$result = getProjects(1);
if ($result->num_rows > 0) {
    if (isset($msg)) {
        $content = $msg;
    }
    else $content = "";
    $content .=getTable($result,1);
} else {
    $content = "0 results";
}

include("index.php");

?>