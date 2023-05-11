<style>
//!  POSICIONAR EL NAV FIJO



    img {
			vertical-align: middle;
			border-style: none;
			position: relative;
		}

		nav img {
			max-height: 10%;
			/* establece la altura máxima de la imagen como el 100% de la altura del elemento nav */
			max-width: 10%;
			/* establece la anchura máxima de la imagen como el 100% de la anchura del elemento nav */
			/* border-radius: 50px; */
		}
		.nav1{
			
      position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 9999;
		
        /* background-color: #1F1E1D; */
		background-color: #222222;
		/* #323232 */
			
		}

		.a-index {
  
  position: absolute;
top: 40;
right: 0;
  transform: translate(-500%, -10%);
}

		.a-servicios {
  position: absolute;
  top: 40;
  right: 0;
  transform: translate(-100%, -10%);
}

.a-index, .a-servicios {
  color: #B69552; /* Establece el color dorado para el texto */
  font-size: 22px; /* Aumenta el tamaño de la fuente a 18 píxeles */
  transition: color 0.2s ease-in-out, font-size 0.2s ease-in-out; /* Agrega una transición suave de 0,2 segundos para el color y el tamaño de fuente */
}

.a-index:hover, .a-servicios:hover {
  color: red; /* Establece el color rojo al pasar el cursor por encima */
  font-size: 22px; /* Aumenta el tamaño de la fuente a 22 píxeles al pasar el cursor por encima */
}

.nav1:after {
  content: "";
  display: block;
  height: 5px;
  background-color: #920115;
}

</style>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FASPPROGRAM</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	</head>
    <body class="sb-nav-fixed">
        <nav class="nav1" fixed-top >
            <a  href="index.php"> <img src="img/iconofaspprogram.jpg" alt="icono"></a><button class="btn btn-link btn-sm order-1 order-lg-0"></button>
            
			<a class="a-index" href="index.php"   
								>
									Inicio
		   </a>
			<a class="a-servicios" href="servicios.php"   
								>
									Servicios
		   </a>

		   

		</nav>
        
			</div>
            <div id="layoutSidenav_content">
                <main>