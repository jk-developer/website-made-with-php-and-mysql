<?php
   session_start();

   $db = mysqli_connect("localhost", "root", "jk4559843", "test");
    if(isset($_POST['submit'])){
        $username = mysql_real_escape_string($_POST['username']);
         $email = mysql_real_escape_string($_POST['email']);
         $password = mysql_real_escape_string($_POST['password']);
         $password2 = mysql_real_escape_string($_POST['password2']);
        
        if($password == $password2){
            
            $password = md5($password);
            $sql = "INSERT INTO abc(username, email, password) VALUES('$username', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['message'] = "You are logged in";
            $_SESSION['username'] = $username;
            header("location: register.php");
            
        } else{
            $_SESSION['message'] = "The two passwords do not match";
        }
    }








?>

<html>
  <head>
    <title>Register</title>
    
    </head>
  <body>
    <div class="header">
        <h1>Resgister</h1>
      
      <form method="post">
        <table>
          <tr>
            <td>Username:</td>
            <td><input type = "text" name = "username" class="textInput"></td>  
        </tr>
             <tr>
            <td>Email:</td>
            <td><input type = "email" name = "username" class="textInput"></td>  
        </tr>
             <tr>
            <td>Password:</td>
            <td><input type = "password" name = "password" class="textInput"></td>  
        </tr>
             <tr>
            <td>Password again:</td>
            <td><input type = "password" name = "password2" class="textInput"></td>  
         </tr>
          
           <tr>
            <td><input type = "submit" name = "submit" value="Register"></td>  
        </tr>
          
          
          </table>
        
        
        
        </form>
      
      
      </div>
    
    
    
    </body>
</html>