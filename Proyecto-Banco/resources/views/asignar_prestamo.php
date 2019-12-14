
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Asignar préstamos</title>
    <link rel="stylesheet" href="css/PR_estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style type="text/css"></style>
    <script src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/tab-modal.js"></script>
    <script type="text/javascript" src="js/tabs.js"></script>
  </head>
  <body class="fondoPR container is-fullhd">
    <section>
      <div class="navbar is-fixed-top navbar-end" style="background-color: #0000009C;">
        <div class="navbar-brand"><a href="/"><img src="imagenes/hstw4.png" style="margin-top:5px;margin-left:50%;width:150px;height:50px;"></a></div>
        <div class="navbar-end ">
          <div class="navbar-item">
            <div class="button" style="background-color:#E3B53B;border-color:#E3B53B;"><a class="has-text-weight-bold" style="color:white;">Hazte cliente</a></div>
          </div>
          <div class="navbar-item">
            <div class="buttons"><a class="button has-text-weight-bold" style="background-color:#E3B53B; border-color:#E3B53B; color:white;">Acceso</a>
              <!--a(class="navbar-item has-text-weight-bold dro5 is-white dropdown" style="color:#E3B53B;") Menú-->
              <!--i(class="espacio fas fa-bars")-->
            </div>
          </div>
          <div class="navbar-item dropdown is-white dropdown" id="cursor"><span class="navbar-item has-text-weight-bold is-white dropdown" style="color:#E3B53B;">Menú</span><span class="icon is-small is-white"><i class="fas fa-bars is-white"></i></span>
            <div class="navbar-dropdown" style=" margin-left: -110px;">
              <div class="container ">
                <div class="columns" style="background-color:#D7D7D7; font-weight: normal; font-size: 14px; ">
                  <div class="column"><a class="navbar-item" href="/gestionar-clientes">
                      <div class="navbar-content">
                        <p><small>Gestionar cuentas</small>
                          <!--i(class="fas fa-angle-right" style="margin-left:83px;")-->
                        </p>
                      </div></a><a class="navbar-item" href="/calculo-prestamos">
                      <div class="navbar-content">
                        <p><small>Calcular prestamos</small>
                          <!--i(class="fas fa-angle-right" style="margin-left:78px;")-->
                        </p>
                      </div></a><a class="navbar-item" href="/I_VerificarBuro">
                      <div class="navbar-content">
                        <p><small>Verificar buró de credito</small>
                          <!--i(class="fas fa-angle-right" style="margin-left:55px;")-->
                        </p>
                      </div></a><a class="navbar-item" href="/I_GenerarReporte">
                      <div class="navbar-content">
                        <p><small>Generar reportes de prestamos</small>
                          <!--i(class="fas fa-angle-right" style="margin-left:20px;")-->
                        </p>
                      </div></a><a class="navbar-item" href="/asignar_prestamo">
                      <div class="navbar-content">
                        <p><small>Asignar prestamos</small>
                          <!--i(class="fas fa-angle-right" style="margin-left:82px;")-->
                        </p>
                      </div></a><a class="navbar-item" href="/Tarjetas">
                      <div class="navbar-content">
                        <p><small>Asignar tarjetas de debito y credito</small></p>
                      </div></a><a class="navbar-item" href="/Cobranza">
                      <div class="navbar-content">
                        <p><small>Gestionar area de cobranza      </small></p>
                      </div></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="notification" id="noti0">
          <h1 class="has-text-weight-bold">Asignar préstamo</h1>
        </div>
      </div>
      <div id="container1">
        <h1 class="text is-1" id="titulos" style="font-size:24px;">Beneficios</h1>
        <h2 id="texto" style="font-size:18px; text-align:left; margin-left: 40px;">Logra tus metas y proyectos, nosotros te apoyamos.</h2>
        <h3 id="texto">
          <ul style="list-style-type: circle;">
            <li style="margin-left: 40px; margin-top:17px; text-align:justify; font-size:14px; font-weight: normal; line-height: 1.5; font-style: normal; font: normal;">Aprovecha un crédito sin penalización por prepago <br> o liquidación anticipada. Puedes pagar antes de la <br> fecha límite sin ningún cargo extra.  </li>
            <li style="margin-left: 40px; margin-top:17px; text-align:justify; font-size:14px; font-weight: normal; line-height: 1.5; font-style: normal; font: normal;">Paga cómodamente, ya que el cargo se hace a tu <br> cuenta de depósito</li>
          </ul>
        </h3>
        <!-- ModalModalModalModalModalModalModalModalModalModalModal-->
        <div class="modal" id="myModal">
          <div class="modal-background"></div>
          <div class="modal-card" id="tam">
            <header class="modal-card-head">
              <p class="modal-card-title has-text-weight-bold">Asignar préstamo</p>
              <button class="delete" aria-label="close" data-bulma-modal="close"></button>
            </header>
            <!-- Modal-contenido-->
            <section class="modal-card-body">
              <section class="hero is-warning">
                <div class="hero-foot">
                <nav class="tabs is-boxed is-fullwidth ">
                  <div class="container">
                    <ul>
                      <li class="tab is-active" onclick="openTab(event,'datos-personales')"><a >Datos personales</a></li>
                      <li class="tab" onclick="openTab(event,'rfc')"><a >RFC</a></li>
                      <li class="tab" onclick="openTab(event,'num')"><a >Número de cliente</a></li>
                      <li class="tab" onclick="openTab(event,'person-data')"><a >Datos personales</a></li>
                    </ul>
                  </div>
                </nav>
                </div>
              </section>

              <div class="container section">
                <form class="" action="pablotest" method="POST">
                  <div id="datos-personales" class="content-tab" >
                    <div class="field">
                      <h1 class="control has-text-weight-bold">Ingrese su número de cliente:</h1>
                      <input class="input inputs is-primary" type="text" name="num" placeholder="Número de cliente" style="width:300px;"required>
                      <h1 class="control has-text-weight-bold">Ingrese su CURP:</h1>
                      <input class="input inputs is-primary" type="text" name="curp"  placeholder="CURP" style="width:300px;" required>
                      <h1 class="control has-text-weight-bold">Ingrese su RFC:</h1>
                      <input class="input inputs is-primary" type="text" name="rfc" placeholder="RFC" style="width:300px;" required><br>
                      <button class="button is-success"  type="submit" id="btn2" style="margin-top:13px; margin-left:5px;">Realizar búsqueda</button>

                    </div>

                  </div>
                </form>
                <form class="" action="pablorfc.php" method="post">
                  <div id="rfc" class="content-tab " style="display:none" >
                    <h1 class="control has-text-weight-bold">Ingrese su RFC:</h1>
                    <div class="field">
                      <div>
                        <input class="input inputs is-primary" type="text" name="rfc" placeholder="RFC" style="width:300px;" required>
                        <button class="button is-success" type="submit" id="btn2" style="margin-top:13px; margin-left:5px;">Realizar búsqueda</button>

                      </div>
                    </div>
                  </div>
                </form>
                <form class="" action="pablotest.php" method="post">
                  <div id="num" class="content-tab" style="display:none">
                    <h1 class="control has-text-weight-bold">Ingrese su número de cliente:</h1>
                    <div class="field">
                      <div>
                        <input class="input inputs is-primary" type="search" placeholder="Número de cliente" style="width:300px;"><button class="button is-success" type="submit" id="btn2" style="margin-top:13px; margin-left:5px;">Realizar búsqueda</button>

                      </div>
                    </div>
                  </div>
                </form>
                <form class="" action="pablotest.php" method="post">
                  <div id="person-data" class="content-tab" style="display:none">
                    <h1 class="control has-text-weight-bold">Ingrese sus datos personales:</h1>
                    <div class="">
                      <p class="">Nombre(s)*</p>
                      <input class="input cofondo" type="text" name="Nombre" placeholder="Nombres" required="required"/>
                      <p class="">Primer Apellido*</p>
                      <input class="input cofondo" type="text" name="P_Apellido" placeholder="Primer Apellido" required="required"/>
                      <p class="">Segundo Apellido*</p>
                      <input class="input cofondo" type="text" name="M_Apellido" placeholder="Segundo Apellido" required="required"/>
                      <div class="field ">
                        <p class="">Dia de nacimiento*</p>
                        <div class="control " name="Dia" required="required">
                          <div class="select cofondo" placeholder="Dia">
                            <select name="Dia">
                              <option value="">Dia</option>
                              <option value="">1</option>
                              <option value="">2</option>
                              <option value="">3</option>
                              <option value="">4</option>
                              <option value="">5</option>
                              <option value="">6</option>
                              <option value="">7</option>
                              <option value="">8</option>
                              <option value="">9</option>
                              <option value="">10</option>
                              <option value="">11</option>
                              <option value="">12</option>
                              <option value="">13</option>
                              <option value="">14</option>
                              <option value="">15</option>
                              <option value="">16</option>
                              <option value="">17</option>
                              <option value="">18</option>
                              <option value="">19</option>
                              <option value="">20</option>
                              <option value="">21</option>
                              <option value="">22</option>
                              <option value="">23</option>
                              <option value="">24</option>
                              <option value="">25</option>
                              <option value="">26</option>
                              <option value="">27</option>
                              <option value="">28</option>
                              <option value="">29</option>
                              <option value="">30</option>
                              <option value="">31</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="field ">
                        <p class="">Mes de nacimiento*</p>
                        <div class="control " name="Mes">
                          <div class="select cofondo">
                            <select name="Mes">
                              <option type="" value="">Mes</option>
                              <option value="">Enero</option>
                              <option value="">Febrero</option>
                              <option value="">Marzo</option>
                              <option value="">Abril</option>
                              <option value="">Mayo</option>
                              <option value="">Junio</option>
                              <option value="">Julio</option>
                              <option value="">Agosto</option>
                              <option value="">Septiembre</option>
                              <option value="">Octubre</option>
                              <option value="">Noviembre</option>
                              <option value="">Diciembre</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="">
                        <p class="">Año de nacimiento*</p>
                        <input class="input cofondo" type="text" name="Año" placeholder="Año" required="required"/>
                      </div><br/>
                      <button class="button is-success" type="submit" id="btn2" style="margin-top:13px; margin-left:5px;">Realizar búsqueda</button>
                      <button class="button is-warning is-light has-text-weight-bold" type="reset" id="" style="margin-top:13px; margin-left:5px;">Reiniciar valores</button>
                    </div>
                  </div>
                </form>
              </div>
            </section>
            <footer class="modal-card-foot">
              <!--<button class="button is-success" type="submit" id="btn2">Realizar búsqueda</button>-->
              <button class="button is-danger is-medium is-fullwidth " data-bulma-modal="close" style=" ">Cancelar </button>
            </footer>
          </div>
        </div>
        <button class="button is-primary" id="btn">Asignar préstamo </button>
      </div>
      <div class="container is-fluid " id="container2"></div>
    </section>
    <section>
      <div class="container">
        <div class="notification" id="noti1"><i class="icon is-large  fas fa-dollar-sign"></i>
          <h1 id="notis">Dinero para cualquier imprevisto</h1>
          <p style="margin-top: 10px;">Apoyo inmediato en el momento indicado.</p><a class="has-text-weight-bold" href="/" style="color:#1d73b2;">Saber más</a>
        </div>
        <div class="notification" id="noti2"><i class="icon is-large  fas fa-store"></i>
          <h1 id="notis">Desarrolla tu negocio</h1>
          <p style="margin-top: 10px;">Comienza un negocio propio u obtén el empuje para lograr mayores objetivos.</p><a class="has-text-weight-bold" href="/" style="color:#1d73b2;">Saber más</a>
        </div>
        <div class="notification" id="noti3"><i class="icon is-large  fas fa-coins"></i>
          <h1 id="notis" style="margin-top:-25px;">Invierte en tu futuro</h1>
          <p style="margin-top: 10px;">Conoce las distintas opciones de ahorro e inversión y construye un futuro tranquilo para ti y tus seres...</p><a class="has-text-weight-bold" href="/" style="color:#1d73b2;">Saber más</a>
        </div>
      </div>
      <div class="container is-fluid">
        <div class="notification" id="noti4">
          <h1 class="has-text-weight-bold" id="" style="color: black; padding-top:30px; text-align: center; font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif; font-size: 25px;">Documentos de interés de Préstamo Personal Inmediato</h1>
          <ul style="margin-top: 80px; margin-left:100px; padding-left:180px; padding-bottom:30px;"><i class="icon fas fa-file-contract"></i>
            <li style="display:inline; font-size:20px; padding-left:9px; padding-right:93px; align:center;">Solicitud de crédito</li><i class="icon fas fa-file-signature"></i>
            <li style="display:inline; font-size:20px; padding-left:9px; padding-right:93px; align:center;">Contrato</li><i class="icon fas fa-file"></i>
            <li style="display:inline; font-size:20px; padding-left:9px; padding-right:93px; align:center; text-align: center">Ficha técnica</li>
          </ul>
        </div>
      </div>
      <div class="container is-fullhd">
        <div id="div3">
          <h1>¿Cuáles son<br> los<br> requisitos?</h1>
        </div>
        <div id="div4">
          <div class="columns">
            <div class="column">
              <h1 style="padding-left:60px; padding-top:40px;color: #e3b53b; font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif; font-size:24px;" id="">Solicitante</h1>
              <ul style="list-style-type: circle; padding-left:60px; padding-top:20px; line-height: 1.5;">
                <li>Ser cliente persona física o físicas con actividad empresarial</li>
                <li>Tener una edad mínima de 18 y máxima de 84 años; tu edad + el plazo del crédito no debe ser mayor a 84 años con 364 días al momento del otorgamiento</li>
                <li>Contar con buen historial crediticio y con capacidad de pago</li>
              </ul>
            </div>
            <div class="column">
              <h1 style="padding-left:60px; padding-top:40px;color: #e3b53b; font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif;font-size:24px;" id="">Documentos</h1>
              <ol style="list-style-type: circle; padding-left:60px; padding-top:20px;">
                <li>Identicación oficial vigente, (INE, pasaporte o cédula profesional, con máximo 10 años de antigüedad)</li>
                <li>Comprobante de domicilio, no mayor a 3 meses de antigüedad recibo de:</li>
                <ul style="list-style-type: square; padding-left:60px; padding-top:10px;">
                  <li>luz, agua, predial, teléfono fijo o estado de cuenta cualquier institución bancaria</li>
                </ul>
                <ul style="list-style-type: circle; padding-left:60px; padding-top:10px;"></ul>
                <li>Si eres extranjero, necesitas presentar:
                  <ul style="list-style-type: square; padding-left:60px; padding-top:10px;">
                    <li>tarjeta de residente temporal o permanente</li>
                    <li>forma migratoria FM2 o FM3</li>
                  </ul>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="container is-fullhd">
        <div id="div5">
          <h1>¿Cuáles son los<br> costos y<br> comisiones?  </h1>
        </div>
        <div id="div6">
          <div class="columns">
            <div class="column">
              <h1 style="padding-left:60px; padding-bottom:25px; padding-top:40px; font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif;font-size:18px;">Costo Anual Total CAT</h1>
              <p style="padding-left:60px; font-size:22px;font-weight: bold;">35.2%</p>
              <p style="padding-left:60px; font-size:22px;">CAT promedio<br> ponderado</p>
              <p style="padding-left:60px; padding-top:30px; font-size:14px;">Sin IVA informativo. Fecha de<br> cálculo: <b>06 de agosto de 2019</b>.<br> Vigencia de la oferta: <b>06 de febrero de 2020</b>.</p>
              <p style="padding-left:60px; padding-top:30px; font-size:14px;">Conoce más información acerca del<br> Costo Anual Total <a>aquí</a>.</p>
            </div>
            <div class="column">
              <!--i(class="icon fas fa-dollar-sign" style="padding-left:30px; padding-top:30px;")-->
              <h1 style="padding-left:60px; padding-bottom:25px; padding-top:40px; font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif;font-size:18px;">Tasa de interés anual fija</h1>
              <p style="padding-left:60px; font-size:22px;font-weight: bold;">25.75% hasta 45.75% sin IVA</p>
              <p style="padding-left:60px; padding-top:60px; font-size:14px;">Esto depende del resultado de tu evaluación de crédito.</p>
            </div>
            <div class="column">
              <h1 style="padding-left:60px; padding-bottom:25px; padding-top:40px; font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif;font-size:18px;">Comisión por apertura</h1>
              <p style="padding-left:60px; font-size:22px;font-weight: bold;">2.5% + IVA</p>
              <p style="padding-left:60px; font-size:22px;font-weight: bold;">Sobre el importe dispuesto</p>
              <p style="padding-left:60px; padding-top:30px; font-size:14px;">Se cobrará por única vez al contratar el crédito. </p>
            </div>
          </div>
        </div>
      </div>
      <!--div.container
      //div(class="card")
        //div(class="card-image")
          //figure(class="image ")
            //img(src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image")
        //div(class="card-content")
          //div(class="media")
            //div(class="media-content")
              //p(class="title is-4") John Smith
              //p(class="subtitle is-6") @johnsmith
            //div(class="content") Lorem ipsum dolor sit amet, consectetur

      -->
      <div class="container is-fluid" style="background-color:#fdfefe; margin-top:80px;">
        <div class="columns">
          <div class="column">
            <h1 style="color: #000000;font-weight: bold;padding-left:20px; padding-bottom:25px; padding-top:40px; font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif;font-size:18px;">Centro de Ayuda</h1><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Aviso de cambio de marca</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Aclaraciones</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Ayuda urgente</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Consideraciones técnicas</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Quejas y reclamos</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Consejos de seguridad</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Buró de Entidades Financieras</small></p>
              </div></a>
          </div>
          <div class="column">
            <h1 style="color: #000000;font-weight: bold;padding-left:20px; padding-bottom:25px; padding-top:40px; font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif;font-size:18px;">Información Corporativa</h1><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Acerca de Grupo HSTW Banco</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Educación Financiera</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Tipo de cambio e información financiera</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Empleo</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Sala de prensa</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Estudios económicos</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Diccionario financiero</small></p>
              </div></a>
          </div>
          <div class="column">
            <h1 style="color: #000000;font-weight: bold;padding-left:0px; padding-bottom:25px; padding-top:40px; font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif;font-size:18px;">Otros sitios HSTW Banco</h1><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Fundación HSTW Banco</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Información a inversionistas</small></p>
              </div></a><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Casa de Bolsa</small></p>
              </div></a>
          </div>
          <div class="column">
            <h1 style="color: #000000;font-weight: bold;padding-left:0px; padding-bottom:25px; padding-top:40px; font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif;font-size:18px;">Mejor Banco Digital en México 2019</h1>
            <p style="font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif;font-size:15px;"><b>HSTW Banco</b> recibió el reconocimiento de "Mejor Banco Digital en México 2019" en la pasada edición de los premios <b>World Finance Banking Awards</b> </p><a class="navbar-item" href="#">
              <div class="navbar-content">
                <p><small style="color:#1d73b5;font-weight: bold;">Trabajando por un sitio accesible para todos.             </small></p>
              </div></a>
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
      <div class="diez">
        <div style="display:flex;margin-top:-300px; margin-left:1080px;">
          <div class="circulin"><a class="espacito"><i class="fab fa-facebook-f" style="color:#D8C021;"></i></a></div>
          <div class="circulin"><a class="espacito"><i class="fab fa-twitter" style="color:#D8C021;"></i></a></div>
          <div class="circulin"><a class="espacito"><i class="fab fa-linkedin-in" style="color:#D8C021;"></i></a></div>
          <div class="circulin"><a class="espacito"><i class="fab fa-instagram" style="color:#D8C021;"></i></a></div>
          <div class="circulin"><a class="espacitos"><i class="fab fa-youtube" style="color:#D8C021;"></i></a></div>
        </div>
        <div style="margin-top:50px; margin-left:995px;"><a class="cazul has-text-weight-bold sombra">Consulta los costos y las comisiones de nuestros productos</a></div>
        <div id="veintes2" style="margin-left:110px;"><a class="cazul has-text-weight-bold sombra">Creando Oportunidades      </a></div>
      </div>
    </section>
  </body>
  <script src="js/drop-menu.js"></script>
  <script src="js/modal1.js"> </script>
  <script src="js/tab-modal1.js"> </script>
</html>
