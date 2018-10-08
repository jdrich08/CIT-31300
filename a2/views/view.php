<!DOCTYPE html>
<html>
  <head>
    <title>My View</title>
  </head>
  <body>
    <h1>Hello From My View!</h1>
      <?php
        echo "<ul>">
        echo "<li>User ID: ".$userID."</li><br/>";
        echo "<li>First Name: ".$firstname."</li><br/>";
        echo "<li>Last Name: ".$lastname."</li><br/>";
        echo "<li>Email: ".$email."</li><br/>";
        echo "<li>Role: ".$role."</li>";
        echo "</ul>";
      ?>
  </body>
</html>
