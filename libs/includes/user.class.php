<?php
class User
{
    private $conn;
        public static function signup($user,$pass,$email,$phone_number){
            $option = ['cost'=>8];
            $pass = password_hash($pass,PASSWORD_BCRYPT,$option);
            

            $conn = Database::getConnection();
            
             $sql= "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `activate`)
             VALUES ('$user', '$pass', '$email', '$phone_number', '0', '1');";
             $error = false;
              if ($conn->query($sql) === true) {
             $error=false;
             } else {
                 //echo "Error: " . $sql . "<br>" . $conn->error;
                 $error=$conn->error;
             }
     
             $conn->close();
             return $error;
         }
         public static function login($user,$pass)
         {
          
            $query = "SELECT * FROM `auth` WHERE `username` = '$user' ";   
            $conn = Database::getConnection();
            $result = $conn->query($query);
            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                //if($row['password'] == $pass)
                if(password_verify($pass,$row['password'])) {
                    return $row;
                }else{
                    return false;  
                }
            }
            else{
                return false;
            }
         }

         public function __construct($username){
            $this->conn = Database::getconnection();
            $this->conn->query();
         }
     
}
 
?>
