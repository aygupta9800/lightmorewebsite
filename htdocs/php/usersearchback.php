<!DOCTYPE html>
<html>
    <head>
    <?php
        $search_value=$_POST["search"];
        $link = mysqli_connect('localhost', 'root', 'root'); 

        
        if($link->connect_error){
            echo 'Connection Faild: '.$link->connect_error;
        }else{
            mysqli_select_db($link,'lightmore');
            if($search_value) {
            $sql = "SELECT * FROM users WHERE (`firstname` LIKE '%$search_value%') OR (`lastname` LIKE '%$search_value%')  OR (`email` LIKE '%$search_value%')  OR (`landline` LIKE '%$search_value%')  OR (`mobile` LIKE '%$search_value%');";
            $result = mysqli_query($link, $sql);
            

            if ($result) {
                echo "<table border='1'>
                        <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Landline</th>
                        <th>Mobile</th>
            </tr>";

                while($row = mysqli_fetch_array($result)) {  
                    echo "<tr>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['lastname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['landline'] . "</td>";
                    echo "<td>" . $row['mobile'] . "</td>";
                    echo "</tr>";
                 }
                }
                else
                {
                    echo "Sorry, No users found with $search_value";
                }

            }
            # if search value is empty
            else{
                $sql = "SELECT * FROM users";
                $result = mysqli_query($link, $sql);
                if ($result) {
                    echo "<table border='1'>
                            <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Landline</th>
                            <th>Mobile</th>
                </tr>";
    
                    while($row = mysqli_fetch_array($result)) {  
                        echo "<tr>";
                        echo "<td>" . $row['firstname'] . "</td>";
                        echo "<td>" . $row['lastname'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['landline'] . "</td>";
                        echo "<td>" . $row['mobile'] . "</td>";
                        echo "</tr>";
                     }
                    }
            }
        
        }
            #print("<div><a href='/user_search.html'>Click here to go back to user page</a></div>");
            $link->close();
    ?>
    </head>
</html>