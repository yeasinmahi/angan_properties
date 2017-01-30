<?php
session_start();
$isSuccess=0;
if (isset($_POST['save'])) {
    require 'dbHelper.php';
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $sql = "select * from login";
    $result = getResult($sql);
	while($row = $result->fetch_assoc()) {
         if($row["userName"]===$userName && $row["password"]===$password){
			 $_SESSION["user"] = $userName;
			 header("Location: admin.php");
		 }else{
			 header("Location: login.php?id=1");
		 }
    }
}
else{
    header("Location: home.php");
}

?>