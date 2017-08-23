<?php
      include('header.php');
?>







<link type="text/css" rel="stylesheet" href="style.css">
<style>
    #form{
        background: black;
    
        opacity: .5;
        color: white;
        height: 350px;
        border-radius: 3px;
        margin-top: 100px;
        
        padding-bottom: 10px
            width: 60%;
        padding-top: 20px;
         
    }
    body{
          background-image: url(images/form.jpg);
          height: 100%;
          width: 100%;
    }
    
    .header{
        margin: 0 auto;
    }
    h3{
           margin-left: 40%;
           margin-top: 10px;
    }
    .sign{
        text-decoration:none;
    }
    
    button.btn.btn-success{
            margin-right: 5px;
    }


</style>


<div class="background">
    

 <div class="container" id="form">
      <h3>Sign in now</h3>
 <form method="post" action="index.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-success">Sign in</button>
  <button type="reset"  class="btn btn-info">Reset</button> 
     <p>Not a member? <a href ="signup.php" id="sign"> Sign up</a></p>
  </form>
    
</div>
    
    </div>




<?php
      include('footer.php');
?>