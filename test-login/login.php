<?php
require 'db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>

<?php
$email=$_POST['umail'];
// $name=$_POST['uname'];
$pass=$_POST['upwd'];
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());


if ( $result->num_rows == 0 ) {
    echo "User does't Exist";
// $obj = $result->fetch_object();
//
// $hashpwd=password_hash($pass,PASSWORD_DEFAULT );
//       if($obj->password==$hashpwd){
//         echo 'Successfully LoggedIn';
//       }
//       else {
//           echo 'Incorrect Crdential';
//         }
}
else {

   $user = $result->fetch_assoc();
   if ($pass===$user['password']) {
      $_SESSION['username']=$user['uname'];
      $_SESSION['email']=$user['email'];
      header("location:../index.php");
   }
   else {
     echo "Wrong Password .....Try Again !!";
   }


}
// $hashpwd=password_hash(password,PASSWORD_DEFAULT );
// $sql = "INSERT INTO user (email, name,password) VALUES ('$email','$name','$hashpwd')";
//
//             if ($mysqli->query($sql)) {
//               echo "done";
//             }
//             else {
//               echo "error";
//             }
 ?>
  </body>
  </html>
