</header>
<style>


	
	.foto{background-color:#7396ff; overflow:hidden; position:relative;  width:100%;  height:300px; 
		;background: url(/img/800_<? echo $conf['backgroundimg']; ?>)  no-repeat center center ; 
							background-size: 100% 100%;
							  -webkit-background-size: cover;
							  -moz-background-size: cover;
							  -o-background-size: cover;
							  background-size: cover;
							 text-align: center; 
							  }
						  
	.titulocontacta {color: white; overflow:hidden; white-space: wrap;  text-shadow: 1px 1px 2px rgba(150, 150, 150, 1); position:relative; top: 40px; width:100%; text-align: center; font-size: 2em; }
	.subtitulocontacta {color: white;text-shadow: 1px 1px 2px rgba(150, 150, 150, 1); position:relative; top: 50px; width:100%; text-align: center; font-size: 1.1em; }
	
	
	.redondo{-webkit-border-radius: 30px;
-moz-border-radius: 30px;background-color: black;
border-radius: 30px;width:60px; height: 60px; padding:13px;border: 2px solid #ffffff; color:white; font-size:1em}
	
	
	.redondo i{font-size:1.3em; }
	
	.titulo {color: white; overflow:hidden;text-overflow: ellipsis;white-space: nowrap; height: 45px; text-shadow: 1px 1px 2px rgba(150, 150, 150, 1); position:absolute; top: 20px; width:100%; text-align: center; font-size: 2em; }
	.subtitulo {color: white;text-shadow: 1px 1px 2px rgba(150, 150, 150, 1); position:absolute; top: 70px; width:100%; text-align: center; font-size: 1.1em; }
	
	
	.fotoredonda { position:relative; top:100px;  width:140px; height:140px;border-radius: 50%; border: 3px solid #fdfdff;}
	.miurl {text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);color: white; position:absolute; top: 250px; width:100%; text-align: center; font-size: 1em; }
	.miurl a{color: white; }

</style>
<main  >
	<div >
	<div class="foto"  >
		<div class="titulocontacta">
			<? echo $conf['eslogan_largo']; ?>
		</div>
		<div class="subtitulocontacta">Contacto</div>
		<div style="position:relative; top:100px;">
			<div class="container">
				<div class=" col-xs-4 text-center">
					<a href="#nosotros" class="white-text">
						<center>
							<div class="redondo"><i class="fa fa-address-card  " aria-hidden="true"></i></div>
							<p style="color:white; text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);">Nosotros</p>
						</center>
					</a>
				</div>
				<div class="col-xs-4 center">
					<a href="#telefono" class="white-text">
						<center>
							<div class="redondo"><i class="fa fa-user" aria-hidden="true"></i></div>
							<p style="color:white; text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);">Teléfono</p>
						</center>
					</a>
				</div>
				<div class="col-xs-4 center">
					<a href="#contacto" class="text-white">
						<center>
							<div class="redondo"><i class="fa fa-envelope " aria-hidden="true"></i></div>
							<p style="color:white; text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);">Contacto</p>
						</center>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="pestana " id="nosotros">
		<? $sql = "SELECT id, titulo, foto, superior, activo, url,array2,  array AS ARR, (SELECT slug FROM contenido WHERE id=ARR) AS slug FROM contenido WHERE activo='1' AND tipo='menu-secundario'   ORDER BY superior, orden, titulo";
 			$result = mysqli_query($conex, $sql) or die("database error:". mysqli_error($conex));		
			while ($item = mysqli_fetch_assoc($result)) {
					echo " <a href='/".$item['slug']."'><span class='tabs ";
				if ($campo['slug']==$item['slug']) {echo "active";}
				echo "'> ".$item['titulo'] ."</span></a>  ";
				
			}
			?>

	</div>
	<section class="contenido" style="background-color:#f1f1f1;overflow:hidden;">
		<div class="container">
			<div class="row  ">
				<p>&nbsp;</p><p>&nbsp;</p>
				<div class=" col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4  col-xs-12   text-center">
					<div style="margin-bottom:21px;"><i class="fa fa-address-card-o " style="color: <? echo $conf['primario']; ?>;font-size:80px;"></i></div>
				</div>
				<div class=" col-lg-8 col-md-7 col-sm-8 col-xs-10 col-xs-offset-1">
					<h2 style="color: <? echo $conf['primario']; ?>;">Nosotros</h2>
						<p><? echo $conf['sobremi']; ?></p>
							<p>&nbsp;</p> 
					<p id="telefono">&nbsp;</p>
				</div>
			</div>
		</div>
	</section>
	<section class="contenido">
		<div class="container">
			<div class="row  ">
				<p>&nbsp;</p><p>&nbsp;</p>
				<div class=" col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4  col-xs-12   text-center">
					<div style="margin-bottom:21px;"><i class="fa fa-user-circle-o" style="color: <? echo $conf['primario']; ?>;font-size:80px;"></i></div>
				</div>
				<div class=" col-lg-8 col-md-7 col-sm-8 col-xs-10 col-xs-offset-1">
					<h2 style="color: <? echo $conf['primario']; ?>;">Teléfono</h2>
					<p>
						Puede contactar con nosotros mediante nuestro teléfono de atención al cliente:
					</p>
					<p><b><i class="fa fa-phone"></i> <a href="<? echo $conf['mobile']; ?>"><? echo $conf['phone']; ?></a></b></p>
<p>&nbsp;</p><p>&nbsp;</p>
</div>
</div>
</div>
</section>
<section class="contenido" id="contacto" style="background-color:#f1f1f1;">
<div class="container">
<div class="row  ">
<p>&nbsp;</p><p>&nbsp;</p>
<div class=" col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4  col-xs-12   text-center">
<div style="margin-bottom:21px;"><i class="fa fa-envelope " style="color: <? echo $conf['primario']; ?>;font-size:80px;"></i></div>
</div>
<div class="  col-lg-8 col-md-7 col-sm-8 col-xs-10 col-xs-offset-1">
<h2 style="color: <? echo $conf['primario']; ?>;">Formulario de contacto</h2>
	<p> Complete el siguiente formulario:</p>
	
	
	
	<? if ($conf['email']){ ?>
	 
	
<? if ($_POST['email']){
	echo '<div class="col-lg-10  col-md-12  col-sm-12  col-xs-12 alert alert-success" >';
	echo 'Su mensaje ha sido enviado correctamente.';
	echo '</div>';
	$para  = $_POST['email'] . ', '; // atención a la coma
	$para .= $conf['email'] ;

// título
$titulo = 'Formulario de contacto';

// mensaje
$mensaje = '
<html>
<head>
  <title>Formulario de contacto</title>
</head>
<body>
  <p>Su mensaje ha sido enviado correctamente. Datos enviados</p>
  <table>
    
   
       <tr><td>Nombre</td><td>'.$_POST['nombre'].'</td>  </tr>
			 <tr><td>Telefono</td><td>'.$_POST['telefono'].'</td>  </tr>
			 <tr><td>Correo</td><td>'.$_POST['email'].'</td>  </tr>
			 <tr><td>Mensaje</td><td>'.$_POST['mensaje'].'</td>  </tr>
   
   
  </table>
</body>
</html>
';
 
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: ' . $_POST['email'] . "\r\n";
$cabeceras .= 'From: ' . $conf['email'] . "\r\n";
 

// Enviarlo
mail($para, $titulo, $mensaje, $cabeceras);
}
	?>
	
<div class="col-lg-10  col-md-12  col-sm-12  col-xs-12 " id='formulario' >
<form method="POST">
 
<div class="form-group has-feedback">
<span>Nombre <sup class="text-red">*</sup></span>
<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
 
</div>
	<div class="form-group has-feedback">
<span>Teléfono <sup class="text-red">*</sup></span>
<input type="tel" class="form-control" name="telefono" placeholder="telefono" required>
 
</div>
<div class="form-group has-feedback">
<span>Correo <sup class="text-red">*</sup></span>
<input type="email" class="form-control" name="email" placeholder="Email" required>
 
</div>
<div class="form-group has-feedback">
<span>Mensaje <sup class="text-red">*</sup></span>
<textarea class="form-control" name="mensaje" placeholder="Mensaje"  required></textarea>
 
</div>
<div class="form-group has-feedback">
<span>
<input type="checkbox" name="robot" required> No soy un robot
</span>
</div>
<div class="row">
<div class="col-xs-12 pull-right">
	
	
<button type="submit" class="btn btn-primary btn-block btn-flat" id="boton">Enviar</button>
	<sup class="text-muted text-red">* Campos obligatorios</sup>
</div>
</div>


	</form>
	<? } ?>
	<p>&nbsp;</p>
	 
 
</diV>
 
 </div>
</div>
</div>
</section>
 
</div>
	
	<script>
	$("textarea").keyup(function(e) {
    while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
        $(this).height($(this).height()+20);
    };
});</script>
