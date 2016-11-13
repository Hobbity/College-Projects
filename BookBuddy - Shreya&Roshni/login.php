<!DOCTYPE html>
<html>
  <head>

    <title>Book Exchange</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="demo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="demo.js"></script>

<script>
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}

function ValidateEmail()   

{  

 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.username.value))  

  {  

    return (true)  

  }  

    alert("You have entered an invalid email address!")  

    return (false)  

}  

</script>

<style type="text/css">
  body{
    background: url(header.jpg);
  }
</style>


  </head>



    <body>

      <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
          <div class="navbar-header">
          <a class="navbar-brand" href="index.php" >BookBuddy</a>
          </div>
          <ul class="nav navbar-nav">
            <!--
            <li><a href="index.php">Home</a></li>
            
            <li><a href="browse.php">Browse</a></li>
            <li><a href="home.php">Your Bookshelf</a></li>
            <li><a href="messages.php">Messages</a></li>
          -->
          </ul>
        <ul class="nav navbar-nav navbar-right">
      <li  class="active"><a href="login.php"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>

      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <!--
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  -->
    </ul>
        </div>
      </nav>

<div class="form">
        
        <div id="login">   
          <h1>Welcome to BookBuddy!</h1>
          
          <form name="myForm" action="checklogin.php" onsubmit="return ValidateEmail()"  method="POST" style="color:black;">
          
            <div class="field-wrap">
            
            <input type="email"required autocomplete="off"/ placeholder="Email Address" name="username" >
          </div>
          
          <div class="field-wrap">
           
            <input type="password"required autocomplete="off"/ placeholder="Password" name="password" >
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" style="background-color:black"/>Log In</button>
          
          </form>

        </div>
        
</div>

<!--
        <h2>Login Page</h2>
        <a href="index.php">Click here to go back</a>
        <br/><br/>
        <form action="checklogin.php" method="POST">
           Enter Username: <input type="text" name="username" required="required" /> <br/>
           Enter password: <input type="password" name="password" required="required" /> <br/>
           <input type="submit" value="Login"/>
        </form>
-->

    </body>
</html>