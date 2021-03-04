<!DOCTYPE html>
<html>
<head>
  <title>JASON</title>
</head>
<body>


   <?php
       
          $firstname = $lastname = $emailaddress = $username = $password = "";
          $firstnameErr = $lastnameErr = $emailaddressErr =  $usernameErr = $passwordErr = "";




          if ($_SERVER["REQUEST_METHOD"] == "POST")
          {
             if (empty($_POST['fname'])) 
             {
            $firstnameErr = "Enter your first name";
             }
          else
          {
            $firstname = $_POST['fname'];
          }

            if (empty($_POST['lname'])) 
          {
            $lastnameErr = "Enter your last name";
          }
          else
          {
            $lastname = $_POST['lname'];
          }

          if (empty($_POST['email'])) 
          {
            $emailaddressErr = "Enter your email address";
          }
          else 
          {
               $emailaddress = $_POST['email'];
          }

          if (empty($_POST['username'])) 
          {
            $usernameErr = "Enter a valid username";
          }
          else 
          {
               $username = $_POST['username'];
          }

          if (empty($_POST['password'])) 
          {
            $passwordErr = "Enter a password";
          }
          else 
          {
               $password = $_POST['password'];
          }

          if ($firstnameErr == "" && $lastnameErr == "" && $emailaddressErr == "" && $usernameErr == "" && $passwordErr == "") 
          {
            header("location: Log1.php");
          }


        }

   ?>



<?php
       
       //$myfile = fopen("value.txt", "w"); 
       /*$myfirstname = "\n" . $firstname;
       fwrite($myfile, $myfirstname);
       
       $mylast = "\n" . $lastname;
       fwrite($myfile, $mylast);
       
       $myemail = "\n" . $emailaddress;
       fwrite($myfile, $myemail);
       
       $myusername = "\n" . $username;
       fwrite($myfile, $myusername);

       $mypassword = "\n" . $password;
       fwrite($myfile, $mypassword);*/
       $mydetails = array('fname'=>"firstname",'$lname'=>"lastname",'email'=>"$emailaddress",'username'=>"$username",'password'=>"$password");
       $json_encoded = json_encode($mydetails);
       $myfile = fopen("value.txt", "w");
       fwrite($myfile, $json_encoded . "\n");
      
       fclose($myfile);
      
 ?>

<form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
  
<label for="fname">First Name</label>
       <br>
       <input type="fname" id="fname" name="fname" value="<?php echo $firstname ?>">
       <br>
       <?php echo $firstnameErr; ?>
       <br><br>
        <label for="lastname">Last Name</label>
        <br>
        <input type="text" id="lname" name="lname" value="<?php echo $lastname ?>">
        <br>
        <?php echo $lastnameErr; ?>
        <br><br>

        <label for="email">Email</label>
        <br>
        <input type="email" id="email" name="email" value="<?php echo $emailaddress ?>">
        <br>
        <?php echo $emailaddressErr; ?>
        <br>
        <label for="username">User Name</label>
        <br>
        <input type="text" id="username" name="username" value="<?php echo $username ?>">
        <br>
        <?php echo $usernameErr; ?>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" id="password" name="password" value="<?php echo $password ?>">
        <br>
        <?php echo $passwordErr ?>
        <br><br>

        <input type="submit" name="submit" value="Submit">
        <br>
        <p>Already Have Account? <br><a href="Log1.php">Log In</a></p>

</form>

</body>
</html>