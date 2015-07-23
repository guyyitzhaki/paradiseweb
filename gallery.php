<?php include 'header.php';?>
<div class="container">

       <h1 class="title">Gallery</h1>
       <div class="row gallery">
              <?php
                     $dirs = glob('images/pics/*', GLOB_ONLYDIR);
                     foreach ($dirs as $dir) {
                            $pos = strrpos($dir, "/");
                            $gallery = substr($dir, $pos+1);
                            $title = getGalleryTitle($gallery);
                            $files = scandir($dir);
                            foreach ($files as $file) {
                                   if (endswith($file, ".jpg") == true) {
                                          echo "<div class=\"col-sm-4 wowload fadeInUp\">";
                                          echo "<a href=\"images/pics/".$gallery."/".$file."\" title=\"".$title."\" class=\"gallery-image\" data-gallery>";
                                          echo "<img src=\"images/pics/".$gallery."/".$file."\" class=\"img-responsive\"></a></div>";
                                   }
                            }
                     }
            ?>


</div>
<?php include 'footer.php';?>