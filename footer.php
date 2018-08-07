 
    <!-- FOOTER -->
    <footer class="site-footer section-blue">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                	<h1> Descargar ahora</h1>
					<!-- DOWNLOAD ICONS -->
				    <section class="site-download-icons">
                        <div class="align-center">
                
                            <!-- BUTTON 1 -->
                            <a href="#" class="app-download-icons wow fadeInDown" data-wow-duration="1s">
                                <!-- FIGURE -->
                                <figure><i class="fa fa-mobile"></i></figure>
                                <!-- h6 heading -->
                                <h6>Próximamente</h6>
                                <!-- h5 -->
                                <h5>iOS App Store</h5>
                            </a>
                
                            <!-- BUTTON 2 -->
                            <a href="#" class="app-download-icons wow fadeInDown" data-wow-duration="2s">
                                <!-- FIGURE -->
                                <figure><i class="fa fa-android"></i></figure>
                                <!-- h6 heading -->
                                <h6>Disponible en</h6>
                                <!-- h5 -->
                                <h5>Google Play</h5>
                            </a>
                
                            <!-- BUTTON 3 -->
                            <a href="#" class="app-download-icons wow fadeInDown" data-wow-duration="3s">
                                <!-- FIGURE -->
                                <figure><i class="fa fa-windows adjust"></i></figure>
                                <!-- h6 heading -->
                                <h6>Próximamente</h6>
                                <!-- h5 -->
                                <h5>Windows Store</h5>
                            </a>
                
                        </div>
    				</section>
                    
                    <!-- END LOGO -->

                    <!-- SOCIAL ICONS -->
                    <div class="site-social-icons">
											
											<? if ($conf['facebook']){ ?>
                        <a href="<? echo $conf['facebook']; ?>"><i class="fa fa-facebook"></i></a>
											<? } ?>
											<? if ($conf['twitter']){ ?>
                        <a href="<? echo $conf['twitter']; ?>"><i class="fa fa-twitter"></i></a>
											<? } ?>
											<? if ($conf['pinterest']){ ?>
                        <a href="<? echo $conf['pinterest']; ?>"><i class="fa fa-pinterest"></i></a>
											<? } ?>
											<? if ($conf['youtube']){ ?>
                        <a href="<? echo $conf['youtube']; ?>"><i class="fa fa-youtube"></i></a>
											<? } ?>
											<? if ($conf['tumbl']){ ?>
                        <a href="<? echo $conf['youtube']; ?>"><i class="fa fa-youtube"></i></a>
											<? } ?>
											<? if ($conf['tumblr']){ ?>
                        <a href="<? echo $conf['tumblr']; ?>"><i class="fa fa-tumblr"></i></a>
											<? } ?>
                       <? if ($conf['instagram']){ ?>
                        <a href="<? echo $conf['instagram']; ?>"><i class="fa fa-instagram"></i></a>
											<? } ?>
											
                    </div>
                    <!-- END SOCIAL ICONS -->

									 <!-- COPYRIGHT -->
                    <div class="site-copyright">
                        <a href="/legal"  >Condiciones Legales</a> | <a href="/privacidad"  >Política de privacidad</a> | <a href="/cookies"  >Uso de cookies</a>  </p>
                    </div>
									
									
									
                    <!-- COPYRIGHT -->
                    <div class="site-copyright">
                        <p>©  <? echo date('Y'); ?> Desarrollado por <a href="https://esepress.com"  >Esepress.com Themes</a></p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

</div>
<!-- END WRAPPER -->

<!-------------------------------------------------------------------------- SCRIPTS -->
<script src="/cms/<? echo $conf['tema']; ?>/js/jquery-1.12.4.min.js"></script>                         <!-- JQuery -->
<script src="/cms/<? echo $conf['tema']; ?>/js/loadingoverlay.min.js"></script>                        <!-- Preloader -->
<script src="/cms/<? echo $conf['tema']; ?>/js/swiper.jquery.min.js"></script>                         <!-- Carousel slider -->
<script src="/cms/<? echo $conf['tema']; ?>/js/jquery.mcustomscrollbar.concat.min.js"></script>        <!-- Custom scroll bar -->
<script src="/cms/<? echo $conf['tema']; ?>/js/modernizr-custom.min.js"></script>                      <!-- Modernizr -->
<script src="/cms/<? echo $conf['tema']; ?>/js/imagesloaded.pkgd.min.js"></script>                     <!-- Header Slider -->
<script src="/cms/<? echo $conf['tema']; ?>/js/hammer.min.js"></script>                                <!-- Header Slider -->
<script src="/cms/<? echo $conf['tema']; ?>/js/sequence.min.js"></script>                              <!-- Header Slider -->

<script src="/cms/<? echo $conf['tema']; ?>/js/jquery.countimator.min.js"></script>                    <!-- Counter -->
<script src="/cms/<? echo $conf['tema']; ?>/js/bootstrap.min.js"></script>                             <!-- Bootstrap -->
<script src="/cms/<? echo $conf['tema']; ?>/js/jquery.sticky.min.js"></script>                         <!-- Sticky Header -->
<script src="/cms/<? echo $conf['tema']; ?>/js/jquery.scrollup.min.js"></script>                       <!-- scroll top -->
<script src="/cms/<? echo $conf['tema']; ?>/js/style.js"></script>                                     <!-- Template Changeable Plugin Options -->
<script src="/cms/<? echo $conf['tema']; ?>/js/wow.min.js"></script>									<!--Wow animation js -->
 
 


</body>
 
</html>