<?php 
    // require ('funciones.php'); 
    // require ('database/galeria.php'); 
?>
<!-- %%%%%%%%%%%%% CAROUSEL %%%%%%%%%%%%% -->
<section>

    <div id="contenedor-slider" class="contenedor-slider">
    <div id="slider" class="slider">
        
        <?php mostrarCarrousel($galeria); ?>
    </div>

    <div id="btn-prev" class="btn-prev">&#60;</div>
    <div id="btn-next" class="btn-next">&#62;</div>
</div>

</section>

    <!-- %%%%%%%%%% SECCION ACERCA DE %%%%%%%%%%% -->
<section id="acerca">
    
    <h1>La Empresa</h1>
    <p>Requiem Turismo es una empresa dedicada a la comercialización de Servicios Turísticos en Argentina. Somos miembros activos la AAVYT (Asociacion Argentina de Agencias de Viajes y Turismo de la Republica Argentina). Nuestros clientes están respaldados por un sólido grupo humano, distribuidos en las distintas sucursales y franquicias de Babel Viajes que se encuentran dentro de nuestro pais. Todo nuestro personal trabaja dia a dia para la correcta prestación de los servicios turísticos ofrecidos, atendiendo a la premisa PRECIO = CALIDAD asegurando de esta manera la plena satisfacción de nuestros clientes.
    Promovemos un alto grado de especializacion lo cual nos permite brindar un servicio de excelencia potenciando una de nuestras ventajas comparativas, el ser una de las Agencias de Viajes con mayor cantidad de sucursales operativas en el pais.</p>
    <br>
    <h1>Mision</h1>
    <p>Nuestra misión es ofrecer servicios turísticos integrales orientados a los distintos mercados, alcanzando la más amplia cobertura geográfica a nivel nacional y atendiendo a las necesidades de nuestros clientes. 
    A través de nuestros representantes locales, sucursales y franquicias, situados en distintos puntos del país, usted encontrara la mejor atención para la concreción de viajes turísticos y empresariales, provista por especialistas idóneos en turismo.</p>

    <h1>Estrategia</h1>
    <p>Segmentar los mercados y lograr el mayor grado de eficiencia en la captación y atención de de cada uno de ellos, utilizando distintos canales de comunicación y aprovechando las innovaciones tecnológicas disponibles.</p>
    
    <p>Innovar en la zonificación estratégica del mercado, prestando nuestros servicios a través de sucursales propias, franquicias o de representantes locales, constituyéndonos en la Empresa de Viajes y Turismo de mayor presencia fisica a nivel nacional.</p>
    
    <p>Proveer a nuestros clientes un amplio abanico de posibilidades a la hora de elegir su próximo viaje, brindando el mejor precio y teniendo en cuenta la relación COSTO = BENEFICIO.</p>
    
    <p>Lograr un grado de especialización en Destinos Especificos a fin de lograr una atención diferencial y especializada en determinados nichos de mercado.</p>
    
</section>
<hr>
<section id="destinos">
    
    <h1>Nuestros Destinos</h1>
    
    <?php              
    
    //  $directorio = "images";
    //  $dir = opendir($directorio);
    
    //  echo "<div class='destinos-filas'>";
    
    //     while ($carpeta = readdir($dir)){
            
    //         if($carpeta != "." && $carpeta != ".."){
                
    //             $subDirectorio = "$directorio/$carpeta";
        
    // 	        $subDir = opendir($subDirectorio);
                

    //             $img = glob("$subDirectorio/*.jpg");


    //                 echo "<div class='destinos-inicio'>";

    //                         echo "<h2>$carpeta</h2>";

    //                         echo "<img src='$img[0]'>";

    //                 echo "</div>";

    //                 echo "<br>";
    //         }
    //     }
    
    // echo "</div>";		

    MostrarDestinos();
    
    ?>
</section>


