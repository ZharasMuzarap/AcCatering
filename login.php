<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AC Catering | Sign in</title>
    <link rel="stylesheet" href="css/login.css" media="screen" type="text/css" />
</head>
<body>
    <div class="menu">
        <ul id = "left">
            <li><a class="ancLinks" href="index.php">Home</a></li>
            <li><a class="ancLinks" href="index.php#Second">About us</a></li>
            <li><a class="ancLinks" href="index.php#Third">Menu</a></li>
            <li><a class="ancLinks" href="index.php#Fourth">Our Team</a></li>
            <li><a class="ancLinks" href="index.php#Fifth">Contact us</a></li>
        </ul>
    </div>
    <div id="login-form">
      <h1>Sign in</h1>
        <fieldset>
            <form action="check_student.php" name="login" onSubmit="provGuest(); return(false);" method="get">
                <input name= "card" type="tel" required value="Login" onBlur="if(this.value=='')this.value='Login'" onFocus="if(this.value=='Login')this.value='' "> 
                <input name= "password" type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> 
                <input name= "submit" type="submit" value="Submit">
            </form>
        </fieldset>
    </div> 
</body>
</html>