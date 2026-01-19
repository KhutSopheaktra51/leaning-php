<?php

$nameErr = $usernameErr = $passwdErr = '';
$name = '';

if (isset($_POST['name'], $_POST['username'], $_POST['password'], $_POST['confirmpasswd'])) {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $passwd = $_POST['password'];
  $confirmpasswd = $_POST['confirmpasswd'];

  if (empty($name)) {
    $nameErr = "please input name";
  }
  if (empty($username)) {
    $usernameErr = 'please input username';
  }
  if (empty($passwd)) {
    $passwdErr = 'please input password';
  }
  if (empty($confirmpasswd)) {
    $confirmpasswdErr = 'please confirm password';
  }
}

?>

<form method="post" action="./?page=register" class="col-md-6 col-lg-6 col-sm-6 col-xl-6 col-xs-6 mx-auto my-5">
  <h3>Register Page</h3>
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" value="<?php echo $name?>" type="text" class="form-control
    <?php echo empty($nameErr) ? '' : 'is-invalid' ?>">
    <div class="invalid-feedback"><?php echo $nameErr ?></div>
  </div>
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input name="username" type="text" class="form-control
    <?php echo empty($usernameErr) ? '' : 'is-invalid' ?>">
    <div class="invalid-feedback"><?php echo $usernameErr ?></div>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input name="password" type="password" class="form-control
     <?php echo empty($passwdErr) ? '' : 'is-invalid' ?>">
    <div class="invalid-feedback"><?php echo $passwdErr ?></div>
  </div>
  <div class="mb-3">
    <label class="form-label">Confirm Password</label>
    <input name="confirmpasswd" type="password" class="form-control
    <?php echo empty($confirmpasswdErr) ? '' : 'is-invalid' ?>">
    <div class="invalid-feedback"><?php echo $confirmpasswdErr ?></div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>