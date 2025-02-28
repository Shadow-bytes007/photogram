<?php
$signup = false;

// Debug: Print $_POST data to check if it's being received
//print_r($_POST);

if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email_address'];
    $phone_number = $_POST['phone'];
    $error = User::signup($user, $pass, $email, $phone_number);
    $signup = true;
    

  
    }

echo '<br>';

  //$result = validate_credentials($username , $password); 
if($signup){
    if(!$error){
  ?>
  <div class="bg-body-tertiary p-5 rounded">
    <h1>SIGN UP SUCCESSFUL</h1>
    <p class="lead">you have the access to visit the photogram 😍.signup done now login from <a href="/legacy_php/photogram_app/login.php">here</a>        
  </div>
 
  <?php
  } else { 
    ?>
  <div class="bg-body-tertiary p-5 rounded">
  <h1>SIGN UP failed</h1>
  <p class="lead">something went wrong ,<?=$error?> </p>
</div>
<?php } 
 } 
 else { 
  
  ?>

     
<!-- took from downloaded source code bootstrap  -->
<main class="form-signup w-100 m-auto"> 
  <form method="post" action="signup.php" >
    <img class="mb-4" src="/legacy_php/photogram_app/DDG logo.jpeg" alt=""  height="200">
    <h1 class="h3 mb-3 fw-normal">Please sign UP</h1>
    <div class="form-floating">
      <input  name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInputusername">USER NAME  </label>
    </div>
    <div class="form-floating">
      <input  name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name ="password"  type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input  name="phone" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">PHONE NUMBER</label>
    </div>

      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
   
    
  </form>
                                                            
  <?php              
  }
?>
</main>



