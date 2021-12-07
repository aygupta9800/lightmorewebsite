<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FoodWorld</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
            	<!-- <img src="assets/img/navbar-logo.svg" alt="" /> -->
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><h4 style='color:white;background-color:rgba(0,0,0,0.1);'>Food World</h4></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Foods</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#news">News</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacts</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="user_search.html">Users</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main/Home -->
        <header class="masthead">
            <div class="container">
                <div style='color:white;background-color:rgba(0,0,0,0.1);' class="masthead-subheading">Welcome To Food World!</div>
                <div style='color:white;background-color:rgba(0,0,0,0.1);' class="masthead-heading text-uppercase">It's One Destination for your Favourate Foods</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </header>

        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Online food delivery</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Order</h4>
                        <p class="text-muted">Order food from your favourate restaurants near you</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-car fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Speed Delivary</h4>
                        <p class="text-muted">Get food delivered swiftly at your doorsteps once the food is prepared at the restaurant</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-cheese fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Dineout</h4>
                        <p class="text-muted">Dineout is avaliable incase if enjoy eating ordered food at the restaurant</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Foods-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Foods</h2>
                    <h3 class="section-subheading text-muted">Pick your favourate foods from nearby restaurants</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/01-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Domminos</div>
                                <div class="portfolio-caption-subheading text-muted">Pizzas, pastas, chicken & more</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/02-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">4th St Pizza Co</div>
                                <div class="portfolio-caption-subheading text-muted">Counter-serve restaurant dishing up specialty pizzas, calzones & Philly-style cheesesteaks</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/03-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Biryaniz</div>
                                <div class="portfolio-caption-subheading text-muted">Indian restaurant</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/04-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SmokeEaters</div>
                                <div class="portfolio-caption-subheading text-muted">Our world famous wings are spicy hot and our top notch extensive beer selection is icy cold</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/05-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">KFC</div>
                                <div class="portfolio-caption-subheading text-muted">Finger Lickin' Good is now just a few click away
</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/06-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Burger Kings</div>
                                <div class="portfolio-caption-subheading text-muted">Family Bundles, Flame Grilled Burgers, Chicken & Fish, Drinks & Coffee and more!</div>
                            </div>
                        </div>
                    </div>
                </div>
                      <a  style="color:#000000;" href="./Menu/Menu_list.html">Show more</a>
            </div>
        </section>

        <!-- News-->
        <section class="page-section" id="news">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">News</h2>
                    <h3 class="section-subheading text-muted">Get updated yourself with the latest news on foods</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <p>foods.com</p>
                                <h4 class="subheading">Restarants are set to open from May 1st</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Due to the pandamic restaurants were closed inorder to prevent the spread of covid 19. But safity standards are introduced to reduce the spread while continuing the restaurant services</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <p>pizza.com</p>
                                <h4 class="subheading">New items in dommino's</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">New items were introduced in Dommino's pizzas in beef category. They are in huge demand among the people</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <p>burger.com</p>
                                <h4 class="subheading">Increase in food costs</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Food prices were increased by 5% in burger kings due to raise in demand</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <p>abcnews.com</p>
                                <h4 class="subheading">Increase in the customers using lightmore.com</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Most of the customers are moving towards ordering food online to have parties at home as the restaurants are closed temporarly</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h2>
                                Latest
                                <br />
                                news!
                            </h2>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
      
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Let us know if any issues are faced.</h3>
                </div>
                <p>
                <?php
                    $contacts = file_get_contents('assets/data/contacts.txt','r') or die('Error in opening contacts');
                    $contact_lines = explode('\n',$contacts);
                    foreach($contact_lines as $newline) {
                        
                    echo nl2br('<div style="Color:grey;text-align:center;">'.$newline.'</div>');
                    
                }
                    
                    ?>
                </p>
               
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Lightmore.ml 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Food Subcatogeries-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Dommino's</h2>
                                    <p class="item-intro text-muted">Pizzas, pastas, chicken & more.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                                    <p>Domino's Pizza, Inc., branded as Domino's, is an American multinational pizza restaurant chain founded in 1960. The corporation is Delaware domiciled and headquartered at the Domino's Farms Office Park in Ann Arbor, Michigan.</p>
                                    <ul class="list-inline">
                                        <li>Menu</li>
                                        <li>Pizza</li>
                                        <li>Chicken</li>
                                        <li>Sandwiches</li>
                                        <li>Pasta</li>
                                        <li>Desserts</li>
                                        <li>Drinks</li>
                                        <li>Extras</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">4th St Pizza Co</h2>
                                    <p class="item-intro text-muted">Counter-serve restaurant dishing up specialty pizzas, calzones & Philly-style cheesesteaks.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                    <p>Local hangout serving San Jose-themed pizzas & a variety of wings alongside 40 TVs & a 40-ft. bar.
 <br>Dine-in· Takeout· No-contact delivery
</p>
                                    <ul class="list-inline">
                                        <li>Menu</li>
                                        <li>Wings</li>
                                        <li>Potato Skins</li>
                                        <li>Food & Clients</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Biryaniz</h2>
                                    <p class="item-intro text-muted">Indian restaurant.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                    <p>Biryaniz offers delicious dining, takeout and delivery to Milpitas, CA.<br>

Biryaniz is a cornerstone in the Milpitas community and has been recognized for its outstanding Indian cuisine, excellent service and friendly staff.<br>

Our Indian restaurant is known for its modern interpretation of classic dishes and its insistence on only using high quality fresh ingredients.<br></p>
                                    <ul class="list-inline">
                                        <li>Menu</li>
                                        <li>Appetizers</li>
                                        <li>Curries</li>
                                        <li>Fire Wraps</li>
                                        <li>Vijayawada Biryani</li>
                                        <li>Hyderabad Biryani</li>
                                        <li>Amaravathi Biryani</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Smoke Eaters</h2>
                                    <p class="item-intro text-muted">Our world famous wings are spicy hot and our top notch extensive beer selection is icy cold.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                                    <p>Smokeeaters is a legendary purveyor of fresh pub food made to order. Our world famous wings are spicy hot and our top notch extensive beer selection is icy cold. But let's not forget our delicious chicken sandwiches, tenders, burgers and salads.</p>
                                    <ul class="list-inline">
                                        <li>Menu</li>
                                        <li>INFERNO</li>
                                        <li>4 ALARM</li>
                                        <li>MANGO HABANERO</li>
                                        <li>ATOMIC</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">KFC</h2>
                                    <p class="item-intro text-muted">Finger Lickin' Good is now just a few click away</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                                    <p>KFC is an American fast food restaurant chain headquartered in Louisville, Kentucky, that specializes in fried chicken. It is the world's second-largest restaurant chain after McDonald's, with 22,621 locations globally in 150 countries as of December 2019. The chain is a subsidiary of Yum!</p>
                                    <ul class="list-inline">
                                        <li>Menu</li>
                                        <li>Buckets</li>
                                        <li>Tenders</li>
                                        <li>Fried Chicken</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Burger Kings</h2>
                                    <p class="item-intro text-muted">Fast food restaurant company</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                    <p>Burger King is an American multinational chain of hamburger fast food restaurants. Headquartered in Miami-Dade County, Florida, the company was founded in 1953 as Insta-Burger King, a Jacksonville, Florida–based restaurant chain.</p>
                                    <ul class="list-inline">
                                        <li>Menu</li>
                                        <li>Family Bundles</li>
                                        <li>Our Favorites</li>
                                        <li>Chicken & Fish</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
