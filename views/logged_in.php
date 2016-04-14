

<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<!-- as below is sample You should not give sensitive data to the screen also -->
echo "<h1> DASHBOARD </h1>"
Hey, <?php echo $_SESSION['user_name'];
echo "<br />".$_SESSION['user_email']." <br />";
echo "<br />".$_SESSION['user_login_status']."<br />";
?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)

<!-- you can also use index.php?logout=true. Both are same" -->
<a href="index.php?logout">Logout</a>
