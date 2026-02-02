<?php
$username = '';
$usernameErr = $passwdErr = '';
if (isset($_POST['username'], $_POST['passwd'])) {

  $username = trim($_POST['username']);
  $passwd = trim($_POST['passwd']);


  if (empty($username)) {
    $usernameErr = 'please input username';
  }

  if (empty($passwd)) {
    $passwdErr = 'please input password';
  }


  if (usernmaeExists($username)) {
    $usernameError = 'USERNAME_ALLREADY_EXISTS';
  }

  if (empty($usernameErr) && empty($passwdErr)) {
    $user = loginUser($username, $passwd);
    if ($user !== false) {
      $_SESSION['user_id'] = $user->id;
      echo "Hi";
      header('Location: ./?page=dashboard');
    } else {
      $usernameErr = 'incorect!!';
    }
  }
}

?>

<form method="post" action="./?page=login" class="col-md-6 col-lg-6 col-sm-6 col-xl-6 col-xs-6 mx-auto my-5">
  <h3>Login</h3>
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input name="username" type="text" class="form-control
    <?php echo empty($usernameErr) ? '' : 'is-invalid' ?>">
    <div class="invalid-feedback"><?php echo $usernameErr; ?></div>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input name="passwd" type="password" class="form-control
     <?php echo empty($passwdErr) ? '' : 'is-invalid' ?>">
    <div class="invalid-feedback"><?php echo $passwdErr; ?></div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>