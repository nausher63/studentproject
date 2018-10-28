<?php
session_start();
	include_once('connect.php');
if(isset($_POST['singup']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$city =  $_POST['city'];
$pass =  $_POST['password'];
$_SESSION['name']=$name;
$q="insert into lp  VALUES ('$name','$email','$city','$pass')";
$result=mysqli_query($sql,$q);

if($result)
{
	header("location:websitehome.php");
}
else
	echo "failed";
}

if(isset($_POST['login']))
{
	$name1 =$_POST['t1'];
	$pass1 =$_POST['t2'];
	$q1 = "select name ,password from lp where name ='$name1' and password ='$pass1'";
	$r1= mysqli_query($con,$q1);
	$r2=mysqli_fetch_array($r1);
	$count=mysqli_num_rows($r2);
	if($count=1)
	{
		header('location:websitehome.php');
	}else{
		echo "user id is not registered";
	}
}
?>
<html>
<head>
<title>bootstrap</title>
<link href="bootstrep/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="bootstrep/js/jquery.js"></script>
<script src="bootstrep/js/bootstrap.min.js"></script>
</head>
<style>
.nausher{
margin:20px 20px 0px 620px;
}
body{
background-color: wheat;
}
.ali{
margin: 0px 00px 0px 180px;
}
.alish{
margin: 0px 00px 0px 890px;
background-color:wheat;
}
h2{
margin: 0px 0px 0px 0px;
font-size: 35px;

}
h3{
margin: 0px 0px 0px 0p;
}
.footer{
margin: 0px 0px 0px 80px;
font-size:20px;
}
.foot{
margin: 0px 0px 0px 50px;
font-size:30px;
}
.foote{
margin: 0px 0px 0px 00px;
font-size:30px;
}
</style>
<body>

<div class="jumbotron">

<div class="row">
<div class="col-md-6">
<h2><img src="ali.jpg" class="img-circle" width="120px" height="80px" text='nausher' >GOVT ENGG COLLEGE AJMER <pre>                                   STUDENT PORTAL</pre> </h2>



</div>

<div class="alish">
<div class="col-lg-10">
<p>login your account</p>
<form class="form-inline" method="post" action="">
<div class="form-group">
<label>name</label>
<p><span class="glyphicon glyphicon-user"></span><input type="text" name="t1" placeholder="user name"></p>
</div>

<div class="form-group">
<label>password</label>
<p><span class="glyphicon glyphicon-asterisk"></span><input type="password" name="t2" placeholder="password"></p>
</div>

<button type="submit" name="login">login</button>

</form>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-2">
<p><img src="20.jpg" class="img-circle" width="520px" height="380px"></p>
</div>
<div class="nausher">
<div class="jumbotron">
<div class="container">
<div class"col-md-10">
<center><h2> <span class="glyphicon glyphicon-education"></span><strong>CREATE NEW ACCOUNT<br>{ENTER YOUR DEATIL}</strong></center>
<br>

<form  method="post" class="form-horizental">
<div class="form-group">
<label class="control-label-col-sm-8">name:</label>
<div class="col-sm-8">
<input type="text" name="name" class="form-control" placeholder="enter name">
</div>
</div>
<div class="form-group">
<label class="control-label-col-sm-2">email:</label>
<div class="col-sm-8">
<input type="text" name="email" class="form-control" placeholder="enter email">
</div>
</div>

<div class="form-group">
<label class="control-label-col-sm-2">city:</label>
<div class="col-sm-8">
<input type="text" name="city" class="form-control" placeholder="enter city">

</div>
</div>

<div class="form-group">
<label class="control-label-col-sm-2">password:</label>
<div class="col-sm-8">
<input type="password" name="password" class="form-control" placeholder="enter password">

</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-8">
<input type="submit" value="submit" name="singup" class="btn btn-primary">
<input type="reset" class="btn btn-danger" value="reset"><br>
<br>
<p2>create page for student teacher and parents</p2>
</div>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<br>
<br>

</div>
<div class="footer">
<div class="col-md-4 col-md-offset-4">
<br>
<strong>$#64; copyright 2018 !! design by NAUSHER</strong>
<p>contact details</p>
</div>
</div>
</body>
</html>