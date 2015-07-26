<?php include 'header.php';?>

<div class="container">

<h2>Nearby Attractions</h2>


<!-- form -->

<div class="row">
  <?php
    $attractions = array("yareah", "shemesh", "mamuta", "flora", "pool");
    $titles = array("Horshat HaYareah (Moon Grove)", "Horshat HaShemesh (Sun Grove)", "Mamuta Art and Media Center", "Local Flora", "Indoor Pool");
    $desc = array(
        "Located to the east, a nearby grove, made up of mature pine trees and local mediterranean trees and shrubs. Concentrations of geopyhtes appear between rock slabs. Planted olive trees can be seen in the southern part. The grove is a nesting spot for tree falcons (Eurasian Hobbies) and long eared owls.",
        "Located to the west, a nearby grove, made up of mature pine trees and local mediterranean trees and shrubs. Concentrations of geopyhtes appear between rock slabs. Planted olive trees can be seen in the southern part. The grove is a nesting spot for tree falcons (Eurasian Hobbies) and long eared owls.",
        "The <a href=’http://mamuta.org’ target=’blank’>Mamuta Project</a> is a center for artistic creation, encounters, research, and display of art. The center, is developed and directed by the Sala-Manca Group. Mamuta is comprised of artists’ workspaces; video, sound, and electronics labs; and a wood, metal, and plastics workshop.",
        "The Jesus Hilfe hospital was designed as a self sustaining compound, which is why the area inside the inn and surrounding it is a splendid example of local flora, including six of the seven species mentioned in the bible (grapes, figs, pomegranates, olives, dates and barley).",
        "The largest cistern in Jerusalem. Ten more cisterns are located in the surrounding area, for irrigation purposes.<br><br><br>");
    for ($i = 0; $i < count($attractions); $i++) {
      echo "<div class=\"col-sm-6 wowload fadeInUp\"><div class=\"rooms\"><a href=\"gallery-template.php?gallery=".$attractions[$i]."\">";
      echo "<img src=\"images/pics/".$attractions[$i].".jpg\" class=\"img-responsive\"></a>";
      echo "<div class=\"info\"><h3>";
      echo $titles[$i];
      echo "</h3><p>";
      echo $desc[$i];
      echo "</p><a href=\"gallery-template.php?gallery=".$attractions[$i]."\" class=\"btn btn-default\">Gallery</a></div></div></div>";
    }
  ?>
</div>

</div>
<?php include 'footer.php';?>