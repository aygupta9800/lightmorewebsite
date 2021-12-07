<!DOCTYPE html>
<html>
    <head>
        <?php
            extract( $_POST);
            $servername = "localhost";
            $username = "root";
            $password = "root";

            $link = mysqli_connect($servername, $username, $password); 
            if (!$link) { 
	            die('Could not connect: ' . mysql_error()); 
            } 
            
            mysqli_select_db($link,'lightmore');


            if(!$firstname || !$lastname || !$email || !$address || !$homephone || !$cellphone) {
                fieldsBlank();
                die();
            }

            $sql = "INSERT INTO users (firstname, lastname, email, address, landline, mobile)
            VALUES ('$firstname', '$lastname', '$email', '$address', '$homephone', '$cellphone')";

            if ($link->query($sql) === TRUE) {
                echo "New record created successfully<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
            }

            $link->close();

            print("<div><a href='/user_search.html'>Click here to go back to user page</a></div>");


            function fieldsBlank(){
        		print("<title>Access Denied</title></head>
        			Body style =\"font-family: arial;
        			font-size: 1em; color: red\">
        			<strong>
        			Please fill in all form fields.
        			<br /></strong>");
        	}

        ?>

    </head>
</html>
