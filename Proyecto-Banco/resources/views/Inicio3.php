<!DOCTYPE html>
<html lang="es"></html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet" href="css/bulma.min.css">
  <link rel="stylesheet" href="css/JC_estilo.css"><script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" width="28" height="28"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
  <title>HSTW Banco</title>
</head>
<body>
  <section>
    <div class="navbar is-fixed-top navbar-end" style="background-color: #0000009c;">
      <div class="navbar-brand"><a href="/"><img src="imagenes/hstw4.png" style="margin-top:5px;margin-left:50%;width:150px;height:50px;"></a></div>
      <div class="navbar-end ">
        <div class="navbar-item">
          <div class="button" style="background-color:#E3B53B;border-color:#E3B53B;"><a class="has-text-weight-bold" href="/crear-cuenta" style="color:white;">Hazte cliente</a></div>
        </div>
        <div class="navbar-item" >
          <div class="button has-text-weight-bold" style="background-color:#E3B53B; border-color:#E3B53B; color:white;"><a style="color:white;" href="/loguear">Acceso</a></button>
        </div>
        <div class="navbar-item" >
          <div class="has-text-weight-bold" style="background-color:#E3B53B; border-color:#E3B53B; color:white;">
            @auth
              {{ auth()->user()->nombre }}
            @endauth
          </div>
        </div>
        <div class="navbar-item dropdown is-white dropdown" id="cursor"><span class="navbar-item has-text-weight-bold" style="color:#E3B53B;">Menú</span><span class="icon is-small"><i class="fas fa-bars" style="color:#E3B53B;"></i></span>
          <div class="navbar-dropdown" style="margin-left:-110px;">
            <div class="container">
              <div class="columns" style="background-color:#D7D7D7; font-weight: normal; font-size: 14px; ">
                <div class="column"><a class="navbar-item" href="#">
                    <div class="navbar-content">
                      <p><small>Gestionar cuentas</small></p>
                    </div></a><a class="navbar-item" href="#">
                    <div class="navbar-content">
                      <p><small>Calcular prestamos</small></p>
                    </div></a><a class="navbar-item" href="#">
                    <div class="navbar-content">
                      <p><small>Verificar buró de credito</small></p>
                    </div></a><a class="navbar-item" href="#">
                    <div class="navbar-content">
                      <p><small>Generar reportes de prestamos</small></p>
                    </div></a><a class="navbar-item" href="#">
                    <div class="navbar-content">
                      <p><small>Asignar prestamos</small></p>
                    </div></a><a class="navbar-item" href="#">
                    <div class="navbar-content">
                      <p><small>Asignar tarjetas de debito y credito</small></p>
                    </div></a><a class="navbar-item" href="#">
                    <div class="navbar-content">
                      <p><small>Gestionar area de cobranza</small></p>
                    </div></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="hero is-fullheight">
    <div class="hero-body fondo">
      <div class="cuadro">
        <p class="has-text-centered has-text-weight-bold titulos marg"> Comienza con HSTW</p>
        <p class="has-text-centered textos marg" style="margin-left:15px; margin-right:15px;">En HSTW tratamos de poner al cliente en el centro del negocio, mejorando su experiencia y desarrollando servicios que favorezcan un manejo ágil, fácil y seguro de sus finanzas.</p>
      </div>
    </div>
  </section>
  <section class="hero is-medium">
    <div class="hero-head level">
      <div class="level-item has-text-centered">
        <div class="itemarri">
          <p class="heading itemabajo"> <i class="espacio fas fa-3x far fa-credit-card has-text-warning"></i></p><a class="subtitle">Busco una tarjeta</a>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div class="itemarri">
          <p class="heading itemabajo"> <i class="espacio fas fa-3x fa-money-bill-wave has-text-warning"></i></p><a class="subtitle">Necesito un crédito</a>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div class="itemarri">
          <p class="heading itemabajo"> <i class="espacio fas fa-3x fa-user-alt has-text-warning"></i></p><a class="subtitle ">Quiero una cuenta</a>
        </div>
      </div>
    </div>
  </section>
  <section class="hero is-large fondogris">
    <div style="display:flex;"><a class="sombra cuadroimg has-text-centered" href="/">
        <p class="textos masabajo has-text-weight-bold" style="margin-bottom:10px;">Comienza con HSTW</p>
        <p class="textos2 centrar">Conoce y disfruta los beneficios de los productos y servicios que ponemos a tu disposición.</p>
        <!--div(class="button is-info")//  a(class="has-text-weight-bold") PRUEBA
        --></a>
      <div class="cuad1 has-text-centered">
        <p class="textos has-text-weight-bold">Dinero para cualquier imprevisto</p><i class="espacio fas fa-3x fa-money-bill-wave has-text-warning"></i>
        <p class="textos2 veintes">Apoyo inmediato en el momento indicado.</p><a class="has-text-weight-bold" style="color:white;">Saber más</a>
        <div class="cuad2">
          <p class="textos has-text-weight-bold">Realiza tus pagos</p>
          <p class="textos2 centrar" style="margin-top:20%;">Conoce las opciones que te brindamos para pagar en cualquier parte del pais.</p><a class="has-text-weight-bold" style="color:white;">Saber más</a>
        </div>
      </div>
    </div>
  </section>
  <!--section(class="hero is-fullheight")-->
  <!--  div(class="hero-body fondoaz")-->
  <section class="hero is-medium fondogris">
    <div class="hero-head level">
      <div class="level-item has-text-centered">
        <div class="itemarri">
          <div class="heading"> 
            <div class="circulo itemabajo"><i class="cincuenta fas fa-5x fa-question has-text-danger"></i></div>
          </div><a class="subtitle has-text-weight-bold">Atención al cliente</a>
          <div><a>Contacta con nosotros</a></div>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div class="itemarri">
          <div class="heading "> 
            <div class="circulo itemabajo"><i class="cincuenta fas fa-5x fa-mobile-alt has-text-danger"></i></div>
          </div><a class="subtitle has-text-weight-bold">Aplicacion movil</a>
          <div><a>Contigo desde donde sea</a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="hero is-medium fondoaz">
    <div class="diez"><a href="/"><img src="imagenes/hstw4.png" style="margin-left:5%;width:150px;height:50px;"></a>
      <div class="topo"><a class="izquis has-text-weight-bold cazul sombra">Aviso legal</a><a class="izqui has-text-weight-bold cazul sombra">Mapa del sitio</a><a class="izqui has-text-weight-bold cazul sombra">Aviso de privacidad</a></div>
      <p class="izquis topos mini">© 2019 HSTW Banco, S. A., Institución de Banca Múltiple, Grupo Financiero HSTW Banco, Avenida Paseo de la UTT 510, colonia centro,</p>
      <p class="izquis sopot mini"> código postal 06600, Torreon , Coahuila.</p>
    </div>
    <div class="diez is-overlay">
      <div style="display:flex;margin-top:1890px; margin-left:1100px;">
        <div class="circulin"><a class="espacito"><i class="fab fa-facebook-f" style="color:#D8C021;"></i></a></div>
        <div class="circulin"><a class="espacito"><i class="fab fa-twitter" style="color:#D8C021;"></i></a></div>
        <div class="circulin"><a class="espacito"><i class="fab fa-linkedin-in" style="color:#D8C021;"></i></a></div>
        <div class="circulin"><a class="espacito"><i class="fab fa-instagram" style="color:#D8C021;"></i></a></div>
        <div class="circulin"><a class="espacitos"><i class="fab fa-youtube" style="color:#D8C021;"></i></a></div>
      </div>
      <div style="margin-top:50px; margin-left:995px;"><a class="cazul has-text-weight-bold sombra">Consulta los costos y las comisiones de nuestros productos</a>
        <div class="veintes" style="margin-left:110px;"><a class=" cazul has-text-weight-bold sombra">Creando Oportunidades</a></div>
      </div>
    </div>
  </section><script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="js/main.js"></script>
<script src="js/drop-menu.js"></script>
</body>