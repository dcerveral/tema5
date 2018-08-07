</header>

<main class="page-content home-page home-services">

	<div class="main-container col1-layout">
		<div class="main-before-top-container"></div>
		<div class="main container">
			<div class="inner-container">



				<div class="preface">
					<p>
						&nbsp;
					</p>
				</div>

				<div id="messages_product_view">
				</div>

				<div class="product-view" itemscope itemtype="http://schema.org/Product">

          <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
            &nbsp;
          </div>

           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
             <div class="product-name">
              <h1 itemprop="name">
                <? echo $campo['titulo']; ?>
              </h1>
            </div>
          </div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">


						<div class="img-box img-box-style1">




							<p class="product-image zoom-inside" style="max-width: 1000px;">

								<a href="https://themes.esepress.com/<? echo $campo['slug']; ?>" class="cloud-zoom product-image-gallery" id="zoom1" rel="position:'inside',showTitle:false,lensOpacity:0.5,smoothMove:3,zoomWidth:427,zoomHeight:275,adjustX:0,adjustY:0">

								
                <img id="image-main"                     class="img-responsive"                     src="/img/800_<? echo $campo['foto']; ?>"
                    alt="<? echo $campo['titulo']; ?>"
					 
                    itemprop="image" />
            </a>



							</p>





						</div>



					</div>
				</div>
				
					<div class="col-lg-8 col-md-8 col-sm-8  col-xs-12">
				<div class="view-product-desc">
					
					<div class="product-primary-column product-shop ">

						<div class="product-desc-first">
							<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
								<div class="product-type-data">

								 






									<p class="availability in-stock">
										<? echo $campo['descripcion']; ?>
									</p>
									<meta itemprop="availability" content="http://schema.org/InStock">
								</div>

								<meta itemprop="priceCurrency" content="EUR" />
								<meta itemprop="price" content="30" /> </div>
							<div class="add-to-box">
								<div class="add-to-cart left-side">
									<a class="btn btn-success pull-right" href="/<? echo $contacto['slug']; ?>"> <span><i class="fa fa-shopping-bag"></i> <? echo $campo['pvp']; ?> &euro;</span></a>
								</div>





							</div>










						</div>
					 


					</div>

				</div> 
			</div>
		</div>
	</div>
	</div>

	<div class="preface">
		<p>
			&nbsp;
		</p>
	</div>