<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<html>
<head>  
        <!--POPup-->
		<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/signup/css/style.css">
		<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/signup/css/style2.css">
		<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/signup/css/signup.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="description" content ="My website">
	<title>Suggestions</title>
	
</head>
<body>
<div class="banner">
	<img class="img1" src="https://osboha180suggestion.000webhostapp.com/signup/css/logo.png">
</div>
<form action="https://osboha180suggestion.000webhostapp.com/signup/" method="post" style="border:1px solid #ccc">
  <div class="container">
<div class="done" style="color:red"> <?php if(isset($response)){echo $response;} ?>	<br></div>
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	 <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>
	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>


    <div class="clearfix">
 
      <button name="submit" id="submit" type="submit" value="Submit">Sign Up</button>
    </div>
  </div>
</form>