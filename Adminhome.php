<?php
session_start();
if (isset($_SESSION["username"] ))
 {
	header("location:LoGIN.php");
}
?>

				<?php


//specify the server name and here it is localhost
$host = "localhost";
//specify the username - here it is root
$username = "root";
//specify the password - it is empty
$Password = "";
//specify the sever
$db = "custo";

// Creating the connection by specifying the connection details
$conn = mysqli_connect($host, $username, $Password, $db);

// Checking the  connection
if ($conn===false) 
{
 die("connect_error");
}
?>

				<?php
			
				{

				}
                $sql = "SELECT customername, Amount, Vehiclenumber,Moblenumber FROM cust ";

                $result = $conn->query($sql);

               
                if ($result-> num_rows > 	0) {
                	while ($row = $result-> fetch_assoc()) {
                		{
                				echo"<table border = 4 >";
	echo"<tr>";
	echo"<td>"; echo $row['customername']; echo"</td>";
	echo"<td>"; echo $row['Amount']; echo"</td>";
	echo"<td>"; echo $row['Vehiclenumber']; echo"</td>";
	echo"<td>"; echo $row['Moblenumber']; echo"</td>";
	echo"</tr>";	
	}
	echo"</table border >";
}

              }
               
           
				?>
<a href="LoGIN.php"> Logout</a>
	