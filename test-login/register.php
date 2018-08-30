<!DOCTYPE html>
<html lang="'en'" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <?php
    require 'db.php';
    //session.start();
    $email=$_POST['umail'];
    $name=$_POST['uname'];
    $pass=$_POST['upwd'];
    $urole="reporter";
    $spec=$_POST['spec'];

    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());
    if ( $result->num_rows > 0 ){
      echo "<h3>"."User $name already registered.Please Login!"."</h3>";
    }
    else {
      $sql = "INSERT INTO users (email,uname,password,urole,specialization) VALUES ('$email','$name','$pass','$urole','$spec')";
      if ($mysqli->query($sql)) {
        echo "done";
        echo "<a href='index.html'>Login Here</a>";
      }
      else {
        echo "error";
      }

    }
?>
  </body>
</html>
