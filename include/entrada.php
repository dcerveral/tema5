
<section  class="site-about-app left-heading section-grey" style="margin-top:40px; margin-bottom:50px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
					
                    <div class="about-half-colom-section">
    	            	<!-- H1 HEADING -->
	                    <h1><? echo $campo['titulo']; ?></h1>    
                        <div class="about-half-colom-section-content">
                        	<p><? echo $campo['descripcion']; ?>

                            </p>
                            
                            
                            
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                	<div class="about-half-colom-section-image wow fadeInRight" data-wow-duration="2s">
										
											<? if ($campo['video']){ ?>
				<div class="embed-responsive embed-responsive-16by9"> <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<? echo $campo['video']; ?>?autoplay=1&rel=0&modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> </div>
				<? } else { ?>
					<img  alt="<? echo $campo['titulo']; ?>" src="/img/800_<? echo $campo['foto']; ?>" onerror="this.style.display='none'" style="-webkit-transform: rotate(-3deg);
	-moz-transform: rotate(-3deg);
	rotation: -3deg;">
				
				<? } ?>
										
						 
                  
									
									
				<div style="text-align: left;">
							<p>
								&nbsp;</p><p>
								&nbsp;</p><p>
								&nbsp;</p>
					
				 <strong>
					Nuestro Blog
					</strong>	
						<?
		 

						 
		 $consulta ="SELECT titulo,slug,tipo FROM contenido WHERE  tipo='entrada'  AND activo='1' and id!='".$campo['id']."'  ORDER BY act DESC  LIMIT 10";
 
 
  
 
		 
 			$sql=mysqli_query($conex,$consulta);
					while ($entrada=mysqli_fetch_array($sql)){
						if ($entrada['titulo']){
							echo "<p  > - <a style='color:#7A7B7C' href='/".$entrada['slug']."'>".$entrada['titulo']."</a></p>";
						}
					}
			 
			 
 
 

?>
					</div>				
							  </div>		
                </div>
            </div>
        </div>
    </section>

 
 

 
   

