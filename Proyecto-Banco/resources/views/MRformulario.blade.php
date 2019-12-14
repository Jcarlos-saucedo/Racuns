
<rio class="blade php"></rio>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-sacle=1.0, user-scalabe=no, maximun-scale=1.0, minimun-scale=1.0"/>
    <meta http-equiv="X-UA-Comátible" content="ie=edge"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/MRestilos.css"/>
    <link rel="stylesheet" type="text/css" href="css/fonts.css"/>
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <script type="text/javascript" src="/node_modules/bulma-extensions/bulma-iconpicker/dist/bulma-iconpicker.min.js"></script>
    <script src="js/javascripts.js"></script>
    <script src="js/jquery.slides.js"></script>
  </head>
  <body class="has-navbar-fixed-top">
    <nav role="navigation" aria-label="main navigation" id="nav" class="navbar is-fixed-top">
      <div class="navbar-brand"><a href="/"><img src="imagenes/hstw4.png" style="margin-top:5px;margin-left:50%;width:150px;height:50px;"></a></div>
      <div class="navbar-end ">
        <div class="navbar-item">
          <div class="button" style="background-color:#E3B53B;border-color:#E3B53B;"><a class="has-text-weight-bold" href="/Credito" style="color:white;">Credito</a></div>
        </div>
        <div class="navbar-item">
          <div class="button" style="background-color:#E3B53B;border-color:#E3B53B;"><a class="has-text-weight-bold" href="/Debito" style="color:white;">Debito</a></div>
        </div>
        <div class="navbar-item" >
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"></form>
        </div>
        <div class="navbar-item dropdown is-white dropdown" id="cursor"><span class="navbar-item has-text-weight-bold" style="color:#E3B53B;">Menú</span><span class="icon is-small"><i class="fas fa-bars" style="color:#E3B53B;"></i></span>
          <div class="navbar-dropdown" style="margin-left:-110px;">
            <div class="container">
              <div class="columns" style="background-color:#D7D7D7; font-weight: normal; font-size: 14px; ">
                  <div class="column">
                    <a class="navbar-item" href="/gestionar-clientes">
                      <div class="navbar-content">
                        <p>
                          <small>Gestionar cuentas</small>
                        </p>
                      </div>
                    </a>
                    <a class="navbar-item" href="/calcular-prestamos">
                      <div class="navbar-content">
                        <p>
                          <small>Calcular prestamos</small>
                        </p>
                      </div>
                    </a>
                    <a class="navbar-item" href="/I_VerificarBuro">
                      <div class="navbar-content">
                        <p><small>Verificar buró de credito</small></p>
                      </div>
                    </a>
                    <a class="navbar-item" href="/I_GenerarReporte">
                      <div class="navbar-content">
                        <p><small>Generar reportes de prestamos</small></p>
                      </div>
                    </a>
                    <a class="navbar-item" href="/asignar_prestamo">
                      <div class="navbar-content">
                        <p><small>Asignar prestamos</small></p>
                      </div>
                    </a>
                    <a class="navbar-item" href="/Tarjetas">
                      <div class="navbar-content">
                        <p><small>Asignar tarjetas de debito y credito</small></p>
                      </div>
                    </a>
                    <a class="navbar-item" href=/Cobranza>
                      <div class="navbar-content">
                        <p><small>Gestionar area de cobranza</small></p>
                      </div>
                    </a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="container is-fullhd"><img src="../imagenes/business.jpg" id="busines"/></div>
    <div id="txt" class="container is-fullhd">
      <p style="font-size:50px">Nuestro cliente más importante, <br> es tuyo.</p>
    </div>
    <div id="cont1" class="container is-fullhd">
      <button id="bton" class="button"><a href="#Servicio" style="color:gold">Servicios de crédito</a></button>
      <button id="bton" class="button"><a href="#Care" style="color:gold">CareCredit</a></button>
      <button id="bton" class="button"><a href="#Programa" style="color:gold">Programa de lealtad</a></button>
      <button id="bton" class="button"><a href="#HSTW" style="color:gold">HSTW Connect</a></button>
    </div>
    <div id="cont2" class="container is-fullhd">
      <div class="columns">
        <div id="tl" style="text-align:justify" class="column">
          <h1 style="font-size:24px; color:gold" id="Servicio">Servicios de credito</h1>
          <hr/>
          <p>Conoces a tus clientes; Conocemos sus patrones de compra. <br> Los pagos con tarjeta de crédito al consumidor están aumentando <br> rápidamente. Como el proveedor más grande de tarjetas de crédito <br> de marca privada en México. En función del volumen de compra y <br> las cuentas por cobrar, tenemos la experiencia para ayudarlo a ofrecer <br> un programa de crédito que atraiga a sus clientes y sus resultados. <br> Desde minoristas nacionales hasta pilares mundiales, trabajamos con <br> empresas de todos los tamaños. Nuestros programas de tarjetas <br> de crédito a medida involucran a sus clientes donde compran: en la tienda, <br> en línea o a través del móvil. Hemos invertido en plataformas <br> que permiten decisiones de crédito rápidas y pagos en línea fáciles. <br> También ofrecemos financiamiento promocional para compras <br> importantes de los consumidores, así como programas de lealtad <br> que impulsan las compras repetidas y la afinidad de marca. <br> Cuidamos a sus clientes, porque ellos también son nuestros clientes. <br><br> Te ayudamos a ofrecer a tus clientes: <br><br> <li>Tarjetas de crédito de marca privada <br><br> <li>Tarjetas duales y tarjetas de crédito de marca compartida de uso general <br><br> <li>Préstamos a plazos</p><br>
          <p>Todo con opciones de financiamiento promocional para satisfacer sus necesidades.</p><br>
          <p>Nuestra experiencia es tan profunda como amplia: <br> trabajamos con minoristas nacionales y regionales, comerciantes locales, <br> fabricantes, grupos de compra, asociaciones de la industria <br> y proveedores de servicios de salud en muchos mercados, incluidos: <br> atención automotriz, muebles y pisos para el hogar, electrodomésticos <br> y productos electrónicos, joyas , Mejoras para el hogar y más. <br> <br> Integración profunda de socios. Análisis de datos. <br> Experiencia en marketing. Ofrecemos un amplio conjunto de servicios <br> para ayudarlo a hacer crecer su negocio. Acceda a nuestras <br> herramientas del Centro de negocios que cubren ventas, marketing, <br> capacitación del personal e incluso tendencias de investigación <br> del consumidor cuando las necesite. La duración promedio de nuestra <br> relación con nuestros socios actuales de Retail Card es de 19 años,<br> y estamos orgullosos de ayudar a impulsar su crecimiento.</p><br/>
        </div>
        <div id="tl2" class="column"><img src="../imagenes/negrito.jpg" id="negro"/></div>
      </div>
    </div>
    <div id="tarj" class="container is-fullhd"></div>
    <div id="card1" class="card has-text-centered"><strong style="font-size:20px">PARA PROVEEDORES DE SALUD</strong><br/>
      <div class="card-content"><img src="../imagenes/care.png"/><br/><br/>
      </div>
    </div>
    <div id="card2" class="card has-text-centered"><strong style="font-size:20px">PARA MINORISTAS</strong>
      <div class="card-content">
        <p>Etiqueta privada y tarjetas de crédito de marca compartida. Préstamos a plazos.</p><br/>
      </div>
    </div>
    <div id="healt" class="container is-fullhd has-text-centered"><strong id="Care">Para tú salud</strong></div>
    <div id="cont3" class="container is-fullhd">
      <div class="columns">
        <div id="tl" style="text-align:justify" class="column">
          <h1 style="font-size:24px; color:gold">Cuidado sin compromiso: eso es CareCredit.</h1>
          <hr/>
          <p>Acceso a la atención de pacientes. Mejores negocios para proveedores.<br> CareCredit ofrece a sus pacientes calificados una forma flexible<br> de financiar o presupuestar los procedimientos que necesitan,<br> sin demorar los tratamientos que recomiendan.</p><br>
          <p>La atención adecuada, de inmediato. CareCredit es un proveedor<br> líder de financiamiento promocional para consumidores que hace posible<br> la atención hoy en día. Estamos aquí para ayudar a facilitar que las familias<br> accedan a la atención que desean, para que puedan verse<br> y sentirse lo mejor posible.</p><br>
          <p>CareCredit ha atendido más de 20 millones de cuentas<br> desde nuestros inicios. La tarjeta ofrece una línea rotativa de crédito<br> y opciones de financiamiento para que los pacientes puedan tomar<br> las decisiones de salud, bienestar y cuidado personal que sean<br> mejores para ellos. CareCredit puede ser utilizado por todos<br> en la familia para odontología, tratamientos cosméticos, anteojos,<br> audífonos, cuidado de mascotas y mucho más.</p><br>
          <p>CareCredit es aceptado en más de 210,000 proveedores y tiendas<br> minoristas enfocadas en la salud. Podemos ayudarlo a racionalizar<br> su negocio, dándole más tiempo para concentrarse en su práctica</p><br>
          <p>Aprenda cómo CareCredit: </p>
          <li>Ofrece opciones de financiación especiales que los pacientes desean.</li>
          <li>Ayuda a reducir la necesidad de posponer o estirar el tratamiento.</li>
          <li>Permite que su consultorio reciba el pago puntualmente,<br> sin responsabilidad por incumplimiento de pago del paciente</li><br/>
        </div>
        <div id="tl2" class="column"><img src="../imagenes/dra.jpg" id="dra"/></div>
      </div>
    </div>
    <div id="tarj2" class="container is-fullhd"></div>
    <div id="card3" class="card has-text-centered"><strong style="font-size:20px">BUENO PARA TUS PACIENTES. BUENO PARA TI</strong>
      <div class="card-content">
        <p>Inicia con CareCredit hoy mismo.</p>
      </div>
    </div>
    <div id="cont3" class="container is-fullhd">
      <div class="columns">
        <div id="tl" style="text-align:justify" class="column">
          <h1 style="font-size:24px; color:gold" id="Programa">Programa de Lealtad</h1>
          <hr/>
          <p>A tus clientes les gustas, pero queremos que estén locos por ti.<br> Cada transacción es una oportunidad para aumentar la lealtad<br> de su marca y la forma en que interactúa con sus clientes<br> es más importante que nunca.</p><br>
          <p>La lealtad se encuentra con la flexibilidad. Nuestros programas<br> de lealtad agregan valor para sus clientes con las funciones<br> que desean. Le ayudaremos a crear ofertas diferenciadas,<br> desde tangibles hasta experienciales y más.<br> Cómo funciona todo depende de usted.</p><br>
          <p>Nuestros equipos de clientes dedicados ofrecen la gama<br> completa de nuestra experiencia. Programas de marketing y<br> riesgo personalizados; análisis sofisticado; optimización basada<br> en resultados. Las plataformas que hemos construido involucran a<br> sus clientes donde quieren comprar, en la tienda, en línea<br> o en movimiento, con un mensaje de marca unificado diseñado<br> para que sigan regresando.</p><br><strong style="color:white">¿Listo para una relación de siguiente nivel? Nosotros te llevaremos allí.</strong><br/><br/>
        </div>
        <div id="tl2" class="column"><img src="../imagenes/ruco.jpg" id="don"/></div>
      </div>
    </div>
    <div id="cont3" class="container is-fullhd">
      <div class="columns">
        <div id="tl2" class="column"><img src="../imagenes/rata.jpg" id="rat"/></div>
        <div id="tl" style="text-align:justify" class="column">
          <div container="container" is-fullhd="is-fullhd">
            <h1 style="font-size:24px; color:gold" id="HSTW">HSTW Connect</h1>
            <hr/>
            <p>Nuestra experiencia va más allá del crédito. HSTW tiene una amplia<br> experiencia en marketing, liderazgo y operaciones. HSTW Connect<br> es un programa de valor agregado donde compartimos la experiencia<br> de HSTW en áreas sin crédito.</p><br>
            <p>Aproveche nuestra riqueza de conocimiento. Este programa<br> único ofrece conocimiento y herramientas que pueden ayudarlo a crecer,<br> liderar y operar su negocio.</p><br>
            <p>¿Cómo podemos ayudarte? Los servicios de HSTW Connect se brindan<br> a través de una variedad de canales: compromisos de intercambio<br> de mejores prácticas uno a uno, proyectos de consultoría, seminarios web<br> y eventos multicliente, así como acceso a nuestro portal en línea.</p><br/>
          </div>
        </div>
      </div>
    </div>
    <div id="tarj3" class="container is-fullhd has-text-centered">
      <p style="font-size:30px">DESTACADOS HSTW CONNECT</p><br/>
      <div class="columns">
        <div class="column"><img src="../imagenes/grow.png"/>
          <p>Crece</p>
          <p>Análisis de marketing y experiencia en investigación para ayudarlo a impulsar el crecimiento del negocio.</p>
        </div>
        <div class="column"><img src="../imagenes/lead.png"/>
          <p>Dirige</p>
          <p>Herramientas para liderar su organización y desarrollarse como líder.</p>
        </div>
        <div class="column"><img src="../imagenes/operate.png"/>
          <p>Opera      </p>
          <p>Las mejores prácticas en torno a la estrategia comercial y la optimización de costos.</p>
        </div>
      </div>
    </div>
    <div id="seccion" class="container is-fullhd">
      <section class="hero is-medium">
        <div class="diez"><a href="/"><img src="../imagenes/hstw4.png" style="margin-left:5%;width:150px;height:50px;"></a>
          <div class="topo"><a class="izquis has-text-weight-bold sombra">Aviso legal</a><a class="izqui has-text-weight-bold sombra">Mapa del sitio</a><a class="izqui has-text-weight-bold sombra">Aviso de privacidad</a></div>
          <p class="izquis topos mini">© 2019 HSTW Banco, S. A., Institución de Banca Múltiple, Grupo Financiero HSTW Banco, Avenida Paseo de la UTT 510, colonia centro,</p>
          <p class="izquis sopot mini"> código postal 06600, Torreon , Coahuila.</p>
        </div>
        <div class="diez is-overlay">
          <div style="display:flex;margin-left:1100px;">
            <div class="circulin"><a class="espacito"><i class="fab fa-facebook-f" style="color:#D8C021;"></i></a></div>
            <div class="circulin"><a class="espacito"><i class="fab fa-twitter" style="color:#D8C021;"></i></a></div>
            <div class="circulin"><a class="espacito"><i class="fab fa-linkedin-in" style="color:#D8C021;"></i></a></div>
            <div class="circulin"><a class="espacito"><i class="fab fa-instagram" style="color:#D8C021;"></i></a></div>
            <div class="circulin"><a class="espacitos"><i class="fab fa-youtube" style="color:#D8C021;"></i></a></div>
          </div>
          <div style="margin-top:50px; margin-left:995px;"><a class=" has-text-weight-bold sombra">Consulta los costos y las comisiones de nuestros productos</a>
            <div class="veintes" style="margin-left:110px;"><a class=" has-text-weight-bold sombra">Creando Oportunidades</a></div>
          </div>
        </div>
      </section>
      
    </div>
    
    <script src="js/main.js"></script>
    <script src="js/drop-menu.js"></script>
  </body>
</html>
