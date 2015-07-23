<?php include 'header.php';?>

    <div class="container">
    <h1 class="title">
        <?php
            $gallery = filter_var($_GET["gallery"], FILTER_SANITIZE_SPECIAL_CHARS);
            $title = getGalleryTitle($gallery);
            echo $title;
       ?>
        </h1>
        <div class="row gallery" >
       <?php
            $gallerydir = "images/pics/".$gallery;
            $files = scandir($gallerydir);
            foreach ($files as $file) {
                if (endswith($file, ".jpg") == true) {
                    $imgTitle = $title;
                    switch ($file) {
                        case "P1020382.jpg":
                            $imgTitle = $title." - Fig tree";
                            break;
                    }
                    echo "<div class=\"col-sm-4 wowload fadeInUp\"><a href=\"".$gallerydir."/".$file."\" title=\"".$imgTitle."\" class=\"gallery-image\" data-gallery><img src=\"".$gallerydir."/".$file."\" class=\"img-responsive\"></a></div>";
                }
            }
       ?>
        </div>
    </div>
</div>
<?php include 'footer.php';?>