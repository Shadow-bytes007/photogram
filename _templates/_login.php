<?
 $username = $_POST['email_address'] ;
 $password = $_POST['password'] ;
echo $username ;

echo '<br>';
$result = User::login($user,$pass);
 // $result = validate_credentials($username , $password); 
if($result){
  ?>
  <div class="bg-body-tertiary p-5 rounded">
    <h1>LOGIN SUCCESSFUL</h1>
    <p class="lead">you have the access to visit the photogram 😍. basic login with html forms</p>
  </div>
  <?
}else {
      ?>
<!-- took from downloaded source code bootstrap  -->
<main class="form-signin w-100 m-auto"> 
  <form method="post" action="login.php" >
    <img class="mb-4" src="/legacy_php/photogram_app/DDG logo.jpeg" alt=""  height="200">
    <h1 class="h3 mb-3 fw-normal">Please LOG in</h1>

    <div class="form-floating">
      <input  name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name ="password"  type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
   
    
  </form>
                                                            
  <?               
}
?>

</main>



