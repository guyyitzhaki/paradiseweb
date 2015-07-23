<?php include 'header.php';?>

<div class="container">

<h2>Nearby Attractions</h2>


<!-- form -->

<div class="row">
  <?php
    $attractions = array("yareah", "shemesh", "mamuta", "flora", "pool");
    $titles = array("Horshat HaYareah (Moon Grove)", "Horshat HaShemesh (Sun Grove)", "Mamuta Art and Media Center", "Local Flora", "Indoor Pool");
    $desc = array(
        "Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible",
        "Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible",
        "Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible",
        "Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible",
        "The largest cistern in Jerusalem<br><br><br>");
    for ($i = 0; $i < count($attractions); $i++) {
      echo "<div class=\"col-sm-6 wowload fadeInUp\"><div class=\"rooms\"><a href=\"gallery-template.php?gallery=".$attractions[$i]."\">";
      echo "<img src=\"images/pics/".$attractions[$i].".jpg\" class=\"img-responsive\"></a>";
      echo "<div class=\"info\"><h3>";
      echo $titles[$i];
      echo "</h3><p>";
      echo $desc[$i];
      echo "</p><a href=\"gallery-template.php?gallery=".$attractions[$i]."\" class=\"btn btn-default\">See More</a></div></div></div>";
    }
  ?>
</div>

</div>
<?php include 'footer.php';?>