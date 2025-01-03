<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Servicios HM</title>
    <meta name="author" content="tansh">
    <meta name="description" content="HTML Landing Page Teamplate">
    <meta name="keywords" content="digital marketing, leads, pay per click, advertising, social media, SEO, email marketing">

    <!-- FAVICON FILES -->
    <link href="<?=base_url('public/assets/images/icons/apple-touch-icon-144-precomposed.png');?>" rel="apple-touch-icon" sizes="144x144">
    <link href="<?=base_url('public/assets/images/icons/apple-touch-icon-120-precomposed.png');?>" rel="apple-touch-icon" sizes="120x120">
    <link href="<?=base_url('public/assets/images/icons/apple-touch-icon-76-precomposed.png');?>" rel="apple-touch-icon" sizes="76x76">
    <link href="<?=base_url('public/assets/images/icons/favicon.png');?>" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="<?=base_url('public/assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('public/assets/fonts/iconfonts.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/assets/css/plugins.css');?>">
    <link rel="stylesheet" href="<?=base_url('public/assets/css/style.css');?>">
    <link rel="stylesheet" href="<?=base_url('public/assets/css/responsive.css');?>">
    <link rel="stylesheet" href="<?=base_url('public/assets/css/color.css');?>">
</head>
<body>
<div id="dtr-wrapper" class="clearfix">

    <!-- preloader starts -->
    <div class="dtr-preloader">
        <div class="dtr-preloader-inner">
            <div class="dtr-loader">Cargando...</div>
        </div>
    </div>
    <!-- preloader ends -->

    <!-- Small Devices Header
============================================= -->
    <div class="dtr-responsive-header header-with-slick-menu fixed-top">
        <div class="container">

            <!-- small devices logo -->
            <div class="dtr-responsive-header-left"> <a class="dtr-logo" href="#home"><img src="<?=base_url('public/assets/images/logo-dark.png');?>" alt="logo"></a> </div>
            <!-- small devices logo ends -->

            <!-- menu button -->
            <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
        </div>
        <div class="dtr-responsive-header-menu"></div>
    </div>
    <!-- Small Devices Header ends
============================================= -->

    <!-- header starts
============================================= -->
    <header id="dtr-header-global" class="fixed-top">
        <div class="d-flex align-items-center justify-content-between">

            <!-- header left starts -->
            <div class="dtr-header-left">

                <!-- logo -->
                <a class="logo-default dtr-scroll-link" href="#home"><img src="<?=base_url('public/assets/images/logo-w.png');?>" width="250" alt="logo"></a>

                <!-- logo on scroll -->
                <a class="logo-alt dtr-scroll-link" href="#home"><img src="<?=base_url('public/assets/images/logo.png');?>" width="250" alt="logo"></a>
                <!-- logo on scroll ends -->

            </div>
            <!-- header left ends -->

            <!-- menu starts-->
            <div class="main-navigation">
                <ul class="sf-menu dtr-nav light-nav-on-load dark-nav-on-scroll">
                    <li> <a class="nav-link" href="#home">Inicio</a> </li>
                    <li> <a class="nav-link" href="#about">Acerca de</a> </li>
                    <li> <a class="nav-link" href="#services">Servicios</a> </li>
                    <li> <a class="nav-link" href="#pricing">Productos</a> </li>
                    <li> <a class="nav-link" href="#contact">Contacto</a> </li>
                </ul>
            </div>
            <!-- menu ends -->

            <!-- header right starts -->
            <div class="dtr-header-right">

                <!-- social starts -->
                <div class="dtr-social-square dtr-social-dark">
                    <ul class="dtr-social dtr-social-list">
                        <!-- <li><a href="#" class="dtr-twitter" target="_blank" title="twitter"></a></li> -->
                        <li><a href="#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                        <li><a href="#" class="dtr-linkedin" target="_blank" title="linkedin"></a></li>
                    </ul>
                </div>
                <!-- social ends -->

            </div>
            <!-- header right ends -->

        </div>
    </header>
    <!-- header ends
================================================== -->

    <!-- == main content area starts == -->
    <div id="dtr-main-content">

        <!-- hero section starts
================================================== -->
        <section id="home" class="dtr-section dtr-section-with-bg dtr-hero-section-top-padding" style="background-image: url(assets/images/hero-img1.jpg);">

            <!-- overlay -->
            <div class="dtr-overlay dtr-overlay-purple"></div>
            <div class="container dtr-overlay-content dtr-py-150">

                <!--== row starts ==-->
                <div class="row">
                    <div class="col-12 color-white">
                        <h2 class="dtr-hero-subtext">Achieve Your</h2>
                        <!-- typing text can be changed in custom.js -->
                        <h1 class="dtr-hero-heading dtr-hero-typed">"<span id="typedhero" class="color-red"></span>"</h1>
                        <p class="text-size-md font-weight-600">We're Your Local Digital Marketing Agency</p>
                        <p class="color-white w-50 w-sm-100"> Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        <a href="#pricing" class="dtr-btn dtr-btn-rounded btn-red dtr-scroll-link dtr-mt-40">View Pricing</a> </div>
                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- hero section ends
================================================== -->

        <!-- logo carousel section starts
================================================== -->
        <section class="dtr-section overflow-hidden dtr-pt-50">
            <div class="container">

                <!--=== logo slider - 5col starts ===-->
                <div class="dtr-slick-slider dtr-slider-5col">
                    <!-- img 1 -->
                    <div> <img src="<?=base_url('public/assets/images/client-1.png');?>" alt="image"> </div>
                    <!-- img 2 -->
                    <div> <img src="<?=base_url('public/assets/images/client-2.png');?>" alt="image"> </div>
                    <!-- img 3 -->
                    <div> <img src="<?=base_url('public/assets/images/client-3.png');?>" alt="image"> </div>
                    <!-- img 4 -->
                    <div> <img src="<?=base_url('public/assets/images/client-4.png');?>" alt="image"> </div>
                    <!-- img 5 -->
                    <div> <img src="<?=base_url('public/assets/images/client-5.png');?>" alt="image"> </div>
                    <!-- img 6 -->
                    <div> <img src="<?=base_url('public/assets/images/client-3.png');?>" alt="image"> </div>
                </div>
                <!--=== logo slider - 5col ends ===-->

            </div>
        </section>
        <!-- logo carousel section ends
================================================== -->

        <!-- about section starts
================================================== -->
        <section id="about" class="dtr-section dtr-section-center-bg dtr-pt-90 dtr-pb-100" style="background-image: url(assets/images/shape-1.svg);">
            <!-- to change color of background shape no need to edit image - refer help document -->
            <div class="container">

                <!--== row starts ==-->
                <div class="row">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-5"> <img src="<?=base_url('public/assets/images/image-4.jpg');?>" alt="image" class="dtr-rounded-img dtr-mb-80">
                        <!-- heading -->
                        <p class="dtr-tagline color-red">Nuestra Misión</p>
                        <h2 class="dtr-section-heading">Simplificar Operaciones <br>
                            De TI</h2>
                        <p> Servicios HM Automatiza las partes mas dificiles de TI, para brindar seguridad y control, con el fin de que aumente la productividad de su negocio.</p>
                        <a href="#services" class="dtr-btn dtr-btn-rounded btn-red-outline dtr-mt-20">Ver Servicios</a> </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-md-6 offset-md-1 dtr-pt-40 small-device-space">
                        <p class="dtr-tagline color-red">Acerca de nosotros</p>
                        <h2 class="dtr-section-heading"> Ofrecemos servicios profesionales.</h2>
                        <p>Somos una empresa emergente de tecnología, que busca renovar los procesos e infraestructuras de TI, ofreciendo desarrollos de software y mantenimiento de hardware de forma profesional, y, capacitación informática a nuestros clientes,en Ecuador y Panamá.</p>
                        <div class="col-12 d-flex justify-content-between">
                            <div class="col_md-6 item-align-center">
                                Panamá
                                <a href="#" class="dtr-btn dtr-btn-rounded btn-red-outline dtr-mt-20 dtr-mr-10"><i class="icon-phone-alt"></i>+507 6430 6815</a>
                            </div>
                            <div class="col_md-6">
                                Ecuador
                                <a href="#" class="dtr-btn dtr-btn-rounded btn-red-outline dtr-mt-20 dtr-mr-10"><i class="icon-phone-alt"></i>+593 959 730 998</a>
                            </div>
                        </div>

                        <!-- nested row for offset column starts -->
                        <div class="row dtr-mt-100 dtr-mb-100">
                            <div class="col-12 col-lg-8 offset-lg-4">

                                <!-- video box starts -->
                                <div class="dtr-video-box dtr-rounded overflow-hidden">
                                    <!-- overlay -->
                                    <div class="dtr-overlay dtr-overlay-purple"></div>
                                    <!-- image -->
                                    <img src="<?=base_url('public/assets/images/video-bg.jpg');?>" alt="image">
                                    <!-- pulsating button starts -->
                                    <div class="dtr-video-pulse-wrapper dtr-overlay-content">
                                        <div class="dtr-video-pulse">
                                            <div class="pulse pulse-1"></div>
                                            <div class="pulse pulse-2"></div>
                                            <div class="pulse pulse-3"></div>
                                            <!-- video link -->
                                            <a class="dtr-video-popup dtr-video-button" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio"></a> </div>
                                        <h5 class="dtr-video-tagline color-red">Watch Video</h5>
                                    </div>
                                    <!-- pulsating button ends -->
                                </div>
                                <!-- video box ends -->

                            </div>
                        </div>
                        <!-- nested row ends -->

                        <!--=== text slider - 1col starts ===-->
                        <div class="dtr-slick-slider overflow-hidden dtr-slider-1col">
                            <!-- slide 1 starts -->
                            <div>
                                <p class="text-size-xxl font-weight-bold color-red">confiables</p>
                                <h2>Incrementamos <br>
                                    Productividad</h2>
                            </div>
                            <!-- slide 1 ends -->
                            <!-- slide 2 starts -->
                            <div>
                                <p class="text-size-xxl font-weight-bold color-red">100% seguros</p>
                                <h2>Brindamos <br>
                                    Profesionalidad</h2>
                            </div>
                            <!-- slide 2 ends -->
                            <!-- slide 3 starts -->
                            <div>
                                <p class="text-size-xxl font-weight-bold color-red">34%</p>
                                <h2>Significant<br>
                                    Increase In Sales</h2>
                            </div>
                            <!-- slide 1 ends -->

                        </div>
                        <!--=== text slider - 1col ends ===-->

                    </div>
                    <!--== column 2 ends ==-->

                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- about section ends
================================================== -->

        <!-- services section starts
================================================== -->
        <section id="services" class="dtr-section dtr-py-100 bg-pink">
            <div class="container">

                <!-- heading -->
                <p class="dtr-tagline text-center color-red">Servicios</p>
                <h2 class="dtr-section-heading text-center"></h2>

                <!--== row starts ==-->
                <div class="row dtr-mt-40 dtr-mx-0">

                    <!-- feature 1 starts -->
                    <div class="col-md-4 col-xl dtr-px-0">
                        <div class="dtr-feature dtr-icon-feature dtr-feature-top dtr-box-feature">
                            <div class="dtr-feature-img"><img src="<?=base_url('public/assets/images/service-icon-1.svg')?>" alt="image"></div>
                            <div class="dtr-feature-content">
                                <h5>Pay-Per-Click (PPC) Advertising</h5>
                                <p>Lorem ipsum dolor sit amet piscing elit sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <!-- feature 1 ends -->

                    <!-- feature 2 starts -->
                    <div class="col-md-4 col-xl dtr-px-0">
                        <div class="dtr-feature dtr-icon-feature dtr-feature-top dtr-box-feature">
                            <div class="dtr-feature-img"><img src="<?=base_url('public/assets/images/service-icon-2.svg');?>" alt="image"></div>
                            <div class="dtr-feature-content">
                                <h5>Social Media Advertising</h5>
                                <p>Lorem ipsum dolor sit amet piscing elit sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <!-- feature 2 ends -->

                    <!-- feature 3 starts -->
                    <div class="col-md-4 col-xl dtr-px-0">
                        <div class="dtr-feature dtr-icon-feature dtr-feature-top dtr-box-feature">
                            <div class="dtr-feature-img"><img src="<?=base_url('public/assets/images/service-icon-3.svg');?>" alt="image"></div>
                            <div class="dtr-feature-content">
                                <h5>Display<br>
                                    Advertising</h5>
                                <p>Lorem ipsum dolor sit amet piscing elit sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <!-- feature 3 ends -->

                    <!-- feature 4 starts -->
                    <div class="col-md-6 col-xl dtr-px-0">
                        <div class="dtr-feature dtr-icon-feature dtr-feature-top dtr-box-feature">
                            <div class="dtr-feature-img"><img src="<?=base_url('public/assets/images/service-icon-4.svg');?>" alt="image"></div>
                            <div class="dtr-feature-content">
                                <h5>Search Engine Optimisation</h5>
                                <p>Lorem ipsum dolor sit amet piscing elit sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <!-- feature 4 ends -->

                    <!-- feature 5 starts -->
                    <div class="col-md-6 col-xl dtr-px-0">
                        <div class="dtr-feature dtr-icon-feature dtr-feature-top dtr-box-feature">
                            <div class="dtr-feature-img"><img src="<?=base_url('public/assets/images/service-icon-5.svg');?>" alt="image"></div>
                            <div class="dtr-feature-content">
                                <h5>Email<br>
                                    Marketing</h5>
                                <p>Lorem ipsum dolor sit amet piscing elit sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <!-- feature 5 ends -->

                </div>
                <!--== row ends ==-->

                <p class="text-center color-red">Note: Some features above require our Platinum plan available from $199/year</p>
            </div>
        </section>
        <!-- services section ends
================================================== -->

        <!-- section starts
================================================== -->
        <section class="dtr-section dtr-section-center-bg dtr-py-100" style="background-image: url(<?=base_url('public/assets/images/shape-2.svg')?>);">
            <!-- to change color of background shape no need to edit image - refer help document -->
            <div class="container">

                <!--== row starts ==-->
                <div class="row">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-5">

                        <!-- heading -->
                        <p class="dtr-tagline color-red">Build Online Presence</p>
                        <h2 class="dtr-section-heading">Grow Your Business</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        <a href="#" class="dtr-btn dtr-btn-rounded btn-red-outline dtr-mt-20">Get Started</a>

                        <!-- about image starts -->
                        <div class="dtr-about-img dtr-mt-100"> <img src="<?=base_url('public/assets/images/about-person.jpg');?>" alt="image" class="dtr-about-img dtr-rounded-img"> <img src="<?=base_url('public/assets/images/sig.png');?>" alt="image" class="dtr-about-sign">

                            <!-- social starts -->
                            <div class="dtr-about-social dtr-social-square dtr-social-colored">
                                <ul class="dtr-social dtr-social-list">
                                    <li><a href="#" class="dtr-linkedin" target="_blank" title="linkedin"></a></li>
                                </ul>
                            </div>
                            <!-- social ends -->

                        </div>
                        <!-- about image ends -->

                        <h4 class="dtr-mb-0">Allen Campbell</h4>
                        <p class="color-red">Client Service Director</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-md-6 offset-md-1 small-device-space">

                        <!-- nested row for offset column starts -->
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-4">

                                <!--=== image slider - 1col starts ===-->
                                <div class="dtr-slick-slider overflow-hidden dtr-rounded-slider dtr-slick-has-arrows slick-corner-arrows dtr-slider-1col">
                                    <!-- img 1 -->
                                    <div> <img src="<?=base_url('public/assets/images/image-1.jpg');?>" alt="image"> </div>
                                    <!-- img 2 -->
                                    <div> <img src="<?=base_url('public/assets/images/image-2.jpg');?>" alt="image"> </div>
                                    <!-- img 3 -->
                                    <div> <img src="<?=base_url('public/assets/images/image-3.jpg');?>" alt="image"> </div>
                                </div>
                                <!--=== image slider - 1col ends ===-->

                            </div>
                        </div>
                        <!-- nested row ends -->

                        <!-- spacer -->
                        <div class="spacer-100"></div>
                        <h2 class="dtr-section-heading">Subscribe To<br>
                            Our Newsletter</h2>

                        <!-- subscribe form starts -->
                        <div class="dtr-subscribe-form w-75 w-sm-100">
                            <form id="#" method="post" action="#">
                                <fieldset>
                                    <input name="email"  class="required email" type="text" placeholder="Email">
                                    <button class="dtr-subscribe-btn dtr-btn btn-red-transparent" type="submit">Subscribe!</button>
                                </fieldset>
                            </form>
                        </div>
                        <!-- subscribe form ends -->

                        <p class="color-red">*We don’t share your personal information</p>
                    </div>

                    <!--== column 2 ends ==-->

                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- section ends
================================================== -->

        <!-- testimonial section starts
================================================== -->
        <section class="dtr-section dtr-section-center-bg overflow-hidden dtr-py-100 bg-pink" style="background-image: url(<?=base_url('public/assets/images/map.png');?>);">
            <div class="container">

                <!--== row starts ==-->
                <div class="row">

                    <!-- top content starts -->
                    <div class="col-12 col-md-6">
                        <h2 class="dtr-section-heading">What People Say<br>
                            About Us...</h2>
                    </div>
                    <div class="col-12 col-md-6 small-device-space">
                        <div class="d-flex align-items-center justify-content-md-end"> <img src="<?=base_url('public/assets/images/trustpilot-symbol.png')?>" alt="image">
                            <div class="dtr-ml-20"> <img src="<?=base_url('public/assets/images/stars.png');?>" alt="image">
                                <p class="color-dark"><span class="font-weight-bold">4.6</span> score, 46 reviews</p>
                            </div>
                        </div>
                    </div>
                    <!-- top content ends -->

                    <!--===== testimonial slider starts =====-->
                    <div class="col-12 dtr-mt-30">
                        <div class="dtr-slick-slider dtr-testimonial-slider dtr-line-pager dtr-slick-has-dots">

                            <!--== slide 1 starts ==-->
                            <div class="dtr-testimonial">
                                <div class="dtr-testimonial-content"> There are many variations of passages of lorem ipsum available &#128578; but the majority have suffered alteration in some form by injected humour or randomised words which don't look even lorem ipsum dolor slightly believable. </div>

                                <!-- client info -->
                                <div class="dtr-client-info clearfix">
                                    <div class="dtr-testimonial-user"><img src="<?=base_url('public/assets/images/user-1.jpg');?>" alt="image"> </div>
                                    <div class="dtr-testimonial-user-info">
                                        <h5 class="dtr-client-name">Eleanor Jensen</h5>
                                        <span class="dtr-client-job">MarketPlus, LA</span> </div>
                                </div>
                                <!-- client info ends -->
                            </div>
                            <!--== slide 1 ends ==-->

                            <!--== slide 2 starts ==-->
                            <div class="dtr-testimonial">
                                <div class="dtr-testimonial-content"> Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt aute irure dolor in reprehenderit in voluptate velit esse cillum dolore beatae vitae dicta sunt explicabo magna aliqua. &#128077; </div>
                                <!-- client info -->
                                <div class="dtr-client-info clearfix">
                                    <div class="dtr-testimonial-user"><img src="<?=base_url('public/assets/images/user-2.jpg');?>" alt="image"> </div>
                                    <div class="dtr-testimonial-user-info">
                                        <h5 class="dtr-client-name">Jerry Johnston</h5>
                                        <span class="dtr-client-job">Acme Agency, France</span> </div>
                                </div>
                                <!-- client info ends -->
                            </div>
                            <!--== slide 2 ends ==-->

                            <!--== slide 3 starts ==-->
                            <div class="dtr-testimonial">
                                <div class="dtr-testimonial-content"> Nemo enim ipsam voluptatem quia voluptas sit aspernatur &#11088; odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt porro quisquam qui dolorem ipsum quia dolor sit consectetur. </div>
                                <!-- client info -->
                                <div class="dtr-client-info clearfix">
                                    <div class="dtr-testimonial-user"><img src="<?=base_url('public/assets/images/user-3.jpg');?>" alt="image"> </div>
                                    <div class="dtr-testimonial-user-info">
                                        <h5 class="dtr-client-name">Kamila Anderson</h5>
                                        <span class="dtr-client-job">Skwirel Media, UK</span> </div>
                                </div>
                                <!-- client info ends -->
                            </div>
                            <!--== slide 3 ends ==-->

                            <!--== slide 4 starts ==-->
                            <div class="dtr-testimonial">
                                <div class="dtr-testimonial-content"> Libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda &#128204; est omnis dolor repellendus sunt in culpa qui officia deserunt temporibus autem. </div>
                                <!-- client info -->
                                <div class="dtr-client-info clearfix">
                                    <div class="dtr-testimonial-user"><img src="<?=base_url('public/assets/images/user-4.jpg');?>" alt="image"> </div>
                                    <div class="dtr-testimonial-user-info">
                                        <h5 class="dtr-client-name">Jason Bourne</h5>
                                        <span class="dtr-client-job">SEO Expert, Germany</span> </div>
                                </div>
                                <!-- client info ends -->
                            </div>
                            <!--== slide 4 ends ==-->

                        </div>
                    </div>
                    <!--===== testimonial slider ends =====-->

                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- testimonial section ends
================================================== -->

        <!-- pricing section starts
================================================== -->
        <section id="pricing" class="dtr-section dtr-pt-100">
            <div class="container">

                <!-- heading starts -->
                <div class="text-center">
                    <p class="dtr-tagline color-red">Quickstart Now</p>
                    <h2 class="dtr-section-heading">Plans and Pricing</h2>
                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="row dtr-mt-80 dtr-mx-0">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-lg-6 col-xl-3 dtr-px-0">

                        <!-- pricing 1 starts -->
                        <div class="dtr-pricing bg-pink-alt">
                            <h3 class="dtr-pricing-heading">Silver</h3>
                            <p class="dtr-price-subtext color-red">Attract new & existing customers to your website</p>
                            <p class="dtr-price color-dark"><sup>$</sup>29<span>/mo</span></p>
                            <ul class="dtr-list-pricing">
                                <li>PPC Advertising</li>
                                <li>Social Media Advertising</li>
                                <li>Display Advertising</li>
                                <li>SEO</li>
                                <li>Email Marketing</li>
                            </ul>
                            <a href="#" class="dtr-btn dtr-btn-rounded btn-red">Get Started</a> </div>
                        <!-- pricing 1 ends -->

                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-lg-6 col-xl-3 dtr-px-0">

                        <!-- pricing 2 starts -->
                        <div class="dtr-pricing bg-orange-alt">
                            <h3 class="dtr-pricing-heading">Gold</h3>
                            <p class="dtr-price-subtext color-red">Attract new & existing customers to your website</p>
                            <p class="dtr-price color-dark"><sup>$</sup>99<span>/mo</span></p>
                            <ul class="dtr-list-pricing">
                                <li>PPC Advertising</li>
                                <li>Social Media Advertising</li>
                                <li>Display Advertising</li>
                                <li>SEO</li>
                                <li>Email Marketing</li>
                            </ul>
                            <a href="#" class="dtr-btn dtr-btn-rounded btn-red">Get Started</a> </div>
                        <!-- pricing 2 ends -->

                    </div>
                    <!--== column 2 ends ==-->

                    <!--== column 3 starts ==-->
                    <div class="col-12 col-lg-6 col-xl-3 dtr-px-0">

                        <!-- pricing 3 starts -->
                        <div class="dtr-pricing bg-dark color-white">
                            <p class="dtr-pricing-label bg-dark color-red">Most Popular</p>
                            <h3 class="dtr-pricing-heading">Platinum</h3>
                            <p class="dtr-price-subtext color-red">Attract new & existing customers to your website</p>
                            <p class="dtr-price"><sup>$</sup>199<span>/yr</span></p>
                            <ul class="dtr-list-pricing">
                                <li>PPC Advertising</li>
                                <li>Social Media Advertising</li>
                                <li>Display Advertising</li>
                                <li>SEO</li>
                                <li>Email Marketing</li>
                            </ul>
                            <a href="#" class="dtr-btn dtr-btn-rounded btn-red">Get Started</a> </div>
                        <!-- pricing 3 ends -->

                    </div>
                    <!--== column 3 ends ==-->

                    <!--== column 4 starts ==-->
                    <div class="col-12 col-lg-6 col-xl-3 dtr-px-0">

                        <!-- pricing 4 starts -->
                        <div class="dtr-pricing bg-orange">
                            <h3 class="dtr-pricing-heading">Diamond</h3>
                            <p class="dtr-price-subtext color-red">Attract new & existing customers to your website</p>
                            <p class="dtr-price color-dark"><sup>$</sup>299<span>/mo</span></p>
                            <ul class="dtr-list-pricing">
                                <li>PPC Advertising</li>
                                <li>Social Media Advertising</li>
                                <li>Display Advertising</li>
                                <li>SEO</li>
                                <li>Email Marketing</li>
                            </ul>
                            <a href="#" class="dtr-btn dtr-btn-rounded btn-red">Get Started</a> </div>
                        <!-- pricing 4 ends -->

                    </div>
                    <!--== column 4 ends ==-->

                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- pricing section ends
================================================== -->

        <!-- contact section starts
================================================== -->
        <section id="contact" class="dtr-section dtr-section-center-bg dtr-py-100" style="background-image: url(<?=base_url('public/assets/images/shape-3.svg');?>);">
            <!-- to change color of background shape no need to edit image - refer help document -->
            <div class="container">

                <!--== row starts ==-->
                <div class="row">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-5">

                        <!-- heading -->
                        <p class="dtr-tagline color-red">Commonly Asked Questions</p>
                        <h2 class="dtr-section-heading">FAQ</h2>

                        <!--== accordion starts ==-->
                        <div class="dtr-accordion accordion dtr-mt-30" id="accordion1">

                            <!-- item 1 starts -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordion1-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseOne" aria-expanded="false" aria-controls="accordion1-collapseOne"> Why do I need SEO for my business? </button>
                                </h2>
                                <div id="accordion1-collapseOne" class="accordion-collapse collapse show" aria-labelledby="accordion1-headingOne" data-bs-parent="#accordion1">
                                    <div class="accordion-body">There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable.</div>
                                </div>
                            </div>
                            <!-- item 1 ends -->

                            <!-- item 2 starts -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordion1-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseTwo" aria-expanded="false" aria-controls="accordion1-collapseTwo"> What is meant by 'web presence'? </button>
                                </h2>
                                <div id="accordion1-collapseTwo" class="accordion-collapse collapse" aria-labelledby="accordion1-headingTwo" data-bs-parent="#accordion1">
                                    <div class="accordion-body">There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable.</div>
                                </div>
                            </div>
                            <!-- item 2 ends -->

                            <!-- item 3 starts -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordion1-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseThree" aria-expanded="false" aria-controls="accordion1-collapseThree"> What is sponsored content? </button>
                                </h2>
                                <div id="accordion1-collapseThree" class="accordion-collapse collapse" aria-labelledby="accordion1-headingThree" data-bs-parent="#accordion1">
                                    <div class="accordion-body">There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable.</div>
                                </div>
                            </div>
                            <!-- item 3 ends -->

                            <!-- item 4 starts -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordion1-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseFour" aria-expanded="false" aria-controls="accordion1-collapseFour"> What does a digital marketer do? </button>
                                </h2>
                                <div id="accordion1-collapseFour" class="accordion-collapse collapse" aria-labelledby="accordion1-headingFour" data-bs-parent="#accordion1">
                                    <div class="accordion-body">There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable.</div>
                                </div>
                            </div>
                            <!-- item 4 ends -->

                        </div>
                        <!--== accordion ends ==-->

                        <!-- blog -->
                        <h2 class="dtr-section-heading dtr-mt-100">From The Blog</h2>

                        <!--=== blog slider - 1col starts ===-->
                        <div class="dtr-slick-slider overflow-hidden dtr-rounded-slider dtr-slick-has-arrows slick-left-corner-arrows dtr-slider-1col dtr-mt-30">

                            <!-- blog item 1 starts -->
                            <div class="dtr-blog-item">
                                <div class="dtr-blog-img"> <img src="<?=base_url('public/assets/images/post-img1.jpg');?>" alt="image"> </div>
                                <div class="dtr-blog-content">
                                    <p class="dtr-blog-category"><a href="#">Marketing</a></p>
                                    <h4>Almost Before We Knew It, We Had Left The Ground</h4>
                                </div>
                            </div>
                            <!-- blog item 1 ends -->

                            <!-- blog item 2 starts -->
                            <div class="dtr-blog-item">
                                <div class="dtr-blog-img"> <img src="<?=base_url('public/assets/images/post-img2.jpg');?>" alt="image"> </div>
                                <div class="dtr-blog-content">
                                    <p class="dtr-blog-category"><a href="#">Business</a></p>
                                    <h4>The Spectacle Before Us Was Indeed Sublime</h4>
                                </div>
                            </div>
                            <!-- blog item 2 ends -->

                            <!-- blog item 3 starts -->
                            <div class="dtr-blog-item">
                                <div class="dtr-blog-img"> <img src="<?=base_url('public/assets/images/post-img3.jpg');?>" alt="image"> </div>
                                <div class="dtr-blog-content">
                                    <p class="dtr-blog-category"><a href="#">Advertising</a></p>
                                    <h4>Almost Before We Knew It, We Had Left The Ground</h4>
                                </div>
                            </div>
                            <!-- blog item 3 ends -->

                        </div>
                        <!--=== blog slider - 1col ends ===-->

                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-md-6 offset-md-1 small-device-space">
                        <h4>We’re passionate about helping local businesses to grow online.</h4>
                        <p>Lorem ipsum dolor sit amet sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas culpa qui officia deserunt accumsan.</p>
                        <p><a href="#" class="dtr-btn dtr-btn-rounded btn-red-outline dtr-mt-20 dtr-mr-10"><i class="icon-phone-alt"></i>PTY +507 6430 6815</a> <a href="#" class="dtr-btn dtr-btn-rounded btn-red-transparent dtr-mt-20"><i class="icon-envelope-open"></i>support@servicioshm.com</a> </p>

                        <!-- nested row for offset column starts -->
                        <div class="row dtr-mt-100">
                            <div class="col-12 col-lg-8 offset-lg-4">

                                <!-- box starts -->
                                <div class="dtr-small-box dtr-rounded bg-red">
                                    <h3 class="color-white">Get A Callback</h3>

                                    <!-- form starts -->
                                    <form id="contactform" method="post" action="php/contact-form.php">
                                        <fieldset>
                                            <p class="dtr-form-field">
                                                <input name="name"  type="text" placeholder="Name">
                                            </p>
                                            <p class="dtr-form-field">
                                                <input name="email"  class="required email" type="text" placeholder="Email Address">
                                            </p>
                                            <p class="dtr-form-field">
                                                <input name="phone"  type="text" placeholder="Phone">
                                            </p>
                                            <p class="dtr-form-field">
                                                <textarea rows="4" name="message" class="required"  placeholder="Message..."></textarea>
                                            </p>
                                            <p class="antispam">Leave this empty: <br />
                                                <input name="url" />
                                            </p>
                                            <p>
                                                <button class="dtr-btn dtr-btn-rounded btn-white" type="submit">Request A Callback</button>
                                            </p>
                                            <div id="contactresult"></div>
                                        </fieldset>
                                    </form>
                                    <!-- form ends -->

                                    <p class="text-size-sm color-white dtr-mt-10">*Tu información es protegida por la <a href="#" class="text-decoration-underline">política de privacidad</a> Servicios HM .</p>
                                </div>
                                <!-- box ends -->

                            </div>
                        </div>
                        <!-- nested row ends -->

                    </div>
                    <!--== column 2 ends ==-->

                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- contact section ends
================================================== -->

    </div>
    <!-- == main content area ends == -->

    <!-- footer section starts
================================================== -->
    <footer id="dtr-footer">
        <div class="container">

            <!--== row starts ==-->
            <div class="row d-flex align-items-center">

                <!--== column 1 starts ==-->
                <div class="col-12 col-md-4">
                    <p>&copy; Skwirel. Template by <a href="https://themeforest.net/user/tansh">Tansh</a></p>
                </div>
                <!--== column 1 ends ==-->

                <!--== column 2 starts ==-->
                <div class="col-12 col-md-4 small-device-space text-center"> <a class="dtr-scroll-link" href="#home"><img src="<?=base_url('public/assets/images/logo-w.png');?>" width="250" alt="logo"></a> </div>
                <!--== column 2 ends ==-->

                <!--== column 3 starts ==-->
                <div class="col-12 col-md-4">
                    <ul class="dtr-list-copyright">
                        <li><a href="#">Terminos y Condiciones</a></li>
                        <li><a href="#">Politica de Privacidad</a></li>
                    </ul>
                </div>
                <!--== column 3 ends ==-->

            </div>
            <!--== row ends ==-->

        </div>
    </footer>
    <!-- footer section ends
================================================== -->

</div>
<!-- #dtr-wrapper ends -->

<!-- JS FILES -->
<script src="<?=base_url('public/assets/js/jquery.min.js');?>"></script>
<script src="<?=base_url('public/assets/js/bootstrap.min.js');?>"></script>
<script src="<?=base_url('public/assets/js/plugins.js');?>"></script>
<script src="<?=base_url('public/assets/js/slick.min.js');?>"></script>
<script src="<?=base_url('public/assets/js/custom.js');?>"></script>
</body>
</html>
