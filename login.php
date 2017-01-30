<?php
if(isset($_GET["id"])){
	$id = $_GET["id"];
	if($id==1){
		echo "Invalid username or password";
	}
}
?>
<form action="submitLogin.php" method="post">
	<input type="text" name="userName" placeholder="user name" />
	<input type="password" name="password" placeholder="password" />
	<input type="submit" name="save" value="save" />
</form>

