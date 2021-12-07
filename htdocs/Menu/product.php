<?php ob_start();


$items_menu = [
    'item1' => 'Pizza',
    'item2' => 'Spring rolls',
    'item3' => 'Chinese Noodles Bowl',
    'item4' => 'Beef Noodles',
    'item5' => 'Chicken Scapello',
    'item6' => 'Caprese Chicken',
    'item7' => 'Burger',
    'item8' => 'Butter Chicken',
    'item9' => 'TTeokbokki Korean Street Food',
    'item10' => 'Kimchi',
];

$items_id = [
    'item1' => 1,
    'item2' => 2,
    'item3' => 3,
    'item4' => 4,
    'item5' => 5,
    'item6' => 6,
    'item7' => 7,
    'item8' => 8,
    'item9' => 9,
    'item10' => 10,
  ];
?>

<?php
if(isset( $_COOKIE["userid"]))
{
 $userid = $_COOKIE["userid"];
 echo 'userid: '.$userid;
 
  $servername = "database-1.ckswgwtyfetx.us-west-2.rds.amazonaws.com";
  $username = "root";
  $password = "chitty1411";
  $dbname="marketplace";


  $conn = mysqli_connect($servername, $username, $password);
  if (!$conn) {                 
    die('could not connect: ' . mysql_error()); 
   } 
 
  mysqli_select_db($conn,$dbname);
    $id = $_GET['id'];
    $page= $_SERVER['HTTP_REFERER']; 
    $page = dirname($page).'/'.$id.'.php' ;
    $name=$items_menu[$id];
    $itemno = $items_id[$id]; 
    

    $mhits=1;
     $res=$conn->query("SELECT * from marketplace.producthits where userid=$userid and productname='$name' and type='lightmore';");
    if($res->num_rows >0)
    {
        echo 'in if';
        $mprod = $res -> fetch_assoc();
        $mhits = $mprod["hits"] + 1;
        echo '<br/>mhits: '.$mhits.'<br/>';
        $conn->query("UPDATE marketplace.producthits SET hits = $mhits WHERE userid=$userid and productname = '$name' and type='lightmore';");    
    }
    else{
        echo 'in else';
        echo '<br/>';
        echo "INSERT INTO marketplace.producthits (prodid,type,hits, userid, productname, prodlink) VALUES($itemno,'lightmore',$mhits,$userid,'$name','$page');";
        $pres=$conn->query("INSERT INTO marketplace.producthits (prodid,type,hits, userid, productname, prodlink) VALUES($itemno,'lightmore',$mhits,$userid,'$name','$page');");  
        if($pres=== TRUE)
        {
            echo "inserted successfully";
        }
        else{
            echo "error";
        }
    }
    
    $conn->close();
}
?>


<?php
$page_id = $_GET['id'];
if(array_key_exists('recentviews', $_COOKIE)) {
    $cookie = $_COOKIE['recentviews'];
    $cookie = unserialize($cookie);
} else {
    $cookie = array();
}

$cookie[] = $page_id;
$cookieString = serialize($cookie);
setcookie('recentviews', $cookieString , time()+3600); 

echo $_GET['id'];

echo '<br/>';

# redirect to other page
header("Location: ./$page_id.php"); 

?>