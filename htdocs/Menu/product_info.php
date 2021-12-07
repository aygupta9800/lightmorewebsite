<?php
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
$menu_addr = './Menu_list.html';
$item_addr = './';
$page_id = $_GET['id'];
if(array_key_exists('recentviews', $_COOKIE)) {
    $cookie = $_COOKIE['recentviews'];
    $cookie = unserialize($cookie);
} else {
    $cookie = array();
}

echo "<br/>";
if($page_id == 'lastfive'){
    $items = array_slice($cookie, -5);
    echo '<b>Last Visited Items</b>';
    echo '<br/>';
    foreach($items as $value){ 
    echo "<a href='$item_addr$value.php'> $items_menu[$value]</a>";
    echo "<br/>";
    }
    echo "<br/>";
    echo "<a href='$menu_addr'>Main Menu</a>";
}

# most visited pages logic
if($page_id == 'fivemost'){
    $most_visited = array_count_values($cookie);
    arsort($most_visited,SORT_NUMERIC);
    echo '<b>Frequently Visited Items</b>';
    echo '<br/>';
    $arraysliced = array_slice($most_visited,0,5,true);
    foreach($arraysliced as $key=>$value){
        echo "<a href='$item_addr$key.php'> $items_menu[$key]</a>";
    echo "<br/>";
    }

    echo '<br/>';
    echo "<a href='$menu_addr'>Main Menu</a>";
    
}


?>