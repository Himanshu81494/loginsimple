<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
<!-- caution: work in progress. I am planning to improve user interface for all forms
 using jquery and bootstrap -->
<!DOCTYPE html>
<html>
<head>
    <title></title>
<!-- <script type="text/javascript" src="./views/jquery/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="./views/bootstrap/css/bootstrap.css">
<script type="text/javascript" src="./views/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./views/jquery/jquery-ui.js"></script>
 --></head>
<body>
<div  class="container">
<!-- register form -->
<form method="post" action="register.php" name="registerform">

    <!-- the user name input field uses a HTML5 pattern check -->
    <fieldset class="form-group row">
    <label for="login_input_username" class="col-sm-2">Username </label>
    <div class="col-sm-8">
    <input id="login_input_username" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required placeholder="enter username" />
    <small class="text-muted">(only letters and numbers, 2 to 64 characters)</small>
    </div>
    </fieldset>
    <!-- the email input field uses a HTML5 email type check -->

    <fieldset class="form-group row">
    <label for="login_input_email" class="col-sm-2">User's email</label>
    <div class="col-sm-8">
    <input id="login_input_email" class="form-control " type="email" name="user_email" required placeholder="enter email"/>
    </div>
    </fieldset>

    <fieldset class="form-group row">
    <label for="login_input_password_new" class="col-sm-2">Password </label>
    <div class="col-sm-8">
    <input id="login_input_password_new" class="form-control " type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
    <small class="text-muted">(min. 6 characters)</small>
    </div>
    </fieldset>

    <fieldset class="form-group row">
    <label for="login_input_password_repeat" class="col-sm-2">Repeat password</label>
    <div class="col-sm-8">
    <input id="login_input_password_repeat" class="form-control " type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    </div>
    </fieldset>

    <input type="submit" class="btn btn-primary"  name="register" value="Register" />

</form>
</div>
</body>
</html>

<!-- backlink -->
<a href="index.php">Back to Login Page</a>
