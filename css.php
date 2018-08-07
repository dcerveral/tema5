			.hero{ text-align:center; }
.hero::after {
  content: "";
	background-color:<? echo $conf['primario']; ?>;
  background: url(/img/<? echo $campo['foto']; ?>);opacity: 0.1;
	background-repeat: no-repeat;
	background-size:  cover;
  background-attachment: fixed;
  
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}
	/************************ RESPONSIVE 3406 ************************/

/* XX-Large desktop */
@media (max-width: 1600px) {

    .header-home .box-services .content {
        padding: 50px 15px 40px;
    }   
    
    .header-home .box-services .content .option {
        top: 15px;
    }
    
    .header-home .box-services .content:not(.middle) h2,
    .header-home .box-services .content:not(.middle) p {
        max-width: 230px;
    }
    
}

/* X-Large desktop */
@media (min-width: 1200px) {
    
}

/* Large desktop */
@media (max-width: 1199px) {
    
    .menu-categories .cat-menu li a img {
        display: none;   
    }
    
    .page-tienda .box-info .content {
        padding: 30px 40px;
    }
    
    .box-map .row > div {
        padding-left: 40px;
    }
    
    .box-map h2 {
        padding-right: 80px;
    }
    
    .box-map p {
        padding-right: 0px;
    }
    
    .page-tienda .box-gerente .row > div {
        padding-left: 50px;
    }
    
    .page-tienda .box-articles .row .row {
        margin: 0px -10px;
    }
    
    .page-tienda .box-articles .row .row > div {
        padding: 0px 10px 15px;
    }
    
    .header-deposito:before {
        background-position: 100% 65%;
        background-size: 640px;
    }
    
    .page-deposito .box-ventajas .row {
        padding: 0px;
    }
    
    .header-home .box-services .row > div:nth-child(1) .content,
    .header-home .box-services .row > div:nth-child(2) .content {
        padding: 40px 10px;
    }
    
    .header-home .box-services .row > div:nth-child(1):before,
    .header-home .box-services .row > div:nth-child(1):hover:before {
        background-size: 370px;
        background-position: 93% 140px;
    }
    
    .header-home .box-services .row > div:nth-child(2):before,
    .header-home .box-services .row > div:nth-child(2):hover:before {
        background-size: 370px;
        background-position: 93% 140px;
    }
    
    .header-home .box-services .row > div:nth-child(3):before,
    .header-home .box-services .row > div:nth-child(3):hover:before {
        background-size: 250px;
        background-position: calc(100% + 45px) calc(100% + 60px);
    }
    
    .header-home .box-services .content:not(.middle) {
        padding: 50px 10px 40px;
    }
    
    .header-home .box-services .content .btn-go,
    .header-home .box-services .content .btn-go span {
        width: 205px;
    }
    
    .header-home .box-services .content .btn-go > span:first-child {
        width: 0px;
    }
    
    .header-home .box-services .content:not(.middle) h2 {
        font-size: 22px;
        line-height: 26px;
        max-height: 200px;
    }
    
    .header-home .box-services .content:not(.middle) p {
        font-size: 18px;
        max-width: 180px;
    }
    
    .home-page .slick a {
        font-size: 16px;
    }
    
    .home-page .box-categorias h2 {
        font-size: 30px;   
    }
    
    .home-page .slick.slick-dotted.slick-slider {
        margin: 20px 0px 40px;
    }
    
    .home-page .slick .slick-dots {
        bottom: -40px;
    }
    
    .home-page .slick span {
        height: 110px;
    }
    
    .home-page .box-categorias .slick img {
        max-width: 95px;
        max-height: 80px;
    }
    
    .home-page .box-vender .slick span {
        height: 178px;
    }
    
    .home-page .box-vender .slick:before {
        height: 130px;
    }
    
    .home-page .box-vender .slick img {
        max-width: 140px;
        max-height: 110px;
    }
    
    .home-page .box-vender .slick .slick-next,
    .home-page .box-vender .slick .slick-prev {
        top: 122px;
    }
    
    .home-page .box-vender .slick h4 {
        padding: 0px 10px;
    }
    
    .home-page .box-conocelas ul li a {
        padding: 120px 0px;
        font-size: 24px;
    }
    
    .home-page .box-encuentra .box-cercana {
        padding-right: 200px;
    }
    
    .home-page .box-encuentra .box-cita {
        padding-left: 200px;
    }
    
    .home-page .box-encuentra h3 {
        font-size: 26px;
        line-height: 44px;
    }
    
    .home-page .box-encuentra .box-cita h3 {
        font-size: 26px;
        line-height: 32px;
    }
    
    .home-page .box-encuentra .box-cita .image {
        width: 200px;
        left: 0px;
    }
    
    .page-carnaval.page-info .box-image {
        height: 130px;
    }
    
    .page-carnaval.page-info .box-image img {
        max-width: 100%;
    }
    
    .page-carnaval.page-info .box-content p {
        font-size: 16px;
        line-height: 20px;
    }
    
    .banner-carnaval .container {
        padding: 40px 20px;
    }
    
    .banner-carnaval .container > .row > div:nth-child(2) {
        position: relative;
        left: 10px;
    }
    
    .banner-carnaval .container .title strong {
        font-size: 56px;
    }
    
    .banner-carnaval .container > .row > div:nth-child(3) img {
        width: 240px;
    }
    
    .banner-carnaval .container .precio {
        margin-top: 25px;
    }
    
    .banner-carnaval .container .precio strong {
        font-size: 36px;
    }
    
    .banner-carnaval .container .puesto  {
        font-size: 15px;;
    }
    
    .page-regalazo .box-content .image {
        left: -80px;
    }

}

@media (min-width: 992px) {
    
    .menu-categories .cat-menu {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }
    
}

/* Portrait tablet to landscape and desktop */
@media (max-width: 991px) {
    
    .header .header-left {
        background: #fff;
    }

    .header .fix-top .container {
        width: 100%;
        padding: 0px;
    }
    
    .menu-categories .container {
        width: 100%;
    }
    
    .menu-categories .toggle-menu {
        display: block;
        background: #484e52;
        color: #fff;
        text-align: right;
        padding: 5px 25px;
        font-weight: 600;
    }
    
    .menu-categories .toggle-menu .brand {
        display: block;
        float: right;
        width: 15px;
        height: 15px;
        margin-top: 6px;
        margin-left: 8px;
        -webkit-transition: .3s all ease;
        transition: .3s all ease;
    }
    
    .menu-categories .toggle-menu .brand span {
        display: block;
        width: 15px;
        height: 2px;
        background: #fff;
        position: relative;
        top: 6px;
    }
    
    .menu-categories .toggle-menu .brand span:last-child {
        top: 4px;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    
    .menu-categories .toggle-menu.active .brand {
        -webkit-transform: rotate(45deg) translate3d(0,0,0);
        transform: rotate(45deg) translate3d(0,0,0);
    }
    
    .menu-categories .cat-menu {
        display: none;
        padding: 0px 20px;
    }
    
    .menu-categories .cat-menu li:first-child {
        margin-top: 15px;
    }
    
    .menu-categories .cat-menu li:last-child {
        margin-bottom: 15px;
    }
    
    .menu-categories .cat-menu li a {
        padding: 4px 0px;
    }
    
    .menu-categories .cat-menu li span {
        display: inline-block;
        width: 45px;
        text-align: center;
    }
    
    .menu-categories .cat-menu li a img {
        display: inline-block;   
    }
    
    .menu-categories .cat-menu .dropdown-menu {
        display: none !important;
    }
    
    .box-tiendas .box-column {
        -webkit-column-count: 3;
        column-count: 3;
    }
    
    .box-map .container {
        padding: 50px 15px;
    }
    
    .box-map .row > div {
        padding-left: 15px;
    }

    .box-map h2 {
        padding-right: 0px;
    }
    
    .box-map h3 {
        padding: 0px;
        text-align: center;
        font-size: 26px;
        line-height: 36px;
    }
    
    .box-map .separate {
        margin: 20px auto 30px;
    }
    
    .box-map #mapTiendas {
        position: relative !important;
        width: 100%;
        height: 400px;
        top: 0px;
        left: 0px;
        z-index: 2;
    }
    
    .page-tienda .box-info {
        z-index: 15;
    }
    
    .page-tienda .box-articles .row .row > div {
        margin-bottom: 30px;
    }
    
    .page-tienda .box-slider {
        padding: 0px;
        max-width: 500px;
        margin: 30px auto 0px;
    }
    
    .page-tienda .box-gerente {
        background: rgb(232,65,108);
        background: -moz-linear-gradient(left, rgba(232,65,108,1) 0%, rgba(171,45,102,1) 100%);
        background: -webkit-linear-gradient(left, rgba(232,65,108,1) 0%,rgba(171,45,102,1) 100%);
        background: linear-gradient(to right, rgba(232,65,108,1) 0%,rgba(171,45,102,1) 100%);
    }
    
    .page-tienda .box-gerente .image {
        width: 100%;
        opacity: .1;
    }
    
    .page-tienda .box-gerente .row > div {
        padding-left: 15px;
    }
    
    .box-banners img {
        max-width: 100%;
        margin: 8px 0px;
        float: none !important;
    }
    
    .page-trabaja .form-validate {
        margin-top: 30px;   
    }
    
    .page-tienda .box-ve {
        background-position: calc(50% + 280px) center;
    }

    .page-tienda .box-ve .content {
        padding-right: 20px;
    }
    
    .page-tienda .box-ve .content h3 br {
        display: none;
    }
    
    .page-tienda .box-ve .content p {
        line-height: 28px;
    }
    
    .footer .row-footer > .col:first-child {
        width: 100%;
        text-align: center;
        margin-bottom: 40px;
    }
    
    .header-deposito:before {
        background-position: calc(100% + 120px) 65%;
        background-size: 640px;
    }
    
    .page-deposito .box-funciona .row > div {
        min-height: 220px;
    }
    
    .page-deposito .box-funciona .bottom {
        margin-top: 20px;
    }
    
    .page-deposito .box-ventajas .content {
        min-height: 240px;
    }
    
    .header-home .box-services .row > div .option,
    .header-home .box-services .row > div:hover .option {
        right: 20px;
    }
    
    .page-deposito .box-ventajas .content p,
    .page-deposito .box-ventajas .row > div:last-child .content p {
        padding-right: 30px;
    }
    
    .header-home .box-services .row > div:nth-child(1):before,
    .header-home .box-services .row > div:nth-child(1):hover:before {
        background-size: 120px;
        background-position: calc(100% + 50px) 140px;
    }
    
    .header-home .box-services .row > div:nth-child(2):before,
    .header-home .box-services .row > div:nth-child(2):hover:before {
         background-size: 120px;
        background-position: calc(100% + 50px) 140px;
    }
    
    .header-home .box-services .row > div:nth-child(3):before,
    .header-home .box-services .row > div:nth-child(3):hover:before {
        background-size: 360px;
        background-position: 93% calc(100% + 100px);
    }
    
    .header-home .box-services .content:not(.middle) h2,
    .header-home .box-services .content:not(.middle) p {
        max-width: 100%;
    }
    
    .header-home .box-services .content .btn-go,
    .header-home .box-services .content .btn-go span {
        width: 220px;
    }
    
    .home-page .box-encuentra .box-cercana {
        padding-right: 40px;
    }
    
    .home-page .box-encuentra .box-cita {
        padding-left: 40px;
    }
    
    .home-page .box-encuentra .box-cita .image {
        display: none;
    }
    
    .page-carnaval.page-info .box-header img {
        width: 250px;
    }
    
    .page-carnaval.page-info .box-header h3 {
        font-size: 24px;
    }
    
    .page-carnaval.page-info .box-header h1 {
        font-size: 30px;
        line-height: 44px;
    }
    
    .page-carnaval.page-info .box-header h1 strong {
        font-size: 60px;
    }
    
    .page-carnaval.page-info .box-image {
        height: 120px;
    }
    
    .page-carnaval.page-info .box-image img {
        width: 140px;
    }
    
    .page-carnaval.page-info .box-content .row > div:nth-child(4) .box-image,
    .page-carnaval.page-info .box-content .row > div:nth-child(5) .box-image,
    .page-carnaval.page-info .box-content .row > div:nth-child(6) .box-image {
        margin-top: 20px 
    }
    
    .banner-carnaval .container .title {
        font-size: 24px;
        line-height: 36px;
        margin-top: 5px;
    }
    
    .banner-carnaval .container .title sup {
        font-size: 14px;
        top: -10px;
    }
    
    .banner-carnaval .container .title strong {
        font-size: 48px;
    }
    
    .banner-carnaval .container > .row > div:nth-child(2),
    .banner-carnaval .container > .row > div:nth-child(2) .row > div:nth-child(2) {
        padding: 0px 5px;
    }
    
    .banner-carnaval .container > .row > div:nth-child(2) p {
        font-size: 13px;
        line-height: 15px;
    }
    
    .banner-carnaval .container > .row > div:nth-child(3) img {
        width: 190px;
    }
    
    .banner-carnaval .container .precio {
        margin-top: 15px;
        font-size: 18px;
    }
    
    .banner-carnaval .container .precio strong {
        font-size: 28px;
    }
    
    .blog-content.page-tienda {
        z-index: 1;
    }
    
    .page-regalazo .box-content h1 {
        max-width: none;
        font-size: 30px;
        line-height: 36px;
    }
    
    .page-regalazo .box-content .content {
        padding-left: 380px;
    }
    
    .page-regalazo .box-content .image {
        left: -90px;
        width: 580px;
        bottom: -20px;
    }
    
}


@media (min-width: 768px) { 
    
    .footer .row-footer ul {
        display: block !important;
        height: auto !important;
    }
    
}


/* Landscape phone to portrait tablet */
@media (max-width: 767px) {      
    
    .header .header-left {
        position: relative;
        width: 100%;
        height: auto;
        padding: 20px;
    }
    
    .header .logo {
        
        margin: 0px;
				float:left;
				width:60px;
			height:60px;
 
    }
    
    .header .header-content .container {
        padding: 20px 15px;
        min-height: 0px;
    }
    
    .header .scroll {
        margin-bottom: 30px;
    }
    
    .header .box-title {
        position: static;
    }
    
    .header h1 {
        font-size: 40px;
        line-height: 44px;
    }
    
    .box-content {
        padding: 30px 0px;
    }
    
    .box-tiendas h2 {
        font-size: 26px;
        line-height: 36px;
    }
    
    .box-tiendas .separate {
        margin-bottom: 40px;
    }

    .box-tiendas .box-column {
        -webkit-column-count: 2;
        column-count: 2;
    }
    
    .box-tiendas ul, .box-tiendas .has-parent {
        display: none;
    }

    .box-tiendas h3 {
        margin: 10px 0px 10px;
        position: relative;
        padding-left: 30px;
    }
    
    .box-tiendas h3 a {
        line-height: 22px;
    }
    
    .box-tiendas h3:before {
        content: '';
        position: absolute;
        top: -4px;
        left: 0px;
        background: url(../images/mini-mark.png) center no-repeat;
        background-size: 16px;
        width: 20px;
        height: 25px;
    }
    
    .box-map .container {
        padding: 40px 15px;
    }
    
    .box-map .row > div {
        padding: 0px 25px;
    }
    
    .box-map h2 {
        text-align: center;
    }
    
    .box-map .separate {
        margin: 15px auto 25px;
    }
    
    .box-map p {
        text-align: center;
    }
    
    .page-ciudad .row-tiendas > div {
        width: 100%;
    }
    
    .page-ciudad .row-ciudades > div {
        width: 50%;
    }
    
    .page-ciudad .box-ciudades .ciudades {
        margin-bottom: 20px;
    }
    
    .header .single .breadcrumbs {
        margin: 0px;
    }
    
    .header.header-tienda .box-title {
        bottom: 25px;
    }

    .page-tienda .box-extend .content {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1;
    }
    
    .page-tienda .box-info .content {
        margin: 0px;
        box-shadow: none;
        border: none;
        padding: 30px 15px;
    }
    
    .page-tienda .box-info #map {
        position: relative !important;
        height: 300px;
    }
    
    .page-tienda .post-content h2 {
        text-align: center;
        font-size: 26px;
        line-height: 32px;
    }
    
    .page-tienda .post-content .separate {
        margin: 20px auto 35px;
    }
    
    .page-tienda .box-slider {
        max-width: none;
        margin: 30px -15px 0px;
    }
    
    .page-tienda .box-slider .carousel-inner {
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    
    .page-tienda .box-info + .box-content {
        padding-bottom: 0px;
    }
    
    .page-tienda .box-slider .item {
        height: 300px;
    }
    
    .page-tienda .box-slider .carousel-indicators {
        display: block;
        width: 100%;
        height: 80px;
        left: 0px;
        bottom: 0px;
        margin: 0px;
        background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.4) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    }
    
    .page-tienda .box-slider .carousel-indicators li {
        margin: 50px 5px 0px;
        border: none;
        background: rgba(255,255,255,.4);
    }
    
    .page-tienda .box-slider .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        background: rgba(255,255,255,.9);
    }
    
    .page-tienda .box-slider .carousel-controls {
        display: none;
    }
    
    .page-tienda .row-productos .box-image {
        max-width: 250px;
        margin: 0 auto;
    }
    
    .page-tienda .box-gerente {
        padding: 30px 0px;
    }
    
    .page-tienda .box-ve {
        padding: 300px 0px 0px;
        background-size: 400px;
        background-position: center 15px;
        border-bottom: 2px solid #F6F6F6;
    }
    
    .page-tienda .box-ve:before {
        display: none;
    }
    
    .page-tienda .box-ve .row {
        margin: 0px;
    }
    
    .page-tienda .box-ve .row > div {
        padding: 0px;
    }

    .page-tienda .box-ve .container {
        padding: 0px;
    }
    
    .page-tienda .box-ve .content {
        padding: 35px 20px 40px;
        text-align: left;
        background: url(../images/bg-ve.jpg) center no-repeat;
        background-size: cover;
    }
    
    .page-tienda .box-ve .content .btn-border {
        margin: 25px auto 0px;
        display: block;
        width: 250px;
    }
    
    .modal-dialog {
        padding: 0px 15px;
    }
    
    .modal-title {
        padding: 0px;
    }
    
    .modal-footer .btn {
        padding: 12px 30px 10px !important;
    }
    
    .page-contact .form-validate .alert-ok {
        font-size: 14px;   
    }
    
    .page-citas, .page-citas .box-content {
        position: relative;
    }
    
    .page-citas:before {
        content: '';
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,.3);
    }
    
    .page-citas .box-info {
        text-align: center;
        max-width: none;
        min-height: 0px;
        margin: 0px;
        padding: 20px 0px;
    }
    
    .footer {
        text-align: center;
    }
    
    .footer .row-footer {
        display: block;
        padding: 25px 0px 80px;
    }
    
    .footer .row-footer > .col:first-child {
        margin-bottom: 30px;
    }
    
    .footer h4 {
        font-size: 14px;
        line-height: 30px;
        cursor: pointer;
        display: inline-block;
        position: relative;
        font-weight: 600;
        letter-spacing: 0.2px;
    }
    
    .footer h4:after {
        content: '\f107';
        font-family: 'fontAwesome';
        margin-left: 5px;
        font-size: 12px;
    }
    
    .footer h4.active:after {
        content: '\f106';
    }
    
    .footer .row-footer ul {
        margin-bottom: 20px;
        display: none;
    }
    
    .footer .row-footer ul li {
        line-height: 20px;
    }
    
    .footer .box-legal {
        position: relative;
    }
    
    .footer .box-legal .social {
        float: none;
        position: absolute;
        bottom: 100px;
        left: 0px;
        width: 100%;
        z-index: 1;
    }
    
    .footer .box-legal .social li a {
        margin: 0px 5px;
        color: #1A1D1F;
    }
    
    .header-deposito:before {
        background-image: url(../images/deposito/img-deposito-xs.png);
        background-position: bottom center;
        background-size: 349px;
    }
    
    .header-deposito .header-top .logo {
        width: 177px;
    }
    
    .header-deposito .box-content {
        padding: 30px 0px 160px;
        text-align: center;
    }
    
    .header-deposito .box-content h1 {
        font-size: 28px;
        line-height: 46px;
    }
    
    .header-deposito .box-content p {
        font-size: 14px;
        line-height: 31px;
    }
    
    .page-deposito .box-content {
        padding: 40px 0px;
    }
    
    .page-deposito .box-funciona h2,
    .page-deposito .box-ventajas h2,
    .page-deposito .box-empezamos h2 {
        font-size: 24px;
        line-height: 40px;
        margin-bottom: 20px;
    }
    
    .page-deposito .box-ventajas h2,
    .page-deposito .box-funciona h2 {
        margin-bottom: 30px;
    }
    
    .page-deposito .box-funciona .separate,
    .page-deposito .box-ventajas .separate {
        margin-bottom: 50px;
    }
    
    .page-deposito .box-funciona .row > div {
        min-height: 0px;
        margin-bottom: 30px;
        padding: 0px 40px;
    }
    
    .page-deposito .box-ventajas .row > div:last-child .content {
        margin-bottom: 20px;
    }
    
    .page-deposito .box-ventajas .content {
        min-height: 0px;
        padding: 20px 30px 40px;
        margin-bottom: 20px;
    }
    
    .page-deposito .box-empezamos p + .btn-solid {
        padding: 15px 80px 15px;
        background-image: none;
        margin-top: 20px;
    }
    
    .header-home .box-services .content {
        padding: 20px 5px !important;
    }
    
    .header-home .box-services .content .title {
        font-size: 10px;
        padding: 0px 10px;
    }
    
    .header-home .box-services .content .option {
        top: 20px;
        font-size: 12px;
        right: 10px !important;
    }
    
    .header-home .box-services .content h2,
    .header-home .box-services .content h2 strong {
        font-size: 25px !important;
        line-height: 32px !important;
        margin-bottom: 0px;
    }
    
    .header-home .box-services .content h2 {
        max-width: 240px !important;
    }

    .header-home .box-services .content p {
        display: none;
    }
    
    .header-home .box-services .row > div:nth-child(1):before,
    .header-home .box-services .row > div:nth-child(1):hover:before {
        background-size: 100px;
        background-position: calc(100% - 25px) 70px;
    }
    
    
    
    .header-home .box-services .row > div:nth-child(3):before,
    .header-home .box-services .row > div:nth-child(3):hover:before {
        background-image: url(/img/tienda-online.png);
       background-size: 310px;
        background-position: calc(100% + 115px) calc(100% + 120px);
    }
    
    .header-home .box-services .content .btn-go,
    .header-home .box-services .content .btn-go span {
        width: 215px;
    }
    
    .home-page .box-categorias h2 {
        font-size: 22px;
        line-height: 34px;
    }
    
    .home-page .box-categorias .slick img,
    .home-page .box-categorias .slick a:hover img {
        max-width: 95px;
        max-height: 80px;
    }
    
    .home-page .box-encuentra {
        text-align: center;
        padding: 0px 0px 50px;
    }
    
    .home-page .box-encuentra h3 {
        font-size: 20px;
        line-height: 32px;
        margin: 0px 0px 30px;
    }
    
    .home-page .box-encuentra h3 strong {
        max-width: 100%;
    }
    
    .home-page .box-encuentra {
        padding: 0px;
    }
    
    .home-page .box-encuentra:before,
    .home-page .box-encuentra:after {
        display: none;
    }
    
    .home-page .box-encuentra .row > div:first-child {
        background: url(../images/home/bg-tienda-white.jpg) center;
        background-size: cover;
        padding: 40px 15px;
    }
    
    .home-page .box-encuentra .row > div:last-child {
        background: rgb(254,131,160); /* Old browsers */
        background: -moz-radial-gradient(center, ellipse cover, rgba(254,131,160,1) 0%, rgba(212,64,99,1) 100%); /* FF3.6-15 */
        background: -webkit-radial-gradient(center, ellipse cover, rgba(254,131,160,1) 0%,rgba(212,64,99,1) 100%); /* Chrome10-25,Safari5.1-6 */
        background: radial-gradient(ellipse at 150px top, rgba(254,131,160,1) 0%,rgba(212,64,99,1) 80%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        padding: 40px 15px;
    }
    
    .home-page .box-encuentra .box-cita,
    .home-page .box-encuentra .box-cercana {
        padding: 0px;
    }
    
    .home-page .box-encuentra .box-cita h3 {
        padding: 0px;
        font-size: 20px;
        line-height: 32px;
    }
    
    .home-page .box-encuentra .box-cita .form-control,
    .home-page .box-encuentra .box-cita .btn-arrow,
    .home-page .box-encuentra .box-cercana .btn-arrow {
        max-width: 350px;
        margin: 15px auto 0px;
    }
    
    .home-page .box-encuentra:after {
        width: 100%;
    }
    
    .home-page .box-conocelas h3 {
        font-size: 24px;
        line-height: 34px;
        padding: 0px 50px;
    }
    
    .home-page .box-conocelas ul {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }
    
    .home-page .box-conocelas ul li {
        width: 50%;
        max-width: 50%;
       
    }
    
    .home-page .box-conocelas ul li:last-child {
        display: none;
    }
    
    .home-page .box-conocelas ul li a {
        padding: 100px 0px;
    }

    .home-page .box-vender h2 {
        font-size: 24px;
        line-height: 34px;
        padding: 0px 50px;
    }
    
    .home-page .box-vender .slick {
        padding: 0px 30px;
    }
    
    .home-page .box-vender .slick .slick-prev {
        left: 10px;
    }
    
    .home-page .box-vender .slick .slick-next {
        right: 10px;
    }
    
    .page-carnaval {
        padding: 40px 0px;
    }
    
    .page-carnaval:before,
    .page-carnaval:after {
        content: '';
        width: 100%;
        height: 70px;
        background: url(../images/carnaval/bg-xs.png) center bottom no-repeat;
        background-size: 640px;
    }
    
    .page-carnaval:after {
        top: auto;
        right: auto;
        left: 0px;
        bottom: 0px;
    }
    
    .page-carnaval .box-header .row > div {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }
    
    .page-carnaval .box-header a {
        order: 4;
    }
    
    .page-carnaval .box-header .icon {
        margin: 0px 0px 5px;
        width: 100px;
    }
    
    .page-carnaval .box-header .logo {
        width: 160px;
        margin: 0px;
    }
    
    .page-carnaval .box-header h1 {
        font-size: 18px;
        letter-spacing: 0px;
        line-height: 28px;
    }
    
    .page-carnaval .box-header h1 sup {
        font-size: 10px;
        top: -10px;
        left: 2px;
    }
    
    .page-carnaval .box-header h1 strong {
        font-size: 40px;
    }
    
    .page-carnaval .box-content {
        padding: 15px 0px 0px;
    }
    
    .page-carnaval .box-content .steps {
        height: 360px;
    }
    
    .page-carnaval .box-content .content {
        box-shadow: none;
        padding: 0px 10px;
    }
    
    .page-carnaval .box-content .content h3 {
        text-align: left;
        margin: 0px 0px 10px;
        font-size: 14px;
    }
    
    .page-carnaval .box-content .content.second h3 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .page-carnaval .box-content .content .form-group {
        margin-bottom: 8px;
    }
    
    .page-carnaval .box-content .content .form-group.checkbox label {
        font-size: 13px;
    }
    
    .page-carnaval .box-content .content .form-group.checkbox label.has-error:after {
        top: 2px;
        line-height: 15px;
    }
    
    .page-carnaval .box-content .content .btn-solid {
        margin-top: 12px;
    }
    
    .page-carnaval .box-content .content .has-error:after {
        right: -20px;
        width: 15px;
        height: 15px;
        font-size: 10px;
        line-height: 15px;
        font-weight: 800; 
    }
    
    .page-carnaval .box-footer {
        display: none;
    }
    
    .page-carnaval.page-info {
        padding-top: 50px;
    }
    
    .page-carnaval.page-info:before,
    .page-carnaval.page-info .bg-pink.last:before {
        background-size: 800px;
        height: 100px;
    }
    
    .page-carnaval.page-info .bg-pink.last:before {
        height: 140px;
    }
    
    .page-carnaval.page-info .bg-pink.last:before {
        top: -75px;   
    }

    .page-carnaval.page-info .box-header {
        padding: 50px 0px 20px;
    }
    
    .page-carnaval.page-info .box-header h2 {
        font-size: 18px;
    }
    
    .page-carnaval.page-info .box-content {
        padding: 30px 0px;
    }
    
    .page-carnaval.page-info .box-content p {
        font-size: 15px;
        line-height: 18px;
    }
    
    .page-carnaval.page-info .bg-gray.last {
        padding-bottom: 90px;
    }
    
    .page-carnaval.page-info .bg-pink.last {
        padding-top: 80px;
    }
    
    .page-carnaval.page-info .box-image {
        height: 90px;
    }
    
    .page-carnaval.page-info .box-icons .row > div:nth-child(3) p {
        padding: 0px 20px;
    }
    
    .page-carnaval.page-info .box-icons .row {
        max-width: 360px;
        margin: 0 auto;
    }
    
    .banner-carnaval .container > .row {
        max-width: 320px;
        margin: 0px auto;
    }
    
    .banner-carnaval .container .title {
        margin: 0px;
    }
    
    .banner-carnaval .container > .row > div:nth-child(2) {
        left: 0px;
        margin-top: 20px;
    }
    
    .banner-carnaval .container > .row > div:nth-child(2) p {
        font-size: 14px;
        line-height: 16px;
    }
    
    .banner-carnaval .container > .row > div:nth-child(3) {
        padding: 0px 30px;
    }
    
    .banner-carnaval .container > .row > div:nth-child(3) img {
        width: 235px;
    }
    
    .page-regalazo .box-header {
        background-size: 590px;
        background-position: calc(50% - 160px) -15px;
    }
    
    .page-regalazo .box-header .container {
        padding: 15px 15px 50px;
    }
    
    .page-regalazo .box-header img {
        width: 180px;
    }
    
    .page-regalazo .box-content {
        padding-bottom: 0px;
        overflow: hidden;
    }
    
    .page-regalazo .box-content h1 {
        font-size: 20px;
        line-height: 26px;
    }
    
    .page-regalazo .box-content p {
        line-height: 22px;
        font-size: 15px;
        font-weight: 400;
        max-width: 290px;
        position: relative;
        padding-left: 60px;
        display: inline-block;
        text-align: left;
    }
    
    .page-regalazo .box-content .content.gracias {
        padding: 30px 20px;
        margin: 20px 0px 50px;
    }
    
    .page-regalazo .box-content .content.gracias h1 {
        font-size: 36px;
    }
    
    .page-regalazo .box-content .content.gracias p {
        padding: 0px;
        text-align: center;
        font-size: 16px;
        line-height: 24px;
        margin-bottom: 10px;
    }
    
    .page-regalazo .gracias .btn-solid {
        min-width: 0px;
        padding: 15px;
        display: block;
        margin-top: 20px;
    }
    
    .page-regalazo .box-content p img {
        position: absolute;
        top: 2px;
        left: 0px;
        margin-right: 15px;
    }
    
    .page-regalazo .box-content .content {
        padding: 20px 20px 40px;
        margin: 15px 0px 30px;
    }
    
    .page-regalazo .box-content .image {
        position: relative;
        width: 420px;
        bottom: auto;
        left: 0px;
        top: -50px;
    }
    
    .page-regalazo .box-content .content .form-group.checkbox label {
        font-size: 12px;
    }
    
    .page-regalazo .box-content .content h2 {
        font-size: 18px;
    }
    
    .page-regalazo .btn-solid {
        font-size: 16px;
    }
    
    .page-regalazo .footer {
        padding-top: 0px;
        padding-bottom: 90px;
    }
    
    .page-regalazo .footer:before {
        background-size: 600px;
    }
    
    .page-regalazo .footer img {
        width: 210px;
    }
    
    .page-regalazo .modal-title, .page-regalazo .modal-body h4 {
        font-size: 18px;
        text-align: center;
    }
    
    .page-regalazo .modal-title {
        margin-bottom: 0px;
    }
    
    .banner-promo + .box-info .content {
        margin: 0px !important;
    }
    
    .page-mastercash .box-header .row > div:nth-child(1),
    .page-mastercash .box-header .row > div:nth-child(2) {
        text-align: center;
    }
    
    .page-mastercash .box-header .logo {
        margin-bottom: 10px;
    }
    
    .page-mastercash .box-header .title {
        width: 280px;
        margin: 35px auto;
    }
    
    .page-mastercash .box-header h1,
    .page-mastercash .box-content.last h4 {
        font-size: 30px;
        line-height: 38px;
    }
    
    .page-mastercash .box-header h1 {
        margin-bottom: 40px;
    }
    
    .page-mastercash .box-content .flex-group {
        display: block;
        margin: 0px;
    }
    
    .page-mastercash .box-content .flex-group .content {
        width: 100%;
        margin: 0px 0px 15px;
    }
    
    .page-mastercash .box-content .flex-group .content:last-child {
        margin-bottom: 0px;
    }
    
    .page-mastercash .box-content.last .btn-solid,
    .page-mastercash .modal .btn-solid {
        padding: 15px 30px;
    }
    
    .page-mastercash img {
        max-width: 100%;
    }
    
}

/* Landscape phones and down */
@media (max-width: 480px) {



    .header h1 {
        font-size: 36px;
        line-height: 38px;
    }
    
    .header h1 span {
        font-size: 19px;
    }

    .page-tienda .box-info .content .row-info > div,
    .page-tienda .row-productos > div {
        width: 100%;
    }
    
    .page-tienda .box-info .content {
        padding: 30px 40px;
    }
    
    .page-tienda .box-info .content .btn-solid {
        padding: 12px 30px 10px;
    }
    
    .page-tienda .box-banners,
    .page-tienda .box-banners .container {
        padding: 0px;
        border: none;
    }
    
    .page-tienda .box-banners img {
        margin: 0px;
    }
    
    .page-tienda .box-ve {
        padding: 235px 0px 0px;
        background-size: 300px;
        background-position: center 15px;
    }
    
    .modal-content {
        padding: 20px;
    }
    
    .modal-footer {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
        flex-direction: column-reverse;
    }
    
    .modal-footer .btn-solid {
        margin: 0px 0px 10px !important;
    }
    
    .page-contact .form-validate .btn-solid {
        width: 100%;
    }
    
    .page-contact .form-validate .alert-ok {
        font-size: 16px;  
        margin: 10px 0px 0px;
    }
    
    .header-home .box-services .row > div:nth-child(1):before,
    .header-home .box-services .row > div:nth-child(1):hover:before {
        background-size: 110px;
        background-position: calc(100% - 10px) 90px;
    }
    
    .header-home .box-services .row > div:nth-child(2):before,
    .header-home .box-services .row > div:nth-child(2):hover:before {
        background-size: 220px;
        background-position: calc(100% + 100px) calc(100% + 50px);
    }
    
    .header-home .box-services .row > div:nth-child(3):before,
    .header-home .box-services .row > div:nth-child(3):hover:before {
        background-image: url(../images/home/tablet-xs.png);
        background-size: 120px;
        background-position: calc(100% - 5px) 100px;
    }
    
    .home-page .slick a {
        font-size: 12px;
        color: #636363;
    }
    
    .home-page .box-conocelas h3 {
        padding: 0px 20px;
    }
    
    .home-page .box-vender h2,
    .home-page .box-vender p {
        padding: 0px 30px;
    }
    
    .home-page .box-vender p {
        line-height: 20px; 
    }
    
    .home-page .box-vender .container {
        padding: 0px;
    }
    
    .home-page .box-vender .slick {
        padding: 0px 15px;
    }
    
    .home-page .box-vender .slick span {
        height: 150px;
    }
    
    .home-page .box-vender .slick span:before,
    .home-page .box-vender .slick span:after {
        display: none;
    }
    
    .home-page .box-vender .slick:before {
        height: 102px;
    }
    
    .home-page .box-vender .slick .slick-prev {
        left: 2px;
        top: 110px;
    }
    
    .home-page .box-vender .slick .slick-next {
        right: 2px;
        top: 110px;
    }
    
    .home-page .box-vender .slick img {
        max-width: 85%;
        max-height: 70%;
    }
    
    .home-page .box-vender .slick h4 {
        font-size: 14px;
        line-height: 22px;
    }
    
    .home-page .box-vender .slick p {
        font-size: 12px;
        padding: 0px;
    }
    
    .home-page .box-vender .slick .price {
        font-size: 22px;
    }

    .page-tienda .box-special {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }
    
    .page-tienda .box-special strong {
        text-align: center;
        margin-bottom: 5px;
        width: 100%;
    }
    
    .page-tienda .box-special span {
        text-align: center;
        padding: 0px;
        width: 100%;
    }
    
    .page-carnaval.page-info .box-gray .row {
        margin: 0 -5px;
    }
    
    .page-carnaval.page-info .box-content .row > div {
        padding: 0 5px;
    }
    
    .page-carnaval.page-info .bg-gray.last .precio {
        font-size: 18px;
    }
    
    .page-carnaval.page-info .bg-gray.last .precio strong {
        font-size: 30px;
    }
    
    .page-carnaval.page-info .bg-gray.last .puesto {
        font-size: 15px;
        white-space: nowrap;
        margin-top: 0px;
    }
    
    .page-carnaval.page-info .bg-gray.last img {
        width: 60px;
    }
    
    .banner-carnaval:before, .banner-carnaval:after {
        background-size: 640px;
    }
    
    .page-regalazo .box-content .image {
        left: calc(50% - 190px);
    }
    
}

@media (max-width: 370px) {
    .header-home .box-services .row > div:before {
        opacity: .15;
    }
}


/****  SIDEBAR ****/


body {
  overflow-x: hidden;
}

#wrapper {
  padding-right: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled {
  padding-right: 250px;
}

#sidebar-wrapper {
  z-index: 1000;
  position: fixed;
  right: 250px;
  width: 0;
  height: 100%;
  margin-right: -250px;
  overflow-y: auto;
 	overflow-x: hidden;
  background: #fff;
	border-left: 1px solid #eeeeee;
	
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
  width: 250px;
}

#page-content-wrapper {
  width: 100%;
  position: absolute;
  padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: -250px;
}


/* Sidebar Styles */

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}

.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px;
}

.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: #999999;
}

.sidebar-nav li a:hover {
  text-decoration: none;
  color: <? echo $conf['secundario']; ?>;
  background: rgba(255, 255, 255, 0.2);
}

.sidebar-nav li a:active, .sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav>.sidebar-brand {
  height: 65px;
  font-size: 18px;
  line-height: 60px;
}

.sidebar-nav>.sidebar-brand a {
  color: <? echo $conf['primario']; ?>;
}

.sidebar-nav>.sidebar-brand a:hover {
  color: <? echo $conf['secundario']; ?>;
  background: none;
}

@media(min-width:768px) {
  #wrapper {
    padding-right: 0;
  }
  #wrapper.toggled {
    padding-right: 250px;
  }
  #sidebar-wrapper {
    width: 0;
  }
  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
  }
  #page-content-wrapper {
    padding: 20px;
    position: relative;
  }
  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
  }
}

/* END */

body {
    font-family: 'vag';
    font-weight: 400;
    font-size: 16px;
    letter-spacing: 1px;
    line-height: 30px;
}

a {
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
}

.separate {
    display: block;
    width: 40px;
    height: 3px;
    background: <? echo  $conf['primario'];  ?>;
    margin: 20px auto;
}

h1, h2, h3, h4 {
    color: <? echo  $conf['primario'];  ?>;
}

.btn:focus, .btn:active, .btn:active:focus {
    box-shadow: none;
    outline: none;
}

/************************ HEADER ************************/

.header {
    background: transparent;
    padding: 0px;
    position: relative;
    background-size: cover;
    background-position: center;
}

.header .top-header {
    background: rgba(216,216,216,.4);
    padding: 25px 0px;
}

.header .nav-header {
    background: rgba(238,238,238,.5);
}

.header .logo {
    width: 60px;
		float:left;
		position:absolute;
		top:-10px;
		left:0px;
}

.header .header-content {
    background: url(../jpg/home-header.jpg) center no-repeat;
    background-size: cover;
    position: relative;
}

.header .header-content:before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background: rgb(171,45,102); /* Old browsers */
    background: -moz-linear-gradient(45deg, rgba(171,45,102,1) 0%, rgba(232,65,108,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(45deg, rgba(171,45,102,1) 0%,rgba(232,65,108,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(45deg, rgba(171,45,102,.9) 0%,rgba(232,65,108,.9) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
}

.header .header-left {
    position: absolute;
    background: #f8f9fb;;
    width: 80px;
    height: 100%;
    top: 0px;
    left: 0px;
    padding: 28px;
}

.header .fix-top {
    position: relative;
    width: 100%;
    height: 74px;
    padding: 20px;
    z-index: 9;
}

.header .fix-top .container {
    padding: 0px 15px;
}

.header .fix-top .logo {
    -webkit-transform: none;
    transform: none;
    margin: 0px;
}

.header .header-right,
.form-banner .banner-right {
    position: absolute;
    z-index: 2;
    width: 42%;
    height: 100%;
    top: 0px;
    right: 0px;
    text-align: right;
}

.header .header-right a,
.form-banner .banner-right a {
    height: 100%;
    overflow: hidden;
    position: relative;
    z-index: 1;
}

.header .header-right img,
.form-banner .banner-right img {
    height: 100%;
}

.banner-promo {
    text-align: center;
    background: #7E1B3B;
}

.banner-promo .container {
    padding: 0px;
}

.banner-promo img {
    max-width: 100%;
}

.banner-promo + .box-info .content {
    margin: 60px 0px 100px !important;
}

.header .header-content {
    position: relative;
}

.header .container {
    position: relative;
    z-index: 1;
    padding: 40px 15px 50px;
}

.header.header-page .header-content .container {
    padding: 40px 0px;
}

.header .box-title {
    position: absolute;
    width: 100%;
    bottom: 25px;
}

.header h1 {
    font-family: 'vag';
    font-weight: 800;
    font-size: 50px;
    line-height: 50px;
    color: #fff;
    margin: 0px 0px 5px;
}

.header.header-page h1 {
    margin: 0px;
    text-align: center;
}

.header.header-tienda h1 {
    margin-top: 5px;
}

.header h1 span {
    font-size: 23px;
    line-height: 28px;
    display: block;
    margin-bottom: 5px;
    font-weight: 400;
    font-family: 'vag';
    letter-spacing: 0px;
}

.header p,
.header.header-tienda h2 {
    font-size: 19px;
    line-height: 28px;
    letter-spacing: 0px;
    margin: 0px;
    color: #fff;
}

.header .ciudad h1 {
    margin: 0px 0px 10px;
}

.header .ciudad h1 strong {
    white-space: nowrap;
}

.header .ciudad p + p {
    margin-top: 10px;
}

.header p:first-child {
    font-size: 23px;
}

.header .scroll {
    margin: 20px 0px 60px;
    display: inline-block;
}

.header .scroll img {
    width: 14px;
}

.header p.title,
.header .breadcrumbs {
    display: inline-block;
    position: relative;
    margin-bottom: 0px;
}

.header .single .breadcrumbs {
    margin-bottom: 10px;
}

.header p.title,
.header .breadcrumbs p {
    font-size: 16px !important;
    position: relative;
    display: inline-block;
    padding-top: 10px;
}

.header .breadcrumbs p {
    line-height: 20px;
    margin-top: 5px;
}

.header .breadcrumbs a {
    color: #fff;
}

.header p.title:before,
.header .breadcrumbs:before {
    content: '';
    width: 9000px;
    height: 1px;
    background: rgba(255,255,255,.7);
    position: absolute;
    top: 0px;
    right: 0px;
}

.header.header-tienda .box-title {
    bottom: 35px;
}

.searchform .form-control {
    border: 1px solid #CFCFCF;
    border-radius: 4px;
    background: transparent;
    height: 40px;
    padding-right: 40px;
    letter-spacing: 1px;
}

.searchform .form-control:focus {
    border-color: <? echo  $conf['primario'];  ?>;
}

.searchform button.fa-search {
    background: url(../png/search.png) center no-repeat;
    background-size: 20px;
    color: <? echo  $conf['primario'];  ?>;
    width: 40px;
    height: 40px;
}

.searchform button.fa-search:before {
    display: none;
}


/************************ MENU ************************/

.header .navbar {
    min-height: 0px;
}

.header .navbar-left {
    float: none !important;
}

.navbar-space {
    display: block;
    text-align: center;
    margin-top: 2px;
}

.navbar-nav > li {
    float: none;
    display: inline-block;
}

.navbar-default .navbar-nav > li > a {
    color: <? echo $conf['primario']; ?>;
    text-transform: uppercase;
    font-size: 15px;
    padding: 5px 20px;
    font-family: 'montserrat';
    font-weight: 500;
    letter-spacing: 0px;
}

.navbar-default .navbar-nav > li.active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus,
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
    color: <? echo $conf['secundario']; ?>;
    font-family: 'montserrat';
    font-weight: 500; 
    font-size: 15px;
    padding: 5px 20px;
}

.menu-categories {
    background: #fff;
    position: relative;
    z-index: 3;
}

.menu-categories .container {
    padding: 0px;
}

.menu-categories .cat-menu {
    padding: 0px;
    margin: 0px;
    list-style: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.menu-categories .cat-menu .dropdown {
    position: static;
}

.menu-categories .cat-menu li {
    margin-right: 5px;
}

.menu-categories .cat-menu li:last-child {
    margin-right: 0px;
}

.menu-categories .cat-menu li a {
    text-transform: uppercase;
    font-weight: 600;
    font-size: 15px;
    color: #555;
    padding: 12px 0px 8px;;
    display: inline-block;
}

.menu-categories .cat-menu li a:hover {
    color: <? echo  $conf['primario'];  ?>;
}

.menu-categories .cat-menu li a img {
    position: relative;
    bottom: 2px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    opacity: .4;  
    max-width: 28px;
    max-height: 28px;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
    margin-right: 3px;
}

.menu-categories .cat-menu li a:hover img {
    -webkit-filter: grayscale(0%);
    filter: grayscale(0%);
    opacity: .8;
}

.menu-categories .cat-menu .dropdown-menu {
    width: 100%;
    border-radius: 0px;
    border-top: 4px solid <? echo  $conf['primario'];  ?>;
    top: 48px;
    padding: 15px;
    -moz-box-shadow: 0 3px 10px rgba(0,0,0, 0.15);
    -webkit-box-shadow: 0 3px 10px rgba(0,0,0, 0.15);
    box-shadow: 0 3px 10px rgba(0,0,0, 0.15);
}

.menu-categories .cat-menu .dropdown-menu li {
    margin: 0px;
    position: relative;
    line-height: 18px;
}

.menu-categories .cat-menu .dropdown-menu li:before {
    content: '';
    position: absolute;
    top: 5px;
    left: 15px;
    border-radius: 50%;
    width: 5px;
    height: 5px;
    background: <? echo  $conf['primario'];  ?>;
}

.menu-categories .cat-menu .dropdown-menu li a {
    text-transform: none;
    font-weight: 500;
    font-size: 13px;
    line-height: 18px;
    color: #333;
    padding: 0px 0px 0px 20px;
}

.menu-categories .cat-menu .dropdown-menu li a:hover {
    background: transparent;
    color: <? echo  $conf['primario'];  ?>;
}



/************************ CONTENT ************************/

.breadcrumbs {
    font-size: 14px;
    font-weight: 600;
}

.breadcrumbs a {
    color: #E40378;
}

.breadcrumbs span {
    font-weight: 500;
}

.blog-content:not(.page-search) .box-header h1 strong {
    display: inline-block;
}

.carousel-fade .carousel-inner .item {
    -webkit-transition-property: opacity;
    transition-property: opacity;
}

.carousel-fade .carousel-inner .item,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    opacity: 0;
}

.carousel-fade .carousel-inner .active,
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
    opacity: 1;
}

.carousel-fade .carousel-inner .next,
.carousel-fade .carousel-inner .prev,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.carousel-fade .carousel-control {
    z-index: 2;
}

.flex-reverse {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
    -ms-flex-direction: column-reverse;
    flex-direction: column-reverse;
}

.page-content .box-404 p a {
    color: #fff;
}

/************************ HOME ************************/

.box-header {
    background: url(../jpg/bg-header.jpg) center no-repeat;
    background-size: cover;
    padding-bottom: 0px;
}

.box-header .container {
    padding: 100px 15px;
    text-align: center;
}

.box-header h1 {
    margin: 0px 0px 20px;
    line-height: 50px;
    font-size: 35px;
    letter-spacing: 2.3px;
}

.box-header h1 strong {
    display: block;
}

.box-header p {
    margin: 0px;
    color: <? echo  $conf['primario'];  ?>;
    font-size: 20px;
    line-height: 26px;
}

.box-tiendas {
    background: #FAFAFA;
    background: -moz-linear-gradient(top, rgba(250,250,250,1) 0%, rgba(255,255,255,1) 20%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgba(250,250,250,1) 0%,rgba(255,255,255,1) 20%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgba(245,245,245,1) 0%,rgba(255,255,255,1) 20%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
}

.box-articles {
    background: #FDFDFD;
    background: -moz-linear-gradient(top, rgba(250,250,250,.5) 0%, rgba(255,255,255,1) 20%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgba(250,250,250,.5) 0%,rgba(255,255,255,1) 20%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgba(245,245,245,.5) 0%,rgba(255,255,255,1) 20%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
}

.box-tiendas h2 {
    text-align: center;
    font-size: 30px;
    line-height: 40px;
}

.box-tiendas .separate {
    margin: 25px auto 70px;
}

.box-tiendas .box-column {
    -webkit-column-count: 4;
    column-count: 4;
}

.box-tiendas .box-column .column {
    margin: 0;
    -webkit-column-break-inside: avoid;
    page-break-inside: avoid;
    break-inside: avoid-column;
    display: table;
}

.box-tiendas h3 {
    margin: 0px 0px 10px;
    line-height: 18px;
}

.box-tiendas h3 a {
    color: #5d5b5b;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 1.3px;
}

.box-tiendas h3 a:hover {
    color: <? echo  $conf['primario'];  ?>;
}

.box-tiendas ul {
    padding-left: 18px;
    list-style: none;
    margin-bottom: 30px;
}

.box-tiendas ul li {
    position: relative;
    line-height: 20px;
    margin-bottom: 10px;
}

.box-tiendas ul li:before {
    position: absolute;
    top: -4px;
    left: -16px;
    transform: rotate(45deg);
    content: '\f0d8';
    font-family: 'fontAwesome';
    color: <? echo  $conf['primario'];  ?>;
    font-size: 15px;
}

.box-tiendas ul li a {
    color: #A5A5A5;
    font-size: 18px;
    letter-spacing: 1.2px;
    line-height: 20px;
}

.box-tiendas ul li a:hover {
    color: #8c8b8b;
}

.box-map {
    padding: 0px;
    background: #D20069;
    position: relative;
}

.box-map .container {
    padding: 120px 15px;
}

.box-map .row > div {
    padding-left: 60px;
}

.box-map h3 {
    color: #fff;
    font-weight: 800;
    padding-right: 100px;
    line-height: 40px;
    margin: 0px;
    font-size: 30px;
}

.box-map h3 span {
    white-space: nowrap;
}

.box-map .separate {
    background: #fff;
    margin: 20px 0px 35px;
    height: 2px;
    width: 30px;
}

.box-map p {
    margin: 0px;
    color: #fff;
    font-size: 16px;
    line-height: 26px;
    text-align: justify;
    padding-right: 15px;
}

.box-map #mapTiendas {
    position: absolute !important;
    width: 50%;
    height: 100%;
    top: 0px;
    left: 0px;
    z-index: 2;
}

.box-marker {
    display: block;
    width: 40px;
    height: 50px;
    border-radius: 50%;
    position: relative;
    z-index: 100;
}

.box-banners {
    background: url(../jpg/bg-banner.jpg) center no-repeat;
    background-size: cover;
    text-align: center;
}

.box-banners img {
    max-width: 49%;
    max-height: 500px;
}

.box-banners a:nth-child(odd) img {
    float: left;
}

.box-banners a:nth-child(even) img {
    float: right;
}

.page-ciudad .box-banners,
.page-tienda .box-banners {
    border-top: 3px solid <? echo  $conf['primario'];  ?>;
}

.blog-content.page-tienda {
    position: relative;
    z-index: 10;
}

/************************ CIUDAD ************************/

.page-ciudad .box-tiendas {
    padding-bottom: 20px;
}

.page-ciudad .row-tiendas, .page-tienda .row-productos {
    margin: 0px -8px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.page-ciudad .row-tiendas:before, page-ciudad .row-tiendas:after,
.page-tienda .row-productos:before, .page-tienda .row-productos:after {
    display: none;
}

.page-ciudad .row-tiendas > div, .page-tienda .row-productos > div {
    padding: 0px 8px;
    margin-bottom: 20px;
}

.page-ciudad .box-ciudades .ciudades {
    margin-bottom: 30px;
    
}

.page-ciudad .box-ciudades .ciudades p {
    margin-bottom: 0px;
}

.page-ciudad .box-ciudades .ciudades p:before {
    top: 1px;
}

.page-ciudad .box-ciudades .ciudades a:hover p:before {
    -webkit-animation: .5s boing forwards;
    animation: .5s boing forwards;
}

@-webkit-keyframes boing {
    0% { top: 1px; }
    50% { top: -2px; }
    100% { top: 1px; }
}

@keyframes boing {
    0% { top: 1px; }
    50% { top: -2px; }
    100% { top: 1px; }
}

.page-ciudad .box-ciudades .ciudades p a {
    font-weight: 600;
    margin-bottom: 2px;
    font-size: 16px;
    line-height: 18px;
    height: 32px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.page-ciudad .row-tiendas .content {
    cursor: pointer;
    margin: 0px;
}

.page-ciudad .row-tiendas .image {
    height: 260px;
    background-color: #eee;
    margin-bottom: 20px;
    background-size: cover;
    background-position: center;
    position: relative;
}

.page-ciudad .row-tiendas .image.default {
    background-position: left 22%; 
}

.page-ciudad .row-tiendas h2 {
    font-size: 18px;
    line-height: 20px;
    letter-spacing: 1px;
    margin: 0px 0px 15px;
    text-align: left;
    font-weight: 600;
}

.page-ciudad .row-tiendas p {
    line-height: 20px;
    font-size: 16px;
    color: #7E7E7E;
    position: relative;
    padding: 0px 30px;
    margin: 0px;
}

.page-ciudad .row-tiendas p:before {
    content: '';
    position: absolute;
    top: -4px;
    left: 0px;
    background: url(../png/mini-mark.png) center no-repeat;
    background-size: 16px;
    width: 20px;
    height: 25px;
}

article-content .image,
.box-image .image {
    position: relative;
}

.image .hover-image {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,.8);
    opacity: 0;
    -webkit-transition: .5s all ease;
    transition: .5s all ease;
}

article.content:hover .image .hover-image,
.link-article:hover .image .hover-image  {
    opacity: 1;   
}

.image .hover-image:before,
.image .hover-image:after {
    content: '';
    width: 50px;
    height: 50px;
    background: <? echo  $conf['primario'];  ?>;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.image .hover-image:after {
    background: url(../png/plus.png) center no-repeat;
    background-size: 25px;
}

.page-ciudad .box-ciudades {
    background: #fff;
    padding-bottom: 30px;
}

.page-ciudad .box-ciudades h2 {
    margin-bottom: 50px;
}

.page-ciudad .box-ciudades p {
    font-size: 14px;
    padding-right: 10px;
    margin-bottom: 10px;
}

.page-ciudad .box-ciudades p a {
    display: block;
    color: <? echo  $conf['primario'];  ?>;
    margin-bottom: 5px;
    font-size: 16px;
}

.page-ciudad .box-ciudades .btn-border {
    border-radius: 0px;
    text-transform: uppercase;
    font-weight: 600;
    padding: 15px 100px 10px;
}

.page-ciudad .box-ciudades .btn-border:focus {
    color: <? echo  $conf['primario'];  ?>;
}


/************************ TIENDA ************************/

.page-tienda .box-info {
    position: relative;
    text-align: center;
}

.page-tienda .box-info #map {
    min-height: 0px;
    position: absolute !important;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
}

.page-tienda .box-info .content {
    background: #fff;
    margin-top: -20px;
    margin-bottom: 160px;
    -webkit-box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.5);
    -moz-box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.5);
    box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.5);
    padding: 40px;
    border-top: 3px solid <? echo  $conf['primario'];  ?>;
    position: relative;
    z-index: 3;
}

.page-tienda .box-info .content h2 {
    font-size: 20px;
    text-align: center;
    margin-bottom: 40px;
}

.page-tienda .box-info .content .row {
    display: flex;
    flex-wrap: wrap;
    text-align: left;
}

.page-tienda .box-info .content .info {
    position: relative;
    margin-bottom: 15px;
}

.page-tienda .box-info .content .info img {
    max-width: 16px;
    max-height: 16px;
    position: absolute;
    top: 0px;
    left: 0px;
}

.page-tienda .box-info .content .info h3 {
    padding-left: 30px;
    font-size: 14px;
    line-height: 16px;
    color: #5E5E5E;
}

.page-tienda .box-info .content .info h3 strong {
    display: block;
    margin-bottom: 5px;
}

.page-tienda .box-info .content .info h3 span {
    display: block;
    font-size: 12px;
    line-height: 16px;
    margin-top: 5px;
}

.page-tienda .box-info .content .info h3 span strong {
    display: inline;
}

.page-tienda .box-info .content .btn-solid,
.page-tienda .box-info .content .btn-border,
.page-contact .btn-solid,
.btn-degree, .btn-degree:focus, .btn-degree:active {
    border-radius: 4px;
    background: rgb(171,45,102); /* Old browsers */
    background: -moz-linear-gradient(45deg, rgba(171,45,102,1) 0%, rgba(232,65,108,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(45deg, rgba(171,45,102,1) 0%,rgba(232,65,108,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(45deg, rgba(171,45,102,1) 0%,rgba(232,65,108,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    text-transform: uppercase;
    font-weight: 600;
    padding: 12px 50px 10px;
    line-height: 24px;
    display: inline-block;
    margin-top: 30px;
    color: #fff;
}

.btn-degree:focus,
.btn-degree:active {
    color: #fff;
}

.page-tienda .box-info .content .btn-border {
    background: #fff;
    border: 1px solid rgba(232,65,108,1);
    color: rgba(232,65,108,1);
}

.page-tienda .post-content h2 {
    font-size: 25px;
    line-height: 35px;
    letter-spacing: 1.5px;
}

.page-tienda .box-extend .post-content h2 {
    text-align: center;
}

.page-tienda .post-content .separate {
    margin: 20px 0px 35px;
    height: 2px;
}

.page-content p {
    margin-bottom: 20px;
}

.page-content p:last-child {
    margin-bottom: 0px;
}

.page-content p,
.page-tienda .post-content p {
    color: #787777;
    font-size: 16px;
    line-height: 30px;
}

.page-tienda .post-content p:last-child {
    margin: 0px;
}

.page-tienda .box-slider {
    margin-top: -70px;
    padding-left: 50px;
}

.page-tienda .box-slider .carousel-inner {
    -webkit-box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.3);
    -moz-box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.3);
    box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.3);
    position: relative;
}

.page-tienda .box-slider .carousel-inner:before {
    content: '';
    position: absolute;
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: 50%;
    background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.3) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.3) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.3) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    z-index: 1;
}

.page-tienda .box-slider .item {
    height: 420px;
    background-size: cover;
    background-position: center;
}

.page-tienda .box-slider .item.default {
    background-position: left 22%;
}

.page-tienda .box-slider .carousel-indicators {
    display: none;
}

.page-tienda .box-slider .carousel-controls {
    position: absolute;
    bottom: 40px;
    left: -45px;
    background: <? echo  $conf['primario'];  ?>;
    width: 80px;
    height: 40px;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.3);
    -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.3);
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.3);
    z-index: 2;
}

.page-tienda .box-slider .carousel-controls .carousel-control {
    background: transparent;
    width: 50%;
    opacity: 1;
    text-shadow: none;
}

.page-tienda .box-slider .carousel-control .glyphicon {
    left: 0px;
    top: 5px;
    margin: 0px;
    line-height: 14px;
    width: 40px;
    height: 30px;
}

.page-tienda .box-slider .carousel-control .glyphicon:before {
    content: '\f104';
    font-family: 'fontAwesome';
    font-size: 22px;
    
}

.page-tienda .box-slider .carousel-control .glyphicon-chevron-right {
    border-left: 1px solid rgba(255,255,255,.5);
}

.page-tienda .box-slider .carousel-control .glyphicon-chevron-right:before {
    content: '\f105';    
}

.page-tienda .box-gerente {
    background: rgb(232,65,108); /* Old browsers */
    background: -moz-linear-gradient(left, rgba(232,65,108,1) 50%, rgba(171,45,102,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, rgba(232,65,108,1) 50%,rgba(171,45,102,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, rgba(232,65,108,1) 50%,rgba(171,45,102,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    padding: 60px 0px;
    position: relative;
}

.page-tienda .box-gerente,
.page-tienda .box-gerente p {
    color: #fff;
    font-weight: 600;
    font-size: 16px;
    line-height: 30px;
}

.page-tienda .box-gerente p:last-child {
    margin-bottom: 0px;
}

.page-tienda .box-gerente p a {
    color: #fff;
    text-decoration: underline;
}

.page-tienda .box-gerente .image {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 50%;
    height: 100%;
    background-color: rgba(0,0,0,.1);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.page-tienda .box-extend h4 {
    text-align: center;
}

.page-tienda .box-extend h4 strong {
    display: block;
}

.page-tienda .box-extend .separate {
    margin: 15px auto 40px;
}

.page-tienda .box-extend .content {
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
    -webkit-column-gap: 50px;
    -moz-column-gap: 50px;
    column-gap: 50px;
}

.page-content p,
.page-tienda .box-extend,
.page-tienda .box-extend p {
    line-height: 24px;
    color: #666666;
    letter-spacing: 0px;
}

.page-content p a,
.page-tienda .box-extend a,
.page-tienda .box-extend p a {
    color: <? echo  $conf['primario'];  ?>;
    font-weight: 200;
}

.page-tienda p strong a,
.page-tienda .box-extend p strong a,
.page-tienda .box-extend strong a {
    font-weight: 800;
}

.page-tienda .box-articles {
    text-align: center;
    background: #fff;
}

.page-tienda .box-articles h2 {
    font-weight: 200;
    font-size: 25px;
    line-height: 35px;
    margin-bottom: 50px;
}

.page-tienda .box-articles h2 strong {
    display: block;
}

.page-tienda .box-articles .row .row {
    margin: 0px -20px;
}

.page-tienda .box-articles .row .row > div {
    padding: 0px 20px 15px;
}

.page-tienda .box-articles .box-image .image {
    height: 200px;
    -webkit-box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.1);
    -moz-box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.1);
    box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.1);
    padding: 20px;
    text-align: center;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -moz-align-items: center;
    -webkit-align-items: center;
    align-items: center;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
}

.page-tienda .box-articles .link-article:hover .box-image .image {
    -webkit-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.15);
    -moz-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.15);
    box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.15);
}

.page-tienda .box-articles .box-image .image img {
    max-width: 90%;
    max-height: 90%;
}

.page-tienda .box-articles .box-image h3 {
    color: #595959;
    font-size: 17px;
    text-transform: uppercase;
    margin: 20px 0px 32px;
    font-weight: 400;
}

.page-tienda .box-articles .box-image .link {
    position: absolute;
    display: block;
    width: 100%;
    text-align: center;
    bottom: 0px;
    left: 0px;
}

.box-404 .btn-solid,
.page-tienda .box-articles .link-article .box-image .link span {
    position: relative;
    background: <? echo  $conf['primario'];  ?>;
    color: #fff;
    padding: 9px 30px 8px;
    border-radius: 4px;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: 1px;
    font-weight: 600;
}

.box-404 .btn-solid:after,
.page-tienda .box-articles .link-article .box-image .link span:after {
    content: '\f105';
    font-family: 'fontAwesome';
    font-size: 16px;
    position: absolute;
    right: 22px;
    top: 6px;
    opacity: 0;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
}

.box-404 .btn-solid:after {
    top: 8px;
}

.box-404 .btn-solid:hover:after,
.page-tienda .box-articles .link-article:hover .box-image .link span:after {
    opacity: 1;
    right: 18px;
}

.form-banner {
    position: relative;
    background: url(../jpg/bg-light.jpg) center no-repeat;
    background-size: cover;
    padding: 80px 0px;
}

.form-banner h4 {
    font-weight: 400;
    font-size: 25px;
    letter-spacing: 1.4px;
    line-height: 30px;
    margin: 0px 0px 20px;
}

.form-banner h4 span {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.form-banner .form-group {
    margin: 0px;
    -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.05);
    -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.05);
    box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.05);
    position: relative;
}

.form-banner .form-group .form-control {
    border: 1px solid rgba(195,195,195,.5);
    padding: 12px 15px 9px;
    font-size: 16px;
    line-height: 18px;
    font-weight: 200;
    letter-spacing: 1px;
    color: #595959;
    width: 75%;
    display: inline-block;
    height: 45px;
    border-radius: 0px;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

.form-banner .form-group button {
    width: 25%;
    float: right;
    padding: 0px;
    border-radius: 0px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    height: 45px;
    background: <? echo  $conf['primario'];  ?>;
    border: none;
    color: #fff;
}

.form-banner .form-group button:hover {
    background: #D20C6F;
}

.form-banner .form-group button i {
    font-size: 24px;
    -webkit-transform: rotate(20deg);
    transform: rotate(20deg);
}

.page-tienda .box-ve {
    background: url(../jpg/productos.jpg) #F6F6F6 no-repeat;
    background-size: 780px;
    background-position: calc(50% + 320px) calc(100% - 20px);
    position: relative;
}

.page-tienda .box-ve:before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 50%;
    height: 100%;
    background: url(../jpg/bg-ve.jpg) center no-repeat;
    background-size: cover;
}

.page-tienda .box-ve .content {
    padding-right: 50px;
    color: #fff;
    text-align: right;
}

.page-tienda .box-ve .content h3 {
    color: #fff;
    font-weight: 500;
    line-height: 36px;
}

.page-tienda .box-ve .content h3 strong:first-child {
    text-transform: uppercase;
}

.page-tienda .box-ve .content .separate {
    background: #fff;
    margin: 0px 0px 20px;
    display: inline-block;
}

.page-tienda .box-ve .content p {
    font-size: 16px;
    line-height: 30px;
    margin: 0px;
}

.page-tienda .box-ve .content .btn-border {
    background: transparent;
    border: 2px solid #fff;
    border-radius: 4px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 800;
    margin-top: 20px;
    padding: 14px 50px 12px;
}

.page-tienda .box-ve .content .btn-border:hover {
    background: rgba(255,255,255,.05);
}

.page-tienda .box-special {
    background: #FFE4ED;
    margin: -25px 0px 20px;
    padding: 15px;
    font-size: 14px;
    line-height: 20px;
    color: #CB3869;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: left;
}

.page-tienda .box-special strong {
    width: 50%;
    text-align: right;
}

.page-tienda .box-special span {
    width: 50%;
    padding-left: 30px;
}

/************************ CONTACT ************************/

.page-contact h3 {
    text-transform: uppercase;
    margin: 0px 0px 10px;
}

.page-contact p {
    margin: 0px;
}

.page-contact .form-validate {
    margin: 20px 0px 40px;
    max-width: 600px;
}

.page-contact .form-validate .row {
    margin: 0px -7px;
}

.page-contact .form-validate .row > div {
    padding: 0px 7px;
}

.page-contact .form-validate label {
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0px;
}

.page-contact .form-validate label span {
    color: <? echo  $conf['primario'];  ?>;
    position: relative;
    bottom: 1px;
    left: 1px;
}

.form-control {
    border-color: #ccc;
    font-size: 16px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.page-contact .form-validate select.form-control {
    height: 40px;
    background: url(../png/arrow-down-gray.png) no-repeat;
    background-size: 12px;
    background-position: calc(100% - 15px) center;
    padding: 10px 15px;
}

.form-control:focus {
    border-color: #aaa;
}

.has-error .form-control,
.has-error .form-control:focus {
    border-color: <? echo  $conf['primario'];  ?>;
}

input[type="text"].form-control,
input[type="password"].form-control,
select.form-control {
    height: 40px;
}

form .checkbox .form-control:checked:before {
    content: '\f00c';
    font-size: 14px;
    font-family: 'fontAwesome';
    background: transparent;
    color: <? echo  $conf['primario'];  ?>;
    top: 1px;
    left: 1px;
}

.page-contact .form-validate .btn-solid {
    margin-top: 0px;
}   

.page-contact .form-validate .alert-ok {
    display: inline-block;
    margin-left: 10px;
    color: #149c31;
    opacity: 0;
    display: none;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
}  

.page-contact .form-validate .checkbox label a {
    font-weight: 600;
}

.page-contact p a {
    text-transform: none;
    text-decoration: underline;
    color: #666666;
}

.page-contact p a:hover {
    color: <? echo  $conf['primario'];  ?>;
}


/************************ TRABAJA CON NOSOTROS ************************/

.page-trabaja p {
    margin-bottom: 30px;
}

.page-trabaja .container > .row > div:first-child {
    padding-right: 30px;
}

.page-trabaja .form-validate {
    margin-top: 0px;
}

.page-trabaja .form-group {
    margin-bottom: 10px;
}

.page-trabaja .file {
    margin: 5px 0px;
}

.page-trabaja .file label span {
    color: #333;
}

.page-trabaja .file.has-error label span {
    color: #a94442;
}

.page-trabaja .file .inputfile + label i {
    margin-right: 5px;
}

.page-trabaja .label-file {
    margin-top: 5px;
    font-size: 14px;
    line-height: 18px;
    color: #666;
    letter-spacing: 1.2px;
    display: block;
}

/************************ AREA TIENDAS ************************/

.page-area .box-title {
    margin-bottom: 0px;
}

.page-area .box-title h3 {
    margin: 0px;
    display: inline-block;
    color: #666666;
}

.page-area .box-title button {
    float: right;
    margin: -10px 0px 0px;
    border-radius: 4px;
    text-transform: uppercase;
    padding: 12px 30px 8px;
    font-weight: 600;
    letter-spacing: 0.5px;
}

.page-area .box-title button:active,
.page-area .box-title button:focus {
    color: #E40378;
}

.page-area .box-tabs {
    clear: both;
    margin-top: 20px;
}

.nav-tabs {
    border-bottom: 1px solid <? echo  $conf['primario'];  ?>;
}

.nav-tabs > li {
    margin-bottom: -1px;
}

.nav-tabs > li > a {
    border-radius: 0px;
    text-transform: uppercase;
    color: <? echo  $conf['primario'];  ?>;
    background: transparent;
    padding: 12px 30px 8px;
    border: none;
    margin: 0px -2px 0px 0px;
    font-weight: 600;
    border-radius: 4px 4px 0px 0px;
    letter-spacing: 0.5px;
}

.nav-tabs > li > a:hover,  .nav-tabs > li > a:focus {
    background: transparent;
    border-color: transparent;
}

.nav-tabs >li.active > a,
.nav-tabs > li.active > a:focus,
.nav-tabs > li.active > a:hover {
    color: #fff;
    border-bottom: 0px;
    border: none;
    background: rgb(171,45,102);
    background: -moz-linear-gradient(45deg, rgba(171,45,102,1) 0%, rgba(232,65,108,1) 100%);
    background: -webkit-linear-gradient(45deg, rgba(171,45,102,1) 0%,rgba(232,65,108,1) 100%);
    background: linear-gradient(45deg, rgba(171,45,102,1) 0%,rgba(232,65,108,1) 100%);
}

.tab-content {
    padding-top: 30px;
}

.page-area .box-datepicker {
    height: 330px;
}

.page-area .box-datepicker div.datepicker {
    border: 1px solid #EA547F;
}

.page-area .box-datepicker table thead tr:nth-child(2) th {
    padding: 8px 0px;
}

.page-area .box-datepicker table thead tr:nth-child(3) th,
.page-area .box-datepicker table tbody tr td {
    padding: 5px;   
}

.page-area .box-datepicker table tbody tr td.has-cita {
    position: relative;
}

.page-area .box-datepicker table tbody tr td.has-cita:before {
    content: '';
    position: absolute;
    top: 0px;
    right: 0px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 10px 10px 0;
    border-color: transparent #842952 transparent transparent;
}

.page-area .tab-content h3 {
    margin-bottom: 5px;
}


.page-area .tab-content h4 {
    margin-bottom: 15px;
    font-weight: 600;
}

.page-area .tab-content h4 + .box-cita {
    padding-top: 0px;
}

.page-area .box-cita {
    clear: both;
    padding: 15px 0px;
    border-bottom: 1px solid rgba(234, 84, 127, 0.3);
}

.page-area .box-cita:last-child {
    border-bottom: none;
}

.page-area .box-cita p {
    margin: 0px;
    font-size: 16px;
    line-height: 22px;
    color: #787777;
}

.page-area .box-cita .box-date {
    width: 80px;
    background: rgba(234,84,123,0.1);
    border: 1px solid #EA547B;;
    float: left;
    margin: 2px 16px 10px 0px;
    text-align: center;
    color: rgba(171,45,102,1);
    border-radius: 10px;
    font-size: 15px;
}

.page-area .box-cita .box-date span:first-child {
    background: rgb(171,45,102);
    background: -moz-linear-gradient(45deg, rgba(171,45,102,1) 0%, rgba(232,65,108,1) 100%);
    background: -webkit-linear-gradient(45deg, rgba(171,45,102,1) 0%,rgba(232,65,108,1) 100%);
    background: linear-gradient(45deg, rgba(171,45,102,1) 0%,rgba(232,65,108,1) 100%);
    color: #fff;
    display: block;
    text-transform: uppercase;
    font-size: 19px;
    padding: 5px 0px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    font-weight: 600;
    letter-spacing: 1.2px;
    opacity: .9;
}

.page-area .load i {
    color: <? echo  $conf['primario'];  ?>;
    animation-duration: .8s;
}

.page-area .box-cita .dropdown {
    float: right;
}

.page-area .box-cita .dropdown .actions {
    display: inline-block;
    margin-right: 10px;
    font-size: 20px;
}

.page-area .box-cita .dropdown .actions span {
    font-size: 16px;
}

.page-area .box-cita .dropdown .actions .tooltip-inner {
    width: 140px;
    white-space: nowrap;
    background: #2a2e31;
    color: #fff;
    border-radius: 0px;
}

.page-area .box-cita .dropdown .actions .tooltip.top .tooltip-arrow {
    border-top-color: #2a2e31;
}    

.page-area .actions .fa-clock-o,
.page-area .actions .fa-clock-o + span {
    /*color: #999;*/
    color: rgba(234,84,123,0.4);
}

.page-area .actions .fa-question,
.page-area .actions .fa-question + span {
    /*color: rgba(234,84,123,0.5);*/
    color: rgba(234,84,123,0.6);
}

.page-area .actions .fa-check,
.page-area .actions .fa-check + span {
    /*color: #23af2e;*/
    color: rgba(171,45,102,0.8);
}

.page-area .actions .fa-check.euro,
.page-area .actions .fa-check.euro + span {
    color: rgba(140,37,84,0.9);
    position: relative;
}

.page-area .actions .fa-check.euro:after {
    content: '\f153';
    font-size: 12px;
    position: absolute;
    top: 11px;
    right: -2px;
}

.page-area .actions .fa-close,
.page-area .actions .fa-close + span {
    /*color: #d61d1d;*/
    color: rgba(234,84,123,1);
}

.page-area .box-cita .dropdown > a {
    color: #2a2e31;
    font-size: 20px;
}

.page-area .box-cita .dropdown-menu {
    border-radius: 0px;
    box-shadow: none;
    border-color: rgba(234, 84, 127, 0.3);
    top: 30px;
    right: 0px;
    left: auto;
    text-align: right;
    padding: 8px 0px;
}

.page-area .box-cita .dropdown-menu a {
    padding: 2px 15px 2px 30px;
    color: #787777;
}

.page-area .box-cita .dropdown-menu a:hover {
    background: transparent;
    color: #555;
}

.page-area #estadisticas h3 {
    text-align: center;
    margin-bottom: 25px;
}

.page-area .list-actions {
    margin: 20px 0px 0px;
    padding: 0px;
    list-style: none;
}

.page-area .list-actions li {
    font-size: 16px;
    line-height: 18px;
    letter-spacing: 0.5px;
    margin: 0px 0px 5px;
}

.page-area .list-actions.list-option li {
    margin: 0px 15px 5px;
    display: inline-block;
}

.page-area .list-actions li a {
    color: #666;
}

.page-area .list-actions li a span {
    font-weight: 800;
}

.page-area .list-actions li a:hover {
    color: <? echo  $conf['primario'];  ?>;
}

.page-area .list-actions i {
    color: <? echo  $conf['primario'];  ?>;
    font-size: 18px;
    margin-right: 5px;
}

.page-area .box-selector {
    margin-bottom: 20px;
}

.page-area .box-selector .form-control {
    width: 400px;
    max-width: 100%;
}

.page-area #stats-filters {
    margin-bottom: 15px;
}

.page-area #stats-filters + .row > div:nth-child(1) {
    padding-right: 30px;
}

.page-area #stats-filters + .row > div:nth-child(2) {
    padding: 0px;
}

.page-area label + .row {
    margin: 0px -5px;
}

.page-area label + .row > div {
    padding: 0px 5px;
}

.page-area .box-picker:before {
    content: '\f073';
    font-family: 'fontAwesome';
    position: absolute;
    top: 5px;
    left: 15px;
    color: #bbb;
}

.page-area .box-picker .form-control {
    padding-left: 38px;
    padding-top: 10px;
}

.page-area ~ .datepicker {
    width: 260px;
}

.page-area #estadisticas .checkbox {
    margin: 0px 0px 10px;
}

.page-area .btn-filter {
    position: relative;
    width: 100%;
    margin-top: 34px;
    padding: 9px;
    height: 40px;
}

.page-area .btn-filter.btn-loading {
    pointer-events: none;
}

.page-area .btn-filter.btn-loading:before {
    content: '\f1ce';
    font-family: 'fontAwesome';
    display: inline-block;
    font-size: 18px;
    width: 18px;
    color: #fff;
    position: absolute;
    top: 7px;
    left: calc(50% - 10px);
    -webkit-animation: fa-spin .7s infinite linear;
    animation: fa-spin .7s infinite linear;
}

.page-area .btn-filter.btn-loading span {
    opacity: 0;
}

.page-area .box-resume {
    margin: 12px 0px 40px;
    border: 1px solid rgba(234,84,123,0.4);
    padding: 30px 25px 25px;
    text-align: center;
    color: #aaa;
}

.page-area .tab-stats .box-resume {
    padding: 40px 15px 35px;
}

.page-area .box-resume h4 {
    font-weight: 500;
    font-size: 16px;
    float: left;
    color: #aaa;
    text-align: left;
}

.page-area .box-resume h4 span {
    font-weight: 600;
    font-size: 20px;
    color: rgba(232,65,108,1);
    display: block;
    margin-top: 5px;
}

.page-area .tab-stats .box-resume h4 span {
    font-size: 17px;
}

.page-area .box-resume h5 {
    font-size: 16px;
    float: right;
    line-height: 12px;
}

.page-area .tab-stats .box-resume h4,
.page-area .tab-stats .box-resume h5 {
    text-align: center;
    float: none;
}

.page-area .tab-stats .box-resume h5 {
   margin: 30px 0px 10px;
}

.page-area .box-resume h5 span {
    color: rgba(171,45,102,1);
    font-weight: 800;
    font-size: 54px;
    position: relative;
    top: 14px;
}

.page-area .box-resume .row {
    clear: both;
    margin-top: 90px;
}

.page-area .box-resume .row > div {
    padding: 0px 5px;
}

.page-area .box-resume .number {
    display: block;
}

.page-area .box-resume .row i {
    font-size: 22px;
    position: relative;
    bottom: 5px;
    margin-right: 5px;
}

.page-area .box-resume .row i.euro {
    margin-right: 8px;
}

.page-area .box-resume .row span {
    font-size: 36px;
    font-weight: 800;
    line-height: 10px;
    display: inline-block;
}

.page-area .box-resume p {
    color: #aaa;
    font-size: 15px;
    letter-spacing: 1px;
    margin: 0px;
}

.page-area #estadisticas .list-actions,
.page-area .tab-stats .list-actions {
    text-align: center;
}

.page-area #stats-filters-contact + .row {
    margin-bottom: 30px;
}

.page-area #stats-filters-contact + .row > div:last-child {
    padding: 0px;
}

/************************ FOOTER ************************/

.footer {
    background: #1A1D1F;
    color: #fff;
    text-align: left;
    padding: 0px;
    font-family: 'raleway';
    font-weight: 200;
}

.footer .row-footer {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 50px 0px;
}

.footer h4 {
    font-size: 18px;
    margin: 0px 0px 15px;
    color: #fff;
    font-weight: 700;
}

.footer ul {
    margin: 0px;
    padding: 0px;
    list-style: none;
}

.footer ul li {
    margin-bottom: 8px;
    line-height: 22px;
}

.footer ul li:last-child {
    margin-bottom: 0px;
}

.footer ul li a {
    color: #D3D3D3;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.8px;
    opacity: .9;
}

.footer ul li a:hover {
    opacity: 1;
}

.footer .logo {
    width: 200px;
    margin: 0px;
}

.footer .box-legal {
    background: #0A0A0B;
    padding: 20px 0px;
}

.footer .box-legal p {
    display: inline-block;
    font-family: 'opensans';
    font-weight: 600;
    font-size: 15px;
    letter-spacing: 0.2px;
    color: rgba(255,255,255,.7);
    line-height: 30px;
}

.footer .box-legal .social {
    float: right;
    margin: 0px;
    padding: 0px;
}

.footer .box-legal .social li {
    display: inline-block;
    margin: 0px;
}

.footer .box-legal .social li a {
    display: inline-block;
    width: 30px;
    height: 30px;
    background: rgba(255,255,255,.2);
    border-radius: 50%;
    margin-left: 10px;
    color: #0A0A0B;
    font-size: 20px;
    padding: 5px;
    text-align: center; 
    line-height: 18px;
}

.footer .box-legal .social li a:hover {
    background: rgba(255,255,255,.4);
}


/************************ MODAL ************************/

.modal-backdrop {
    display: none;
}

.modal {
    background: rgba(156,125,134,0.8);
}

.modal-dialog {
    margin: 60px auto 20px;
}

.modal-content {
    border-radius: 0px;
    box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.5);
    padding: 40px;
    border-top: 3px solid <? echo  $conf['primario'];  ?>;
}

.modal-header,
.modal-footer {
    padding: 0px;
    border: none;
    text-align: center;
}

.modal-body {
    padding: 20px 0px;
}

.modal-content .close {
    position: absolute;
    top: -35px;
    right: 0px;
    color: #fff;
    opacity: .9;
}

.modal-content .close:hover {
    opacity: 1;
}

.modal-content .close img {
    width: 15px;
}

.modal-title {
    font-size: 20px;
    padding: 0px 40px;
}

#modal-cita {
    letter-spacing: 1px;
}

#modal-cita .modal-title span {
    font-weight: 600;
}

.modal-footer .btn {
    margin-top: 0px !important;
}

.modal .form-group {
    margin-bottom: 15px;
}

.modal .box-form:last-child .row > div:last-child .form-group {
    margin: 0px;
}

.modal .form-group label {
    font-size: 14px;
    line-height: 18px;
}

.modal .form-group label[for="dia"] {
    position: relative;
}

.modal .form-group label[for="dia"]:before {
    content: '\f1ce';
    font-family: 'fontAwesome';
    display: inline-block;
    font-size: 15px;
    width: 15px;
    color: #EA547B;
    position: absolute;
    right: 8px;
    bottom: -31px;
    -webkit-animation: fa-spin .7s infinite linear;
    animation: fa-spin .7s infinite linear;
    opacity: 0;
}

.modal .form-group label.wait[for="dia"]:before {
    opacity: .85;
}

.modal .form-group label.disabled {
    opacity: .3;
}

.modal .form-group label.disabled + .form-control {
    opacity: .5;
}

.modal .form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-color: #ccc;
    border-radius: 0px;
    background: transparent;
    padding: 5px 10px;
}

.modal .form-control:focus {
    border-color: rgba(229, 10, 120, 0.48);
}

select.form-control,
.modal select.form-control {
    background: url(../png/arrow-down-gray.png) no-repeat;
    background-position: calc(100% - 10px) center;
    background-size: 10px;
    padding-right: 50px;
}

.modal textarea.form-control {
    min-height: 65px;
}

.modal .checkbox {
    margin: -5px 0px 0px;
}

.modal .checkbox label {
    font-size: 13px;
    letter-spacing: 0.6px;
    padding: 0px;
    display: block;
    text-align: center;
}

.modal .checkbox .form-control {
    display: none;
}

.modal .checkbox a {
    font-weight: 400;
    color: <? echo  $conf['primario'];  ?>;
}

.modal .checkbox .form-control + span {
    border: 1px solid #bbb;
    width: 18px;
    height: 18px;
    display: inline-block;
    margin-right: 5px;
    position: relative;
    left: 0px;
    top: 5px;
    padding: 0px;
}

.modal .checkbox .form-control:checked + span:before {
    content: '\f00c';
    font-family: 'fontAwesome';
    position: absolute;
    top: -1px;
    left: 2px;
    font-size: 12px;
    color: <? echo  $conf['primario'];  ?>;
}

.modal .has-error .form-control,
.modal .checkbox .has-error .form-control + span  {
    border-color: #a94442;
}


/************************ DATEPICKER ************************/

.box-picker {
    position: relative;
}

div.datepicker {
    padding: 0px;
    margin: -1px 0px 0px;
    border-radius: 0px;
    box-shadow: none;
    border-color: #EA547B;
}

.box-picker div.datepicker,
.box-datepicker div.datepicker {
    width: calc(100% + 0px);
    left: 0px !important;
}

.box-picker div.datepicker .datepicker.datepicker-inline {
    display: none !important;
}

div.datepicker:before,
div.datepicker:after {
    display: none;
}

div.datepicker table {
    width: 100%;
}

div.datepicker table th,
div.datepicker table tr td {
    border-radius: 0px;
    color: #555;
}

div.datepicker table tr td span {
    margin: 0px;
    width: 25%;
    border-radius: 0px;
}

div.datepicker table thead tr:nth-child(2) {
    background: #EA547B;
}

div.datepicker table thead tr:nth-child(2) th {
    color: #fff;
}

div.datepicker table thead tr:nth-child(3) th {
    padding: 0px;
    background: rgba(234,84,123,0.1);
}

div.datepicker .datepicker-switch:hover, div.datepicker .next:hover,
div.datepicker .prev:hover, div.datepicker tfoot tr th:hover {
    background: #D54D79;
}

div.datepicker table tbody tr td {
    padding: 0px;
    line-height: 30px;
}

div.datepicker table .prev.disabled {
    display: block;
}

div.datepicker table tr td.day.focused,
div.datepicker table tr td.day:hover,
div.datepicker table tr td span.focused,
div.datepicker table tr td span:hover {
    background: rgba(234,84,123,0.12);
}

div.datepicker table tr td.disabled {
    color: #ccc !important;
    background: #fff !important;
}

div.datepicker table tr td.active.active,
div.datepicker table tr td.active.active:hover,
div.datepicker table tr td span.active.active,
div.datepicker table tr td span.active.active:hover,
div.datepicker table tr td.today,
div.datepicker table tr td.today:hover,
div.datepicker table tr td.today:hover:hover,
div.datepicker table tr td.today:active {
    background: #EA547B;
    text-shadow: none;
    color: #fff;
}


/************************ INFO CITAS ************************/

.page-citas {
    background: url(../jpg/bg-header.jpg) center no-repeat;
    background-size: cover;
    -webkit-box-shadow: inset 0px 8px 20px -15px rgba(0,0,0,0.75);
    -moz-box-shadow: inset 0px 8px 20px -15px rgba(0,0,0,0.75);
    box-shadow: inset 0px 8px 28px -12px rgba(0,0,0,0.2);
}

.page-citas .box-info {
    margin: 20px auto;
    max-width: 440px;
    text-align: center;
}

.page-citas .box-info img {
    width: 50px;
}

.page-citas .box-info h2 {
    text-transform: uppercase;
    font-family: 'montserrat';
    letter-spacing: 2px;
    font-size: 28px;
    line-height: 34px;
    margin: 20px 0px;
}

.page-citas .box-info p {
    font-family: 'montserrat';
    font-size: 17px;
    letter-spacing: 1px;
    font-weight: 200;
    line-height: 28px;
    margin-bottom: 30px;
}

.page-citas .btn {
    margin: 0px;
}

.page-citas .details {
    padding: 0px;
    margin: -10px 0px 5px;
    list-style: none;
}

.page-citas .details li {
    font-size: 16px;
    font-weight: 400;
    font-family: 'montserrat';
    position: relative;
    color: #2a2e31;
}

.page-citas .details li:before {
    content: '\f274';
    font-family: 'fontAwesome';
    font-size: 20px;
    position: relative;
    top: 0px;
    left: -15px;
    color: <? echo  $conf['primario'];  ?>;
}

.page-citas .details li:first-child:before {
    content: '\f041';
}   


/************************ DEPOSITO ************************/

.header-deposito, .page-deposito, .footer-deposito {
    font-family: 'poppins';
    font-weight: 200;
    letter-spacing: 0.1px;
    font-size: 16px;
    line-height: 26px;
}

.header-deposito {
    background: url(../jpg/bg-deposito.jpg) center no-repeat;
    background-size: cover;
    position: relative;
}

.header-deposito:before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background: url(../png/img-deposito.png) no-repeat;
    background-position: 90% 80%;
    background-size: 840px;
}

.header-deposito .header-top .logo {
    width: 242px;
}

.header-deposito .header-top .btn-border {
    background: transparent;
    border: 1px solid rgba(255,255,255,.5);
    border-radius: 4px;
    float: right;
    color: #fff;
    text-transform: uppercase;
    font-weight: 800;
    font-size: 12px;
    padding: 15px 35px;
    position: relative;
    bottom: 5px;
}

.header-deposito .header-top .btn-border:hover {
    background: rgba(255,255,255,.05);
    border-color: rgba(255,255,255,.7);
}

.header-deposito .box-content {
    padding: 100px 0px;
    background: transparent;
}

.header-deposito .box-content h1 {
    font-family: 'poppins';
    font-size: 32px;
    line-height: 53px;
    letter-spacing: 0.2px;
    font-weight: 200;
    margin: 0px 0px 20px;
}

.header-deposito .box-content p {
    font-size: 16px;
    line-height: 31px;
}

.header-deposito .box-content p + .btn-solid,
.page-deposito .box-empezamos p + .btn-solid {
    border: none;
    background: url(../png/arrow-btn.png) no-repeat rgba(255,255,255,.5);
    background-size: 17px;
    background-position: calc(100% - 40px) 20px;
    font-size: 12px;
    font-weight: 800;
    opacity: 1;
    padding: 15px 70px 15px 50px;
}

.header-deposito .box-content p + .btn-solid:hover,
.page-deposito .box-empezamos p + .btn-solid {
    background-position: calc(100% - 35px) 20px;
}

.page-deposito .box-content {
    padding: 60px 0px;
}

.page-deposito .box-funciona {
    text-align: center;
}

.page-deposito .box-funciona h2 {
    color: #DD255B;
    font-size: 30px;
    font-weight: 200;
    margin: 0px 0px 50px;
}

.page-deposito .box-funciona h2 strong {
    font-weight: 700;
}

.page-deposito .box-funciona .separate {
    margin: 35px auto 80px;
}

.page-deposito .box-funciona .row p {
    font-size: 15px;
}

.page-deposito .box-funciona .row p span {
    color: #E73859;
    font-size: 14px;
    position: relative;
    bottom: 2px;
}

.page-deposito .box-funciona img {
    width: 80px;
    margin-bottom: 30px;
}

.page-deposito .box-funciona a {
    font-weight: 600;
    color: #4A4A4A;
    text-decoration: underline;
}

.page-deposito .box-funciona strong {
    font-weight: 600;
}

.page-deposito .box-funciona .bottom {
    max-width: 550px;
    margin: 50px auto 0px;
    font-size: 14px;
    color: #E73859;
}

.page-deposito .box-ventajas {
    background: rgb(248,89,85); /* Old browsers */
    background: -moz-linear-gradient(-45deg, rgba(248,89,85,1) 0%, rgba(206,0,88,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(-45deg, rgba(248,89,85,1) 0%,rgba(206,0,88,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(135deg, rgba(248,89,85,1) 0%,rgba(206,0,88,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    text-align: center;
    padding: 60px 0px 40px;
}

.page-deposito .box-ventajas h2 {
    color: #fff;
    font-size: 30px;
    font-weight: 200;
    margin: 0px 0px 50px;
}

.page-deposito .box-ventajas h2 strong {
    font-weight: 600;
}

.page-deposito .box-ventajas h2 + p {
    color: #fff;
    max-width: 340px;
    margin: 0 auto;
}

.page-deposito .box-ventajas .separate {
    margin: 35px auto 60px;
    background: #fff;
}

.page-deposito .box-ventajas .row {
    padding: 0px 100px;
}

.page-deposito .box-ventajas .content {
    background: #fff;
    text-align: left;
    padding: 30px;
    margin-bottom: 40px;
    -webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
    -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
    box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
    min-height: 230px;
    overflow: hidden;
}

.page-deposito .box-ventajas .content span {
    position: absolute;
    top: 100px;
    left: -30px;
    font-size: 270px;
    letter-spacing: 1.8px;
    font-weight: 600;
    color: #D81D5B;
    opacity: 0.1;
}

.page-deposito .box-ventajas .row > div:first-child .content span {
    left: 0px;   
}

.page-deposito .box-ventajas .content h3 {
    color: #D81D5B;
    font-size: 22px;
    margin-top: 20px;
}

.page-deposito .box-ventajas .content p {
    padding-right: 100px;
    line-height: 28px;
}

.page-deposito .box-ventajas .row > div:last-child .content p {
    padding-right: 50px;
}

.page-deposito .box-empezamos {
    background: url(../jpg/bg-footer.jpg) no-repeat center;
    background-size: cover;
    text-align: center;
}

.page-deposito .box-empezamos h2 {
    color: #DD255B;
    font-weight: 200;
    margin-bottom: 30px;
}

.page-deposito .box-empezamos p {
    max-width: 500px;
    margin: 20px auto;
    line-height: 28px;
}

.page-deposito .box-empezamos p + .btn-solid {
    background-color: #DF2759;
    background-position: calc(100% - 70px) 20px;
    padding: 15px 100px 15px 80px;
}

.page-deposito .box-empezamos p + .btn-solid:hover {
    background-position: calc(100% - 65px) 20px;
}

.page-deposito .modal {
    font-family: 'vag';
    text-align: left;
    font-weight: 400;
    letter-spacing: 1px;
}


/************************ HOME SERVICIOS ************************/

.header-services, .home-services {
    font-family: 'raleway';
}

.header-home .header-left {
    background: #fff;
}

.header-services .header-left {
    text-align: center;
}

.header-home .box-services .row {
    margin: 0px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.header-home .box-services .row:after,
.header-home .box-services .row:before {
    display: none;
}

.header-home .box-services .row > div {
    background: rgb(219,13,94); /* Old browsers */
    background: -moz-linear-gradient(45deg, <? echo $conf['primario']; ?> 0%, <? echo $conf['secundario']; ?> 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(45deg, <? echo $conf['primario']; ?> 0%,<? echo $conf['secundario']; ?> 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(45deg, <? echo $conf['primario']; ?> 0%,<? echo $conf['secundario']; ?> 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    overflow: hidden;
    
}

.header-home .box-services .row > div:before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
}

.header-home .box-services .content {
    padding: 30px 15px;
    position: relative;
    height: 100%;
}

.header-home .box-services .row > div:nth-child(1) .content,
.header-home .box-services .row > div:nth-child(2) .content {
    padding: 50px 30px;
}

.header-home .box-services .content h2 {
    color: #fff;
    font-size: 28px;
    line-height: 35px;
    margin: 10px 0px;
}

.header-home .box-services .content h2 strong {
    display: block;
    text-transform: uppercase;
    font-size: 50px;
    line-height: 60px;
    font-weight: 800;
}

.header-home .box-services .content h2 span {
    font-weight: 700;
}

.header-home .box-services .content p {
    font-size: 21px;
    font-weight: 200;
    color: #fff;
}

.header-home .box-services h2,
.header-home .box-services p {
    max-width: 320px;
}

.header-home .box-services .row > div:nth-child(1) h2,
.header-home .box-services .row > div:nth-child(1) p,
.header-home .box-services .row > div:nth-child(2) h2,
.header-home .box-services .row > div:nth-child(2) p {
    max-width: 250px;
}

.header-home .box-services .content .option {
    position: absolute;
    right: 30px;
    top: 30px;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
}

.header-home .box-services .content .option:before {
    content: '';
    position: absolute;
    top: 15px;
    left: calc(100% + 10px);
    width: 100px;
    height: 1px;
    background: rgba(255,255,255,.5);
}

.header-home .box-services .content .title {
    background: rgba(255,255,255,.18);
    display: inline-block;
    padding: 0px 15px;
    text-transform: uppercase;
    font-size: 13px;
}

.header-home .box-services .content .btn-border {
    margin-top: 20px;
}

.btn-go {
    background: transparent;
    border-radius: 4px;
    border: 1px solid #fff;
    color: #fff;
    font-weight: 700;
    font-size: 14px;
    width: 254px;
    height: 52px;
    position: relative;
    text-align: center;
    letter-spacing: 0.2px;
}

.header-home .btn-go img {
    bottom: 0px;
}

.btn-go:hover, .btn-go:active, .btn-go:focus {
    color: #fff;
    background: transparent;
    box-shadow: none;
}

.btn-go span {
    position: absolute;
    width: 254px;
    height: 100%;
    top: 0px;
    left: 0px;
    padding: 15px 0px;
}

.btn-go > span:first-child {
    background: #fff;
    color: <? echo $conf['secundario']; ?>;
    width: 0px;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
    overflow: hidden;
    z-index: 1;
}

.btn-go:hover > span:first-child {
    width: 100%;
}

.btn-border img {
    width: 16px;
    position: relative;
    bottom: 2px;
    margin-left: 10px;
}




.header-home .box-services .row > div:nth-child(2) {
    background: #00B2FE;   
}

.header-home .box-services .row > div:nth-child(1):hover:before {
    background-position: 90% 90px;
}
.header-home .box-services .row > div:nth-child(2):hover:before {
    background-position: 90% 90px;
}

.header-home .box-services .row .promohome:before {
    background: url(../png/2x_vende_5agosto_home.png) no-repeat !important;
    background-size: 660px !important;
    background-position: calc(100% + 233px) -10px !important;
}

.header-home .box-services .row .promohome:hover:before {
    background-position: calc(100% + 170px) -10px !important;
}

.header-home .box-services .row > div:nth-child(2) .btn-go > span:first-child {
    color: #00B2FE; 
}

.header-home .box-services .row > div:nth-child(3) {
    background: rgb(90,216,102); /* Old browsers */
    background: -moz-radial-gradient(top center, ellipse cover, rgba(90,216,102,1) 0%, rgba(68,158,91,1) 100%); /* FF3.6-15 */
    background: -webkit-radial-gradient(top center, ellipse cover, rgba(90,216,102,1) 0%,rgba(68,158,91,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: radial-gradient(ellipse at top center, rgba(90,216,102,1) 0%,rgba(68,158,91,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
}

.header-home .box-services .row > div:nth-child(3):before {
    background: url(../png/tablet.png) no-repeat;
    background-size: 300px;
    background-position: 93% calc(100% + 100px);
}

.header-home .box-services .row > div:nth-child(3):hover:before {
    background-position: 93% calc(100% + 80px);
}

.header-home .box-services .row > div:nth-child(3) .btn-go > span:first-child {
    color: #4EB760; 
}

.header-home .box-services .row > div:nth-child(4) {
    background: rgb(115,57,223); /* Old browsers */
    background: -moz-linear-gradient(45deg, rgba(115,57,223,1) 0%, rgba(91,192,235,1) 120%); /* FF3.6-15 */
    background: -webkit-linear-gradient(45deg, rgba(115,57,223,1) 0%,rgba(91,192,235,1) 120%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(45deg, rgba(115,57,223,1) 0%,rgba(91,192,235,1) 120%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
}

.header-home .box-services .row > div:nth-child(4) .btn-go > span:first-child {
    color: #6A65E3; 
}

.header-home .box-services .row > div:nth-child(5) {
    background: rgb(115,57,223); /* Old browsers */
    background: -moz-linear-gradient(45deg, rgba(115,57,223,1) 0%, rgba(250,79,152,1) 0%, rgba(246,66,66,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(45deg, rgba(115,57,223,1) 0%,rgba(250,79,152,1) 0%,rgba(246,66,66,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(45deg, rgba(115,57,223,1) 0%,rgba(250,79,152,1) 0%,rgba(246,66,66,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
}

.header-home .box-services .row > div:hover .option {
    right: 50px;
}

.header-home .box-services .row > div:nth-child(2) {
    background: #FBFBFB;
}

.header-home .box-services .row > div:nth-child(2) .content .option {
    color: #AEA5A5;
}

.header-home .box-services .row > div:nth-child(2) .content .option:before {
    background: #BFBFBF;
}

.header-home .box-services .row > div:nth-child(2) .content .title {
    background: rgba(157,157,157,.06);
    color: #AAAAAA;
}

.header-home .box-services .row > div:nth-child(2) .content h2 {
    color: #545454;
}

.header-home .box-services .row > div:nth-child(2) .content h2 strong {
    color: <? echo $conf['primario']; ?>;
}

.header-home .box-services .row > div:nth-child(2) .content p {
    color: <? echo $conf['secundario']; ?>rgba(131,131,131,.7);
}

.header-home .box-services .row > div:nth-child(2) .content .btn-go {
    color: <? echo $conf['secundario']; ?>;
    border-color: <? echo $conf['secundario']; ?>;
}

.header-home .box-services .row > div:nth-child(2) .btn-go > span:first-child {
    background: <? echo $conf['secundario']; ?>;
    color: #fff;
}

.home-page .box-content {
    text-align: center;
}

.home-page .box-content h2,
.home-page .box-content h3 {
    font-size: 31px;
    line-height: 40px;
    letter-spacing: 0.5px;
    color: #FF0A6D;
}

.home-page .slick {
    font-size: 18px;
    margin-top: 40px;
}

.home-page .slick .slick-slide:focus {
    outline: none;
}

.home-page .box-categorias .slick .slick-arrow {
    display: inline !important;
}

.home-page .box-categorias .slick img {
    max-width: 120px;
    max-height: 90px;
    margin: 0 auto 20px;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
}

.home-page .slick a:hover {
    color: #484848;
}

.home-page .slick a {
    display: block;
}

.home-page .box-categorias .slick a:hover img {
    max-width: 130px;
    max-height: 100px;
}

.home-page .slick span {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
    height: 120px;
}

.home-page .box-encuentra {
    text-align: left;
    position: relative;
    padding: 30px 0px 40px;
    overflow: hidden;
}

.home-page .box-encuentra:after,
.home-page .box-encuentra:before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 50%;
    height: 100%;
    background: url(../jpg/bg-tienda-white.jpg) center;
    background-size: cover;
}

.home-page .box-encuentra:before {
    left: auto;
    right: 0px;
    background: rgb(254,131,160); /* Old browsers */
    background: -moz-radial-gradient(center, ellipse cover, rgba(254,131,160,1) 0%, rgba(212,64,99,1) 100%); /* FF3.6-15 */
    background: -webkit-radial-gradient(center, ellipse cover, rgba(254,131,160,1) 0%,rgba(212,64,99,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: radial-gradient(ellipse at 150px top, rgba(254,131,160,1) 0%,rgba(212,64,99,1) 80%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
}

.home-page .box-encuentra .row {
    position: relative;
    z-index: 1;
}

.home-page .box-encuentra h3 {
    color: #FF0A6D;
    line-height: 50px;
}

.home-page .box-encuentra h3 strong {
    font-weight: 800;
    max-width: 300px;
}

.home-page .box-encuentra .row > div:first-child h3 strong {
    display: block;
}

.btn-arrow {
    background: url(../png/pink.png) no-repeat;
    background-size: 16px;
    background-position: calc(100% - 65px) center;
    border-radius: 4px;
    border: 1px solid #FF0A6D;
    color: #FF0A6D;
    font-weight: 700;
    font-size: 14px;
    position: relative;
    text-align: center;
    letter-spacing: 0.2px;
    padding: 15px 90px 15px 70px;
}

.btn-arrow:hover, .btn-arrow:active, .btn-arrow:focus {
    color: #FF0A6D;
    background: url(../png/pink.png) rgba(255,10,109,0.03) no-repeat;
    background-size: 16px;
    background-position: calc(100% - 60px) center;
}

.home-page .box-encuentra .box-cercana {
    padding-right: 250px;
}

.home-page .box-encuentra .box-cita {
    padding-left: 250px;
}

.home-page .box-encuentra .box-cita h3 {
    color: #fff;
    line-height: 40px;
    font-size: 28px;
    padding-right: 30px;
}

.home-page .box-encuentra .box-cita .image {
    position: absolute;
    bottom: -45px;
    left: 5px;
    width: 230px;
}

.home-page .box-encuentra .box-cita .form-control {
    border-color: #fff;
    height: 52px;
    border-radius: 4px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    box-shadow: none;
    outline: none;
    background: url(../png/arrow-pink.png) #fff no-repeat;
    background-size: 14px;
    background-position: calc(100% - 10px) center;
    font-size: 14px;
}

.home-page .box-encuentra .box-cita .form-control.error {
    color: #E76382;
}

.home-page .box-encuentra .btn-arrow {
    background: transparent;
    display: block;
}

.home-page .box-encuentra .btn-arrow:hover {
    background: rgba(255,10,109,0.02);
}

.home-page .box-encuentra .box-cita .btn-arrow {
    border-color: #fff;
    color: #fff;
    margin-top: 15px;
    padding: 15px 70px;
}

.home-page .box-encuentra .btn-arrow img {
    position: relative;
    top: 0px;
    left: -3px;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
}

.home-page .box-encuentra .btn-arrow:hover img {
    left: 2px;
}

.home-page .box-conocelas {
    background: #35383C;
    padding-bottom: 0px;
}

.home-page .box-conocelas h3 {
    color: #fff;
    margin-bottom: 10px;
}

.home-page .box-conocelas p {
    color: #fff;
    text-transform: uppercase;
    font-size: 12px;
}

.home-page .box-conocelas ul {
    margin: 40px 0px 0px;
    padding: 0px;
    list-style: none;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
}

.home-page .box-conocelas ul li {
    width: 100%;
}

.home-page .box-conocelas ul li a {
    color: #fff;
    font-size: 31px;
    font-weight: 600;
    padding: 100px 0px;
    display: block;
    position: relative;
     
    background-size: auto 100%;
}

.home-page .box-conocelas ul li a:hover {
    background-size: auto 105%;
}

.home-page .box-conocelas ul li a:before {
    content: '';
    position: absolute;
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.5) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.5) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgba(0,0,0,.4) 0%,rgba(0,0,0,0.8) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    opacity: .9;
    -webkit-transition: .5s all ease;
    transition: .5s all ease;
}

.home-page .box-conocelas ul li a:hover:before {
    opacity: .6;
}

.home-page .box-conocelas ul li a span {
    position: relative;
}

.home-page .box-vender h2 {
    color: #353535;
    margin-bottom: 10px;
}

.home-page .box-vender p {
    color: #353535;
    text-transform: uppercase;
    font-size: 12px;
}

.home-page .box-vender .slick {
    padding: 0px 80px;
    margin-bottom: 30px;
}

.home-page .box-vender .slick:before {
    content: '';
    position: absolute;
    top: 55px;
    left: 0px;
    width: 100%;
    height: 160px;
    background: #db0d5e;
    background: -moz-linear-gradient(left, #DB0D5E 0%, #F03782 100%);
    background: -webkit-linear-gradient(left, #DB0D5E 0%,#F03782 100%);
    background: linear-gradient(to right, #DB0D5E 0%,#F03782 100%);
}

.home-page .box-vender .slick .slick-list {
    padding: 30px 0px;
}

.home-page .box-vender .slick .slick-slide {
    padding: 0px 12px;
}

.home-page .box-vender .slick .slick-prev {
    top: 140px;
    left: 45px;
}

.home-page .box-vender .slick .slick-next {
    top: 140px;
    right: 45px;
}

.home-page .box-vender .slick .slick-prev:before,
.home-page .box-vender .slick .slick-next:before {
    content: '';
    width: 20px;
    height: 20px;
    display: block;
    background: url(../png/arrow-white.png) center no-repeat;
    background-size: contain;
}

.home-page .box-vender .slick .slick-prev:before {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}

.home-page .box-vender .slick img {
    max-width: 160px;
    max-height: 140px;
    margin: 0 auto;
}

.home-page .box-vender .slick span {
    height: 210px;
    margin-bottom: 15px;
    background: #fff;
}

.home-page .box-vender .slick span {
    -moz-box-shadow: 0 3px 10px rgba(0,0,0, 0.15);
    -webkit-box-shadow: 0 3px 10px rgba(0,0,0, 0.15);
    box-shadow: 0 0px 10px rgba(0,0,0, 0.15);
    -webkit-transition: .5s all ease;
    transition: .5s all ease;
    position: relative;
}

.home-page .box-vender .slick span:before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,.8);
    -webkit-transition: .5s all ease;
    transition: .5s all ease;
    opacity: 0;
}

.home-page .box-vender .slick span:after {
    content: '';
    width: 45px;
    height: 45px;
    background: url(../png/more.png) no-repeat center #E32B72;
    background-size: 22px;
    position: absolute;
    top: calc(50% - 22px);
    left: calc(50% - 22px);
    opacity: 0;
    -webkit-transition: .5s all ease;
    transition: .5s all ease;
}

.home-page .box-vender .slick a:hover span {
    -moz-box-shadow: 0 0px 15px rgba(0,0,0, 0.25);
    -webkit-box-shadow: 0 0px 15px rgba(0,0,0, 0.25);
    box-shadow: 0 0px 15px rgba(0,0,0, 0.25);
}

.home-page .box-vender .slick a:hover span:before,
.home-page .box-vender .slick a:hover span:after {
    opacity: 1;
}

.home-page .box-vender .slick h4 {
    font-weight: 700;
    color: #707070;
    font-size: 17px;
    line-height: 24px;
    padding: 0px 30px;
}

.home-page .box-vender .slick p {
    text-transform: none;
    color: #A9A9A9;
    font-weight: 700;
    font-size: 15px;
    margin: 0px;
}

.home-page .box-vender .slick p strong {
    color: #F54A68;
}

.home-page .box-vender .slick .price {
    font-family: 'opensans';
    font-size: 28px;
    color: #DD465F;
    margin-top: 6px;
}


/************************ PAGE CARNAVAL ************************/

.page-carnaval {
    background: #DE006E;
    position: relative;
    padding: 30px 0px;
}

.page-carnaval section {
    width: 100%;
}

.page-carnaval:before,
.page-carnaval:after {
    content: '';
    width: 25%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    background: url(../png/bg-carnaval.png) center right no-repeat;
    background-size: 850px;
}

.page-carnaval:after {
    left: auto;
    right: 0px;
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}

.page-carnaval .box-header {
    background: #DE006E;
}

.page-carnaval .box-header .container {
    padding: 0px 15px;
}

.page-carnaval .box-header .logo {
    width: 380px;
}

.page-carnaval .box-header .icon {
    width: 160px;
    display: block;
    margin: 30px auto 5px;
}

.page-carnaval .box-header h1 {
    color: #fff;
    font-size: 38px;
    line-height: 64px;
    text-transform: uppercase;
    font-weight: 600;
    margin: 0px;
}

.page-carnaval .box-header h1 sup {
    text-transform: none;
    border-bottom: 2px solid #fff;
    font-size: 20px;
    position: relative;
    top: -16px;
    letter-spacing: 1px;
}

.page-carnaval .box-header h1 strong {
    font-size: 86px;
    font-weight: 900;
}

.page-carnaval .box-content .content {
    text-align: center;
    -webkit-box-shadow: 0px 0px 35px -5px rgba(0,0,0,0.4);
    -moz-box-shadow: 0px 0px 35px -5px rgba(0,0,0,0.4);
    box-shadow: 0px 0px 35px -5px rgba(0,0,0,0.4);
    padding: 50px 60px 60px;
    font-family: 'raleway';
    letter-spacing: 0px;
    position: relative;
    z-index: 1;
}

.page-carnaval .box-content .content h3 {
    color: #fff;
    font-size: 16px;
    font-weight: 800;
    text-transform: none;
    margin: 0px 0px 30px;
}

.page-carnaval .box-content .content .form-validate {
    margin: 0px;
}

.page-carnaval .box-content .content label,
.page-carnaval .box-content .content label a {
    color: #fff;
}

.page-carnaval .box-content .content label a {
    font-weight: 700;
}

.page-carnaval .box-content .content .form-group {
    margin-bottom: 12px;
    position: relative;
}

.page-carnaval .box-content .content .form-group:before {
    content: '';
    position: absolute;
    width: 15px;
    height: 20px;
    top: 12px;
    left: 14px;
    background: url(../png/mark.png) no-repeat;
    background-size: 14px;
}

.page-carnaval .box-content .content .form-group:nth-child(2):before {
    background-image: url(../png/user.png);
}

.page-carnaval .box-content .content .form-group:nth-child(3):before {
    background-image: url(../png/phone.png);
    top: 14px;
}

.page-carnaval .box-content .content .form-group:nth-child(4):before {
    background-image: url(../png/mail.png);
    top: 15px;
}

.page-carnaval .box-content .content .has-error:after {
    content: '!';
    position: absolute;
    right: -30px;
    top: 12px;
    width: 20px;
    height: 20px;
    background: #FCC400;
    color: #fff;
    border-radius: 50%;
    text-align: center;
    line-height: 22px;
    font-weight: 700;
}

.page-carnaval .box-content .content .form-group.checkbox {
    margin-bottom: 0px;
    padding-left: 30px;
}

.page-carnaval .box-content .content .form-group.checkbox:before {
    display: none;
}

.page-carnaval .box-content .content .form-group.checkbox label {
    padding-left: 25px;
    position: relative;
}

.page-carnaval .box-content .content .form-group.checkbox label.has-error:after {
    top: -1px;
    line-height: 20px
}

.page-carnaval .box-content .content .form-control {
    appearance: none;
    border: none;
    font-size: 14px;
    color: #464646;
    background: #fff;
    border-radius: 2px;
    height: 42px;
    padding-left: 40px;
}

.page-carnaval .box-content .content .has-error .form-control {
    -webkit-box-shadow: 0px 0px 15px 0px rgba(252,196,0,1) !important;
    -moz-box-shadow: 0px 0px 15px 0px rgba(252,196,0,1) !important;
    box-shadow: 0px 0px 5px 2px rgba(252,196,0,0.8) !important;
    border: none;
}

.page-carnaval .box-content .content select.form-control {
    background: url(../png/arrow-pink.png) #fff no-repeat;
    background-size: 12px;
    background-position: calc(100% - 15px) center;
}

.page-carnaval .box-content .content .form-control.check {
    height: 17px;
    width: 17px;
    background: transparent;
    border: 1px solid #fff;
    padding: 0px;
    border-radius: 0px;
}

.page-carnaval .box-content .content .form-control.check:checked:before {
    color: #fff;
    font-size: 13px;
}

.page-carnaval .box-content .content .btn-solid {
    display: block;
    width: 100%;
    background: #50E3C2;
    color: #464646;
    text-transform: uppercase;
    font-weight: 800;
    font-size: 14px;
    padding: 15px;
    border-radius: 2px;
    border: none;
    opacity: 1;
}

.page-carnaval .box-content .content .btn-solid .loading,
.page-carnaval .box-content .content .btn-solid .sent {
    -webkit-filter: brightness(0.2);
    filter: brightness(0.2);
}   

.page-carnaval .box-content .content .alert {
    margin: 0px;
    border: none;
    padding: 20px 0px 0px;
    color: #FCC400;
    font-weight: 700;
    line-height: 18px;
    display: none;
    position: absolute;
    top: 40px;
    font-size: 15px;
}

.page-carnaval .box-content .content.second h3 {
    font-size: 20px;
    font-weight: 700;
}

.page-carnaval .box-content .content.second .form-group:before {
    display: none;
}

.page-carnaval .box-content .content.second .message {
    color: #fff;
    position: absolute;
    width: 100%;
    bottom: -40px;
    display: none;
    font-weight: 700;
    display: none;
}

.page-carnaval .box-content .content.second .loader {
    width: 220px;
}

.page-carnaval .box-content .content.second .preview {
    display: none;
    position: relative;
}

.page-carnaval .box-content .content.second .img-preview {
    max-width: 100%;
    max-height: 250px;
    margin: 10px auto;
}

.page-carnaval .box-content .content.second .remove {
    position: absolute;
    top: -6px;
    right: -16px;
    width: 32px;
    cursor: pointer;
}

.page-carnaval .box-content .content.thanks {
    text-align: center;
}

.page-carnaval .box-content .content.thanks img {
    width: 70px;
    margin: 5px 0px 20px;
}

.page-carnaval .box-content .content.thanks h3 {
    text-align: center;
    text-transform: uppercase;
    font-size: 18px;
}

.page-carnaval .box-content .content.thanks p {
    color: #fff;
    font-weight: 600;
    font-size: 15px;
    line-height: 22px;
}

.page-carnaval .box-content .content.thanks p.likes {
    font-weight: 800;
    font-size: 16px;
    margin: 10px 0px 15px;
}

.page-carnaval .box-content .content.error img {
    margin-top: 20px;
}

.page-carnaval .box-content .content.error p.likes {
    margin-bottom: 10px;
}

.page-carnaval .box-footer p {
    text-align: center;
    color: #fff;
    font-family: 'raleway';
}

.banner-carnaval {
    text-align: center;
    background: #CE0058;
    padding: 30px 0px;
    position: relative;
}

.banner-carnaval:before,
.banner-carnaval:after {
    content: '';
    position: absolute;
    z-index: 1;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 70px;
    background: url(../png/bg-carnaval1.png) top center repeat-x;
    background-size: 800px;
}

.banner-carnaval:after {
    background-image: url(../png/bg-carnaval2.png);
    background-position: bottom center;
    top: auto;
    bottom: 0px;
}

.banner-carnaval .container {
    padding: 40px 30px;
    background: #fff;
}

.banner-carnaval .container .row {
    margin: 0px -4px;
}

.banner-carnaval .container .row > div {
    padding: 0px 5px;
}

.banner-carnaval .container > .row > div:nth-child(2),
.banner-carnaval .container > .row > div:nth-child(2) .row > div:nth-child(2) {
    padding: 0px;
}

.banner-carnaval .container > .row > div:nth-child(3) {
    padding-left: 30px;
}

.banner-carnaval .container > .row > div:nth-child(2) img {
    margin-bottom: 10px;
}

.banner-carnaval .container > .row > div:nth-child(3) img {
    width: 300px;
}

.banner-carnaval .container img {
    max-width: 100%;
}

.banner-carnaval .container p {
    font-size: 14px;
    line-height: 18px;
    color: #000;
    letter-spacing: 0px;
}

.banner-carnaval .container .title {
    color: #DE006E;
    font-size: 28px;
    line-height: 44px;
    text-transform: uppercase;
    font-weight: 600;
    margin: 10px 0px 0px;
    letter-spacing: 0.3px;
}

.banner-carnaval .container .title sup {
    text-transform: none;
    border-bottom: 3px solid #DE006E;
    font-size: 15px;
    position: relative;
    top: -12px;
    left: 2px;
    letter-spacing: 1px;
}

.banner-carnaval .container .title strong {
    font-size: 60px;
    font-weight: 900;
}

.banner-carnaval .container .subtitle {
    color: #DE006E;
    text-transform: uppercase;
    font-size: 20px;
}

.banner-carnaval .container .text {
    color: #DE006E;
    font-size: 18px;
    margin: 15px 0px 0px;
}

.banner-carnaval .container .text strong {
    color: #000000;
    display: inline-block;
    margin-left: 10px;
}

.banner-carnaval .container .precio {
    font-size: 27px;
    line-height: 28px;
    color: #7C7C7C;
    margin: 20px 0px 0px;
}

.banner-carnaval .container .precio strong {
    font-size: 40px;
    color: #000;
}

.banner-carnaval .container .puesto {
    color: #DE006E;
    font-size: 16px;
}

.banner-carnaval + .box-info .content {
    margin: 60px 0px 100px;
}

.page-carnaval.page-info:before,
.page-carnaval.page-info .bg-pink.last:before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 175px;
    background: url(../png/bg-info.png) center bottom repeat-x;
    background-size: 1400px;
}

.page-carnaval.page-info .bg-pink.last:before {
    top: -95px;
    height: 240px;
}

.page-carnaval.page-info:after {
    display: none;
}

.page-carnaval.page-info {
    padding: 100px 0px 0px;
    letter-spacing: 0px;
    text-align: center;
    background: #CF0859;
}

.page-carnaval.page-info:after {
    top: auto;
    bottom: 0px;
    transform: none;
}

.page-carnaval.page-info .box-header {
    background: #fff;
    padding: 70px 0px 30px;
}

.page-carnaval.page-info .box-header h1 {
    color: #DE006E;
    margin: 0px;
    line-height: 58px;
}

.page-carnaval.page-info .box-header h2 {
    color: #DE006E;
    text-transform: uppercase;
    margin: 10px 0px 15px;
    font-size: 28px;
    letter-spacing: 1px;
}

.page-carnaval.page-info .box-header h3 {
    font-size: 30px;
}

.page-carnaval.page-info .box-header h3 strong {
    display: block;
    color: #13110D;
}

.page-carnaval.page-info .box-header img {
    width: 340px;
    margin: 20px 0px 30px;
}

.page-carnaval.page-info img {
    max-width: 100%;
}

.page-carnaval.page-info .box-image {
    display: block;
    height: 160px;
    margin: 0 auto;
    text-align: center;
}

.page-carnaval.page-info .box-image img {
    max-width: none;
    width: 177px;
}

.page-carnaval.page-info .box-content {
    background: #F9F9F9;
    padding: 40px 0px;
}

.page-carnaval.page-info .box-content .row {
    margin: 0 -5px;
}

.page-carnaval.page-info .box-content .row > div {
    padding: 0px 5px;
}

.page-carnaval.page-info .box-icons .row > div:nth-child(3) p {
    padding: 0px 25px;
}

.page-carnaval.page-info .bg-gray {
    background: #fff;
}

.page-carnaval.page-info .bg-gray h3 {
    color: #DE006E;
    font-size: 28px;
    font-weight: 500;
    margin: 0px;
    font-weight: 700;
}

.page-carnaval.page-info .bg-gray h3 strong {
    color: #13110D;
    font-weight: 500;
}

.page-carnaval.page-info .box-content p {
    font-weight: 500;
    font-size: 17px;
    color: #000000;
    margin: 10px 0px 0px;
}

.page-carnaval.page-info .bg-pink {
    background: #CF0859;
}

.page-carnaval.page-info .bg-pink h3 {
    color: #fff;
    font-size: 28px;
    font-weight: 500;
    margin: 0px;
}

.page-carnaval.page-info .bg-gray.last {
    padding-bottom: 90px;
}

.page-carnaval.page-info .bg-gray.last .row {
    max-width: 800px;
    margin: 0 auto;
}

.page-carnaval.page-info .bg-gray.last .precio {
    font-size: 27px;
    line-height: 28px;
    color: #7C7C7C;
    margin: 40px 0px 0px;
}

.page-carnaval.page-info .bg-gray.last .precio strong {
    font-size: 46px;
    color: #000;
}

.page-carnaval.page-info .bg-gray.last .puesto {
    color: #DE006E;
    font-size: 20px;
    margin: 5px 0px 0px;
}

.page-carnaval.page-info .bg-gray.last img {
    width: 115px;
    margin-top: 10px;
}

.page-carnaval.page-info .bg-pink.last {
    padding: 170px 0px 50px;
    position: relative;
}

.page-carnaval.page-info .bg-pink.last h3 {
    max-width: 250px;
    margin: 0 auto 25px;
    text-transform: none;
}

.page-carnaval.page-info .bg-pink .btn {
    background: transparent;
    border: 1px solid #fff;
    border-radius: 2px;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    padding: 15px 80px;
}

.page-carnaval.page-info .bg-pink .btn:hover {
    background: rgba(255,255,255,.08);
}

.page-carnaval.page-info .terminos {
    margin-top: 50px !important;
}

.page-carnaval.page-info a {
    text-decoration: none;
}

.page-carnaval.page-info .terminos a {
    color: #DE006E;
}

.page-carnaval .modal-content {
    text-align: left;
}

.page-carnaval .modal-content p {
    margin-bottom: 5px;
}

/************************ PAGE VENTA FAQ ************************/

.page-venta-faq {
    background: #F9F9FC;
    font-family: 'raleway';
    font-size: 16px;
    line-height: 31px;
    letter-spacing: 0px;
}

.page-venta-faq .box-title {
    background: url(../jpg/bg-faq.jpg) center;
    background-size: cover;
    text-align: center;
    padding: 40px 0px;
}

.page-venta-faq .box-title h1 {
    color: #fff;
    text-transform: uppercase;
    font-weight: 800;
    margin: 0px;
    font-size: 28px;
}

.page-venta-faq .box-title h2 {
    color: #fff;
    font-weight: 400;
    font-size: 20px;
    margin: 8px 0px 0px;
}

.page-venta-faq .panel-group {
    -moz-box-shadow: 0px 0px 10px rgba(0,0,0, 0.08);
    -webkit-box-shadow: 0px 0px 10px rgba(0,0,0, 0.08);
    box-shadow: 0px 0px 10px rgba(0,0,0, 0.08);
}

.page-venta-faq .panel-group .panel+.panel {
    margin: 0px;
}

.page-venta-faq .panel-default {
    border-radius: 0px;
    border-bottom: none;
}

.page-venta-faq .panel-heading {
    padding: 0px;
    background: #fff;
}

.page-venta-faq .panel-heading h4 a {
    padding: 20px;
    display: block;
    position: relative;
    font-weight: 600;
    font-size: 18px;
    line-height: 24px;
    color: #383838;
    padding-right: 50px;
}

.page-venta-faq .panel-heading h4 a:before {
    content: '';
    position: absolute;
    top: 20px;
    right: 20px;
    width: 15px;
    height: 15px;
    background: url(../png/arrow-light.png) center no-repeat;
    background-size: 15px;
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}

.page-venta-faq .panel-heading h4 a.collapsed:before {
   -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
}

.page-venta-faq .panel-body {
    background: #FAFAFA;
    padding: 20px 30px;
    color: #717070;
}

.page-venta-faq .panel-body p {
    margin-bottom: 10px;
}

.page-venta-faq .panel-body p:last-child {
    margin-bottom: 0px;
}

.page-venta-faq .btn-solid {
    margin: 0px auto 30px;
    display: block;
    width: 300px;
    border-radius: 4px;
    background: #db0d5e;
    background: -moz-linear-gradient(left, #DB0D5E 0%, #F03782 100%);
    background: -webkit-linear-gradient(left, #DB0D5E 0%,#F03782 100%);
    background: linear-gradient(to right, #DB0D5E 0%,#F03782 100%);
    color: #fff;
    font-weight: 700;
    padding: 15px;
}

.page-venta-faq .btn-solid img {
    width: 18px;
    position: relative;
    bottom: 1px;
    margin-left: 5px;
    left: 0px;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
}

.page-venta-faq .btn-solid:hover img {
    left: 5px;   
}


/************************ PAGE EL REGALAZO ************************/

.page-regalazo {
    font-family: 'poppins';
}

.page-regalazo .box-header {
    background: url(../header.html) #80183B repeat-x;
    background-size: 910px;
    background-position: calc(50% - 220px) -25px;
}

.page-regalazo .box-header .container {
    padding: 15px 0px 90px;
}

.page-regalazo .box-header img {
    width: 290px;
}

.page-regalazo .box-content {
    position: relative;
    background: #7f1c3c; /* Old browsers */
    background: -moz-linear-gradient(top, #7f1c3c 0%, #8b1c41 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, #7f1c3c 0%,#8b1c41 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, #7f1c3c 0%,#8b1c41 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    text-align: center;
    padding: 0px 0px 60px;
}

.page-regalazo .box-content .container {
    position: relative;
}

.page-regalazo .box-content .wave {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background: url(../wave.html) repeat-x;
    background-position: calc(50% - 2400px) top;
    background-size: 3200px;
}

.page-regalazo .box-content h1 {
    color: #fff;
    font-weight: 200;
    font-size: 36px;
    line-height: 44px;
    max-width: 850px;
    margin: 0 auto;
}

.page-regalazo .box-content h1 strong {
    font-weight: 800;
}

.page-regalazo .box-content p {
    color: #fff;
    font-size: 19px;
    line-height: 30px;
    font-weight: 100;
    margin: 15px 0px 0px;
}

.page-regalazo .box-content p img {
    width: 44px;
    margin-right: 10px;
}

.page-regalazo .box-content .content {
    position: relative;
    background: rgba(255,255,255,.9);
    -webkit-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.5);
    -moz-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.5);
    box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.5);
    border-radius: 4px;
    padding: 40px 30px  30px 400px;
    max-width: 800px;
    margin: 40px auto 50px;
    letter-spacing: 0px;
}

.page-regalazo .box-content .content.gracias {
    max-width: 700px;
    padding: 40px;
    margin: 0px auto 20px;
}

.page-regalazo .box-content .content.gracias img {
    width: 58px;
    margin-bottom: 30px;
}

.page-regalazo .box-content .content.gracias h1 {
    color: #CF0859;
    font-size: 38px;
    line-height: 46px;
}

.page-regalazo .box-content .content.gracias p {
    color: #6D6D6D;
    font-size: 18px;
    line-height: 29px;
    max-width: none;
    margin-bottom: 10px;
}

.page-regalazo .box-content .content.gracias .btn-solid {
    margin-top: 15px;
}

.page-regalazo .box-content .image {
    position: absolute;
    bottom: -50px;
    left: 30px;
    width: 640px;
}

.page-regalazo .box-content .content h2,
.page-regalazo .modal-title {
    color: #CF0859;
    font-size: 21px;
    font-weight: 600;
    letter-spacing: 0px;
    padding: 0px 30px;
    margin: 0px 0px 20px;
}

.page-regalazo .box-content .content form {
    position: relative;
    z-index: 1;
}

.page-regalazo .box-content .content .form-group {
    margin-bottom: 10px;
    position: relative;
}

.page-regalazo .box-content .content .form-group.terms {
    margin-bottom: 0px;
}

.page-regalazo .box-content .content .form-group.checkbox label {
   font-weight: 100;
}

.page-regalazo .box-content .content .form-group.checkbox .form-control {
    background-color: transparent;
    border-color: #989898;
    top: -1px;
}

.page-regalazo .box-content .content .has-error .form-control {
    border-color: #CF0859 !important;
}

.page-regalazo .box-content .content label.has-error,
.page-regalazo .box-content .content label.has-error a {
    color: #CF0859;
}

.page-regalazo .box-content .content input[type="text"].form-control {
    height: 50px;
    line-height: 50px;
    -webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1) !important;
    -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1) !important;
    box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1) !important;
    padding: 20px 15px 20px 50px;
}


.page-regalazo .box-content .content .form-group:nth-child(1):before,
.page-regalazo .box-content .content .form-group:nth-child(2):before {
    content: '';
    position: absolute;
    top: 13px;
    left: 15px;
    width: 22px;
    height: 22px;
    background: url(../user.html) #fff no-repeat;
    background-size: 22px;
}

.page-regalazo .box-content .content .form-group:nth-child(2):before {
    top: 17px;
    left: 16px;
    background: url(../mail.html) #fff no-repeat;
    background-size: 20px;
}

.page-regalazo .btn-solid {
    background: #CF0859;
    border-radius: 4px;
    display: block;
    width: 100%;
    padding: 15px;
    font-weight: 600;
    font-size: 18px;
}

.page-regalazo .gracias .btn-solid {
    width: auto;
    display: inline-block;
    min-width: 300px;
}

.page-regalazo .box-content .info img {
    width: 17px;
    margin-bottom: 10px;
}

.page-regalazo .box-content .info p {
    font-size: 21px;
    line-height: 30px;
    font-weight: 400;
}

.page-regalazo .footer {
    position: relative;
    background: #8A2042; /* Old browsers */
    background: -moz-linear-gradient(top, #8A2042 0%, #741534 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, #8A2042 0%,#741534 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, #8A2042 0%,#741534 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    text-align: center;
    padding: 50px 0px 100px;
}

.page-regalazo .footer:before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background: url(../footer.html) no-repeat;
    background-size: 1300px;
    background-position: center bottom;
}

.page-regalazo .footer .container {
    position: relative;
}

.page-regalazo .footer img {
    width: 285px;
    margin-bottom: 20px;
}

.page-regalazo .footer p {
    color: #fff;
}

.page-regalazo .modal-body {
    font-size: 14px;
    line-height: 20px;
}

.page-regalazo .modal-body h4 {
    color: #CF0859;
}


/************************ PAGE MASRTERCASH ************************/

.page-mastercash {
    font-family: 'poppins';
    letter-spacing: 0px;
}

.page-mastercash .box-header {
    background: url(../jpg/bg-header-2.jpg) center no-repeat;
    background-size: cover;
    padding: 40px 0px;
}

.page-mastercash .box-header .container {
    padding: 0px 15px;
}

.page-mastercash .box-header .logo {
    width: 225px;
}

.page-mastercash .box-header .row > div:nth-child(1) {
    text-align: left;
}

.page-mastercash .box-header .row > div:nth-child(2) {
    text-align: right;
}

.page-mastercash .box-header h2 {
    color: #fff;
    font-size: 48px;
    font-family: 'vag';
    margin: 0px;
}

.page-mastercash .box-header h2 strong {
    font-weight: 600;
    color: #E20076;
}

.page-mastercash .box-header h3 {
    text-transform: uppercase;
    color: #fff;
    font-family: 'vag';
    font-size: 18px;
    
}

.page-mastercash .box-header .title {
    width: 322px;
    margin: 80px 0px;
}

.page-mastercash .box-header h1 {
    color: #fff;
    font-size: 40px;
    letter-spacing: 0px;
    max-width: 600px;
    margin: 0px auto 70px;
}

.page-mastercash .box-header .arrow {
    width: 97px;
}

.page-mastercash .box-content {
    background: #161616;
    padding: 80px 0px;
}

.page-mastercash .box-content .flex-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin: 0px -10px;
}

.page-mastercash .box-content .flex-group .content {
    background: rgba(255,255,255,.07);
    padding: 50px 30px;
    text-align: center;
    margin: 0px 10px;
    width: 33%;
}

.page-mastercash .box-content .flex-group .content img {
    height: 60px;
    margin-bottom: 30px;
}

.page-mastercash .box-content .flex-group .content p {
    color: #fff;
}

.page-mastercash .box-content.last {
    background: url(../jpg/bg-condiciones.jpg) center no-repeat;
    background-size: cover;
    text-align: center;
}

.page-mastercash .box-content.last h4 {
    color: #fff;
    font-size: 40px;
    max-width: 550px;
    margin: 0px auto 30px;
}

.page-mastercash .box-content.last .btn-solid,
.page-mastercash .modal .btn-solid {
    border-radius: 4px;
    padding: 15px 60px;
    font-size: 18px;
}

.page-mastercash .box-content.last .btn-solid:active,
.page-mastercash .box-content.last .btn-solid:focus {
    color: #fff;
}

.page-mastercash .footer {
    text-align: center;
    padding: 50px 0px;
    background: #000;
}

.page-mastercash .footer img {
    width: 285px;
    margin-bottom: 20px;
}

.page-mastercash .footer p {
    color: #fff;
    font-family: 'opensans';
    font-weight: 500;
    font-size: 14px;
}


/************************ PAGE ALQUILER ************************/

.page-alquiler {
    font-family: 'poppins';
    letter-spacing: 0px;
}

.page-alquiler .content-header {
    background: #f85955; /* Old browsers */
    background: -moz-linear-gradient(-45deg, #f85955 0%, #ce0058 60%); /* FF3.6-15 */
    background: -webkit-linear-gradient(-45deg, #f85955 0%,#ce0058 60%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(135deg, #f85955 0%,#ce0058 60%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    color: #fff;
    overflow: hidden;
    padding-bottom: 25px;
    position: relative;
}

.page-alquiler .content-header:before {
    content: '';
    position: absolute;
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: 25px;
    background: #1A1A1A;
}

.page-alquiler .content-header .container > .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.page-alquiler .content-header .container > .row > div:first-child {
    padding-right: 0px;
}

.page-alquiler .content-header .container > .row > div:last-child {
    background: #fff;
    padding: 0px 15px 0px 60px;
}

.page-alquiler .content-header .container > .row > div:last-child:before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 3000px;
    height: 100%;
    background: #fff;
}

.page-alquiler .content-header .content {
    max-width: 520px;
    padding: 40px 15px 0px 0px;
}

.page-alquiler .content-header .content img {
    width: 250px;
    margin-bottom: 40px;
}

.page-alquiler .slick {
    background: #323232;
    padding: 30px 60px 30px 30px;
    margin-top: 15px;
    text-align: center;
    position: relative;
    height: 250px;
}

.page-alquiler .slick .slick-list {
    z-index: 1;
}

.page-alquiler .slick:before {
    content: '';
    position: absolute;
    top: 0px;
    right: 100%;
    width: 3000px;
    height: 100%;
    background: #323232;
}

.page-alquiler .slick:after {
    content: '';
    position: absolute;
    top: -20px;
    left: calc(50% - 125px);
    width: 220px;
    height: 290px;
    border: 4px solid #F9C02D;
}

.page-alquiler .slick-prev,
.page-alquiler .slick-next {
    width: 12px;
    height: 37px;
    left: 0px;
}

.page-alquiler .slick-next {
    left: auto;
    right: 40px;
}

.page-alquiler .slick-prev:before,
.page-alquiler .slick-next:before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: url(../png/arrow-slick.png);
    background-size: 12px;  
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
    opacity: .3;
}

.page-alquiler .slick-next:before {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}

.page-alquiler .slick-prev:hover:before,
.page-alquiler .slick-next:hover:before,
.page-alquiler .slick-prev:focus:before,
.page-alquiler .slick-next:focus:before {
    opacity: .5;
}   

.page-alquiler .slick .slick-slide:focus {
    outline: none;
}

.page-alquiler .slick span {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-line-pack: center;
    align-content: center;
    height: 150px;
    position: relative;
    top: 30px;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
    margin-bottom: 20px;
}

.page-alquiler .slick img {
    max-height: 60%;
    max-width: 70%;
    margin: 0 auto 15px;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
    position: relative;
}

.page-alquiler .slick .slick-current + .slick-active span {
    top: 0px;
}

.page-alquiler .slick .slick-current + .slick-active img {
    max-height: 90%;
    max-width: 90%;
}

.page-alquiler .slick h4 {
    color: #fff;
    font-size: 18px;
    line-height: 24px;
    font-weight: 600;
    opacity: 0;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
}

.page-alquiler .slick .slick-current + .slick-active h4 {
    opacity: 1;
}

.page-alquiler .content-header h1 {
    color: #fff;
    font-size: 34px;
    line-height: 47px;
    letter-spacing: -0.5px;
    margin: 0px 0px 15px;
}

.page-alquiler .content-header h2 {
    background: #323232;
    color: #fff;
    text-align: right;
    padding: 15px 20px;
    font-size: 28px;
    line-height: 34px;
    width: calc(100% + 120px);
    position: relative;
    right: 120px;
    margin: 0px 0px 20px;
}

.page-alquiler .content-header p {
    color: #fff;
    font-size: 20px;
    line-height: 29px;
    margin: 0px 0px 30px;
}

.page-alquiler .content-header p a {
    color: #fff;
    font-weight: 500;
    text-decoration: underline;
}

.page-alquiler #modal-cita {
    letter-spacing: 0px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.page-alquiler #modal-cita .form-group {
    margin-bottom: 10px;
}

.page-alquiler #modal-cita label {
    color: #524f42;
    font-size: 14px;
    line-height: 18px;
    font-weight: 600;
}

.page-alquiler #modal-cita .form-control {
    font-size: 14px;
    line-height: 28px;
    padding: 5px 10px;
    background: #fff;
}

.page-alquiler #modal-cita select.form-control {
    background: url(../png/arrow-down-gray.png) no-repeat;
    background-position: calc(100% - 10px) center;
    background-size: 10px;
}

.page-alquiler .box-picker div.datepicker {
    width: 250px;
}

.page-alquiler #modal-cita .checkbox {
    margin: 0px;
}

.page-alquiler #modal-cita .checkbox label {
    font-weight: 200;
}

.page-alquiler #modal-cita .checkbox .form-control {
    padding: 0px;
    line-height: 14px;
}

.page-alquiler #modal-cita .checkbox .has-error,
.page-alquiler #modal-cita .checkbox .has-error a,
.page-alquiler #modal-cita .checkbox .has-error .form-control {
    color: #CE0058;
}

.page-alquiler #modal-cita .has-error .form-control {
    border-color: #CE0058;
}

.page-alquiler .form-group label.disabled {
    opacity: .3;
}

.page-alquiler .form-group label.disabled + .form-control {
    opacity: .5;
}

.page-alquiler .btn-solid {
    /* margin: 0px; */
    margin: 15px 0 0 0;
    background: #CE0058;
    border-radius: 0px;
    font-weight: 700;
    padding: 15px;
    display: block;
    width: 100%;
    opacity: 1;
    color: #fff;
}

.page-alquiler .btn-solid img {
    width: 17px;
    margin-left: 5px;
    position: relative;
    left: 0px;
    -webkit-transition: .5s all ease;
    transition: .5s all ease;
}

.page-alquiler .btn-solid:hover img {
    width: 17px;
    margin-left: 5px;
    left: 5px;
}

.page-alquiler #modal-cita .row {
    margin: 0px -5px;
}

.page-alquiler #modal-cita .row > div {
    padding: 0px 5px;
}

.page-alquiler .box-ventajas {
    background: #1A1A1A;
    color: #fff;
    text-align: center;
    padding: 50px 0px 60px;
}

.page-alquiler .box-ventajas h3,
.page-alquiler .box-encuentra h3 {
    color: #fff;
    line-height: 47px;
    letter-spacing: -0.5px;
    font-size: 34px;
    font-weight: 200;
    max-width: 450px;
    margin: 0 auto 50px;
}

.page-alquiler .box-ventajas p {
    color: #fff;
    font-size: 20px;
    border-left: 4px solid #CE0058;
}

.page-alquiler .box-ventajas .bottom {
    display: block;
    margin: 50px 0px 0px;
}

.page-alquiler .box-ventajas .bottom a {
    color: #fff; 
}

.page-alquiler .box-ventajas .bottom a i {
    color: #CE0058;
    position: relative;
    top: 2px;
    left: 0px;
    font-weight: 800;
    font-size: 19px;
    margin-left: 3px;
    -webkit-transition: .3s all ease;
    transition: .3s all ease;
}

.page-alquiler .box-ventajas .bottom a:hover i {
    left: 3px;
}

.page-alquiler .box-ventajas .box-flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    padding: 0px 150px;
}

.page-alquiler .box-ventajas .box-flex span {
    display: block;
    width: 80px;
    height: 70px;
}

.page-alquiler .box-ventajas .box-flex .box:nth-child(1) img { width: 61px; }
.page-alquiler .box-ventajas .box-flex .box:nth-child(2) img { width: 54px; }
.page-alquiler .box-ventajas .box-flex .box:nth-child(3) img { width: 38px; }
.page-alquiler .box-ventajas .box-flex .box:nth-child(4) img { width: 42px; }

.page-alquiler .box-ventajas .box-flex p {
    max-width: 160px;
    text-align: left;
    padding-left: 10px;
}

.page-alquiler .box-ventajas .box-flex .box:nth-child(4) p { 
    max-width: 140px;
}

.page-alquiler .box-funciona {
    padding: 0px;
    position: relative;
}

.page-alquiler .box-funciona:before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 300px;
    background: #EEEEEE;
}

.page-alquiler .box-funciona .row > div:first-child {
    padding: 0px 120px 0px 30px;
}

.page-alquiler .box-funciona .content {
    background: #FECB43;
    padding: 0px 30px 30px;
}

.page-alquiler .box-funciona .content img {
    width: 510px;
    position: relative;
    top: -30px;
    left: -110px;
}

.page-alquiler .box-funciona .content p {
    font-size: 14px;
    letter-spacing: -0.4px;
    line-height: 22px;
    color: #3E3E3E;
    margin: 0px;
}

.page-alquiler .box-funciona .content p.title {
    font-size: 16px;
    font-weight: 700;
    margin: 0px 0px 5px;
}

.page-alquiler .box-funciona h3 {
    color: #454545;
    font-size: 34px;
    letter-spacing: -0.5px;
    line-height: 47px;
    font-weight: 200;
    margin: 52px 0px 50px;
}

.page-alquiler .box-funciona ul {
    padding: 90px 60px 70px 70px;
    background: #f85955; /* Old browsers */
    background: -moz-linear-gradient(-45deg, #f85955 0%, #ce0058 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(-45deg, #f85955 0%,#ce0058 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(135deg, #f85955 0%,#ce0058 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    margin: 0px;
    list-style: none;
    color: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    justify-content: space-between;
}

.page-alquiler .box-funciona ul li {
    width: 52%;
    position: relative;
    font-size: 18px;
    line-height: 29px;
}

.page-alquiler .box-funciona ul li:nth-child(1),
.page-alquiler .box-funciona ul li:nth-child(2) {
    margin-bottom: 50px;
}

.page-alquiler .box-funciona ul li:nth-child(1),
.page-alquiler .box-funciona ul li:nth-child(3) {
    width: 35%;
}

.page-alquiler .box-funciona ul li span {
    position: absolute;
    top: 5px;
    left: -25px;
    font-size: 100px;
    opacity: 0.15;
    font-weight: 800;
}

.page-alquiler .box-funciona ul li:nth-child(2) span,
.page-alquiler .box-funciona ul li:nth-child(4) span {
    left: -40px;
}

.page-alquiler .box-encuentra {
    background: #1B1B1B;
    text-align: center;
    padding: 120px 0px 60px;
    margin-top: -50px;
}

.page-alquiler .box-encuentra h3 {
    max-width: 650px;
    margin-bottom: 30px;
}

.page-alquiler .box-encuentra .btn-solid {
    max-width: 350px;
    margin: 0 auto;
}

/************************ PAGE GDPR ************************/

.page-gdpr p {
    font-size: 16px;
    font-weight: 200;
}

.page-gdpr .image {
    width: 70px;
    margin-bottom: 35px;
}

.page-gdpr .btn-degree {
    margin-top: 15px;
}

.page-gdpr .bottom {
    text-align: center;
}

.page-gdpr .message {
    display: none;
    text-align: center;
    color: <? echo  $conf['primario'];  ?>;
}

.page-gdpr.files p,
.page-gdpr.files ul li {
    line-height: 26px;
    margin-bottom: 10px;
    font-weight: 200;
}

.page-gdpr.files p a {
    white-space: pre;
    text-decoration: underline;
}

.page-gdpr.files p a:hover {
    color: <? echo  $conf['primario'];  ?>;
}

.page-gdpr.files ul.documentos {
    list-style: none;
    padding: 0px;
    margin: 40px auto 0px;
    max-width: 900px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.page-gdpr.files ul.documentos li {
    width: 33.33%;
}

.page-gdpr.files ul.documentos li a {
    display: inline-block;
    position: relative;
    padding-left: 35px;
    padding-right: 15px;
    margin-bottom: 10px;
    color: #666;
}

.page-gdpr.files ul.documentos li:last-child a {
    margin-bottom: 0px;
}

.page-gdpr.files ul.documentos li a:before {
    content: '\f1c1';
    position: absolute;
    top: -3px;
    left: 0px;
    font-family: 'fontAwesome';
    font-size: 22px;
    color: <? echo  $conf['primario'];  ?>;
}

.page-gdpr.files ul.documentos li a:hover {
    color: #0A0A0B;
}

.box-gdpr {
    margin: 30px auto 0px;
    max-width: 550px;
}

.box-gdpr table {
    width: 100%;
    display: block;
}

.box-gdpr table th,
.box-gdpr table td {
    padding: 5px;
    text-align: center;
    font-weight: 200;
    line-height: 20px;
    color: #3B3B3B;
}

.box-gdpr table th {
    font-size: 14px;
    color: #89898A;
    white-space: nowrap;
}

.box-gdpr table td:last-child {
    text-align: left;
    padding-left: 20px;
}

.box-gdpr table td a,
.box-gdpr table td strong {
    font-weight: 600;
}

.box-gdpr table td a:hover {
    color: <? echo  $conf['primario'];  ?>;
}

.box-gdpr input {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    position: relative;
    border: 1px solid #B3BDC7;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    outline: none;
    cursor: pointer;
}

.box-gdpr input:focus {
    outline: none;
}

.box-gdpr input:checked:before {
    content: '\f111';
    position: absolute;
    top: 2px;
    left: 3px;
    font-size: 14.5px;
    font-family: fontAwesome;
    background: 0 0;
    color: <? echo  $conf['primario'];  ?>;
}

.checks-gdpr {
    /* max-width: 380px; */
    margin: 0 auto !important;
}

.checks-gdpr .checkbox {
    margin-bottom: 4px;
}

.checks-gdpr .checkbox label {
    text-align: left;
    color: #7b7b7b;
    text-indent: -28px;
    padding-left: 28px;
}

.checks-gdpr .checkbox label a {
    letter-spacing: 0.6px;
    color: #333;
}

.checks-gdpr .checkbox label a:hover {
    color: <? echo  $conf['primario'];  ?>;
}

.checks-gdpr .checkbox label strong {
    font-weight: 500;
    color: #333;
}

.checks-gdpr .checkbox label.indentlabel {
    text-indent: 0;
 }

 .modal .checkbox .form-control + span{
    text-indent: 0;
}

.form-fix .slick {
    margin-top: 85px;
}

.form-fix #modal-cita label {
    line-height: 16px;
}

.form-fix .content-header h2 {
    line-height: 22px;
}