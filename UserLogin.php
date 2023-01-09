<?php 

$host = "localhost";
$username = "root";
$password = "";
$db = "user";


 session_start();
//connected
$data = mysqli_connect($host, $username, $password, $db);

//check connect
if ($data === false) 
{
die("connect_error");	// code...
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $username = $_POST["username"];

   $password = $_POST["password"];

 $sql = "select * from login where Username='".$username."' AND Password='".$password."'";

       $result = mysqli_query($data,$sql);

       $row = mysqli_fetch_array($result);

      if ($row['usertype']=="user")
       {    
        $_SESSION["username"]=$username;
 
         header("location:Userhome.php");
  
       }

       elseif ($row['usertype']=="admin") 
       {   
        $_SESSION["username"]=$username;

       header("location:AdminHome.php");
  
       }
       else
       {
         echo "Username or Password is Incorrect";
       }

   }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
     <img src="">   
    </title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <style type="text/css">
    body{
        width:50%; 
        height:50%;
        color: blue;
        margin-left: 220px;
        padding: 32px;
         
    }
body{
    background-image:url("f2.jpg") ;
  background-origin: fill;
    opacity: 9.6 ;
}
    input[type="Username"], input[type="Password"]{
        width:50%; 
        height:10%;
        align-content: 23px;
       display: inline-flex;
       border: 3px solid blue;
        margin: 3px,2px;
        font-family: roman time;
        font-size: 140%;
        padding: 9px 8px;
        border-radius: 6px;
        
    }
    input[type="submit"]{
        width:30%;
        height: 10%;
        font-size: 178%;
        background-color: green;
        border-radius: 9px;
        color: white;
    }
    img.avatar {
  width: 20%;
  height: 20%;
  border-radius: 50%;
  opacity: ;
}

.container {
  padding: 16px;
}
</style>
<body>
        
	  <fieldset>
             <center>  
	
<form class="login" action="#" method="POST">
<div><img src="download.jpeg" alt="Avatar" class="avatar"></center></div>

   
     <legend><h2>User Or Admin</h2> </legend>
<center>
<div>
<input type="Username" name="username" maxlength="30" placeholder="Enter UserName Here..." require>
</div>
<br>
<div>
<input type="Password" name="password" maxlength="13" placeholder="Enter Password Here..."require >
</div>
<br>
<br>
<div>
<input type="submit" value="login">
</div>
<div>
</center>
<br>
	<center> <a href="forgottpass.php" >ForgotPassword ?</a></center>
</center>
</fieldset>

</div>
  </form>

</body>
</html>
