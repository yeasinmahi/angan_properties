<?php
require 'dbHelper.php';
require 'utility.php';
checkLogin();
if (isset($_GET['type'])) {
        $type=$_GET['type'];   
}else{
    header("Location: admin.php");
}
if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $msg=getErrorMsg($id);
}
$result = getProjects($type);
if ($result->num_rows > 0) {
    if (isset($msg)) {
        $content = $msg;
    }
    else $content = "";
    $content .=getTable($result,$type);
} else {
    $content = "0 results";
}

include("index.php");

?>