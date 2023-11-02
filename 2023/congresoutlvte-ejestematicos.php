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
    <li> Responsabilidad social empresarial.<br><b>Coordinador:</b> Ing. Carlos Rivas Vallejo, Mgtr.</li>
    <li>Calidad de la Gestión Innovadora y disruptiva de los negocios.<br><b>Coordinadora:</b> Ing. Olga Quiñonez Guagua, PhD.
  </li>
    <li>Tecnología y su relación con el crecimiento y el desarrollo económico.<br><b>Coordinador:</b> Ing. Carlos Holguin Cedeño, Mgtr. </li>
    <li>Economía del siglo XXI economía circular y en colores.<br><b>Coordinador:</b> Ing. Jorgeli Ayovi Caicedo, Mgtr.</li> 
    <li>Rol de los escenarios actuales de la empresa pública y privada.<br><b>Coordinador:</b> Ing. Luis Canchingre Bone, Mgtr. </li> 
    <li>Movilidad y seguridad humana en el desarrollo económico.<br><b>Coordinador:</b> Dr. Patricio Arce Minda, Mgtr.
 List item</li> 
    <li> Liderazgo, comunicación interna y Cultura Organizacional.<br><b>Coordinadora:</b> Ing. Romina Oyarvide Ibarra, Mgtr.</li> 
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
