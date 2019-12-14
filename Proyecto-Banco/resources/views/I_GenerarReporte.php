
<!DOCTYPE html>
<html lang="es">
  <head></head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script defer="defer" src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" width="28" height="28"></script>
  <link rel="stylesheet" type="text/css" href="css/HSTW.css"/>
  <script type="text/javascript" src="js/HSTW.js"></script><script src="https://unpkg.com/vue/dist/vue.js"></script>
  <script src="js/drop-menu.js"></script>
<script src="js/main.js"></script>
  <title>Generar reporte</title>
<body class="bg">
  <section>
      
    <div class="navbar navbar-end" style="background-color: #0000009c;">
      <div class="navbar-brand"><a href="/"><img src="Imagenes/logo.png" style="margin-top:5px;margin-left:50%;width:150px;height:50px;"></a></div>
      <div class="navbar-end ">
        <div class="navbar-item" >
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"></form>
        </div>
       
        <div class="navar-item dropdown is-white dropdown" id="cursor"><span class="navbar-item has-text-weight-bold" style="color:#E3B53B;">Menú</span><span class="icon is-small"><i class="fas fa-bars" style="color:#E3B53B;"></i></span>
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
    </div>
      
  </section>
  <section id="pop">
    <ul class="tabs" style="padding-top:0%;">
      <li class="tab-link current Le" data-tab="tab-1">DATOS PERSONALES</li>
      <li class="tab-link Le" data-tab="tab-2">CURP</li>
      <li class="tab-link Le" data-tab="tab-3">RFC</li>
      <li class="tab-link Le" data-tab="tab-4">NUMERO DE CLIENTE</li>
    </ul>
    <div>
      <div class="tab-content current" id="tab-1">
        <form action="/pd" method="POST">
          <div class="ContainerA2" style="height: 35%;">
            <div class="DivA">
              <p class="Lb Le">Nombre(s)*</p>
              <input class="input BotonA cofondo Lc" type="text" name="Nombre" placeholder="Nombres" value=""required="required"/>
              <div class="field BotonA">
                <br>
                <p class="Lb Le">Dia de nacimiento*</p>
                <input class="input BotonA cofondo Lc"  type="text" name="Ono" Value="" placeholder="00-00-0000" required="required"/><br/>
              </div>
            </div>
          <br>
          <input class="button is-medium BotonB" title="button" type="submit" value="Buscar"/>
          </div>
          <div class="containertra"></div>
        </form>
      </div>
    </div>
    <div>
      <div class="tab-content" id="tab-2">
        <form action="/pd" method="post">
          <div class="ContainerA2">
            <div class="DivA">
              <p class="Lb">CURP*</p>
              <input class="input BotonA cofondo" type="text" name="CURP" placeholder="CURP" Required="Required"/>
            </div><br/>
            <input class="button is-medium BotonB" title="button" type="submit" value="Buscar"/><br/><br/>
          </div>
          <div class="containertra"></div>
        </form>
      </div>
    </div>
    <div>
      <div class="tab-content" id="tab-3">
        <form action="/pd" method="post">
          <div class="ContainerA2">
            <div class="DivA">
              <p class="Lb">RFC*</p>
              <input class="input BotonA cofondo" type="text" name="RFC" placeholder="RFC" Required="Required"/>
            </div><br/>
           <input class="button is-medium BotonB" title="button" type="submit" value="Buscar"/><br/><br/>
         </div>
          <div class="containertra"></div>
       </form>
      </div>
    </div>
    <div>
      <div class="tab-content" id="tab-4">
        <div class="ContainerA2">
          <form action="/pd" method="post">
            <div class="DivA">
              <p class="Lb">NUMERO DE CLIENTE*</p>
              <input class="input BotonA" type="text" name="text" placeholder="RFC" required="required"/>
            </div><br/>
            <input class="button is-medium BotonB" type="submit" value="Buscar"/><br/><br/>
        </div>
            <div class="containertra"></div>
        </form>
      </div>
    </div>
    <section class="hero is-medium fondoaz">
      <div class="diez"><a href="/"><img src="imagenes/hstw4.png" style="margin-left:5%;width:150px;height:50px;"/></a></div>
      <div class="topo"><a class="izquis has-text-weight-bold cazul sombra">Aviso legal</a><a class="izqui has-text-weight-bold cazul sombra">Mapa del sitio</a><a class="izqui has-text-weight-bold cazul sombra">Aviso de privacidad</a>
        <p class="izquis topos mini">© 2019 HSTW Banco, S. A., Institución de Banca Múltiple, Grupo Financiero HSTW Banco, Avenida Paseo de la UTT 510, colonia centro,</p>
        <p class="izquis sopot mini"> código postal 06600, Torreon , Coahuila.</p>
      </div>
    </section>
  </section>
</body>
<script src="js/drop-menu.js"></script>
</html>