<?php
$link11 = mysqli_connect("localhost", "c1351312_web", "gepevoGE92");// se conecta con el servidor
mysqli_select_db($link11, "c1351312_web");// selecciona la base de datos
$tildes11 = $link11->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result11= mysqli_query($link11, "SELECT * FROM arancelesObraSocial_tbl ORDER BY idArancelesObraSocial DESC"); 
mysqli_data_seek ($result11, 0);
$extraido11= mysqli_fetch_array($result11); 
$totalRows_result11= mysqli_num_rows($result11);
?>
<?php
$link12 = mysqli_connect("localhost", "c1351312_web", "gepevoGE92");// se conecta con el servidor
mysqli_select_db($link12, "c1351312_web");// selecciona la base de datos
$tildes12 = $link12->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result12= mysqli_query($link12, "SELECT * FROM serviciosAsesores_tbl ORDER BY idServiciosAsesores DESC"); 
mysqli_data_seek ($result12, 0);
$extraido12= mysqli_fetch_array($result12); 
$totalRows_result12= mysqli_num_rows($result12);
?>
<?php
$link13 = mysqli_connect("localhost", "c1351312_web", "gepevoGE92");// se conecta con el servidor
mysqli_select_db($link13, "c1351312_web");// selecciona la base de datos
$tildes13 = $link13->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result13= mysqli_query($link13, "SELECT * FROM requisitosMatricularse_tbl ORDER BY idRequisitosMatricularse DESC"); 
mysqli_data_seek ($result13, 0);
$extraido13= mysqli_fetch_array($result13); 
$totalRows_result13= mysqli_num_rows($result13);
?>

<?
if (!$_GET) { ?>
	<script type="text/javascript">
		window.location="psicologo.php?pagina=1";
	</script> 
<? } ?>
<?
$noticiasPorPagina = 6;
$iniciar = ($_GET['pagina']-1)*$noticiasPorPagina;
?>

<?
//$iniciar = 0
?>

<?php
$link140 = mysqli_connect("localhost", "c1351312_web", "gepevoGE92");// se conecta con el servidor
mysqli_select_db($link140, "c1351312_web");// selecciona la base de datos
$tildes140 = $link140->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result140 = mysqli_query($link140, "SELECT * FROM beneficios_tbl");
$extraido140= mysqli_fetch_array($result140); 
$totalRows_result140= mysqli_num_rows($result140);
?>


<?php
$link14 = mysqli_connect("localhost", "c1351312_web", "gepevoGE92");// se conecta con el servidor
mysqli_select_db($link14, "c1351312_web");// selecciona la base de datos
$tildes14 = $link14->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result14 = mysqli_query($link14, "SELECT * FROM beneficios_tbl ORDER BY idBeneficios DESC LIMIT ".$iniciar.",2");
$extraido14= mysqli_fetch_array($result14); 
$totalRows_result14= mysqli_num_rows($result14);
?>

<? $iniciar2= $iniciar+1; ?>

<?php
$link15 = mysqli_connect("localhost", "c1351312_web", "gepevoGE92");// se conecta con el servidor
mysqli_select_db($link15, "c1351312_web");// selecciona la base de datos
$tildes15 = $link15->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result15 = mysqli_query($link15, "SELECT * FROM beneficios_tbl ORDER BY idBeneficios DESC LIMIT ".$iniciar2.",2");
$extraido15= mysqli_fetch_array($result15); 
$totalRows_result15= mysqli_num_rows($result15);
?>

<? $iniciar3= $iniciar2+1; ?>

<?php
$link16 = mysqli_connect("localhost", "c1351312_web", "gepevoGE92");// se conecta con el servidor
mysqli_select_db($link16, "c1351312_web");// selecciona la base de datos
$tildes16 = $link16->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result16 = mysqli_query($link16, "SELECT * FROM beneficios_tbl ORDER BY idBeneficios DESC LIMIT ".$iniciar3.",2");
$extraido16= mysqli_fetch_array($result16); 
$totalRows_result16= mysqli_num_rows($result16);
?>



<? $iniciar4= $iniciar3+1; ?>

<?php
$link17 = mysqli_connect("localhost", "c1351312_web", "gepevoGE92");// se conecta con el servidor
mysqli_select_db($link17, "c1351312_web");// selecciona la base de datos
$tildes17 = $link17->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result17 = mysqli_query($link17, "SELECT * FROM beneficios_tbl ORDER BY idBeneficios DESC LIMIT ".$iniciar4.",2");
$extraido17= mysqli_fetch_array($result17); 
$totalRows_result17= mysqli_num_rows($result17);
?>

<? $iniciar5= $iniciar4+1; ?>

<?php
$link18 = mysqli_connect("localhost", "c1351312_web", "gepevoGE92");// se conecta con el servidor
mysqli_select_db($link18, "c1351312_web");// selecciona la base de datos
$tildes18 = $link18->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result18 = mysqli_query($link18, "SELECT * FROM beneficios_tbl ORDER BY idBeneficios DESC LIMIT ".$iniciar5.",2");
$extraido18= mysqli_fetch_array($result18); 
$totalRows_result18= mysqli_num_rows($result18);
?>


<? $iniciar6= $iniciar5+1; ?>

<?php
$link19 = mysqli_connect("localhost", "c1351312_web", "gepevoGE92");// se conecta con el servidor
mysqli_select_db($link19, "c1351312_web");// selecciona la base de datos
$tildes19 = $link19->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result19 = mysqli_query($link19, "SELECT * FROM beneficios_tbl ORDER BY idBeneficios DESC LIMIT ".$iniciar6.",2");
$extraido19= mysqli_fetch_array($result19); 
$totalRows_result19= mysqli_num_rows($result19);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<title>Colegio de Psicólogos San Juan</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css"> 
<link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
<link rel="stylesheet" href="assets/css/owl.css">
<link rel="stylesheet" href="assets/css/lightbox.css">
<link rel="stylesheet" href="assets/css/Estilo-Web5.css">
<!--  

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->

<style>
/********************************************************************************
********************************************************************************/
.fondo {
width: 100%;
height: 750px;
background-color: #DEE7F7; /* La imagen no se repite */
background-image: url("assets/images/pieSoyPsicologo.png"); /* Ruta de la imagen */
/*background-image: url("assets/images/footer-bg.png"); /* Ruta de la imagen */
background-size: cover; /* La imagen se ajusta al contenedor */
background-position: center; /* La imagen se posiciona en el centro */
background-repeat: no-repeat; /* La imagen no se repite */
z-index: 1;
}
.fondoSMART {
width: 100%;
height: 300px;
background-color: #E7E1C9; /* La imagen no se repite */
background-image: url("assets/images/pieProfesional.png"); /* Ruta de la imagen */
/*background-image: url("assets/images/footer-bg.png"); /* Ruta de la imagen */
background-size: cover; /* La imagen se ajusta al contenedor */
background-position: center; /* La imagen se posiciona en el centro */
background-repeat: no-repeat; /* La imagen no se repite */
z-index: 1;
}
.colorFondo {
background-color: #FFD768
}

.celeste {
background-color: #DEE7F7
}
}
</style>
<script>
function ocultarContenedor(id) 
{
	if (!document.getElementById) 
		return false;
	fila = document.getElementById(id);
	if (fila.style.display = "") 
		fila.style.display = "none"; //ocultar
	else 
		fila.style.display = "none"; //ocultar
}
function mostrarContenedor(id) 
{
	if (!document.getElementById) 
		return false;
	fila = document.getElementById(id);
	if (fila.style.display = "none") 
		fila.style.display = ""; //mostrar
	else 
		fila.style.display = ""; //mostrar
}
</script>

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

</head>

<body>  

  <!-- ***** Header Area Start ***** -->
  <header class="celeste header-area header-sticky">
      <div class="container">
          <div class="row">  
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="10.php" class="logo">
						  <img src="assets/images/logoColegio.png" alt="Colegio Psicólogos de San Juan">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li class="separacionItemMenu"><a href="profesional.php"><font color="#000000">PROFESIONAL</font></a></li> 
							<li class="has-sub">
								<a href="javascript:void(0)"><font color="#000000">PSICOLOGOS ONLINE</font></a>
								<ul class="sub-menu">
									<li><a href="resultadoConsulta.php?especialidad=<? echo "Ingles" ?>"><font color="#000000">Inglés</font></a></li>
									<li><a href="resultadoConsulta.php?especialidad=<? echo "Español" ?>"><font color="#000000">Español</font></a></li>
								</ul>
							</li>
							<li class="separacionItemMenu"><a href="recursos.php"><font color="#000000">MAS RECURSOS</font></a></li>
							<li class="separacionItemMenu"><a href="institucional.php"><font color="#000000">INSTITUCIONAL</font></a>
							<li class="separacionItemMenu"><a href="https://psicologos-consultorio.web.app/"><font color="#FFBE00">ACCESO AL SISTEMA</font></a></li>
							<li class="separacionItemMenu d-none d-sm-block">
								<a href="https://www.facebook.com/profile.php?id=100027689487291&mibextid=ZbWKwL" target="_blank">
									<img src="assets/images/logoFace.png" class="img-fluid" alt="logo Facebook">
								</a>
							</li> 
							<li class="separacionItemMenu d-none d-sm-block">
								<a href="https://www.instagram.com/colegiodepsicsj?utm_source=qr&igsh=MXMwN3Fpbnp3ZXgzeA==" target="_blank">
									<img src="assets/images/logoInstagram.png" class="img-fluid" alt="logo Instagram">
								</a>
							</li>
							<li class="separacionItemMenu d-none d-sm-block">
								<a href="https://api.whatsapp.com/send?phone=2645705836&text=Hola%21%20Quisiera Contactar al Colegio de Psicólogos." target="_blank">
								<img src="assets/images/logoWS.png" class="img-fluid" alt="logo WhatsApp">
								</a>
							</li>
						</ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

<main class="container-fluid colorFondo">


<!-- ***** Main Banner Area Start ***** -->
<section class="main-banner colorFondo" id="top">
<div class="container">
  <div class="row">
	<div class="col-2 col-lg-3 align-self-center">
	</div>
	<div class="col-8 col-lg-6">
	  <div class="right-image">
		<img src="assets/images/colegioPsicologosSoyPsicologo.png" alt="logo colegio">
	  </div>
	</div>
	<div class="col-2 col-lg-3 align-self-center d-none d-sm-block">
	  <div class="header-text">
		<h6>&nbsp;</h6>
		<h2>&nbsp;</h2>
	  </div>
	</div>
  </div>
</div>
</section>
<!-- ***** Main Banner Area End ***** -->
  

<!--ESPACIO EN BLANCO-->
<main class="container-fluid colorFondo">
	<div class="row colorFondo">
		<div class="col-12 col-lg-12 text-center pt-5 pb-4 d-none d-sm-block">
		<br><!--Hidden only on xs-->
		</div>
		<div class="col-12 col-lg-12 text-center pt-3 pb-3 d-block d-sm-none"><!--Visible only on xs-->
		</div>
	</div>
</main>
<!--FIN ESPACIO EN BLANCO-->


<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--**************************BENEFICIOS PARA MATRICULADOS (CONVENIOS)************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->

<main class="container-fluid celeste">
	<div class="row">
		<div class="col-12 col-lg-4 text-center pt-5 pb-4 d-none d-sm-block"></div> <!--Hidden only on xs-->
		<div class="col-12 col-lg-5 text-center pt-5 d-none d-sm-block margenCero"><!--Hidden only on xs-->

			<button type="button" id="botonMostrarBeneficios" class="btn btn-link" onclick="mostrarContenedor('beneficios');mostrarContenedor('botonOcultarBeneficios');ocultarContenedor('botonMostrarBeneficios')"><img src="assets/images/btnPsicoBeneficiosMatri2.png" class="img-fluid" alt=""></button>

			<button type="button" id="botonOcultarBeneficios" style="display:none;" class="btn btn-link" onclick="ocultarContenedor('beneficios');mostrarContenedor('botonMostrarBeneficios');ocultarContenedor('botonOcultarBeneficios')"><img src="assets/images/btnPsicoBeneficiosMatri2.png" class="img-fluid" alt=""></button>

		</div>
		<div class="col-12 col-lg-3 text-center pt-5 d-none d-sm-block"></div> <!--Hidden only on xs-->

		<div class="col-12 col-lg-12 text-center pt-3 pb-2 d-block d-sm-none margenCero"><!--Visible only on xs-->
			<button type="button" id="botonMostravSmart" class="btn btn-link margenCero"  onclick="mostrarContenedor('beneficios');mostrarContenedor('botonOcultarBeneficiosSmart');ocultarContenedor('botonMostraBeneficiosSmart')"><img src="assets/images/btnPsicoBeneficiosMatriSmart2.png" class="img-fluid" alt=""></button>

			<button type="button" id="botonOcultarBeneficiosSmart" style="display:none;" class="btn btn-link margenCero"  onclick="ocultarContenedor('beneficios');mostrarContenedor('botonMostrarBeneficiosSmart');ocultarContenedor('botonOcultarBeneficiosSmart')"><img src="assets/images/btnPsicoBeneficiosMatriSmart2.png" class="img-fluid" alt=""></button> 
		</div>
	</div>
</main>
<?
$paginas=$totalRows_result140/$noticiasPorPagina;
//echo $totalRows_result12;
ceil($paginas);
?>

<?php //do { ?>

<main class="container-fluid margenOS celeste" id="beneficios"><br>
		<div class="row">
			<div class="col-12 col-lg-12">
				<div class="row">
					<div class="col-12 col-lg-3 d-none d-sm-block"> <!--Hidden only on xs-->
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido14['imagen'];?>"  class="img-responsive " alt="">
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido15['imagen'];?>"  class="img-responsive " alt="">
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido16['imagen'];?>"  class="img-responsive " alt="">
					</div>
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido14['imagen'];?>"  class="img-responsive " alt="">
					</div>
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido15['imagen'];?>"  class="img-responsive " alt="">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-12 col-lg-3 d-none d-sm-block"> <!--Hidden only on xs-->
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido17['imagen'];?>" class="img-responsive " alt="">
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido18['imagen'];?>" class="img-responsive " alt="">
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido19['imagen'];?>"  class="img-responsive " alt="">
					</div>
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido16['imagen'];?>"  class="img-responsive " alt="">
					</div>
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido17['imagen'];?>"  class="img-responsive " alt="">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido18['imagen'];?>"  class="img-responsive " alt="">
					</div>
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido19['imagen'];?>"  class="img-responsive " alt="">
					</div>
				</div>
<?  //} while ($extraido14= mysqli_fetch_array($result14)) ?>
<br>
				<div class="row">
						<div class="col-12 col-lg-1 d-none d-sm-block"></div>
						<div class="col-12 col-lg-4 pb-5">
							<nav aria-label="Page navigation example">
							<font size="-1">
								<ul class="pagination justify-content-end">
								<li class="page-item
								<? echo $_GET['pagina']<= 1 ? 'disabled' : '' ?>">
								<a class="page-link" href="psicologo.php?pagina=<? echo $_GET['pagina']-1 ?>">Anterior</a>
								</li>

								<? for ($i=0;$i<$paginas; $i++) { ?>
								<li class="page-item
								<? echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"><a class="page-link" href="psicologo.php?pagina=<? echo $i+1; ?>"><? echo $i+1; ?></a></li>
								<? }  ?>

								<li class="page-item
								<? if ( $_GET['pagina']< $paginas ) { ?> ">
								<a class="page-link" href="psicologo.php?pagina=<? echo $_GET['pagina']+1 ?>">Siguiente</a>
								<? } ?>

								<? //echo $_GET['pagina']>= 1 ? 'disabled' : '' ?>
								<a class="page-linkMP"></a>
								</li>
								</ul>
							</nav>
							</font>
						</div>
						<div class="row pb-5">
							<div class="col-12 col-lg-3 d-none d-sm-block"> <!--Hidden only on xs-->
							</div>
							<div class="col-12 col-lg-6 d-none d-sm-block"> <!--Hidden only on xs-->
								<img src="assets/images/imgTextoPiePsico.png" class="img-fluid" alt="">
							</div>
							<div class="col-12 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
								<img src="assets/images/imgTextoPiePsico.png" class="img-fluid" alt="">
							</div>
						</div>
				</div>
		</div>
	</div>
<br>
</main>





<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--**********************ARANCELES DE OBRAS SOCIALES ****************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->

<main class="container-fluid">
	<div class="row">
		<div class="col-12 col-lg-4 text-center pt-5 pb-4 d-none d-sm-block"></div> <!--Hidden only on xs-->
		<div class="col-12 col-lg-5 text-center pt-5 d-none d-sm-block margenCero"><!--Hidden only on xs-->

			<button type="button" id="botonMostrarAranceles" class="btn btn-link" onclick="mostrarContenedor('aranceles');mostrarContenedor('botonOcultarAranceles');ocultarContenedor('botonMostrarAranceles')"><img src="assets/images/btnPsicoAranceles.png" class="img-fluid" alt=""></button>

			<button type="button" id="botonOcultarAranceles" style="display:none;" class="btn btn-link" onclick="ocultarContenedor('aranceles');mostrarContenedor('botonMostrarAranceles');ocultarContenedor('botonOcultarAranceles')"><img src="assets/images/btnPsicoAranceles1.png" class="img-fluid" alt=""></button>

		</div>
		<div class="col-12 col-lg-3 text-center pt-5 d-none d-sm-block"></div> <!--Hidden only on xs-->

		<div class="col-12 col-lg-12 text-center pt-3 pb-2 d-block d-sm-none margenCero"><!--Visible only on xs-->
			<button type="button" id="botonMostrarArancelesSmart" class="btn btn-link margenCero"  onclick="mostrarContenedor('aranceles');mostrarContenedor('botonOcultarArancelesSmart');ocultarContenedor('botonMostrarArancelesSmart')"><img src="assets/images/btnPsicoArancelesSmart.png" class="img-fluid" alt=""></button>

			<button type="button" id="botonOcultarArancelesSmart" style="display:none;" class="btn btn-link margenCero"  onclick="ocultarContenedor('aranceles');mostrarContenedor('botonMostrarArancelesSmart');ocultarContenedor('botonOcultarArancelesSmart')"><img src="assets/images/btnPsicoArancelesSmart1.png" class="img-fluid" alt=""></button> 
		</div>
	</div>
</main>
<main class="container-fluid margenOS" id="aranceles" style="display:none;">
<div class="row">
	<div class="col-12 col-lg-3"> <!--Hidden only on xs-->
	</div>
	<div class="col-12 col-lg-8 margenDisposicion"><br> <!--Hidden only on xs-->
			<div class="row pb-3">
				<div class="col-12 col-lg-12">
					<?php if ($totalRows_result11 > 0) { // Show if recordset empty ?> 
					<?php do { ?>
					<div class="container">
<!--					<br>-->
					<div class="row">
					  <div class="col-lg-12">
					- <strong><a href="/web1/arancelObraSocial/<?php echo $extraido11['arancelesObraSocial'];?>" target="_blank"><?php echo $extraido11['arancelesObraSocial'];?></a></strong>
					  </div>
					</div>
					</div>
					<?php } while ($extraido11= mysqli_fetch_array($result11)); ?>
					<?php } // Show if recordset NOT empty ?> 				   
				</div>
			</div>
	 </div>
</div>
</main>

<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--********************************FIN ARANCELES DE OBRAS SOCIALES **************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->



<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--**************************SERVICIOS DE ASESORES LEGALES Y CONTABLE ***********************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->

<main class="container-fluid">
	<div class="row">
		<div class="col-12 col-lg-4 text-center pt-5 pb-4 d-none d-sm-block"></div> <!--Hidden only on xs-->
		<div class="col-12 col-lg-5 text-center pt-5 d-none d-sm-block margenCero"><!--Hidden only on xs-->

			<button type="button" id="botonMostrarServicios" class="btn btn-link" onclick="mostrarContenedor('servicios');mostrarContenedor('botonOcultarServicios');ocultarContenedor('botonMostrarServicios')"><img src="assets/images/btnPsicoServiciosAsesores.png" class="img-fluid" alt=""></button>

			<button type="button" id="botonOcultarServicios" style="display:none;" class="btn btn-link" onclick="ocultarContenedor('servicios');mostrarContenedor('botonMostrarServicios');ocultarContenedor('botonOcultarServicios')"><img src="assets/images/btnPsicoServiciosAsesores1.png" class="img-fluid" alt=""></button>

		</div>
		<div class="col-12 col-lg-3 text-center pt-5 d-none d-sm-block"></div> <!--Hidden only on xs-->

		<div class="col-12 col-lg-12 text-center pt-3 pb-2 d-block d-sm-none margenCero"><!--Visible only on xs-->
			<button type="button" id="botonMostraServiciosSmart" class="btn btn-link margenCero"  onclick="mostrarContenedor('servicios');mostrarContenedor('botonOcultarServiciosSmart');ocultarContenedor('botonMostraServiciosSmart')"><img src="assets/images/btnPsicoServiciosAsesoresSmart.png" class="img-fluid" alt=""></button>

			<button type="button" id="botonOcultarServiciosSmart" style="display:none;" class="btn btn-link margenCero"  onclick="ocultarContenedor('servicios');mostrarContenedor('botonMostrarServiciosSmart');ocultarContenedor('botonOcultarServiciosSmart')"><img src="assets/images/btnPsicoServiciosAsesoresSmart1.png" class="img-fluid" alt=""></button> 
		</div>
	</div>
</main>
<main class="container-fluid margenOS" id="servicios" style="display:none;">
<div class="row">
	<div class="col-12 col-lg-12"><br class="d-none d-sm-block">
		<div class="row">
			<div class="col-12 col-lg-4 d-none d-sm-block"> <!--Hidden only on xs-->
			</div>
			<div class="col-12 col-lg-4 d-none d-sm-block"> <!--Hidden only on xs-->
				<img src="../web/assets/images/asesoramientoContable.jpeg" class="img-responsive " alt="">
			</div>
			<div class="col-12 col-lg-4 d-block d-sm-none"><!--Visible only on xs-->
				<img src="../web/assets/images/asesoramientoContable.jpeg" class="img-responsive " alt="">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-12 col-lg-4 d-none d-sm-block"> <!--Hidden only on xs-->
			</div>
			<div class="col-12 col-lg-4 d-none d-sm-block"> <!--Hidden only on xs-->
				<img src="../web/assets/images/asesoramientoLegal.jpeg" class="img-responsive " alt="">
			</div>
			<div class="col-12 col-lg-4 d-block d-sm-none"><!--Visible only on xs-->
				<img src="../web/assets/images/asesoramientoLegal.jpeg" class="img-responsive " alt="">
			</div>
		</div>
	</div>
</main>

<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--********************************FIN SERVICIOS DE ASESORES LEGALES Y CONTABLE *************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->




<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--**************************REQUISITOS PARA MATRICULARSE ***********************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->

<main class="container-fluid">
	<div class="row">
		<div class="col-12 col-lg-4 text-center pt-5 pb-4 d-none d-sm-block"></div> <!--Hidden only on xs-->
		<div class="col-12 col-lg-5 text-center pt-5 d-none d-sm-block margenCero"><!--Hidden only on xs-->

			<button type="button" id="botonMostrarRequisitos" class="btn btn-link" onclick="mostrarContenedor('requisitos');mostrarContenedor('botonOcultarRequisitos');ocultarContenedor('botonMostrarRequisitos')"><img src="assets/images/btnPsicoRequisitos.png" class="img-fluid" alt=""></button>

			<button type="button" id="botonOcultarRequisitos" style="display:none;" class="btn btn-link" onclick="ocultarContenedor('requisitos');mostrarContenedor('botonMostrarRequisitos');ocultarContenedor('botonOcultarRequisitos')"><img src="assets/images/btnPsicoRequisitos1.png" class="img-fluid" alt=""></button>

		</div>
		<div class="col-12 col-lg-3 text-center pt-5 d-none d-sm-block"></div> <!--Hidden only on xs-->

		<div class="col-12 col-lg-12 text-center pt-3 pb-2 d-block d-sm-none margenCero"><!--Visible only on xs-->
			<button type="button" id="botonMostraRequisitosSmart" class="btn btn-link margenCero"  onclick="mostrarContenedor('requisitos');mostrarContenedor('botonOcultarRequisitosSmart');ocultarContenedor('botonMostraRequisitosSmart')"><img src="assets/images/btnRequisitosSmart.png" class="img-fluid" alt=""></button>

			<button type="button" id="botonOcultarRequisitosSmart" style="display:none;" class="btn btn-link margenCero"  onclick="ocultarContenedor('requisitos');mostrarContenedor('botonMostrarRequisitosSmart');ocultarContenedor('botonOcultarRequisitosSmart')"><img src="assets/images/btnRequisitosSmart1.png" class="img-fluid" alt=""></button> 
		</div>
	</div>
</main>
<main class="container-fluid margenOS" id="requisitos" style="display:none;">
<div class="row">
	<div class="col-12 col-lg-3"> <!--Hidden only on xs-->
	</div>
	<div class="col-12 col-lg-8 margenDisposicion"><br> <!--Hidden only on xs-->
			<div class="row pb-3">
				<div class="col-12 col-lg-12">
					<?php if ($totalRows_result13 > 0) { // Show if recordset empty ?> 
					<?php do { ?>
					<div class="container">
<!--					<br>-->
					<div class="row">
					  <div class="col-lg-12">
					- <strong><a href="/web1/requisitosMatriculacion/<?php echo $extraido13['requisitosMatricularse'];?>" target="_blank"><?php echo $extraido13['requisitosMatricularse'];?></a></strong>
					  </div>
					</div>
					</div>
					<?php } while ($extraido13= mysqli_fetch_array($result13)); ?>
					<?php } // Show if recordset NOT empty ?> 				   
				</div>
			</div>
	 </div>
</div>
</main>

<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--********************************FIN REQUISITOS PARA MATRICULARSE ************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->


<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--**************************BENEFICIOS PARA MATRICULADOS (CONVENIOS)************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->

<main class="container-fluid" style="display:none;">
	<div class="row">
		<div class="col-12 col-lg-4 text-center pt-5 pb-4 d-none d-sm-block"></div> <!--Hidden only on xs-->
		<div class="col-12 col-lg-5 text-center pt-5 d-none d-sm-block margenCero"><!--Hidden only on xs-->

			<button type="button" id="botonMostrarBeneficios" class="btn btn-link" onclick="mostrarContenedor('beneficios');mostrarContenedor('botonOcultarBeneficios');ocultarContenedor('botonMostrarBeneficios')"><img src="assets/images/btnPsicoBeneficiosMatri.png" class="img-fluid" alt=""></button>

			<button type="button" id="botonOcultarBeneficios" style="display:none;" class="btn btn-link" onclick="ocultarContenedor('beneficios');mostrarContenedor('botonMostrarBeneficios');ocultarContenedor('botonOcultarBeneficios')"><img src="assets/images/btnPsicoBeneficiosMatri1.png" class="img-fluid" alt=""></button>

		</div>
		<div class="col-12 col-lg-3 text-center pt-5 d-none d-sm-block"></div> <!--Hidden only on xs-->

		<div class="col-12 col-lg-12 text-center pt-3 pb-2 d-block d-sm-none margenCero"><!--Visible only on xs-->
			<button type="button" id="botonMostravSmart" class="btn btn-link margenCero"  onclick="mostrarContenedor('beneficios');mostrarContenedor('botonOcultarBeneficiosSmart');ocultarContenedor('botonMostraBeneficiosSmart')"><img src="assets/images/btnPsicoBeneficiosMatriSmart.png" class="img-fluid" alt=""></button>

			<button type="button" id="botonOcultarBeneficiosSmart" style="display:none;" class="btn btn-link margenCero"  onclick="ocultarContenedor('beneficios');mostrarContenedor('botonMostrarBeneficiosSmart');ocultarContenedor('botonOcultarBeneficiosSmart')"><img src="assets/images/btnPsicoBeneficiosMatriSmart1.png" class="img-fluid" alt=""></button> 
		</div>
	</div>
</main>
<main class="container-fluid margenOS" id="beneficios" style="display:none;" ><br>
		<div class="row">
			<div class="col-12 col-lg-12">
				<div class="row">
					<div class="col-12 col-lg-3 d-none d-sm-block"> <!--Hidden only on xs-->
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido14['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido15['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido16['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido14['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido15['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-12 col-lg-3 d-none d-sm-block"> <!--Hidden only on xs-->
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido17['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido18['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
					<div class="col-12 col-lg-2 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido19['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido16['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido17['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido18['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
					<div class="col-6 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="/web1/beneficios/<?php echo $extraido19['imagen'];?>" width="100%" height="100%" class="img-responsive " alt="">
					</div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col-12 col-lg-3 d-none d-sm-block"> <!--Hidden only on xs-->
					</div>
					<div class="col-12 col-lg-6 d-none d-sm-block"> <!--Hidden only on xs-->
						<img src="assets/images/imgTextoPiePsico.png" class="img-fluid" alt="">
					</div>
					<div class="col-12 col-lg-6 d-block d-sm-none"><!--Visible only on xs-->
						<img src="assets/images/imgTextoPiePsico.png" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
		<br>
</main>
<br><br><br>

<!--PIE-->
<main class="container-fluid colorFondo">
	<main class="container colorFondo">
		<div class="row">
			<div class="col-12 col-lg-12">
				<div class="row">
					<div class="col-6 col-lg-2 d-block d-sm-none"><!--Visible only on xs-->
					</div>
					<div class="col-6 col-lg-2 d-block d-sm-none"><!--Visible only on xs--> 
					</div>
				</div>
			</div>
		</div>
	</main>
	<main class="container colorFondo">
		<div class="row">
			<div class="col-12 col-lg-5 d-none d-sm-block"></div>
			<div class="col-3 col-lg-5 d-block d-sm-none"></div>  
			<div class="col-3 col-lg-1">
				<img src="assets/images/btnInferiorInstagram.png" class="img-fluid logos" alt="instagram">
			</div>
			<div class="col-3 col-lg-1">
				<img src="assets/images/btnInferiorFace.png" class="img-fluid  logos" alt="facebook">
			</div>
			<div class="col-3 col-lg-1">
				<a href="https://api.whatsapp.com/send?phone=2645705836&text=Hola%21%20Quisiera Contactar al Colegio de Psicólogos." target="_blank">
				<img src="assets/images/btnInferiorWS.png" class="img-fluid logos" alt="facebook">
				</a>
			</div>
			<div class="col-4 col-lg-5 d-block d-sm-none"></div> 
		</div>
	</main>
</main>
<!--FIN PIE-->


<!--PIE-->
<main class="container-fluid colorFondo fondo d-none d-sm-block">
	<main class="container colorFondo">
		<div class="row">
			<div class="col-12 col-lg-12">
				<div class="row">
					<div class="col-6 col-lg-2 d-block d-sm-none"><!--Visible only on xs-->
					</div>
					<div class="col-6 col-lg-2 d-block d-sm-none"><!--Visible only on xs--> 
					</div>
				</div>
			</div>
		</div>
	</main>
</main>
<!--FIN PIE-->

<!--PIE-->
<main class="container-fluid colorFondo fondoSMART d-block d-sm-none">
	<main class="container colorFondo">
		<div class="row">
			<div class="col-12 col-lg-12">
				<div class="row">
					<div class="col-6 col-lg-2 d-block d-sm-none"><!--Visible only on xs-->
					</div>
					<div class="col-6 col-lg-2 d-block d-sm-none"><!--Visible only on xs--> 
					</div>
				</div>
			</div>
		</div>
	</main>
</main>
<!--FIN PIE-->

<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--*********************FIN BENEFICIOS PARA MATRICULADOS (CONVENIOS) ************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->
<!--******************************************************************************************************************-->


</main>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>

 
</body>

</html>