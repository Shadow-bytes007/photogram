<?php
class Database
{
    public static $conn = null;
    
    public static function getConnection()
    {
        if (Database::$conn == null){
            $servername = "mysql.selfmade.ninja";
            $username = "sudhir";
            $password = "sudhirsys@12";
            $dbname = "sudhir_newdb";

            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
           
            // Check connection
            if ($connection->connect_error) {
             die("Connection failed: " . $connection->connect_error); //TODO :replace this with exception handling:
            }else{
              
                //printf("NEW CONNECTION ESTABLISHED....");
                Database::$conn =$connection; // REPLACING $conn = null with actual connection:
                return Database::$conn;
            }
        }
        
        else{
            printf("returning establishing connection....");
            return Database::$conn;
            
         } 

    }
}

?>

