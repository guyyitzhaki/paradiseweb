<?php include 'header.php';?>




<!-- banner -->
<div class="banner">
    <img src="images/pics/banner1.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Welcome to Paradise</h1>
                <p class="animated fadeInUp">One room. One guest. Endless possibilities.</p>
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-8">
                <div style="margin-bottom: 35px;">
                <h2>Hotel Paradise</h2>
                A single room, single guest hotel at the heart of Jerusalem.
                </div>
                <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
                    <!--<iframe  class="embed-responsive-item" src="//player.vimeo.com/video/55057393?title=0" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                    <!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/V40N6NGV8Uk" frameborder="0" allowfullscreen></iframe>-->
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/JEOOgTCuHlo" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-5 col-md-4">
                <h3>Reservation</h3>
                <form role="form" method="post" action="reserve.php" class="wowload fadeInRight">
                    <div class="form-group">
                        <div class="row">
                            <div id="sandbox-container" class="col-xs-12"><div></div></div>
                            <input type="hidden" id="dates" name="dates">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control"  id="name" name="name" placeholder="Name" required="true">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"  id="email" name="email" placeholder="Email" required="true">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <select class="form-control" id="rooms" name="rooms" required="true">
                                    <option value="" disabled selected>No. of Rooms</option>
                                    <option>1</option>
                                </select>
                            </div>
                            <div class="col-xs-6">
                                <select class="form-control" id="adults" name="adults" required="true">
                                    <option value="" disabled selected>No. of Adults</option>
                                    <option>1</option>
                                </select>
                            </div></div>
                    </div>


                    <div class="form-group">
                        <textarea class="form-control"  id="msg" name="msg" placeholder="Message" rows="4"></textarea>
                    </div>
                    <button class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <!-- RoomCarousel -->
                <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active"><img src="images/pics/1.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="images/pics/2.jpg"  class="img-responsive" alt="slide"></div>

                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
                <!-- RoomCarousel-->
                <div class="caption">Room<a href="rooms.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
            </div>


            <div class="col-sm-4">
                <!-- RoomCarousel -->
                <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active"><img src="images/pics/4.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="images/pics/6.jpg"  class="img-responsive" alt="slide"></div>

                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
                <!-- RoomCarousel-->
                <div class="caption">Tour Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
            </div>


            <div class="col-sm-4">
                <!-- RoomCarousel -->
                <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="images/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="images/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
                <!-- RoomCarousel-->
                <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
            </div>
        </div>
    </div>
</div>
<!-- services -->


<?php include 'footer.php';?>