
<style>


#lista3 {
    counter-reset: li; 
    list-style: none; 
    *list-style: decimal; 
    font: 1.5vw 'trebuchet MS', 'lucida sans';
    padding: 0;
    margin-bottom: 4em;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

#lista3 ol {
    margin: 0 0 0 2em; 
}

#lista3 li{
    position: relative;
    display: block;
    padding: .4em .4em .4em .8em;
    *padding: .4em;
    margin: .5em 0 .5em 2.5em;
    background: #ddd;
    color: #444;
    text-decoration: none;
    transition: all .3s ease-out;   
}

#lista3 li:hover{
    background: #eee;
}   

#lista3 li:before{
    content: counter(li);
    counter-increment: li;
    position: absolute; 
    left: -2.5em;
    top: 50%;
    margin-top: -1em;
    background: #fa8072;
    height: 2em;
    width: 2em;
    line-height: 2em;
    text-align: center;
    font-weight: bold;
}

#lista3 li:after{
    position: absolute; 
    content: '';
    border: .5em solid transparent;
    left: -1em;
    top: 50%;
    margin-top: -.5em;
    transition: all .3s ease-out;               
}

#lista3 li:hover:after{
    left: -.5em;
    border-left-color: #fa8072;             
}

</style>


<div id="equipo" style="border-top: 2px solid green;    width: 90%; margin:20px auto; display: inline-block; ";
<div id="xxx" class="w3-container" style=" margin-left:10px; margin-top:10px;  padding: 0px; width: 100%; height: 20vh; display: inline-block; ">
    


<main>

  <div class="album py-5 bg-light">
    <div class="container">

 <div class="row py-lg-5 text-center container">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">¿Cómo participar?</h1>
        <p class="lead text-muted">Puedes participar en cualquiera de la 5 modalidades de forma <b>GRATUITA</b>.</p>
      </div>
    </div>



 <div class="my-3 p-3 bg-body rounded shadow-sm">
    

<ol id="lista3">
    <li>Coordinador/a de una mesa</li>
    <li>Ponente de la presentación</li>
    <li>Expositor/a Poster</li>
    <li>Expositor/a Afiches</li>
    <li>Asistente</li>
</ol>


    


<p style="font: 1.5vw 'trebuchet MS', 'lucida sans';">Los autores solo podrán presentar una ponencia o un poster o afiche científico como máximo.</p>
<p style="font: 1.5vw 'trebuchet MS', 'lucida sans';">Como coordinador/a de una mesa de trabajo, se puede proponer mesas de trabajo de su interés y que se ajusten a los ejes temáticos de IV Congreso Internacional de Ciencias Administrativas y Económicas.</p>







    
  </div>

  


      
    </div>
  </div>

</main>

</div>
