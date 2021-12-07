<?php
    echo 'outside';
    if(isset($_REQUEST['id']))  #&& basename($_SERVER['HTTP_REFERER'])=="markethomepage.php" )
    {
	    echo 'inside';
	   // echo basename($_SERVER['HTTP_REFERER']);

        $servername = "database-1.ckswgwtyfetx.us-west-2.rds.amazonaws.com";
  $username = "root";
  $password = "chitty1411";
  $dbname="marketplace";


  $conn = mysqli_connect($servername, $username, $password);
  if (!$conn) {                 
    die('could not connect: ' . mysql_error()); 
   } 
 
  mysqli_select_db($conn,$dbname);

      $id =htmlentities($_REQUEST['id']);         
      $sql="SELECT * from marketplace.encryptiondata where ciphertext='$id';";
      $res=$conn->query($sql);
      $sessionid="";
      if($res->num_rows > 0)
       {    
        $sres=$res->fetch_assoc();  
        //echo $sres['tag'];       
        $tag =hex2bin($sres['tag']); 
        $iv = hex2bin($sres['iv']);      
        $key="market";
        $ciphertext="";
        //echo $tag;
        //echo $iv;
        $cipher = "aes-128-gcm";
       // $tags="";
        if (in_array($cipher, openssl_get_cipher_methods()))
        {
            $ciphertext = $id;          
            $original_plaintext = openssl_decrypt($id, $cipher, $key, $options=0, $iv,$tag);
            $sessionid=$original_plaintext;
           echo $original_plaintext;//got the session id , now get the user id with session id
            // echo $userid;
        }
        $sqlu="SELECT * from marketplace.userstatus where sessionid='$sessionid' and status='active';";
	$resu=$conn->query($sqlu);
  echo '<br/>';
	print_r($resu);
        if($resu->num_rows > 0)
         {   
          #print_r($resu); 
          
          $sresu=$resu->fetch_assoc();       
          $userid=$sresu["userid"];
          echo '<br/>';
          echo $userid;
          setcookie("userid", $userid, time() + (86400 * 30));
          header("location: Menu_list.html");
         }
         else{
          setcookie("userid","", time() - 3600);
          #header("location: error.php");
          exit();
       }
       }      
      else{
        setcookie("userid","", time() - 3600);
         #header("location: error.php");
         exit();
      }
     
      $conn->close();
     
    }
    else{    
      setcookie("userid","", time() - 3600);  
      #header("location: error.php");
      exit();
    }
  
    
?>
