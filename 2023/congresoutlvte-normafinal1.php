
<?php
include("head0.php");
?>

<?php
include("head.php");
?>
<div style="width: 100%; margin:0px auto; padding: 10px;background-color: white;">


<main id="agenda" class="cd-main-content" style="margin-top:0%">


<p style="font-size: 30px; font-weight: bold; text-align: center; padding: 20px 0 40px 0; "> NORMAS PARA EDITAR EL ARTÍCULO.</p>


<div style="width: 100%;padding:10px;" > <center><a href="Documentos/normas.pdf"><button class="button-33" role="button">Descargar</button></a>
</center></div>
<div style=" display: flex; flex-direction:row; justify-content: center; width:100%;" >

<object width="600%" height="1000" type="application/pdf" data="Documentos/normas.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0">
    <p>Si no visualiza el documento aquí, puede visualizarlo y  descargarlo presionando el boton de <b>Descarga</b>.</p>
</object>


  
</div>



</main>

</div>

<?php
include_once("footer.php");
?>

</div>


<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>

<script type="text/javascript">

$(".submenu").click(function(){
  $(this).children("ul").slideToggle();
})

$("ul").click(function(ev){
  ev.stopPropagation();
})


function cargarVideo(url){
	document.getElementById('slider').src=url;
}


</script>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>





</html>

</body>

