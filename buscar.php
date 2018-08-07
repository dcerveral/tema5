

<?
 
		//CALCULAMOS PÁGINAS
		if (!$_GET['p']){$_GET['p']=1;}
		$hasta=10;
		$desde=($_GET['p'] * $hasta) - $hasta ;
 
 		$consultar="SELECT count(id) FROM contenido  WHERE  activo='1' AND   tipo='entrada'   ";
		$noticias = mysqli_query($conex, $consultar);
		$total = mysqli_fetch_array($noticias);
		$total_paginas = ceil($total[0]/ $hasta);
	
	
$consultas="SELECT *,MATCH (titulo,subtitulo,description) AGAINST ('%".$_POST['s']."%') AS ORDENAR FROM contenido WHERE  activo='1' AND   tipo='entrada'      ORDER BY ORDENAR DESC, fecha DESC, orden , act DESC LIMIT  ".$desde.", ".$hasta."; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;
 ?>
				<div class='col-md-6 col-lg-6 grid-item '>
                <div class="box box-widget" style="width:100%; margin-bottom:15px;margin-top:15px;">
                  <div class="box-header with-border"> <span class="description text-muted "><i class="btn fa fa-calendar"></i><?  echo utf8_encode (strftime("%A %d de %B del %Y", strtotime($contenido['fecha']))); ?>
 
 </span>
                    <div class="box-tools"> <a class="btn dropdown-toggle " data-toggle="dropdown"><i class="fa fa-ellipsis-v" style="color:#aeaeae"></i> </a>
                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a class="dropdown-header" href="/<? echo $contenido['slug']; ?>">Leer m&aacute;s</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="box-body" style="padding:0px;">
                    <a href="/<? echo $contenido['slug']; ?>">
                      <h3 class="pad " style="margin-top:0px;word-wrap: break-word; color: #858596"><? echo $contenido['titulo']; ?></h3>
                      <div style="width:100%; text-align: center;">
												
												<? if ($contenido['video']){ ?> 
												<img style="max-width:100%;text-align: center;" alt="<? echo $contenido['titulo']; ?>" src="https://img.youtube.com/vi/<? echo $contenido['video']; ?>/hqdefault.jpg" onerror="this.style.display='none'">
												
												<? }else{ ?>
												<img style="max-width:100%;text-align: center;" alt="<? echo $contenido['titulo']; ?>" src="/img/600_<? echo $contenido['foto']; ?>" onerror="this.style.display='none'">
											
											<? } ?>
											</div> 
											 
											
                    </a>
                    <p class="pad"><? echo $contenido['description']; ?><a href='/<? echo $contenido['slug']; ?>'> </a></p>
                  </div>
                  <div class="box-footer"><a href="index.html" style="font-size:11px;"><? echo $conf['eslogan_corto']; ?></a><a href="/<? echo $contenido['slug']; ?>" class=" pull-right" style="font-size:11px;">Leer m&aacute;s<i class="fa fa-long-arrow-right"></i></a></div>
                </div>
	 </div>
	 
		 
						
		<? }
				
	 	//PAGINACION
	$pagina=$_GET['p'];
	echo '<div class="col-xs-12   grid-item" 		>';
		if ($total_paginas > 1) {
   if ($pagina != 1)
      echo '<a href="/buscar/'.($pagina-1).'" class="btn btn-xs btn-default"><i class="fa fa-arrow-left" style="margin:1px;"></i></a>';
      for ($i=1;$i<=$total_paginas;$i++) {
         if ($pagina == $i)
            //si muestro el índice de la página actual, no coloco enlace
            echo '<a href="/buscar/'.($pagina).'" class="btn btn-xs btn-info" style="margin:1px;">'.$pagina.'</a>';
         else
            //si el índice no corresponde con la página mostrada actualmente,
            //coloco el enlace para ir a esa página
					  echo '<a href="/buscar/'.($i).'" class="btn btn-xs btn-default" style="margin:1px; "> '.$i.'</a>';
				
            
      }
      if ($pagina != $total_paginas)
          echo '<a href="/buscar/'.($pagina+1).'" class="btn btn-xs btn-default" style="margin:1px;"><i class="fa fa-arrow-right"></i></a>';
}
		
		echo "</div>";
				?>	
	
			</div>
		</div>
<div style="clear:both;"></div>

		</div>
 

		</section>
	</div>
</div>
</div>
</div>
</div>