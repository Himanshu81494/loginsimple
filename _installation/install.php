<?php
class Install
{
  private $db_connection = null;
  public $errors = array();
  public $messages = array();
 
  public function __construct()
  {
    $this->install();
  }
  
  private function install() {
   $filename = '02-create-and-fill-users-table.sql';
   $readfile = fopen($filename, "r") or die("reading problem");
   $text = fgets($readfile);
   fclose($readfile);
   echo $text;
   echo "file closed";
    $this->db_connection = new mysqli('localhost', 'root', 'toor', 'login');
    if(!$this->db_connection->connect_errno) {
   $sql_query = $text;
   $result = $this->db_connection->query($sql_query);
   
   if($result){echo "<br >done!<br >";}
   else {echo "error";}
    }
  }
}

$instal = new Install();
?>
