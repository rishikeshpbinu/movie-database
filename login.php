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
$database="login";

$unm=$_POST["uname"];
$pw=$_POST["pwd"];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if ($conn) {
   
    $sql="Select *from login;";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result))
{
$user=$row['username'];
$pass=$row['password'];
}
$num=mysqli_num_rows($result);echo $user. "<br>";
for($i=1;$i<=$num; $i++){

if($unm == $user && $pw==$pass)
{
echo "<script type='text/javascript'>alert('login successfull!')</script>";
header( "refresh:0; url=home.html");
}
else
{
echo "<script type='text/javascript'>alert('incorrect username or password!')</script>";
header( "refresh:0; url=login.html");
}
}
}else
echo "Connection failed";
?>

    </body>
</html>
