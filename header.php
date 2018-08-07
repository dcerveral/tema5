<!DOCTYPE html>
    
<html lang="es-ES" prefix="og: http://ogp.me/ns#">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="msapplication-tap-highlight" content="no"/>
     



 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
    <meta charset="utf-8"> 
	
	<meta name="author" content="esepress.com">
    <title><? echo $campo['title']; ?></title>
    <meta name="description" content="<? echo $campo['description']; ?>"/>
    <link rel="canonical" href="<? echo $conf['url']; ?>/<? echo $campo['slug']; ?>" />
		<meta name="robots" content="<? echo $conf['robots']; ?>" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<? echo $campo['title']; ?>" />
    <meta property="og:description" content="<? echo $campo['description']; ?>" />
    <meta property="og:url" content="<? echo $conf['url']; ?>/<? echo $campo['slug']; ?>" />
    <meta property="og:site_name" content="<? echo $campo['title']; ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<? echo $campo['description']; ?>" />
    <meta name="twitter:title" content="<? echo $campo['title']; ?>" />
    <title>ClickToCallFree</title>

    <!---------------------------------------------------------------------------------------------- STYLESHEETS -->
    <link rel="icon" href="/cms/<? echo $conf['tema']; ?>/png/logo.png">                                <!-- Browser Tab Icon -->
    <link href="/cms/<? echo $conf['tema']; ?>/css/bootstrap.min.css" rel="stylesheet">                    <!-- Bootstrap -->
    <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/font-awesome.min.css">                 <!-- Font-Awesome Icons -->
    <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/icomoon.min.css">                      <!-- iconmoon Icons -->
    <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/swiper.min.css">                       <!-- Carousel slider -->
    <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/style.css">                            <!-- Template CSS -->
    <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/animate.css">							<!-- Wow Animation CSS -->
    <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/google-fonts.css">                     <!-- Google font (Poppins) font face -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">		<!-- Google font (Poppins)  -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
</head>
<body>

<!-- WRAPPER -->    <!-- Preloader -->
<div class="wrapper preloader2" id="site-home">
  <!-- NAVIGATION AND SLIDER HOLDER -->
    <section class="site-holder" role="banner">

        <!-- HEADER -->
        <header class="site-header">

            <!-- STICKY HEADER -->
            <div class="sticky-header" id="sticky-header" style="background-color:<? echo $conf['primario']; ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8 col-sm-3">

                            <!-- LOGO -->
                            <div class="site-logo">
                                <a href="/">
                                    <img src="/cms/<? echo $conf['tema']; ?>/png/logo.png" alt="Logo">
                                    <span>C2CF</span>
                                </a>
                            </div>
                            <!-- END LOGO -->

                        </div>
                        <div class="col-xs-4 col-sm-9">

                            <!-- NAVIGATION -->
                            <nav class="site-nav" id="site-nav" role="navigation">
                                <!-- MOBILE VIEW BUTTON -->
                                <div class="nav-mobile">
                                    <i class="fa fa-bars show"></i>
                                    <i class="fa fa-close hide"></i>
                                </div>
                                <!-- LINKS -->
                                <ul class="nav-off-canvas">
                                    <!-- ACTIVE ITEM -->
                                    <li class="active"><a href="<? echo $conf['url']; ?>#site-home">Inicio</a></li>
                                    <li><a href="<? echo $conf['url']; ?>#amazing-features">Caracteristicas</a></li>
                                    
                                    <li><a href="<? echo $conf['url']; ?>#site-download">Download</a></li>
                                    <!--li><a href="#site-team">Equipo</a></li-->
																	<li><a href="<? echo $conf['url']; ?>#how-it-works">Cómo funciona</a></li>
                                    <li><a href="<? echo $conf['url']; ?>#site-packages">Precio</a></li>
                                    <!--li><a href="#">Nosotros <i class="fa fa-angle-down"></i> </a>

                                         
                                        <ul class="site-sub-menu">
                                        	<li><a href="#site-more-features">Some Seatures</a></li>
                                            <li><a href="#amazing-features">About App</a></li>
                                            <li><a href="#left-content-section">left Content</a></li>
                                            <li><a href="#right-content-section">Right Content</a></li>
                                            <li><a href="#how-it-works">How It Works</a></li>
                                            <li><a href="#site-accordion">Accordian</a></li>
                                            <li><a href="#site-testimonial">Testimonials</a></li>
                                            <li><a href="#site-subscribe">Subscribe</a></li>
                                        </ul-->

                                    </li>
															<li><a href="<? echo $conf['url']; ?>#latest-blog">Blog</a></li>
                                    <li><a href="<? echo $conf['url']; ?>#quick-support">Contacto</a></li>
                                    
                                </ul>
                            </nav>
                            <!-- END NAVIGATION -->

                        </div>
                    </div>
                </div>
            </div>
<? if (!$_GET['pag']){  ?>
            <!-- START SLIDER -->
            <div id="header-slider" class="header-slider blue-purple-gredient">
                <ul class="seq-canvas">

                    <!-- SLIDE 1 -->
                    <li class="step1 slides">

                        <!-- MAIN IMAGE -->
                        <div class="bg-img" style="background-image: url(/cms/<? echo $conf['tema']; ?>/png/header-slide-1.png)"></div>

                        <!-- Caption -->
                        <div class="slide-caption">

                            <!-- H1 Heading -->
                            <h1>C2CF</h1>

                            <!-- H2 Heading -->
                            <h2>Click to Call Free</h2>

                            <!-- Paragraph -->
                            <p>
                                C2CF   es un botón ubicado en tu página web que tus visitantes<br>
															podrán pulsar, generando un contacto de teléfono a teléfono que<br>
															funciona con tu tarifa plana de tu actual proveedor de telefonía,<br>
															por lo que no hay costes ocultos.<br>
                            </p>

                            <!-- Buttons -->
                            <a href="#site-download" class="slide-button slide-button-active">Descargar</a>

                            <!-- Button -->
                            <a href="#how-it-works" class="slide-button">Aprende más</a>

                        </div>

                    </li>

                    <!-- SLIDE 2 -->
                    <li class="step2 slides">

                        <!-- MAIN IMAGE -->
                        <div class="bg-img" style="background-image: url(/cms/<? echo $conf['tema']; ?>/png/header-slide-2.png)"></div>

                        <!-- Caption -->
                        <div class="slide-caption">

                            <!-- H1 Heading -->
                            <h1>C2CF</h1>

                            <!-- H2 Heading -->
                            <h2>Convierte las visitas en clientes</h2>

                            <!-- Paragraph -->
                            <p>
                               El 45% de los comercios online han reconocido un aumento<br> 
															de sus ventas y un mayor grado de fidelización gracias a la<br>
															atención al cliente ofrecida con C2CF.<br>
                            </p>


                            <!-- Buttons -->
                            <a href="#site-download" class="slide-button slide-button-active">Descargar</a>

                            <!-- Button -->
                            <a href="#how-it-works" class="slide-button">Aprende más</a>

                        </div>

                    </li>

                    <!-- SLIDE 3 -->
                    <li class="step3 slides">

                        <!-- MAIN IMAGE -->
                        <div class="bg-img" style="background-image: url(/cms/<? echo $conf['tema']; ?>/png/header-slide-1.png)"></div>

                        <!-- Caption -->
                        <div class="slide-caption">

                            <!-- H1 Heading -->
                            <h1>C2CF</h1>

                            <!-- H2 Heading -->
                            <h2>¿Comó funciona?</h2>

                            <!-- Paragraph -->
                            <p>
                                Una vez implementado el código en tu web, recibirás una notificación<br>
															en tu teléfono, para que devuelvas la llamada con tu actual tarifa<br>
															plana de telefonía móvil.<br>
                            </p>


                             <!-- Buttons -->
                            <a href="#site-download" class="slide-button slide-button-active">Descargar</a>

                            <!-- Button -->
                            <a href="#how-it-works" class="slide-button">Aprende más</a>


                        </div>

                    </li>

                    <!-- SLIDE 4 -->
                    <li class="step4 slides">

                        <!-- MAIN IMAGE -->
                        <div class="bg-img" style="background-image: url(/cms/<? echo $conf['tema']; ?>/png/header-slide-2.png)"></div>

                        <!-- Caption -->
                        <div class="slide-caption">

                            <!-- H1 Heading -->
                            <h1>C2CF</h1>

                            <!-- H2 Heading -->
                            <h2>¿Es realmente gratis?</h2>

                            <!-- Paragraph -->
                            <p>
                                La descarga de la APP es gratuita, y no hay cuotas de mantenimiento,<br>
															la devolución de la llamada se realiza directamente desde su movil,<br>
															por lo que si tiene contratado una tarifa plana de minutos, no hay<br>
															cargos extras para usted.<br>
                            </p>

                             <!-- Buttons -->
                            <a href="#site-download" class="slide-button slide-button-active">Descargar</a>

                            <!-- Button -->
                            <a href="#how-it-works" class="slide-button">Aprende más</a>

                        </div>

                    </li>

                </ul>

                <!-- PAGINATION -->
                <ul class="seq-pagination">
                    <li>01</li>
                    <li>02</li>
                    <li>03</li>
                    <li>04</li>
                </ul>

                <!-- NAVIGATION -->
                <button type="button" class="seq-next"><span class="icon-play"></span></button>
                <button type="button" class="seq-prev"><span class="icon-play-flip"></span></button>

            </div>
<? } ?>
        </header>
        <!-- END HEADER -->

    </section>
    
	
