<?php
$book=$_POST["book_name"];
$author=$_POST["author_name"];
$host="localhost";
$user="root";
$pass="";
$count = 0;
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);
$sql = "INSERT INTO order_books (book_name, Author_name)  
VALUES ('$book', '$author')";
$order = mysql_query( $sql, $con);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>E-Library</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="css/main.css" rel="stylesheet">    
<link href="css2/creative.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php">Library</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="home.php">Home</a></li>
          <li><a href="stu_login.html">Student Login</a></li>
          <li class="active" ><a href="admin_login.html">Admin login</a></li> 
          <li><a href="#">Contacts</a></li> 
           <li><a href="#">About us</a></li> 
        </ul>
      </div>
    </nav>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
            <div class="row">
                <div class="col-lg-12 text-center bottom-separator">
                    <img src="ico.png" class="img-responsive inline" alt="">
                </div>
            <div class="row">
                <div class="col-lg-12"><hr>
                    <h1 class="intro-text text-center"> 
                        <strong>B</strong>ook ordered
                    </h1><hr>
                </div>
            </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <a  href="order_books.php" button type="button" class="btn btn-info"><h1 class="text-center">Order for more books</h1></a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="box">
            <div class="col-sm-12 text-center">
                <h2 class="intro-text text-center">Checking library status
                    <strong>On-The-Go</strong>
                </h2>
                   <hr class="visible-xs">
                    <p>An online library system to check library card information by student in 
                    order to know the status of number of books issued and also check our library card details.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>