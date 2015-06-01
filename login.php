

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
$(function() {
    $('.noauto').attr('autocomplete', 'off');
});
	</script>
</head>
<body>
<h2>Login</h2>

        <form method="post" action="<?php echo $_SERVER["SCRIPT_NAME"];?>" name="loginform" autocomplete="off">
        <label for="login_input_username">Username (or email)</label>
        <input class="noauto" id="login_input_username" type="text" name="user_name" required autocomplete="off" /> 
        <label for="login_input_password">Password</label> 
        <input class="noauto"id="login_input_password" type="password" name="user_password" required autocomplete="off" /> 
        <input type="submit"  name="login" value="Log in" />
        </form>

        


</body>
</html>