<html>
<head>
      <tittle>Login Page<tittle>
</head>
<body background="fimage.jpg">
<form action="login.php" method="post">
<table  width="20%"  bgcolor="0099cc" align="center">
<tr>
<tdcolspan=2><center><font size=4><b>LOGIN FORM</b></font></center></td>
</tr>

<tr>
  <td>EMAIL:</td>
  <td><input type="text" size=25 name="email"></td>
</tr>

<tr>
  <td>PASSWORD:</td>
  <td><input type="password" size=25  name="password"></td>
</tr>

<tr>
   <td><input type="Reset"></td>
   <td><input type="submit" value="Login"></td>
</tr>
</table>
</form> 
</body>
</html>






<?php
if($_POST){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hariprasaad";
$e=$_POST['email'];
$w=$_POST['password'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select * from student where email='$e' && password='$w'";
  $res = $conn->query($sql);
  if ($res)
{                               //redirect to main page
  echo 'logged succesfully';
}}
catch(PDOException $f) {
  echo $sql . "<br>" . $f->getMessage();
   }

$conn = null;
}
?>

