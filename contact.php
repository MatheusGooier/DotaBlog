<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--Scripts-->
    <script src="scripts.js" type="text/javascript"></script> 

    <!-- Title -->
    <title>Vizew - Blog &amp; Magazine HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/news/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php include('header.php') ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contato</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area mb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 col-lg-8">
                    <!-- Section Heading -->
                    <div class="section-heading style-2">
                        <h4>Contato</h4>
                        <div class="line"></div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area mt-50">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">Nome*</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="message">Mensagem*</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                            </div>
                            <button class="btn vizew-btn mt-30" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <div class="sidebar-area">
                        <div class="single-widget add-widget">
                            <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo d-block mb-4" style="height: 50px; width: 50px;"><img src="img/news/logo.png" alt=""></a>
                        <p>Quer receber as novidade do Dota Brasileiro e Mundial no seu e-mail? Assine nossa newsletter</p>
                        <!-- Footer Newsletter Area -->
                        <div class="footer-nl-area">
                            <form action="#" method="post">
                                <input type="email" name="nl-email" class="form-control" id="nlEmail" placeholder="Your email">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Latest Twister</h6>
                        <!-- Twitter Slides -->
                        <div class="twitter-slides owl-carousel">

                            <!-- Single Twitter Slide -->
                            <div class="single--twitter-slide">
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Matheus</span> Aqui vai os ultimos twits com a tag #blablabla</p>
                                </div>
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Leonard</span> Aqui vai os ultimos twits com a tag #blablabla</p>
                                </div>
                            </div>

                            <!-- Single Twitter Slide -->
                            <div class="single--twitter-slide">
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Guilherme</span> Aqui vai os ultimos twits com a tag #blablabla</p>
                                </div>
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Mariana</span> Aqui vai os ultimos twits com a tag #blablabla</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Últimos Videos</h6>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/1.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.php" class="post-title">DC Shoes: gymkhana the</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/2.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.php" class="post-title">Sweet Yummy Chocolatea Tea</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Nossos canais</h6>
                        <!-- Contact Address -->
                        <div class="contact-address">   
                            <p>Email: info.gooier@gmail.com</p>
                        </div>
                        <!-- Footer Social Area -->
                        <div class="footer-social-area">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by Gooier
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>