<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta lang="es" name="author" content="Ivan Biscaldi">
    <title>Periodico</title><!-- Ejercicio 4 practica 7--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <style rel="stylesheet">
        .noticia{
            margin: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
    $opc="";
    if (isset($_COOKIE['noticia'])) {
        $opc=$_COOKIE['noticia'];
    }
    if (isset($_GET['btnradio'])) {
        $opc=$_GET['btnradio'];
        setcookie("noticia", $opc, time()+3600*24, "/");
    }
    ?>
    <div class="row">
        <div class="col-sm-2">
            <nav class="navbar navbar-light bg-light">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="#" aria-current="page">Home 
                    <span class="visually-hidden">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Home</a>

                    <form method="get" action="periodico.php">
                        <div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btncheck1"
                            <?php if ($opc=="politica") { echo " checked "; }?>
                            value="politica" autocomplete="off" onclick="//this.form.submit()">
                            <label class="btn btn-outline-primary" for="btncheck1">Noticia política</label>
                            
                            <input type="radio" class="btn-check" name="btnradio" id="btncheck2" 
                            <?php if ($opc=="economia") { echo " checked "; }?>
                            value="economia" autocomplete="off" onclick="//this.form.submit()">
                            <label class="btn btn-outline-primary" for="btncheck2">Noticia económica</label>
                            
                            <input type="radio" class="btn-check" name="btnradio" id="btncheck3" 
                            <?php if ($opc=="deporte") { echo " checked "; }?>
                            value="deporte" autocomplete="off" onclick="//this.form.submit()">
                            <label class="btn btn-outline-primary" for="btncheck3">Noticia deportiva</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                    <a class="nav-item nav-link" href="/borrar_cookies.php">Borrar cookies</a>
                </div>
            </nav>
        </div>
        <div class="col-sm-10">
            <div class="container-fluid bg-primary text-white">
                <div class="row-cols-auto justify-content-between align-items-start g-lg-2">
                <?php if ($opc=="" || $opc=="politica") { ?>
                    <div class="noticia bg-light text-dark" id="politica">
                        <p>Noticia publicada por RFI</p>
                        <img src="politica.jpg" class="img-fluid" alt="Giorgia Meloni asume como primera ministra">
                        <h1>    
                            Giorgia Meloni asume como primera ministra en Italia
                        </h1>
                        <p>
                            El gobierno de extrema derecha liderado por Giorgia Meloni, la primera mujer en este cargo 
                            en Italia, prestó juramento este sábado por la mañana ante el presidente de la República, 
                            Sergio Matarella. En la ceremonia, que tuvo lugar en el Palacio del Quirinal en Roma, 
                            Meloni y sus 24 ministros juraron individualmente "respetar la Constitución y las leyes". 
                            La presidenta de la Comisión Europea, Ursula von der Leyen, felicitó hoy a Meloni afirmando 
                            que esperaba una "cooperación constructiva"... 
                            <a href="https://www.rfi.fr/es/europa/20221022-giorgia-meloni-asume-como-primera-ministra-en-italia">
                                Seguir leyendo en RFI
                            </a>
                        </p>
                    </div>
                <?php } ?>
                <?php if ($opc=="" || $opc=="economia") { ?>
                    <div class="noticia bg-light text-dark" id="economica">
                        <p>Noticia publicada por Infobae</p>
                        <h1>
                            Reservas e inflación en la mirada del mercado financiero de Argentina
                        </h1>
                        <p>
                            BUENOS AIRES, 7 nov (Reuters) - Las reservas del banco central de Argentina (BCRA) 
                            se seguían debilitando este lunes debido a la demanda importadora y un abrupto recorte 
                            de liquidaciones de exportadores, lo que a criterio de especialistas tensa el mercado 
                            cambiario ante una firme inflación... 
                            <a href="https://www.infobae.com/america/agencias/2022/11/07/reservas-e-inflacion-en-la-mirada-del-mercado-financiero-de-argentina/">
                                Seguir leyendo en Infobae
                            </a>
                        </p>
                    </div>
                <?php } ?>
                <?php if ($opc=="" || $opc=="deporte") { ?>
                    <div class="noticia bg-light text-dark" id="deportiva">
                        <p>Noticia publicada por Sporting News</p>
                        <img src="deporte.jpg" class="img-fluid" alt="Frank Fabra levanta el trofeo de la liga">
                        <h1>
                            Las claves y figuras para entender al Boca campeón de la Liga Profesional 2022: Rossi, 
                            Fabra y el título de los pibes
                        </h1>
                        <p>
                            Boca es el campeón de la Liga Profesional 2022, y con ello empezó a cerrar un año en el 
                            que también se consagró en la Copa de la Liga y en el que todavía tiene por delante la 
                            chance de título en la Copa Argentina y el Trofeo de Campeones.

                            El Xeneize tuvo que esperar hasta el pitazo final de la última fecha para poder festejar, 
                            en un certamen que arrancó muy mal... 
                            <a href="https://www.sportingnews.com/ar/futbol/news/boca-campeon-claves-figuras-rossi-fabra-juveniles/emhecipd6oygynnrly3cglr2">
                                Seguir leyendo en Sporting News
                            </a>
                        </p>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</html>