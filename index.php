<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ShopKartz</title>
<!--
Neaty HTML Template
http://www.templatemo.com/tm-501-neaty
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="tm-left-right-container">
                    <!-- Left column: logo and menu -->
                    <div class="tm-blue-bg tm-left-column">
                        <div class="tm-logo-div text-xs-center">
                            <img src="img/tm-neaty-logo.png" alt="Logo">
                            <h1 class="tm-site-name">ShopKartz</h1>
                        </div>
                        <nav class="tm-main-nav">
                            <ul class="tm-main-nav-ul">
                                <?php
                                    if(isset($_COOKIE['username']) && !empty($_COOKIE['username']))
                                    {
                                        echo '<li class="tm-nav-item">';
                                        echo "Hi " . $_COOKIE['username'] . "!" ;
                                        echo '</li>';
                                    }
                                ?>
                                <li class="tm-nav-item">
                                    <a href="#about" class="tm-nav-item-link">About Us</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#beautyproducts" class="tm-nav-item-link">Beauty Products</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#foodservices" class="tm-nav-item-link">Food Services</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#resortandspa" class="tm-nav-item-link">Resort and Spa</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#gadgets" class="tm-nav-item-link">Gadgets</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#contact" class="tm-nav-item-link">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div> <!-- Left column: logo and menu -->
<?php
                    if(isset($_COOKIE['username']) && !empty($_COOKIE['username']))
        {
              echo "<a href='logout.php' class='tm-nav-item-link' style='float:right' >Logout</a>";
        }
        else
        {
        ?>
        
        <!-- Login -->
            <button class= "login-signup" onclick="document.getElementById('modal-wrapper-login').style.display='block'" style="width:120px;">
            login</button>

            <div id="modal-wrapper-login" class="modal">

              <form class="modal-content animate" action="loginDAO.php" method="POST">

                <div class="imgcontainer">
                  <span onclick="document.getElementById('modal-wrapper-login').style.display='none'" class="close" title="Close PopUp">&times;</span>
                  <img src="../img/avatar.png" alt="Avatar" class="avatar">
                  <h1 style="text-align:center">Welcome Back</h1>
                </div>

                <div class="container">
                  <input type="text" placeholder="Enter Username" name="username" required>
                  <input type="password" placeholder="Enter Password" name="password" required>
                  <button type="submit" class="login-signup">Login</button>
                  <input type="checkbox" style="margin:26px 30px;"> Remember me
                  <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
                </div>

              </form>

            </div>



            <!-- Sign up -->
            <button class="login-signup" onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:120px; ">
            Sign UP</button>

            <div id="modal-wrapper" class="modal">

              <form class="modal-content animate" action="/signup.php">

                <div class="imgcontainer">
                  <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                  <img src="../img/avatar.png" alt="Avatar" class="avatar">
                  <h1 style="text-align:center">Please fill the following details</h1>
                </div>

                <div class="container">
                  <input type="text" placeholder="Enter Username" name="uname" required>
                  <input type="password" placeholder="Enter Password" name="psw" required>
                  <input type="email" placeholder="Enter email" name="email" required>
                  <input type="text" placeholder="Enter Mobile number" name="phone" required>
                  <button type="submit" class="login-signup">SIGN UP</button>
                  <input type="checkbox" style="margin:26px 30px;"> Remember me
                  <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
                </div>

              </form>

            </div>
            <?php
}
?>
echo "<br>";
echo "<br>";
echo "<br>";
                    <!-- Right column: content -->
                    <div class="tm-right-column">
                        <figure>
                            <img src="img/neaty-01.jpg" alt="Header image" class="img-fluid">
                        </figure>

                        <div class="tm-content-div">
                            <!-- Welcome section -->
                            <section id="welcome" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Welcome to Shopkartz</h2>
                                </header>
                                <p> Shopkartz marketplace is determoned to provide best class Products where you can customize each product of what you like and we deliver them to you without any hazzle.
                                  We are backed by some of the pioneers of the industry who gives you the perfect recommendations from our side.` </p>
                                  <p>El mercado de Shopkartz está determinado a proporcionar productos de la mejor clase en los que puede personalizar cada producto de su agrado y se lo entregamos sin ningún problema.
                                  Estamos respaldados por algunos de los pioneros de la industria que le dan las recomendaciones perfectas de nuestro lado.</p>
                            </section>
                            <!-- About section -->
                            <section id="about" class="tm-section">
                                <div class="row">
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 push-lg-4 push-md-5">
                                        <header>
                                            <h2 class="tm-blue-text tm-section-title tm-margin-b-45">About the team</h2>
                                        </header>
                                        <p> We are a group of four who is studying at San Jose State University.</p>
                                        <p> We build the Shopkartz as part of our course requirement for enterprise software platform. We integrated all the websites that we have built throughout the semester in one marketplace where user can access all the products from single website instead of going throudh individual websites. </p>
                                        <p> Construimos Shopkartz como parte de nuestro requisito de curso para la plataforma de software empresarial. Integramos todos los sitios web que hemos construido a lo largo del semestre en un mercado donde el usuario puede acceder a todos los productos desde un solo sitio web en lugar de ir a través de sitios web individuales..</p>
                                        <!-- <a href="#" class="tm-button tm-button-wide">Read More</a> -->
                                    </div>

                                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 pull-lg-8 pull-md-7 tm-about-img-container">
                                        <img src="img/neaty-02.jpg" alt="Image" class="img-fluid">
                                    </div>
                                </div>
                            </section>

                            <!-- Beauty products section -->
                            <section id="beautyproducts" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Beauty Products</h2></header>
                                <div class="tm-gallery-container">
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-03.jpg"><img src="../img/neaty-03.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-04.jpg"><img src="../img/neaty-04.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-05.jpg"><img src="../img/neaty-05.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-06.jpg"><img src="../img/neaty-06.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-07.jpg"><img src="../img/neaty-07.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-03.jpg"><img src="../img/neaty-03.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-04.jpg"><img src="../img/neaty-04.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-05.jpg"><img src="../img/neaty-05.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-06.jpg"><img src="../img/neaty-06.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-07.jpg"><img src="../img/neaty-07.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                </div>
                            </section>

                            <!-- Food Services section -->
                            <section id="foodservices" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Food Services</h2></header>
                                <div class="tm-gallery-container">
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="productPage.php?category='paradise'&product='ButterChicken'"><img src="../img/btrchk.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="productPage.php?category='paradise'&product='Butter Naan'"><img src="../img/btrnaan.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="productPage.php?category='paradise'&product=''"><img src="../img/chkbryni.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="productPage.php?category='paradise'&product=''"><img src="../img/dalfry.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="productPage.php?category='paradise'&product=''"><img src="../img/pnrbtrmasala.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="productPage.php?category='paradise'&product=''"><img src="../img/vegdumpling.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="productPage.php?category='paradise'&product=''"><img src="../img/vegrice.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="productPage.php?category='paradise'&product=''"><img src="../img/eggroll.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="productPage.php?category='paradise'&product=''"><img src="../img/chknoodle.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="productPage.php?category='paradise'&product=''"><img src="../img/chkdumpling.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                </div>
                            </section>

                            <!-- Resort and spa -->
                            <section id="resortandspa" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Resort and Spa</h2></header>
                                <div class="tm-gallery-container">
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-03.jpg"><img src="../img/neaty-03.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-04.jpg"><img src="../img/neaty-04.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-05.jpg"><img src="../img/neaty-05.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-06.jpg"><img src="../img/neaty-06.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-07.jpg"><img src="../img/neaty-07.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-03.jpg"><img src="../img/neaty-03.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-04.jpg"><img src="../img/neaty-04.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-05.jpg"><img src="../img/neaty-05.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-06.jpg"><img src="../img/neaty-06.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-07.jpg"><img src="../img/neaty-07.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                </div>
                            </section>

                            <!-- Gadgets -->
                            <section id="gadgets" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Gadgets</h2></header>
                                <div class="tm-gallery-container ">
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-03.jpg"><img src="../img/neaty-03.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-04.jpg"><img src="../img/neaty-04.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-05.jpg"><img src="../img/neaty-05.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-06.jpg"><img src="../img/neaty-06.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                      <a href="../img/neaty-07.jpg"><img src="../img/neaty-07.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                  </div>
                                  <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-03.jpg"><img src="../img/neaty-03.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-04.jpg"><img src="../img/neaty-04.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-05.jpg"><img src="../img/neaty-05.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-06.jpg"><img src="../img/neaty-06.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="../img/neaty-07.jpg"><img src="../img/neaty-07.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                </div>
                            </section>

                            <!-- Contact Us section -->
                            <section id="contact" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Contact Us</h2></header>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="#contact" method="post" class="contact-form">
                                            <div class="form-group">
                                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                            </div>
                                            <div class="form-group">
                                                <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                                            </div>
                                            <button type="submit" class="float-right tm-button">Send</button>
                                        </form>
                                    </div>

                                    <div class="col-lg-6 tm-contact-right">
                                      <p>
                                        Please feel free to contact us for any quiries regarding the products and services. We usually reply in 24 hours. Thank you
                                      </p>
                                      <address>
                                          911 imaginary building,<br>
                                          North virtual street, 99756<br>
                                          New State USA
                                      </address>
                                    </div>
                                </div>

                            </section>
                            <footer>
                                <p class="tm-copyright-p">Copyright &copy; <span class="tm-current-year">2017</span> ShopKartz
                            </footer>
                        </div>

                    </div> <!-- Right column: content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script>

            $(document).ready(function(){

                // Single page nav
                $('.tm-main-nav').singlePageNav({
                    'currentClass' : "active",
                    offset : 20
                });

                // Magnific pop up
                $('.tm-gallery-1').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                });

                $('.tm-gallery-2').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                });

                $('.tm-gallery-3').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                });

                $('.tm-current-year').text(new Date().getFullYear());
            });
        </script>
</body>
</html>
