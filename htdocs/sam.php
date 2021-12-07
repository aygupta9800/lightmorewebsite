<?php
   echo '<h1>Users</h1>';
   $conn = mysqli_connect('localhost', 'root', 'root');

   if (!$conn) {
    die('could not connect: ' . mysql_error());
   }

   mysqli_select_db($conn,'lightmore');
   $query = "select * from users";
   $res = $conn->query($query);
   $resStr = '';
   echo "<h2>Food World!</h2>";
   while ( $row = $res->fetch_assoc()) {
    $resStr = $row['firstname']." ".$row['lastname']." ".$row['email']." ".$row['address']." ".$row['landline']." ".$row['mobile']."<br>";
    echo $resStr;
   }


  # Fetch Users from AngMaterials using curl
  $ch= curl_init();
  curl_setopt($ch, CURLOPT_URL,"http://angmaterials.com/userlist.php");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output= curl_exec($ch);
  $userList = explode(";", $output);
  echo "<h2>AngMaterials</h2>";
  foreach ($userList as $user) {
    echo "$user <br>";
  }

  # Fetch Users from Soulfulart using curl
  $ch1= curl_init();
  curl_setopt($ch1, CURLOPT_URL,"http://www.soulfulart.ml/userlist.php");
  curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
  $output= curl_exec($ch1);
  $userList = explode(";", $output);
  echo "<h2>Soulful art</h2>";
  foreach ($userList as $user) {
    echo "$user <br>";
  }

?>