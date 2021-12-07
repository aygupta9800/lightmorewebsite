<!DOCTYPE html>
<html>
<head>
     <?php
        extract( $_POST);

        if (!$username || !$password) {
        	fieldsBlank();
        	die();
        }
        if( $username ) {
        	if(!( $creds = fopen("assets/data/password.txt", 'r'))){
        		print('<html><head><title>Error</title></head>
        			<body>Error opening password file
        			</body></html>');
        		die();
        	}

        	$userVerified = 0;

        	while(!feof($creds) && !$userVerified){

        		$line = fgets($creds, 255);
        		$line = chop($line);
        		$field = preg_split("/,/", $line);

        		if($username = $field[0]){
        			$userVerified = 1;

        			if(checkpassword($password, $field) == true)
        				accessGranted($username);
        			else
        				wrongpassword();
        		}
        	}

        	fclose($creds);

        	if(!$userVerified)
        		accessDenied();
        		}

        	function checkpassword($userpassword, $credsdata){
        		if($userpassword == $credsdata[1])
        			return true;
        		else
        			return false;
        	}


        	function accessGranted($name){
        		header('Location: /users_list.html');
        	}

			function accessDenied(){
        		print("<head><title>Access Denied</title></head>
        			<body style = \"color: red\">
        			<strong>
        			Server has denied your access.
        			<br/></strong></body>");
        	}

        	function wrongpassword(){
        		print("<head><title>Access Denied</title></head>
        			<body style = \"color: red\">
        			<strong>Invalid
        			password.<br/>Access has
        			been denied.</strong>");
        	}
        	

        ?>

</head>
</html>