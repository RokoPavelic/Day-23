<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO</h1>

    <?php echo "Hello from php" . "<br>"; 
  
      $first_name ="First Name:Roko";
      $surname ="Surname:Pavelic";

      echo  $first_name . "<br>";
      echo $surname . "<br>";
    
      $Year_of_birth = "Year of Birth:1997";
      $Height =  "height:190";

      echo $Year_of_birth . "<br>";
      echo $Height ."<br>";
    ?>
    <!-- <?php phpinfo(); ?> -->

    <!-- <?php
// define("SERVER_SOFTWARE", "Apache" )
// echo server_software;

// ?> -->
    

    <?php
define("GREETING", "Apache");
echo "kurac". GREETING;
?>



</body>
</html>