<?php
include_once("head0.php");
?>

<?php
include_once("head.php");
?>

<style>
$bg: darken(white, 10%);
$shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
$shadow1: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

img{
  max-width:100%;
}

body{
  background-color:$bg;
  display:flex;
  height:100vh;
  width:100vw;
  font-family:'Montserrat';
}

.container{
  width:1600px;
  max-width:100%;
  margin:auto;
}

.display{ 
  display:flex;
  justify-content:space-around;
  flex-wrap:wrap;
  .display-item{
    flex-grow:1;
    flex-basis:1px;
    display:flex;
    justify-content:space-around;
    padding:15px;
    max-width:100%;
  }
}

.card{
  width:480px;
  max-width:100%;
  min-height:620px;
  overflow:hidden;
  border-radius:4px;
  box-shadow:$shadow;
  background-color:white;
  position:relative;  
  display: -webkit-box; 
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex; 
  display: flex;
  flex-direction:column;
  .card-top{
    -webkit-flex-basis:155px;
    flex-basis:155px;
    flex-shrink:1;
    background-color:rgba(0,0,0,.2);    
    background-position:center;
    background-size:cover;  
  }
  .card-profile{
    flex-basis:75px;
    flex-shrink:1;
    .profile-image{
      overflow:hidden;
      border-radius:100%;
      position:absolute;
      left:calc(50% - 75px);
      top:calc(25% - 75px);
      border:4px solid white;
      width:150px;
      height:150px;     
      background-size:cover;
      background-position:center;
    }
  }
  .card-info{
    flex-basis:56,66665%;
    flex-grow:1;
    padding:0 15px;
    text-align:center;
    display: -webkit-box; 
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex; 
    display: flex;
    flex-direction:column;
    .info-title{
      padding-bottom:15px;
      h3{
        font-weight:400;
      }
    }

.info-cargo{

      border-bottom:1px solid rgba(0,0,0,.3); 
      h4{
        font-weight:400;
      }
}


    .info-follow{
      display: -webkit-box; 
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex; 
      display: flex;
      padding:15px 0;
      border-bottom:1px solid rgba(0,0,0,.3); 
      font-size:1.2em;
      >div{
        flex-grow:1;
        flex-basis:1px;
        min-height:20px;
      }
    }
    .info-bio{
      padding:15px 0;
    }
    .info-social{
      flex-grow:1;
      padding:15px 0;
      display: -webkit-box; 
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex; 
      display: flex;
      flex-direction:column;
      justify-content:space-around;
      .social-icons{
        display: -webkit-box; 
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex; 
        display: flex;
        justify-content:space-around;
        .sm{
          flex-basis:40px;
          height:40px;
          transition:all .3s ease-in-out;
          display: -webkit-box; 
          display: -moz-box;
          display: -ms-flexbox;
          display: -webkit-flex; 
          display: flex;
          justify-content:space-around;
          flex-direction:column;
          text-align:center;
          background-size:100% 200%;
          background-position-y: 10%;
          font-size:2em;
          color:rgba(0,0,0,.8);
          cursor:pointer;
          &:hover{
            background-position-y: 100%;
            //color:rgba(255,255,255,.8);
            color:white;
            border-radius:4px;
          }
        }
        .sm.twitter{          
          background-image: linear-gradient(transparent 50%,dodgerblue 50%)
        }
        .sm.facebook{
          background-image: linear-gradient(transparent 50%,royalblue 50%)
        }
        .sm.pint{
          background-image: linear-gradient(transparent 50%,#BD081B 50%)
        }
        .sm.px500{
          background-image: linear-gradient(transparent 50%,rgba(0,0,0,.8) 50%)
        }
      }     
    }
  }
}

.card.seamus{
  .card-top{
    background-image: url(https://images.unsplash.com/photo-1421789665209-c9b2a435e3dc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&s=b0aa3fbba9c018e93499effa49dd8e83);
  }
  .profile-image{
    background-image: url(images/conferencistas/LopezGermana.png);
  }
}

.card.huxi{
  .card-top{
    background-image: url(https://images.unsplash.com/photo-1421789665209-c9b2a435e3dc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&s=b0aa3fbba9c018e93499effa49dd8e83);
  }
  .profile-image{
    background-image: url(images/conferencistas/CaicedoRosangela.png);
  }
}

.card.anabelle{
  .card-top{
    background-image: url(https://images.unsplash.com/photo-1496096265110-f83ad7f96608?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&s=473657e1e7f4863f6e8a3348176a22dc);
  }
  .profile-image{
    background-image: url(https://images.unsplash.com/photo-1498529605908-f357a9af7bf5?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&s=4a38e7f0743e48e6ae32b23d36aa6ff7);
  }
}


.card.colombia{
  .card-top{
    background-image: url(images/banderas/Colombia.jpeg?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=473657e1e7f4863f6e8a3348176a22dc);
  }
  .profile-image{
    background-image: url(images/conferencistas/HooverRuiz2.jpg);
  }
}


.card.chile{
  .card-top{
    background-image: url(images/banderas/Chile.jpeg?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=473657e1e7f4863f6e8a3348176a22dc);
  }
  .profile-image{
    background-image: url(images/conferencistas/VivancoNicolas.jpg);
  }
}

.card.ecuador3{
  .card-top{
    background-image: url(images/banderas/Ecuador.jpeg?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=473657e1e7f4863f6e8a3348176a22dc);
  }
  .profile-image{
    background-image: url(images/conferencistas/CampuzanoVasquezJohn.jpg);
  }
}








</style>



<div style=" display:flex;flex-direction: column; background-color: white;" >
      
	<div style="width: 70%; margin:20px auto;">










<main class="cd-main-content" >
<div class="row py-lg-5 text-center container">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Conferencistas</h1>
        <p class="lead text-muted">Nacionales e Intenacionales</p>
      </div>
    </div>

<div class="container">
  <div class="display">
    <div class="display-item">
      <div class="card seamus">
        <div class="card-top"></div>
        <div class="card-profile">
          <div class="profile-image">
          </div>
        </div>
        <div class="card-info">
          <div class="info-title">
            <h3>Germán López Noreñai, PhD.</h3>
          </div>
          <div class="info-cargo">
            <h4>Director General Fundación Red para la Educación en Iberoamerica-FREI</h4>
          </div>
          <div class="info-bio">
<b>TEMA:</b> "Lectura Crítica en lo Económico y Organizacional de la Educación Superior Latinoamericana en Perspectiva del logro del ODS4 (Agenda 2030 de la ONU)”  
          </div>
          <div class="info-social">
            <div class="social-icons">
              <div class="sm twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </div>
              <div class="sm facebook">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </div>
              <div class="sm pint">
                <a href="https://www.youtube.com/watch?v=a3VWEktCZJI"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              </div>
              <div class="sm px500">
                <a href="Documentos/LopezGermanCV.pdf"><i class="fa fa-file" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 

   <div class="display-item">
      <div class="card huxi">
        <div class="card-top"></div>
        <div class="card-profile">
          <div class="profile-image">
          </div>
        </div>
        <div class="card-info">
          <div class="info-title">
            <h3>Caicedo Quiroz Rosangela, PhD.</h3>
          </div>
          <div class="info-cargo">
            <h4>Vicerectora de Investigación Vinculación  con la Sociedad Universidad Bolivariana del Ecuador.</h4>
          </div>
          <div class="info-bio">
           <b>TEMA:</b>"La empresa pública y privacidad: su rol en la formación del talento humano para el desarrollo". 
          </div>
          <div class="info-social">
            <div class="social-icons">
              <div class="sm twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </div>
              <div class="sm facebook">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </div>
              <div class="sm pint">
                <a href="https://www.youtube.com/watch?v=ZF8aoDW9e5o"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>

              </div>
              <div class="sm px500">
                <a href="Documentos/CaicedoRosangelaCV.pdf"><i class="fa fa-file" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="display-item">
      <div class="card colombia">
        <div class="card-top"></div>
        <div class="card-profile">
          <div class="profile-image">
          </div>
        </div>
        <div class="card-info">
          <div class="info-title">
            <h3>Hoover Wadith Ruiz Rengifo, PhD.</h3>
          </div>
          <div class="info-cargo">
            <h4>Autor de varias obras de derecho penal y Codirector del Anuario Corporate Compliance.</h4>
          </div>
<div class="info-bio" style="font-size:20px">
<b>TEMA:</b> "La responsabilidad penal de las personas jurídicas”  
          </div>
          
          <div class="info-social">
            <div class="social-icons">
              <div class="sm twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </div>
              <div class="sm facebook">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </div>
              <div class="sm pint">
                <a href="https://www.youtube.com/watch?v=Re0RnyhdOnU"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>

              </div>
              <div class="sm px500">
                <a href="https://ceadigilaw.org/staff/hoover-wadith-ruiz-renjifo/"><i class="fa fa-file" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




<div class="display-item">
      <div class="card chile">
        <div class="card-top"></div>
        <div class="card-profile">
          <div class="profile-image">
          </div>
        </div>
        <div class="card-info">
          <div class="info-title">
            <h3>Dr. Nicolas Vivanco Rojas, PhD.</h3>
          </div>
          <div class="info-cargo">
            <h4> Gerente de Centros de Negocios del Servicio de Cooperación Técnica, SERCOTEC</h4>
          </div>
          <div class="info-bio">
<b>TEMA:</b> "Servicios de Cooperación Técnica SERCOTEC y la vinculación a la Academia para el fortalecimiento de MYPIMES en Chile”  
          </div>
          <div class="info-social">
            <div class="social-icons">
              <div class="sm twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </div>
              <div class="sm facebook">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </div>
              <div class="sm pint">
                <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              </div>
              <div class="sm px500">
                <a href="#"><i class="fa fa-file" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




<div class="display-item">
      <div class="card ecuador3">
        <div class="card-top"></div>
        <div class="card-profile">
          <div class="profile-image">
          </div>
        </div>
        <div class="card-info">
          <div class="info-title">
            <h3>Dr. John Alexander Campuzano Vasquez Vasquez, Mgtr.</h3>
          </div>
          <div class="info-cargo">
            <h4> Coordinador del Grupo de Investigación en Desarrollo Económico de la Universidad Técnica de Machala</h4>
          </div>
          <div class="info-bio">
<b>TEMA:</b> "Factores determinantes para la competitividad provincial, un analisis mediante componentes principales categóricos”  
          </div>
          <div class="info-social">
            <div class="social-icons">
              <div class="sm twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </div>
              <div class="sm facebook">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </div>
              <div class="sm pint">
                <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              </div>
              <div class="sm px500">
                <a href="#"><i class="fa fa-file" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>






  </div>
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






</body>
</html>
