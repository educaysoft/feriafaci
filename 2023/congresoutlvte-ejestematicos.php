<style>
#lista5 {
    counter-reset: li; 
    list-style: none; 
    *list-style: decimal; 
    font: 1.5vw 'trebuchet MS', 'lucida sans';
    padding: 0;
    margin-bottom: 4em;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

#lista5 ol {
    margin: 0 0 0 2em; 
}

#lista5 {
    list-style-type: none;
    list-style-type: decimal !ie; /*IE 7- hack*/
     
    margin: 0;
    margin-left: 1em;
    padding: 0;
     
    counter-reset: li-counter;
}

#lista5 > li{
    position: relative;
    margin-bottom: 1.5em;
    padding: 1.5em;
    background-color: #eaeaea;
}

#lista5 > li:before {
    position: absolute;
    top: -0.3em;
    left: -0.5em;
    width: 1.8em;
    height: 1.2em;
     
    font-size: 2em;
    line-height: 1.2;
    font-weight: bold;
    text-align: center;
    color: #464646;
    background-color: #d0d0d0;
     
    transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    -webkit-transform: rotate(-20deg);
    z-index: 99;
    overflow: hidden;
     
    content: counter(li-counter);
    counter-increment: li-counter;
}



</style>




<div id="equipo" style="border-top: 2px solid green;  width: 90%; margin:20px auto; display: inline-block;">
<div id="xxx" class="w3-container" style="margin-left:10px; margin-top:10px;  padding: 0px; width: 100%; height: 100%; display: inline-block;">
    


<main>

  <div class="album py-5 bg-light">
    <div class="container">

 	<div class="row py-lg-5 text-center container">
      		<div class="col-lg-6 col-md-8 mx-auto">
        		<h1 class="fw-light">Ejes temáticos </h1>
      		</div>
    	</div>



 <div class="my-3 p-3 bg-body rounded shadow-sm">
<ol id="lista5">
    <li> <b style="color:red" >Tecnología de la Información :-</b>  <i> Desarrollo de Software y Aplicaciones.</i><br> Este eje temático se enfoca en el diseño, desarrollo y mantenimiento de software y aplicaciones para diversas plataformas y dispositivos.</li>
    <li><b>Tecnología de la Información</b><i>Seguridad Informática y Redes.</i><br>Este eje se centra en proteger sistemas, redes y datos contra amenazas cibernéticas. </li>
    <li><b>Mecánica</b><i>Diseño y Manufactura</i><br>Este eje temática se centra en el diseño conceptual, modelado y fabricación de maquinarias y sistemas mecánicos. </li>
    <li><b>Mecánica</b><i>Dinámica y control de sistemas.</i><br>Este eje tiene que ver con la exploración de el movimiento y el comportamiento de los sistemas mecánicos.</li> 
    <li><b>Eléctrica</b><i>Electrónica y sistemas embebidos.</i><br> Este eje temático se enfoca en el diseño y desarrollo de circuitos electrónicos y sistemas embebidos. </li> 
    <li><b>Eléctrica</b><i>Energía y potencia.</i><br>En este eje, consiste en la generación, transmisión y distribución de energía eléctrica, incluyendo el estudio de sistemas de energía renovable como la energía solar y eólica.</li> 
    <li><b>Química</b><i>Procesos Químicos y producción</i><br>Este eje temático se enfoca en el diseño y la optimización de procesos químicos para la producción de diversos productos.</li> 
    <li><b>Química</b><i>Contro Ambiental y Seguridad</i><br>Este eje se centro en aplicar principios químicos para abordar problemas ambientales y promover la seguridad de las industrias químicasr.</li> 
</ol>






    </div>

    <small class="d-block text-end mt-3">
      <a href="congresoutlvte-tematicas.php">Todas las temáticas</a>
    </small>

  


      
    </div>
  </div>

</main>

</div>
</div>
