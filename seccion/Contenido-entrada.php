<? 
 
 
 			

if (!$_GET['p']){$_GET['p']=1;}
$hasta=10;
$desde=($_GET['p'] * $hasta) - $hasta ;
 
 		$consultar="SELECT count(id) FROM contenido WHERE tipo='entrada' AND activo='1'  "; 
		$noticias = mysqli_query($conex, $consultar);
		$total = mysqli_fetch_array($noticias);
		$total_paginas = ceil($total[0]/ $hasta);
	 
	//REALIZAMOS LA CONSULTA DE ESTA PAGINA
	
$consultas="SELECT * FROM contenido WHERE tipo='entrada' AND activo='1'   ORDER BY orden, fecha DESC, act DESC LIMIT ".$desde.", ".$hasta.";; ";
				
 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;$b++;
 ?>
	 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        	<div class="blog-post-box">
                            	<!--- image -->
														
														
																<? if ($contenido['video']){ ?> 
									<figure> <a href="/<? echo $contenido['slug']; ?>"> <img src="https://img.youtube.com/vi/<? echo $contenido['video']; ?>/hqdefault.jpg" alt="blogimg"></a></figure>
											 
												
												<? }else{ ?>
														
														<figure> <a href="/<? echo $contenido['slug']; ?>"> <img src="/img/600_<? echo $contenido['foto']; ?>" alt="blogimg"></a></figure>
												 
											
											<? } ?>
                            	
                                <div class="blog-post-content">
                                    <!--- admin details
                                    <ul>
                                        <li> By Admin &nbsp; &nbsp;|</li>
                                        <li> (20) Comments </li>
                                    </ul> -->
                                    <!--- title -->
                                    <a href="/<? echo $contenido['slug']; ?>">
                                    <h4><? echo $contenido['titulo']; ?></h4>
                                    </a>
                                    <!--- date -->
                                    <span><?  echo utf8_encode (strftime("%A %d de %B del %Y", strtotime($contenido['fecha']))); ?></span>
                                    <!--- paragraph -->
                                    <p><? echo $contenido['description']; ?> </p>
								</div>
                            </div>
                            <a class="blog-more-button" href="/<? echo $contenido['slug']; ?>">Leer más </a>
                    	</div>


 
			 
			
				
	
		<?
			}	 
		//PAGINACION
	$pagina=$_GET['p'];
	echo '<div class="col-xs-12   grid-item" 		>';
		if ($total_paginas > 1) {
   if ($pagina != 1)
      echo '<a href="/'.$campo['slug'].'/'.($pagina-1).'" class="btn btn-xs btn-default"><i class="fa fa-arrow-left" style="margin:1px;"></i></a>';
      for ($i=1;$i<=$total_paginas;$i++) {
         if ($pagina == $i)
            //si muestro el índice de la página actual, no coloco enlace
            echo '<a href="/'.$campo['slug'].'/'.($pagina).'" class="btn btn-xs btn-info" style="margin:1px;">'.$pagina.'</a>';
         else
            //si el índice no corresponde con la página mostrada actualmente,
            //coloco el enlace para ir a esa página
					  echo '<a href="/'.$campo['slug'].'/'.($i).'" class="btn btn-xs btn-default" style="margin:1px; "> '.$i.'</a>';
				
            
      }
      if ($pagina != $total_paginas)
          echo '<a href="/'.$campo['slug'].'/'.($pagina+1).'" class="btn btn-xs btn-default" style="margin:1px;"><i class="fa fa-arrow-right"></i></a>';
}
		
		echo "</div>";
		
	
				
				if ($a==0){include ('buscar.php'); }
				
				?>						
						
						
					
	</div>
	
	 




