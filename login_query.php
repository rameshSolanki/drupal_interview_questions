<?php  
 session_start();  
 require_once ('db.php'); 
 $error_message = "";  
 try  
 {  
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["userlogin"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["pass"]))  
           {  
                $error_message = '<label>Please enter your username and password</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM aks_admin WHERE username = :username AND password = :pass";  
                $statement = $conn->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'pass'     =>     $_POST["pass"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:index.php");  
                }  
                else  
                {  
                     $error_message = '<label>Please enter valid username and password</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $error_message = $error->getMessage();  
 }  
 ?>  