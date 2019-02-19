<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<html>
<head>
		<link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter-3.1.9/css/style.css">
				<link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter-3.1.9/css/style2.css">
				<link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter-3.1.9/css/login.css">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta charset="utf-8">
		
		<meta name="description" content ="My website">
	<title>Suggestions</title>
</head>
<body>
<div class="banner">
	<img class="img1" src="http://localhost/codeigniter-3.1.9/css/logo.png">
</div>
	<div class="done"> <?php if(isset($response1)){echo $response1;} ?>	<br></div>

<form id="admin" method='post' action='http://localhost/CodeIgniter-3.1.9/index.php/welcome/control'>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" id="username" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" id="password" placeholder="Enter Password" name="password" required>

    <button name="submit" id="submit" type="submit" value="Submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span>or </span><button type="button" class="cancelbtn" onclick="window.location.href='http://localhost/CodeIgniter-3.1.9/index.php/welcome/signup'">Signup</button>

  </div>
</form>