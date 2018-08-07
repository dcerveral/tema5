</header> 
<section class="box-content box-conocelas">
        <div class="container">
            <h3><? echo $seccion['titulo']; ?></h3>
            <p><? echo $seccion['subtitulo']; ?></p>
        </div>  
        <ul>
           
          
  
				<? 
 

 
$SQLTIPO="(tipo='".$seccion['array2']."' ) ";				

				
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' and  (id='0' $SQL) ORDER BY tipo, orden LIMIT  ".$seccion['array3']."; ";
				
 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;
		if ($contenido['url']){$contenido['slug']=$contenido['url'];}else{$contenido['slug']="/".$contenido['slug'];}
		
		?>
					
					 <li><a href="<? echo $contenido['slug']; ?>" 
                   style="background-image: url(/img/400_<? echo $contenido['foto']; ?>);"><span><? echo $contenido['titulo']; ?></span></a></li>
		
								
									
																
					<? }  ?>
					<li style="display:none;"></li>
				  </ul>
				
			<?	if ($a==0){include ('buscar.php'); }
				
				?>											
	  </section>							
	 
	 
	 
	 




 

										
						