<?php
$isSuccess=0;
if (isset($_GET['id'])&& isset($_GET['type'])) {
    require 'dbHelper.php';
    $id = $_GET['id'];
    $type = $_GET['type'];
    $sql = "";
    if($type==1 ){
        $sql = "UPDATE `projects` SET `status`=2 where id = ".$id." ";
        $isSuccess=execute($sql);
        header("Location: adminProjects.php?id=".$isSuccess."& type=".$type);
    }
    elseif($type==2 ){
        $sql = "UPDATE `projects` SET `status`=3 where id = ".$id." ";
        $isSuccess=execute($sql);
        header("Location: adminProjects.php?id=".$isSuccess."& type=".$type);
    }
    else{
        $conn->close();
        header("Location: home.php");
    }
}
else{
    header("Location: home.php");
}

?>