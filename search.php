<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="abc.css" media="screen">
</head>
<body id="abc">

<div class="topnav">
  <a class="active" href="home.html">Home</a>
<a href="#contact">Contact</a>
   <a href="#contact">Photos</a>
  <a id="aa" href="login.html">Login</a>
  <a id="ab" href="signup.html">Sign Up</a>

</div>

<div class="dropdown">
  <button class="dropbtn">Movies</button>
  <div class="dropdown-content">
    <a href="trailers.html">Latest Trailers</a>
    <a href="#">Upcoming Movies</a>
    <a href="#">Top Rated Movies</a>
  </div>
</div>

    
 <div class="bg-image">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="movie";
$mvnm=$_POST["mname"];


// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if ($conn) {
       
$sql="Select *from addmovie where mname='$mvnm';";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result))
{
$movie=$row['mname'];
if($movie==$mvnm)
{
$drct=$row['director'];
$cast=$row['cast'];
$dop=$row['dop'];
$rating=$row['rating'];
header( "refresh:0;url=dash_home.html");break;
}
else
{
echo "<script type='text/javascript'>alert('movie not found!login to add the movie.')</script>";
break;
}
}
}else
echo "Connection failed";
?>
</div>

    <div class="search-container">
   Movie Name:<?php echo $movie; ?>
   Director:<?php echo $drct; ?>
Cast:<?php echo $cast;?>
DOP:<?php echo $dop;?>
Rating:<?php echo $Rating;?>
    </form>
  </div>
    </body>
</html>