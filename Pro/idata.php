
<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="practical";

  $conn=new mysqli($servername, $username,$password,$dbname);
  if ($conn->connect_error)
  {
    die("failed");

  }
  $uname=$_POST['uname'];
  $pass=$_POST['pass'];

  $sql="INSERT INTO idata (uname, pass) VALUES ('$uname','$pass')";

if($conn->query($sql)==true)
{
  echo"Login Successful";
}
else {
  echo "Failed";
}
$conn->close();

?>
