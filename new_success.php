<?php 

$name =$_POST['name'];
$id =$_POST['id'];
$branch =$_POST['branch'];
$password =$_POST['password'];
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);
$sql = "INSERT INTO details_stu (name, ID, branch, password)  
VALUES ('$name', '$id', '$branch', '$password')";
$retval = mysql_query( $sql, $con);
if(! $retval ) {
      die('Could not update data1: ' . mysql_error());
   }
$sql2 = "INSERT INTO record_stu (id, book1, book2, book3, book4)  
VALUES ('$id', '', '', '', '')";
$retval2 = mysql_query( $sql2, $con);
if(! $retval ) {
      die('Could not update data2: ' . mysql_error());
   }
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
        <div class="row1">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Welcome
                        <strong><?php echo $name."</br>";?></strong>
                    </h2>
                    <hr>

<hr>
                    <h2 class="intro-text text-center">Your ID
                        <strong><?php echo $id."</br>";?></strong>
                    </h2>
                    <hr>


<hr>
                    <h2 class="intro-text text-center">Branch
                        <strong><?php echo $branch."</br>";?></strong>
                    </h2>
                    <hr>


<hr>
                    <h2 class="intro-text text-center">Password
                        <strong><?php echo $password."</br>";?></strong>
                    </h2>
                    <hr>                
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
</div>
</body>
</html>