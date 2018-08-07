  <section class="box-content box-categorias">
        <div class="container">
            <h2 style="color: <? echo $conf['primario']; ?>"><? echo $seccion['titulo']; ?></h2>
            <div class="slick">
               
                  
           
				<? 
 

 
$SQLTIPO="(tipo='".$seccion['array2']."' ) ";				

				
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' and  (id='0' $SQL) ORDER BY tipo, orden LIMIT  ".$seccion['array3']."; ";
			 
 
				
$sql=mysqli_query($conex,$consultas);
	 
	while ($contenido=mysqli_fetch_array($sql)){
	 		if ($contenido['url']){$contenido['slug']=$contenido['url'];}else{$contenido['slug']="/".$contenido['slug'];}
 ?>
							  <div  ><a href="<? echo $contenido['slug']; ?>"  >
                    <span><img src="/img/400_<? echo $contenido['foto']; ?>" ></span><? echo $contenido['titulo']; ?>
                </a></div>
																
					<?   }
				
				if ($a==0){include ('buscar.php'); }
				
				?>											
	 
  </div>
        </div>
    </section>