<?php
session_start();
if (isset($_SESSION["username"] ))
 {
	header("location:LoGIN.php");
}
?>

<?php
//Connected...

$severname ="localhost";
$username ="root";
$password ="";
$dbname = "custo";

$link = mysqli_connect($severname,$username,$password,$dbname);
$con = mysqli_select_db($link,"custo");

//Check connect...

if ($con)
{ 
	
}
else 
{

  die("connection failed Because ".mysqli_connect_Error());	
}

?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title></title>
</head>
<style type="text/css">
	body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: blue;
 border-bottom-right-radius: red;
 color: white;
 height: 95%;
 width: 60%;
 padding: 34px;
 margin: 68px;
}
form{
	 font-family: bell;
	 padding: 34px;
	 margin: 54px;
	 font-size: 140%;
     width: 70%;
      height: 120%;
      input-security: revert-layer;
      background-image: ;

 }
input[type=text], select {
    width:  90%;
  padding: 6px;
  margin:  auto;
  border: 4px solid  indigo;
  border-radius: 6px;
}
select{
	font-family: monospace;
	font-size: 90%;
}
</style>
<body>

	<iu><a href="LoGIN.php"> Logout</a></iu>
	<iu><a href="LoGIN.php"> Logout</a></iu>
	<iu><a href="LoGIN.php"> Logout</a></iu>
	<a href="LoGIN.php"> Logout</a>

<fieldset>
	<legend><h1>Feul Station UserLoGiN</h1></legend>

	<legend><h2>Customer Info</h2></legend>
	
<form name="class" action="#" method="POST">
	<div>
	<tr>
	<td>Customer Name</td>
	<td><input type="text" name="customername" placeholder=" --Enter Customer Name--" required>
</td>
<br>
<br>
<tr>
<td>Amount</td>
<td><input type="text" name="Amount" placeholder=" --Enter Money--" required>
</tr>
<br>
<br>
<tr>
<td>Vehicle Number</td>
<td><input type="text" name="Vehiclenumber" placeholder=" --Enter Vehicle No--" required>
</tr>
<br>
<br>
<tr>
<td>Moble Number</td>
<td><input type="text" name="Moblenumber" placeholder=" --Enter Phone--" required >
</tr>
<br>
<br>
<td>Date</td>
<td><input type="Date" name="" placeholder="Date" required>
</tr>
<br>
<br>

<select name="gender" required >
		<option value="showAll" selected="selected">Select Gender</option>
    <option Value="">Female </option>
    <option Value="">Male</option>
</select>
<br>
<br>

<select name="Feul" required>
		<option value="showAll" selected="selected">Select Fuel Types</option>
    <option Value="1">Petrol</option>
    <option Value="2">Diesel</option>
     <option Value="3">Kerosene</option>
     <option Value="">Oil</option>
</select>
</div>
<br>
<div>

<select  name="Vehicle" required>
		<option value="showAll" selected="selected"> Select Vehicle Typ</option>
    <option Value="1">Taxi</option>
    <option Value="2">Trotro</option>
     <option Value="3">Trucks</option>
      <option Value="4">Others</option>
</select>
</div>
<br>
<br>
 
</tr>
<br>
<br>
</div>
<div>
<td colspan="2" align="center" >
<input type="submit" name="submit1" value="Insert">
<input type="submit" name="submit2" value="Detele">
<input type="submit" name="submit3" value="Update">
<input type="submit" name="submit1" value="Sarch">
</tr>
</div>
<br>
<div>
<td colspan="2" align="center" >
  <button> <a href="LoGIN.php">Logout</a> </button>
</tr>
</div>
</fieldset>
</form>
</body>
</html>


<?php

//Statement Query

if (isset($_POST['submit1']))//Insert...
{
mysqli_query($link,"insert into cust Values('$_POST[customername]','$_POST[Amount]','$_POST[Vehiclenumber]','$_POST[Moblenumber]','$_POST .1/07/1919.','$_POST [gender]','$_POST [Fuel]','$_POST [Vehicle]') " );
{
echo"New Record Save";
}



}
if (isset($_POST['submit2']))//Delete...
{
mysqli_query($link,"DELETE * FROM `cust` where customername  ='$_POST[customername]'");
echo"You had deletd";
}


if (isset($_POST['submit3']))//Update...
{
	mysqli_query($link,"update cust set customername ='$_POST[customername]' where  customername='$_POST[customername]'");
}

if (isset($_POST['submit4']))//Search...
{
	$res_mysqli_query($link,"SELECT * FROM `cust` "); {

	}
	echo"<table border = 1 >";
	echo"<tr>";
	echo"<td>"; echo"customername"; echo"</td>";
	echo"<td>"; echo"Amount"; echo"</td>";
	echo"<td>"; echo"Vehiclenumber"; echo"</td>";
	echo"<td>"; echo"Moblenumber"; echo"</td>";
	echo"<td>"; echo"#1/07/1919#"; echo"</td>";
	echo"</tr>";

}


if (isset($_POST['submit1']))//Display...
{
	$res_mysqli_query($link,"SELECT * FROM `cust` where  username ='$_POST[customername]' ");
	echo"<table border = 1 >";
	echo"<td>"; echo"customername"; echo"</td>";
	echo"<td>"; echo"Amount"; echo"</td>";
	echo"<td>"; echo $row['Vehiclenumber']; echo"</td>";
	echo"<td>"; echo $row['Moblenumber']; echo"</td>";
	echo"<td>"; echo $row['#1/07/1919#']; echo"</td>";
	echo"</tr>";
{
    echo"</table>";
}
	while ($row =mysqli_fetch_array($res)) 
	{
	echo"<tr>";
	echo"<td>"; echo $row['customername']; echo"</td>";
	echo"<td>"; echo $row['Amount']; echo"</td>";
	echo"<td>"; echo $row['Vehiclenumber']; echo"</td>";
	echo"<td>"; echo $row['Moblenumber']; echo"</td>";
	echo"<td>"; echo $row['#1/07/1919#']; echo"</td>";
	echo"</tr>";	
	}
	echo"</table>";

	}

?>
