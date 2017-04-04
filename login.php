<!DOCTYPE html>
<?php 
// define variables and set to empty values
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

  <!-- Custom styles for this template go here -->
  <link rel="stylesheet" href="indexStyle.css">

  </head>
  <body data-spy="scroll" data-target=".navbar">
   <!--navbar starts here-->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!--<div class="container-fluid">-->
    <header class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
      data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div class="myNameOnNavbar">
      <a href="#"><h3>A Get into Tech Production</h3></a>
    </div> <!--end projectName -->
  </header><!--end nav header-->
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#faq">Learn More</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </div>
</nav><!--end navbar-->
<!--end navigation-->
<div class="container" id="loginDown">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="POST">
  Username:<br>
  <input type="text" name="username" value="Enter your username">
  <br>
  Password:<br>
  <input type="password" name="password">
  <br><br>
  <input type="submit" value="Submit">
</form> 
  <?php        
echo "<h2>Your Input:</h2>";
echo "<h2>Your Username is: $username </h2>";
echo "<h2>Your password is: $password </h2>";

?>
        </div>
        <div class="col-md-3 col-xs-12">
          <aside class="asideCSS">
            <h3>Archive</h3>
              <ul>
                <li>Prev Post</li>
                <li>Prev Post</li>
                <li>Etc</li>
                <li>Etc</li>
              </ul>
          </aside>
        </div>
      </div>
</div>
    
  </body>
  </html>
