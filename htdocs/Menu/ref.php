<?php
    $id = $_REQUEST['id'];
    $page= $_SERVER['HTTP_REFERER'];   
    //parse_str($_SERVER['QUERY_STRING']);
    $result = $conn->query("SELECT * FROM sys.products where id = ".$id.";");
    $prod = $result -> fetch_assoc();
    $hits = $prod["hits"] + 1;
    $mhits=1;
    $conn->query("UPDATE products SET hits = ".$hits." WHERE id = ".$id.";");      
     $res=$conn->query("SELECT * from marketplace.producthits where prodid=$id and type='soulfulart';");
    if($res->num_rows >0)
    {
        $mprod = $res -> fetch_assoc();    
        $mhits = $mprod["hits"] + 1;  
        $conn->query("UPDATE marketplace.producthits SET hits = ".$mhits." WHERE prodid = ".$id." and type='soulfulart';");    
    }
    else{
        $name=$prod['name'];
        $conn->query("INSERT INTO marketplace.producthits VALUES($id,'soulfulart',$mhits,1,'$name','$page');");  
    }
    $conn->close();
?>