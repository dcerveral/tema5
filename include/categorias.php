<?

	//calculaos total temas (productos)

	$consulta="select count(id) FROM contenido WHERE tipo='producto' and activo='1' ;";
	$slq= mysqli_query($conex,$consulta);
	$totaltemas=mysqli_fetch_array($slq);

	 
	 
?>



</header>
<main class="page-content " style="background-color: #FAFAFA;" >
<style>
	.box-footer{font-family:Montserrat;font-size:10px;}
	.box {background-color: white; border: 1px solid #FEFEFE;}
	.box-header{font-family:Montserrat; padding:10px;font-size:14px;white-space: nowrap; overflow: hidden; text-overflow: ellipsis; color: #5e5e6c}
	.activo {font-weight: 100;}
.containerinsta{width:80%; padding:0px; margin-left:10%; padding-top:60px; }
	.containerinsta strong{border-bottom:1px solid #424251; }
	
	.marginbottom20{margin-bottom:25px;}
	.imginsta{width:140px;height:140px;border: 1px solid #e8e8e8}
	.titinsta{font-size:1.8em; font-family:Montserrat;}
	.btninsta{font-size:14px;font-family:Montserrat;;color:white; padding: 3px 10px 3px 10px;  background-color:<? echo $conf['primario']; ?>;border-radius: 2px 2px 2px 2px;
-moz-border-radius: 2px 2px 2px 2px;
-webkit-border-radius: 2px 2px 2px 2px;position:relative;top:-3px;}
	.btninsta:hover{color:white;background-color:<? echo $conf['secundario']; ?>;}
	.divfotosinsta{margin-top:150px;}
	.ainsta{font-size:14px;color:black; font-family:Montserrat;letter-spacing: 0;}
	.ainsta:hover{color:#0052A4;}
	.instadescripcion {font-family:Montserrat;letter-spacing: 0;line-height:16px;font-size:14px;margin-top:5px;margin-bottom:5px;}
	
	
	@media (min-width : 600px) AND (max-width : 1100px) {
		.containerinsta{width:96%; padding:0px; margin-left:2%; padding-top:40px; }
		.imginsta{width:110px;height:110px;}
		.titinsta{font-size:18px;}
		.marginbottom20{margin-bottom:20px;}
		btninsta{  width:100%;padding:3px;   }
		}
	 
	
	  @media (max-width : 600px) {
		.containerinsta{width:100%; padding:0px; margin:0px; padding-top:20px; }
		.imginsta{width:80px;height:80px;}
		.titinsta{font-size:16px; }
		 .instadescripcion { font-size:14px; }
		.btninsta{  width:100%;padding:3px;   }
		.ainsta{font-size:12px;;color:black;}
		.marginbottom20{margin-bottom:1px;}
			.xs100{width:100%;}
			.pad0{padding:0px;}
	 }
	 
	 
	
	
</style>
<div class="containerinsta "  >
	
<div class="col-xs-4 text-center">
	 
		 <img class="img-circle imginsta" src="/img/200_<? echo $conf['logoc']; ?>" onerror="this.style.display='none'" >
	  
	</div>
	<div class="col-xs-8">
	
		<div class="titinsta">  <? echo $conf['eslogan_corto']; ?> 
			<a href="/<? echo $contacto['slug']; ?>" class="  btninsta">  <? echo $contacto['titulo']; ?></a>
		</div>
		<div class="hidden-xs" style=" margin-top:15px;">
	 
				<div class="col-xs-4 <? if ($campo['slug']=="tienda") {echo "activo"; } ?>"> 
									
						<a href="/tienda" class="ainsta"  >
							<span ><? echo $totaltemas[0]; ?></span>
						  Productos  <i class="fa fa-ellipsis-v" style="color:#424251"></i></a>
					
			</div>
				<div class="col-xs-4 <? if ($campo['slug']=="vinos") {echo "activo"; } ?>"> 
									
						<a href="/vinos" class="ainsta"  >
							<span ><i class="fa fa-glass"></i> </span>
						  Vinos  <i class="fa fa-ellipsis-v" style="color:#424251"></i></a>
					
			</div>
			
			
			
			
			<div class="col-xs-4   <? if ($campo['slug']=="vinedos") {echo "activo"; } ?>"> 
									
						<a href="/vinedos" class="ainsta"  >
						
						  <span ><i class="fa fa-leaf"></i> </span> Viñedos  <i class="fa fa-ellipsis-v" style="color:#424251"></i></a>
					
							</div>
			
			
		 
			 		</div>
		<div class="col-xs-12 hidden-xs ">
		
		
		  <div class="instadescripcion ">
					 Consulte nuestro catálogo  y nuestros vinos
				</div>
	 
					</div>
		
	</div>
 	
	<div class="col-xs-12  hidden-sm  hidden-lg  hidden-md" style="clear:both;margin-top:20px;">
	
	 
				   <div class="instadescripcion ">
						  Consulte nuestro catálogo  y nuestros vinos
					 
				</div>
		 
		
		<div style="border-top:1px solid #eeeeee;border-bottom:1px solid #eeeeee;padding: 10px 0px 10px 0px;overflow:hidden;margin-top:10px;margin-bottom: 0px;text-align:center">
			<div class="col-xs-4 truncate <? if ($campo['slug']=="productos") {echo "tienda"; } ?>"> 
									
						<a href="/tienda" class="ainsta"  >
							<span ><? echo $totaltemas[0]; ?></span><br>
						  Productos  <i class="fa fa-ellipsis-v" style="color:#424251"></i></a>
					
					
							</div>
			<div class="col-xs-4 truncate <? if ($campo['slug']=="vinos") {echo "activo"; } ?>"> 
		 <a href="/vinos" class="ainsta"  >
							<span ><i class="fa fa-glass"></i></span><br>
						  Vinos <i class="fa fa-ellipsis-v" style="color:#424251"></i></a>
					
							</div>
			<div class="col-xs-4 truncate  <? if ($campo['slug']=="vinedos") {echo "activo"; } ?>"> 
									
						<a href="/vinedos" class="ainsta"  >
							<span ><i class="fa fa-leaf"></i></span><br>
						  Viñedos <i class="fa fa-ellipsis-v" style="color:#424251"></i></a>
					
							</div>
		 	</div>
		
	</div>
	<div style="clear:both;"></div>
	
	 <div class="divfotosinsta grid  std" style=" ;padding:0px; margin:0px; margin-top:40px;">			 
			 
			 
			<?  
		 
	if ($campo['slug']=="tienda"){ 	 
		 
$p=$_GET['p'];
if (!$p){$p=1;}
$items=20;
$limit=($p * $items) - $items;

if ($campo['id']){$SQLID="and superior='".$campo['id']."'";}
$SQLTIPO="(tipo='categoria' OR tipo='pagina' OR tipo='entrada' OR tipo='producto' ) ";				
if ($_GET['TIPO']){$SQLTIPO=" tipo='".$_GET['TIPO']."' ";}
				
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' $SQLID  ORDER BY tipo, orden LIMIT $limit,$items; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;
		$b++;
		
		
		if ($campo['slug']=="catalogo") {$url=$contenido['url'];}
		 
		 else {
			 
			 $contenido['url']=str_replace(array('http://','https://','www.'),'',$contenido['url']);
			 $contenido['url']=str_replace('.','-',$contenido['url']);
			 
			 $url="https://themes.esepress.com/".$contenido['url'];}
		 
		 ?>
 
			
						 
			 
			 <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6  grid-item"  style="margin-bottom:30px;">
				<a href="/<? echo $contenido['slug']; ?>">
				<div class="box box-widget" style="width:100%;">
					<div class="box-header with-border">
					 
						 
								<? echo $contenido['titulo']; ?>				 
						
					</div> 
					<div class="box-body" style="padding:0px;text-align:center; width:100%;  border:1px solid #eeeeee; cursor: zoom-in ; "> 
				 <img src="/img/300_<? echo $contenido['foto']; ?>" class="img-responsive" style="width:100%">
					  
					</div> 
					  <a href="/<? echo $contenido['slug']; ?>" class="btninsta " style="margin-5px; float:right; width:100%; text-align: center"><i class="fa fa-shopping-bag"></i> <? echo $contenido['pvp']; ?> &euro; </a>
				</div>
				 </a>
			 </div>
			 
		 	<?  
	}
				
			 	if ($a==0){include ('buscar.php'); }
	} 

	 ?>
	</div>		<!-- fotos -->
	 
		
 
 
 
  
	 
 
 
  </div>
</div>
 
 
 


	<div style="clear:both;">
		<p>
			&nbsp;
		</p>
</div>
	 
 
<div style="clear:both;">
		<p>
			&nbsp;
		</p>
</div>