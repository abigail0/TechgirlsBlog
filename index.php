<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title></title>  
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
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#faq">Learn More</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#login">Login</a></li>
    </ul>
  </div>
</nav><!--end navbar-->
<!--end navigation-->
<div class="container-fluid">
  <div class="jumbotron" id="home">
    <div class="row">
      <div class="col-md-12">
        <h1>Tech Girls Blog</h1>
      </div>
    </div>
  </div><!--end jumbotron-->
</div><!--end container-->
    <?php
    $str = "Hello Girls, this is the start of our Blog";
    $revStr = strrev($str);
    $origStr = strrev($revStr);
    ?>
    <h1 class="centre">Welcome to the Blog</h1>
    <h2 class="centre"><?= $revStr; ?></h2>
    <h2 class="centre">and</h2>
    <h2 class="centre"><?= $origStr; ?></h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <article>
      <h1 class="articleTitle">This will be a post title</h1>
      <p class="articleText">This will be the text area</p>
      <p class="comments">This part is for the comments, social media stuff</p>
    </article>
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
    <footer>
      <h3>This is a footer</h3>
    </footer>
  </body>
</html>
