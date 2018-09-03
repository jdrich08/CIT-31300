<?php

include 'includes/config.php';

include 'includes/header.inc.php';

?>

<?php

$myinfo = array("Jeremy Rich", "Green", "Pulp Fiction", "A Game of Thrones", "google");
$arrlength = count($myinfo);

echo "<h1>" . $myinfo[0] . "</h1>";

function getMyInfo() {
  global $myinfo, $arrlength;
  echo "<ul>";
  for($x = 1; $x < $arrlength; $x++) {
    echo "<li>" . $myinfo[$x] . "</li>";
  }
  echo "</ul>";
}

getMyInfo();

?>


<?php

include 'includes/footer.inc.php';

?>
