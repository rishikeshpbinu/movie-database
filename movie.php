<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
$servername = "localhost";
$username = "root";
$password = "";
$database="movie";
$mvnm=$_POST["mname"];
$drct=$_POST["dname"];
$cast=$_POST["cst"];
$dop=$_POST["cman"];
$rating=$_POST["rating"];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if ($conn) {
		$sql=mysqli_query($conn,"insert into movietb(movie,director,cast,dop,rating) values('$mvnm','$dname','$cst','$cman','$rating')");
		echo "<script type='text/javascript'>alert('Registration Complete!')</script>";
                header( "refresh:1; url=dash_home.html");
	}
else {
 echo "Connection failed";
}
?>
