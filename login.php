<?php
session_start();
if(isset($_SESSION["user"])) {
		header("Location: admin.php");
}
?>
<?php
$content = '<style>

     .form-signin
{
    max-width: 200px;
    padding: 70px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    padding: 40px 0px 20px 0px;
    background-color:#eee;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    min-height: 382px;
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
    margin-bottom:5px !important;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.pass-word
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
.labels{
    font-size:16px;
    margin-bottom: 10px;
}
.btn-primary{
    background-color: #4CAF50; /* Green */
    border: 1px solid white;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    }
    .btn-primary:hover {
    background-color: white;
    color: #4CAF50;
    border: 1px solid #4CAF50; /* Green */
}
</style>
<div class="account-wall">
                <form class="form-signin" action="submitLogin.php" method="post">
                      

                <label for="userName" class="login-title">User Name</label>
                <input type="text" class="form-control"  name="userName" placeholder="User Name" required="" autofocus="">
                <label for="password"  class="login-title">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required="">
                <button class="btn-primary" name="save" type="submit">
                    Sign in</button>
                </form>
            </div>';
include('index.php');
?>

