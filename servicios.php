<?php
	
	include("top.php");
?>
<br><br><br><br><br><br>

<h1>EMPRESA DE SOFTWARE: SERVICIOS QUE OFRECEMOS</h1>
<br>
<div class="contenedor">
  <div class="item">
    <img src="img/dsoftware.png" alt="Imagen 1"><h1>DESARROLLO SOFTWARE</h1>
    <p class="texto"><h2>  Desarrollamos soluciones que provienen de necesidades reales 
		de nuestros clientes. Dichas necesidades son resueltas gracias al 
		desarrollo software de
aplicaciones a medida o herramientas software: en versión web, de escritorio 
para iOS, Windows o Linux y móvil para smartphones y tablets Android, Windows Phone,
 iPhone y iPad que te permitirán poder trabajar desde cualquier parte.</h2> </p>
  </div>
  <div class="item">
    <img src="img/app.png" alt="Imagen 2"> <h1>APP MÓVIL</h1>
    <p class="texto"> <h2> <br><br> Apostamos por el avance de los entornos de movilidad y por ello
		 contamos con expertos en aplicaciones móviles en las principales plataformas: 
			iPhone, Android, Windows Phone y Windows Mobile.
Si tienes una idea de aplicación móvil para tu negocio, nosotros la haremos realidad. </h2></p>
  </div>
  <div class="item">
    <img src="img/diseño.png" alt="Imagen 3"> <h1>DISEÑO WEB</h1>
    <p class="texto"> <h2>  <br><br> De acuerdo a tus necesidades te proponemos varias opciones para 
		mostrar tu negocio al mundo: Preparamos una versión inicial del trabajo a 
		realizar y, mediante la interacción continua con el cliente, vamos aplicando
		 las sucesivas mejoras y cambios que van surgiendo. Tanto el cliente como 
		 nosotros consideramos que hemos participado activamente en la creación del 
		 producto final y nos sentimos orgullosos por ello. </h2> </p>
  </div>
  <div class="item">
    <img src="img/acceso.png" alt="Imagen 4"> <h1>CONTROL DE ACCESO</h1>
    <p class="texto"> <h2>  A través de nuestras aplicaciones software, que se integran con 
		una gran variedad de dispositivos de control e identificación de usuarios, 
		además de saber quién y cuándo accede es posible llevar un riguroso control 
		sobre los accesos a un edificio, instalación u oficina. </h2> </p>
  </div>
</div>

<br><br><br>

<div class="contenedor">
  <div class="item">
    <img src="img/consultoria.png" alt="Imagen 1"><h1>CONSULTORÍA TECNOLÓGICA</h1>
    <p class="texto"><h2> <br><br> Normalmente, en las empresas suele haber determinadas 
		actividades que son lentas, tediosas, poco eficaces y costosas económicamente.
Somos especialistas en dar solución a estas necesidades utilizando las últimas 
tecnologías, tenemos capacidades para hacer diseños y desarrollos de aplicaciones 
que mejoren los procesos de gestión y administración de tu negocio.</h2> </p>
  </div>
  <div class="item">
    <img src="img/seo.png" alt="Imagen 2"> 
	<h1>POSICIONAMIENTO SEO/SEM</h1>
    <p class="texto"> <h2> <br><br> Ser visible en buscadores como Google, Yahoo, Bing,
	 etc. garantiza que seas más accesible a futuros clientes. Dominamos las últimas 
	 técnicas de posicionamiento SEO y SEM, analizamos y estudiamos tu caso para 
	 impulsar tu negocio y que no te quedes fuera. </h2></p>
  </div>
  <div class="item">
    <img src="img/diseñoimagen.png" alt="Imagen 3"> <h1>DISEÑO DE IMAGEN CORPORATIVA</h1>
    <p class="texto"> <h2>  <br> Todo proyecto o negocio proyecta una imagen, nosotros te ofrecemos 
	todos los servicios de diseño para hacer que tu imagen sea profesional, clara y atractiva.
	Diseño de logotipos, dosieres, trípticos, papelería, edición digital o lo que tú negocio necesite 
	en cada caso. </h2> </p>
  </div>
  <div class="item">
    <img src="img/formacion.png" alt="Imagen 4"> <h1>FORMACIÓN PARA EMPRESAS</h1>
    <p class="texto"> <h2> <br><br> Realizamos cursos de formación para empresas y entidades en los que nuestro 
		objetivo es iniciarte y formarte en la tecnología que necesites, para que puedas aplicar los 
		conocimientos en tu entorno de trabajo, desarrollamos cursillos personalizados acorde a las 
		necesidades de tu empresa para que tu desarrollo sea constante. </h2> </p>
  </div>
</div>

<br><br><br>
<center>

<div class="contenedordos">
  <div class="item">
    <h1>HERRAMIENTA</h1>
    <p class="texto"><h2> <br> Somos expertos en diversos campos de la programación
	 software e informática como el desarrollo de aplicaciones de escritorio, 
	 web o móvil y estamos al día de las últimas tecnologías.</h2> </p>
  </div>
  <div class="item">
    <h1>LA SOLUCIÓN</h1>
    <p class="texto"> <h2> <br> Cuidamos cada uno de nuestros servicios y prestamos 
	atención a cada detalle, para que esa solución que necesitas para tu negocio quede 
	como anillo al dedo. </h2></p>
  </div>
  <div class="item">
     <h1>EL CLIENTE</h1>
    <p class="texto"> <h2>  <br> Porque no hay nada más valioso que un cliente satisfecho, 
	tu eres nuestra principal prioridad. Queremos que te unas a la lista de los que ya 
	confían en nuestro servicios. </h2> </p>
  </div>
  
</div>
</center>

<br>

<?php
include("down.php");

?>



<style>
	 body{
		background-color: #272624;
	}  
	
	.contenedor {
  display: flex;
  justify-content: space-between;
  text-align:center;
  
}

.contenedordos {
  display: flex;
  justify-content: center;
  text-align:center;
  
}

.item {
	background-image: linear-gradient(to right, #B08A4D, #E6D489);
  margin: 0 5px;
  padding: 10px;
  width: calc(25% - 10px);
}

.img{
	text-align: center;
}



	.texto {
		font-size: 18px; /* Establece el tamaño de fuente para el texto */
		text-align: center;
		margin: 0;

		
	}

	h2{
	color: red;
}
.imagen-servicios3{
	text-align: center;
}

</style>