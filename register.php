
<?php
if(isset($_POST["in"]))
{
if(($_POST["user_name"] == "") || ($_POST["user_email"] == "") || ($_POST["user_password_new"] == "") ||
 ($_POST["user_password_repeat"] == "") )
{
$l = 1;
}
else
{
if(!preg_match("/@/i", $_POST["user_email"])) 
{
$r = 2;
}
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>register</title>
<style>
body{
clear:both;
}
#content{
width:300px;
height:480px;
margin:auto;
border-radius:10px;
background-color:#EFFBF9;
border:1px solid #D3E1FA;
}
input{
width:240px;
height:30px;
margin-left:24px;
margin-top:24px;
padding:5px;
color:#666666;
background-color:#fff;
border:1px solid #ccc;
border-radius:5px;
}
#button{
width:250px;
height:40px;
margin-left:24px;
margin-top:24px;
color:#fff;
font-weight:bold;
background-color:#186257;
border-radius:5px;
background: -moz-linear-gradient(
        top,
        #218374 0%,
        #186257);
background: -webkit-gradient(
        linear, left top, left bottom, 
        from(#218374),
        to(#186257));
}
</style>
</head>

<body>
<div id="content">
<h1>register</h1>
<form action="<?php echo $_SERVER['SCRIPT_NAME'].'?action=register'; ?>" method="post" name="registerform">
<label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
<input id="login_input_username" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
<label for="login_input_email">User\'s email</label>'
<input id="login_input_email" type="email" name="user_email" required />
<label for="login_input_password_new">Password (min. 6 characters)</label>
<input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
<label for="login_input_password_repeat">Repeat password</label>
<input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
<input type="submit" name="register" value="Register" />
</form>
<?php if(isset($l))
{ 
?>
<p align="center" style="margin-top:40px; color:#666666">Please fill in all required fields!</p>
<?php 
}
if(isset($r))
{
?>
<p align="center" style="margin-top:40px; color:#666666">Please insert a valid email address!</p>
<?php 
}
?>
</div>
</body>
</html>