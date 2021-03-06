<?php
get_header(); ?>
<body data-spy="scroll" data-offset="10">
    <div class="container">
      <!-- 0 -->
      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand active" href="#mi-casa">Mi Casa Beachfront Rental</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <!-- <li class=""><a href="#actor">Donald Delue<span class="sr-only">(current)</span></a></li> -->
              <li><a href="#awesome">Awesome <span>Inside &amp Out</span></a></li>
              <li><a href="#price">Amenities &amp Price</a></li>
              <li><a href="#availability">Availability</a></li>
              <li><a href="#about-us">About us</a></li>
          </div><!-- END navbar-collapse -->
        </div><!-- END container-fluid -->
      </nav>
      <!-- END nav ############################# -->
</div> <!-- END container -->

<!-- 1 -->
<!-- HOME -->
  <div class="" id="mi-casa">

<!-- SINGLE IMAGE COVER -->
    <!-- <div class="image">
      <img class="fullwidth" src="img/cover/IMG_1033.jpeg" alt="">
      <div class="testimonial">
        <div class="wrapthis">
          <h1>Here is a testimonial</h1>
          <h3>-Attribution</h3>
        </div>
      </div>
    </div>  -->


<!-- CAROUSEL COVER -->
    <!-- carousel -->
    <div id="carousel-example-generic" class="carousel slide carousel-main" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner fullheight" role="listbox">
      <div class="item active">
        <img src="img/cover/beachscene.jpg" alt="a beach scene">
        <div class="carousel-caption">
          <h3>Testimonial has weight put it here</h3>
          <p>-attribution name</p>
        </div>
      </div>
      <div class="item">
        <img src="img/cover/deck.jpg" alt="view from the deck">
        <div class="carousel-caption">
          <h3>Testimonial has weight put it here</h3>
          <p>-attribution name</p>
        </div>
      </div>
      <div class="item">
        <img src="img/cover/grandview.jpg" alt="a grand view">
        <div class="carousel-caption">
          <h3>Testimonial has weight put it here</h3>
          <p>-attribution name</p>
        </div>
      </div>
      <div class="item">
        <img src="img/cover/livingroom.jpg" alt="large and fun living room">
        <div class="carousel-caption">
          <h3>Testimonial has weight put it here</h3>
          <p>-attribution name</p>
        </div>
      </div>
      <div class="item">
        <img src="img/cover/oceandeck.jpg" alt="view from the deck">
        <div class="carousel-caption">
          <h3>Testimonial has weight put it here</h3>
          <p>-attribution name</p>
        </div>
      </div>
    </div> <!-- END inner -->
    <!-- Controls -->
  <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
    </div> <!-- END Carousel -->




  </div> <!-- END mi-casa -->


<!-- SCENES CONTAINER -->
  <div class="container">

      <!-- 2 -->
      <!-- Gallery and information -->
      <div class="scene" id="awesome">

        <!-- introduction -->
        <h2>Awesome inside and out</h2>
        <div class="row">
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>

      <!-- MODAL overlay -->
        <div id="modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="false">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body">
                <img id="modalimage" src="" width="100%" alt="">
              </div>
              <div class="modal-footer">
                <a href="#availability" class="btn btn-default" id="from-modal-btn"role="button">Make a reservation</a>
               <!-- <button type="button" class="btn btn-default" href="http://paypal.com">Close</button> -->
               <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
             </div>
            </div>
          </div>
        </div>
      <!-- END modal overlay -->

        <!-- images and copy -->
        <div class="grid modalphotos clearfix">

          <div class="grid-item well">
            <a role="button" >
              <img src="img/northface.jpg" alt="A beautiful location">
            </a>
            <h3>Beautiful location</h3>
            <p>Here is where you put your features. voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/facingsun.jpg" alt="">
            </a>
            <h3>Morning sun</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/stairs.jpg" alt="Lovely inside">
            </a>
            <h3>Lovely inside</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/kitchen.jpg" alt="Large kitchen">
            </a>
            <h3>Large Kitchen</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/washerdryer.jpg" alt="Washer and dryer">
            </a>
            <h3>Washer and dryer</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/bedroom.jpg" alt="Gorgeous bedroom">
            </a>
            <h3>Gorgeous bedroom</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/kidsbedroom.jpg" alt="Kids bedroom">
            </a>
            <h3>Kids bedroom</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/yourdoor.jpg" alt="Safe and secure">
            </a>
            <h3>Safe and secure</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/parking.jpg" alt="Easy parking">
            </a>
            <h3>Easy parking</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/decksand.jpg" alt="Walk to the beach">
            </a>
            <h3>Walk to the beach</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img class="myModal" src="img/driveonbeach.jpg" alt="Drive on the beach">
            </a>
            <h3>Drive on the beach</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/shells.jpg" alt="Collect shells">
            </a>
            <h3>Collect shells</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/turtles.jpg" alt="Turtles nest here">
            </a>
            <h3>Sea Turtles nest</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="grid-item well">
            <a role="button" >
              <img src="img/enjoy.jpg" alt="Enjoy our home">
            </a>
            <h3>Enjoy our home</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

        </div> <!-- END row -->

        <br><br><br>

      </div> <!-- END awesome -->

      <!-- 3 -->
      <!-- AMENITIES AND PRICE -->
      <div class="scene" id="price">
        <h2>Amenities and Price</h2>
        <div class=" well row">

          <div class="col-md-6">
            <h4>Heading</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt </p>
          </div>

          <div class="col-md-6">

            <table class="table table-hover">
              <thead>
                <th>Dates</th>
                <th>Nightly</th>
                <th>Weekly</th>
                <th>Monthly</th>
              </thead>

              <tbody>
                <tr class="table-hover">
                  <th>
                    Summer
                    <div class="date-range">Feb 28 - Sep 30, 2016 <br>
                      7 night min stay <br>
                      <strong>Changeover day: Saturday</strong>
                    </div>
                  </th>
                  <td></td>
                  <td>$1,500</td>
                  <td>$5,000</td>
                </tr>
                <tr class="table-hover">
                  <th>
                    Winter
                    <div class="date-range">Oct 1 - Feb 28, 2017 <br>
                      3 night min stay</div>
                  </th>
                  <td>$214</td>
                  <td>$1,500</td>
                  <td>$3,600</td>
                </tr>
                <tr class="table-hover">
                  <th>
                    Standard Rate
                    <div class="date-range">7 night min stay <br>
                    <strong>Changeover day: Saturday</strong>
                  </div>
                  </th>
                  <td>$214</td>
                  <td></td>
                  <td>$5,000</td>
                </tr>
              </tbody>
            </table>
            <cite>* Approximate Monthly rates, actual rate will depend on the days of the month you stay</cite>

            <!-- <div class="list-group">
              <a href="#" class="list-group-item active">
                <h4 class="list-group-item-heading">Winter</h4>
                <p class="list-group-item-text">Date range. Price.</p>
              </a>
            </div>

            <div class="list-group">
              <a href="#" class="list-group-item active">
                <h4 class="list-group-item-heading">Spring</h4>
                <p class="list-group-item-text">Lorem ipsum dolor sit amet consectetur</p>
              </a>
            </div>

            <div class="list-group">
              <a href="#" class="list-group-item active">
                <h4 class="list-group-item-heading">Summer</h4>
                <p class="list-group-item-text">Lorem ipsum dolor sit amet consectetur</p>
              </a>
            </div>

            <div class="list-group">
              <a href="#" class="list-group-item active">
                <h4 class="list-group-item-heading">Fall</h4>
                <p class="list-group-item-text">Lorem ipsum dolor sit amet consectetur</p>
              </a>
            </div> -->

          </div> <!-- END col-md-6 -->
        </div> <!-- END row -->
      </div> <!-- END amenities and price -->

      <!-- 4 -->
      <!-- AVAILABILITY -->
      <div class="scene" id="availability">
        <h2>Availability</h2>
REFERENCE TO VRBO.
<!-- <iframe src="https://www.vrbo.com/357529#calendar" width="100%" height="300"></iframe>  -->


      </div> <!-- END availability -->

      <!-- 5 -->
      <!-- ABOUT US -->
      <div class="scene" id="about-us">
          <h2>ABOUT US</h2>
          <div class="row">

            <div class="col-sm-6 col-md-4">
              <a href="mailto:anthonykam@fineartseast.com">
                <img src="http://placehold.it/120x100" alt="">
              </a>
              <h4>Partner 1</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-sm-6 col-md-4">
              <a href="mailto:partner@fineartseast.com">
                <img src="http://placehold.it/120x100" alt="">
              </a>
              <h4>Partner 2</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-sm-6 col-md-4">
              <a href="mailto:partner@fineartseast.com">
                <img src="http://placehold.it/120x100" alt="">
              </a>
              <h4>Partner 3</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

          </div> <!-- END row -->
      </div> <!-- END scene -->

  </div> <!-- END scenes container -->




  <!-- Footer -->
  <footer class="footer" id="footer">
    <div class="row">
      <div class="col-sm-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-sm-6">
        <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Copyright (c) 2016 Copyright Holder All Rights Reserved.</p>
      </div>
    </div>
  </footer>

    <!-- jQuery Get rid of the CDN -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
    <script src="js/script.js"></script>
    <?php get_footer(); ?>
  </body>
</html>
