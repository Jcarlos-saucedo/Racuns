<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport", content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible", content="ie-edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/JC_estilo.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" width="28" height="28"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <title>HSTW Banco | Crear cuenta</title>
</head>

   
<body>
    <section>
        <div class="navbar is-fixed-top navbar-end" style="background-color: #0000009c;">
            <div class="navbar-brand">
                <a href="/">
                    <img src="imagenes/hstw4.png" style="margin-top:5px;margin-left:50%;width:150px;height:50px;">
                </a>
            </div>
            <div class="navbar-end ">
                <div class="navbar-item" id="root">
                    <button class="button has-text-weight-bold" style="background-color:#E3B53B; border-color:#E3B53B; color:white;" @click="showLoginModal=true">Acceso</button> 
                    <my-modal v-show="showLoginModal" @close='showLoginModal=false'>   
                    
                    </my-modal>
                </div>
                <div class="navbar-item is-hoverable is-mega">
                    <a class="navbar-item has-text-weight-bold" style="color:#E3B53B;">Menú
                        <i class="espacio fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="cajon">
            <form action="/register" method="POST" id="form1">
                <p class="title has-text-weight-bold has-text-centered" style="margin-bottom:50px;">Ingresa tu información</p>
                <div class="lineal"></div>
                <h1 class="subtitle  has-text-centered" style="margin-top:30px;">Nombre(s) y apellidos</h1> 
                <div class="flexi" style="margin-left:7%;">
                    <div class="form-group inpu">
                        <input class="input " id="nombre" name="nombre" type="text" placeholder="Ingresa tu Nombre(s)">
                    </div>
                    
                    <div class="form-group inpu" style="margin-left:5px; margin-bottom:30px;">
                        <input class="input" type="text" id="apellidos" name="apellidos" placeholder="Ingresa tus apellidos">
                    </div>

                </div>

                <h5 class="subtitle  has-text-left" style="margin-left:42%;"> Contraseña</h5> 
                <div class="form-group inpu" style="margin-left:15%; width: 500px;">
                    <input class="input" type="password" id="pass" name="pass" placeholder="Ingresa una contraseña">
                </div>

                <h1 class="subtitle  has-text-centered">Fecha de nacimiento</h1>
                <div>
                    <div class="form-group inpus" style="margin-left:36%;margin-bottom:30px;">
                        <input class="input has-text-centered" id="fecha_nac" name="fecha_nac" type="date">
                    </div>
                </div>
                <div class="flexi" style="margin-left:12%; margin-top:25px;">
                    <h5 class="subtitle  has-text-left">CURP</h5>
                    <div class="form-group inpus" style="margin-left:5px;">
                        <input class="input" type="text" id="curp" name="curp" placeholder="############">
                    </div>

                    <h5 class="subtitle  has-text-right" style="margin-left:30px;">RFC</h5> 
                    <div class="form-group inpus" style="margin-left:5px; margin-bottom:30px;">
                        <input class="input" type="text" id="rfc" name="rfc" placeholder="############">
                    </div>
                </div>

                <h1 class="subtitle has-text-weight-bold has-text-centered">Direccion</h1> 
                <div class="flexi">
                    <div class="form-group inpu" style="margin-left:7%;">
                        <input class="input has-text-centered is-hovered" id="calle" name="calle" type="text" placeholder="CALLE">
                    </div>
                    <div class="form-group inpu" style="margin-left:1%; margin-bottom:20px;">
                        <input class="input has-text-centered is-hovered" id="colonia" name="colonia" type="text" placeholder="COLONIA">
                    </div>
                </div>

                <div class="flexi" style="margin-left:7%;">
                    <div class="form-group inpus">
                        <input class="input has-text-centered is-hovered" id="exterior" name="exterior" type="text"  placeholder="NUMERO EXTERIOR">
                    </div>
                    <div class="form-group inpus" style="margin-left:4px;">
                        <input class="input has-text-centered is-hovered" id="interior" name="interior" type="text" placeholder="NUMERO INTERIOR">
                    </div>
                    <div class="form-group inpus" style="margin-left:4px;margin-bottom:20px;">
                        <input class="input has-text-centered is-hovered" id="c_postal" name="c_postal" type="text" placeholder="CODIGO POSTAL">
                    </div>
                </div>

                    <div class="form-group" style="margin-left:15%; width: 500px; margin-bottom:20px;">
                        <input class="input has-text-centered is-hovered" id="entre_calles" name="entre_calles" type="text" placeholder="ENTRE CALLES">
                    </div>

                <div class="flexi"  style="margin-left:7%;">
                    <form class="form-group control has-icons-left" id="form2">
                        <div class="select" style="margin-left:4px;">
                            <select name="" id="">
                                <option value="">Torreon</option> 
                                <option value="">Gomez</option> 
                                <option value="">Lerdo</option> 
                                <option value="">San pedro</option>
                                <option value="">Matamoros</option> 
                            </select>
                        </div>

                        <span class="icon is-small is-left">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                    </form>

                    <form class="form-group control has-icons-left" id="form3"  style="margin-left:50px;">
                        <div class="select" >
                            <select name="" id="">
                                <option value="">Coahuila</option> 
                                <option value="">Monterrey</option> 
                                <option value="">Guadalajara</option> 
                                <option value="">Mesopotamia</option> 
                                <option value="">Mazatlan</option> 
                            </select>
                        </div>
                        <span class="icon is-small is-left">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                    </form>

                    <form class="form-group control has-icons-left"  id="form4" style="margin-left:50px;">
                        <div class="select">
                            <select name="" id="">
                                <option value="">Mexico</option> 
                                <option value="">Japon</option> 
                                <option value="">España</option> 
                            </select>
                        </div> 

                        <span class="icon is-small is-left">
                            <i class="fas fa-globe"></i>
                        </span>
                    </form>
                </form>
                <div class="form-group">
                    <input type="submit" value="registrar">
                </div>
            </div>
            <div class="lineal"></div>

            <div class="field" style="margin-left:7%; margin-top:10px;">
                <div class="form-group">
                    <label class="checkbox">
                        <input type="checkbox">
                        Estoy de acuerdo con los 
                        <a href="">Terminos y condiciones</a> 
                    </label>
                </div>
            </div>¿
        </div>
    </section>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>
    



    
    