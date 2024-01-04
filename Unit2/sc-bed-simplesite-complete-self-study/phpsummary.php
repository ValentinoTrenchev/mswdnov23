<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
<?php include 'includes/menu.php' ?>

<div class="container">

  <h1>PHP Summary</h1>
  <?php
      printf('<p>You are running PHP version %s</p>', phpversion());

      echo '<h4>Loaded Extensions</h4>';
      $ext = get_loaded_extensions();
      var_dump($ext);

      echo '<h4>Server Environment</h4>';
      var_dump($_SERVER);

      // Get Client's IP Address
      $ipaddress = getenv("REMOTE_ADDR") ;
      echo "<h4>Client's IP Address is . $ipaddress</h4>";

      //Global Variable outside of a function withouth $GLOBALS definition
      $varGlobal1 = 'Global Variable Outside function';

      //Global Variable inside function with $GLOBALS definition
      function declaringGlobalVar(){
        $GLOBALS["varGlobal2"] = 'Global Variable Inside function';
      }     
      declaringGlobalVar();

      // Displaying Global Variables
      echo "<h4>Global Variables:</h4>";
      echo "<p>Displaying $varGlobal1</p>";
      echo "<p>Displaying $varGlobal2</p>";


      //Get current filename
      $currentPage= $_SERVER['SCRIPT_NAME'];

      echo "<h4>Displaying Current Filename</h4>";
      echo "<p>Current filename is: $currentPage</p>";

  ?>
</div>
<?php include 'includes/footer.php' ?>

</body>

</html>