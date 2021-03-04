<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
      <h1>JSON EXAMPLE</h1>
<?php
  
   $user = $password ="";
   $userErr = $passwordErr ="";

   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
   	 if (empty($_POST['username']))
   	 {
   	 	$userErr = "Enter your user name";
   	 }
   	 else
   	 {
   	 	$user = $_POST['username'];
   	 }

   	 if (empty($_POST['password']))
   	 {
   	 	$passwordErr = "Enter your password";
   	 }
   	 else
   	 {
   	 	$password = $_POST['password'];
   	 }


   	 if ($userErr == "" && $passwordErr == "") 
   	 {
   	 	$user = $_POST['username'];
   	 	$password = $_POST['password'];

   	 	$open_file = fopen("value.txt", "r");
   	 	$read_file = fread($open_file, filesize("value.txt"));
   	 	fclose($open_file);

   	 	$data_filter = explode("\n", $read_file);
   	 	for ($i=0; $i <count($data_filter); $i++) 
   	 	{ 
   	 		$json_decode = json_decode($data_filter[$i],true);
   	 		if ($json_decode['username'] == "username" && $json_decode['passwors'] == "password")
   	 		{
   	 			header("location: JsonWelcome.php");
   	 		}
   	 	}
   	 }
   }


?>


<form method="POST" action="" >
	
       <label for="username">User Name</label>
        <br>
       <input type="text" id="username" name="username" > 
         <br>
        
        
           
         <label for="password">Password</label>
          <br>
             <input type="password" id="password" name="password" >
            
             <br><br>
             <input type="submit" name="login" value="Login">
             <br>
             <p>Didn't have any account? <br><a href="Reg1.php">Sign Up</a></p>
             
             

</form>

</body>
</html>