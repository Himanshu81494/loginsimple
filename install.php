
<?php 
/*
function createtables() {
$Dat=date('Y.m.d');
echo $Dat;
$Dat="";
	$db= new SQLite3("./users.db") or die ('unable to open database');
$db->exec(usertable()) or die_message("Failed to create Meta Information Table");


}

 function usertable() {
return <<< EOD
CREATE TABLE IF NOT EXISTS users (
	uid INTEGER PRIMARY KEY UNIQUE
	,user_name VARCHAR(20) NOT NULL 
	,email VARCHAR(40) NOT NULL
	,user_password_hash VARCHAR(20) NOT NULL
	
	
	
	,creationtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)
EOD;
}

createtables();

header("Location: loginapp.php");
*/


 
  // Set default timezone
  date_default_timezone_set('UTC');
 
  try {
    /**************************************
    * Create databases and                *
    * open connections                    *
    **************************************/
 
    // Create (connect to) SQLite database in file
    $file_db = new PDO('sqlite:./users.db');
    // Set errormode to exceptions
    $file_db->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
 
    
 
 
    /**************************************
    * Create tables                       *
    **************************************/
 
    // Create table messages
    $file_db->exec("CREATE TABLE IF NOT EXISTS users (
                    id INTEGER PRIMARY KEY, 
                    user_name TEXT , 
                    user_email TEXT NOT NULL, 
                    user_password_hash VARCHAR(20) NOT NULL)");
 
    
 
 
    /**************************************
    * Play with databases and tables      *
    **************************************/
 
    // Prepare INSERT statement to SQLite3 file db
    $insert = "INSERT INTO users (user_name, user_email, user_password_hash) 
                VALUES (:user_name, :user_email, :user_password_hash)";
    $stmt = $file_db->prepare($insert);
 
    // Bind parameters to statement variables
    $stmt->bindParam(':user_name', $title);
    $stmt->bindParam(':user_email', $email);
    $stmt->bindParam(':user_password_hash', $pass);
 
    
      $user = "superuser";
      $email = "email@email.com";
      $pass = "123456";
 
      // Execute statement
      $stmt->execute();
    

    /**************************************
    * Drop tables                         *
    **************************************/
 
    // Drop table 
    //$file_db->exec("DROP TABLE messages");  

    }
  catch(PDOException $e) {
    // Print PDOException message
    echo $e->getMessage();
  }