
<?php
      include('header.php');
?>

 

<style>
   
    #form{
        background: black;
    
        opacity: .5;
        color: white;
        height: 500px;
        border-radius: 3px;
        width: 60%;
        padding-top: 20px;
    }
    
     .btn{
            margin-right: 5px;
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
           margin-top: 30px;
           margin-bottom: 40px;
  
   


</style>

<div class="background">
    <div class="header">
  <h3>Create a new account</h3>
        
  </div>

 <div class="container" id="form">
 <form method="post" action="index.php">
  <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Enter username">
     </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name = "password" class="form-control" id="exampleInputPassword1"  placeholder="Enter password">
  </div>
     
      <div class="form-group">
    <label for="exampleInputPassword2">Password again</label>
    <input type="password" name = "password2" class="form-control" id="exampleInputPassword2" placeholder="Enter password again">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
  <button type="reset"  class="btn btn-info">Reset</button> 
  </form>
    
</div>
    
    </div>



<?php
      include('footer.php');
?>