<div class="box-services">
	<div class="row ">

<?   $consulta="SELECT * FROM contenido WHERE subtipo='Foto' AND activo='1' AND superior='".$seccion['id']."' ORDER BY orden";
		$sqlitem=mysqli_query($conex,$consulta);
		$a=0;
		$urlfoto= array ();
		while ($item=mysqli_fetch_array($sqlitem)){ $a++;
																							 
		$urlfoto[$a]="/img/".$item['foto'];
																							 
		if ($a==1 || $a==4 || $a==5  ) {
		
		
		
		?>


		<div class="col-xs-12 col-sm-6" >
			<div class="content middle" >
				<span class="option"><? echo $item['titulo']; ?></span>
				<span class="title"><? echo $item['enlace']; ?></span>
				<h2><strong><? echo $item['titulo']; ?></strong><? echo $item['subtitulo']; ?></h2>
				<p> </p>
				<a href="<? echo $item['url']; ?>"   class="btn btn-border btn-go"  >
					<span><span>Visitar <i class="fa fa-arrow-right"></i> </span></span>
                        <span>Visitar <i class="fa fa-arrow-right text-white"></i></span>
                    </a>
			</div>
		</div>
		<? } else { ?> 
		<div class="col-xs-12 col-sm-6 ">
			<div class="content middle">
				<span class="option"><? echo $item['titulo']; ?></span>
				<span class="title"><? echo $item['enlace']; ?></span>
				<h2><strong><? echo $item['titulo']; ?></strong> <? echo $item['subtitulo']; ?></h2>
				<p> </p>
				<a href="<? echo $item['url']; ?>" class="btn btn-border btn-go" >
                        <span><span> Visitar <i class="fa fa-arrow-right tex-white"></i></span></span>
                        <span>Visitar <i class="fa fa-arrow-right"></i></span>
                    </a>
			</div>
		</div>
		 
	<? } ?>
	 

 
	<? }   ?>
				 
	</div>
</div>
 </header>
<style>
	
	 
	 
 
.header-home .box-services .row > div:nth-child(1):before {
    background: url(<? echo $urlfoto[1]; ?>) no-repeat;
    background-size: 200px;
    background-position: 90% 110px;
	filter: alpha(opacity=60);
  filter: progid: DXImageTransform.Microsoft.Alpha(opacity=60);
  -moz-opacity: 0.60;
  opacity: 0.6;
 
}


	.header-home .box-services .row > div:nth-child(2):before {
    background: url(<? echo $urlfoto[2]; ?>) no-repeat;
    background-size: 200px;
    background-position: 90% 110px;	filter: alpha(opacity=60);
  filter: progid: DXImageTransform.Microsoft.Alpha(opacity=60);
  -moz-opacity: 0.60;
  opacity: 0.6;
}
	.header-home .box-services .row > div:nth-child(3):before {
    background: url(<? echo $urlfoto[3]; ?>) no-repeat;
    background-size: 263px;
    background-position: 90% 110px;	filter: alpha(opacity=60);
  filter: progid: DXImageTransform.Microsoft.Alpha(opacity=60);
  -moz-opacity: 0.60;
  opacity: 0.6;
}
	.header-home .box-services .row > div:nth-child(4):before {
    background: url(<? echo $urlfoto[4]; ?>) no-repeat;
    background-size: 263px;
    background-position: 90% 110px;	filter: alpha(opacity=60);
  filter: progid: DXImageTransform.Microsoft.Alpha(opacity=60);
  -moz-opacity: 0.60;
  opacity: 0.6;
}
	
	
 	
	
</style>
<main class="page-content home-page home-services">