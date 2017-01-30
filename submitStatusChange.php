<?php
$isSuccess=0;
if (isset($_GET['id']) && isset($_GET['type'])) {
    require 'dbHelper.php';
    $id = $_GET['id'];
    $type = $_GET['type'];
    $type2 = $type+1;
    $sql = "";
    if($type==1 || $type==2){
        $sql = "UPDATE `projects` SET `status`=".$type2." where id = ".$id;
        $isSuccess=execute($sql);
        header("Location: adminProjects.php?id=".$isSuccess."& type=".$type);
    }
    else{
        header("Location: home.php");
    }
}
else{
    header("Location: home.php");
}

?>