<?php include("modelo/conexion.php");?>
<?php include("vista/create.php");?>
<?php include("vista/layout/header.php");?> 

     
  
    <!-- Sección de artículos destacados -->
    <section class="section">
        <div class="container">
            <h1 class="title"><a href="noticias.php"> Destacados</a></h1>
            <div class="columns">
                <div class="column is-two-thirds">
                    <a href="<?php echo $url_base?>vista/noticias.php/#generales1" class="block has-text-black has-text-weight-bold">
                        <article class="articulo-destacado">
                                <h2 class="title">Fiestas Patrias </h2>
                                <p>Las celebraciones se extienden desde el miércoles 18 al domingo 22 de septiembre...</p>
                                <div>
                                    <figure class="image is-16by9">
                                        <img src="<?php echo $url_base?>vista/image/fiestas.jpeg" alt="Fiestas Patrias">
                                    </figure>
                                </div>
                        </article>
                    </a>
                </div>
                <div class="column">
                    <h2 class="title is-5">Otros Artículos</h2>
                    <a href="<?php echo $url_base?>vista/noticias.php/#generales2" class="block has-text-black has-text-weight-bold">
                    <div class="articulo-miniatura">
                        <h3> Temblor en la capital</h3>
                        <p>Durante la presente jornada, se han registrado sismos de variada intensidad...</p>
                        <img src="<?php echo $url_base?>vista/image/temblor.jpeg" alt="Claudio Bravo se retira" class="mt-4">
                    </div>
                    </a>
                    <a href="<?php echo $url_base?>vista/noticias.php/#generales3" class="block has-text-black has-text-weight-bold">
                    <div class="articulo-miniatura">
                        <h3>Patente</h3>
                        <p>Durante esta semana llega a su fin el plazo para pagar la última cuota del permiso...</p>
                        <img src="<?php echo $url_base?>vista/image/patente.jpeg" alt="Claudio Bravo se retira" class="mt-4">
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Deportes -->
    <section id="deporte" class="section">
        <div class="container">
            <h1 class="title"><a href="<?php echo $url_base?>vista/deportes.php">Deportes</a></h1>
            <div class="columns">
                <div class="column">
                    <a href="<?php echo $url_base?>vista/deportes.php/#deporte1" class="block has-text-black has-text-weight-bold">
                        <h2 class="title is-5">Bravo se retira del fútbo</h2>
                        <p>Claudio Bravo, uno de los futbolistas chilenos más importantes, se retira a los 41 años...</p>
                        <img src="<?php echo $url_base?>vista/image/bravo.jpeg" alt="Claudio Bravo se retira" class="mt-4">
                    </a>
                </div>
                
                <div class="column">
                    <a href="<?php echo $url_base?>vista/deportes.php/#deporte2" class="block has-text-black has-text-weight-bold">
                        <h2 class="title is-5">Wanderers fuera de liguilla</h2>
                        <p>La clasificación sigue en movimiento. El equipo que termine en la segunda plaza jugará una final...</p>
                        <img src="<?php echo $url_base?>vista/image/wanderito.jpeg" alt="Claudio Bravo se retira" class="mt-4">
                    </a>
                </div>
                <div class="column">
                    <a href="<?php echo $url_base?>vista/deportes.php/#deporte3" class="block has-text-black has-text-weight-bold">
                        <h2 class="title is-5">Alejandro Tabilo y su ambicioso objetivo</h2>
                        <p>Alejandro Tabilo busca posicionarse entre los 15 mejores del ranking este año...</p>
                        <img src="<?php echo $url_base?>vista/image/tabilo.jpeg" alt="Claudio Bravo se retira" class="mt-4">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Negocios -->
    <section id="negocios" class="section">
        <div class="container">
            <h1 class="title"><a href="<?php echo $url_base?>vista/negocios.php">Negocios</a></h1>
            <div class="columns">
                <div class="column">
                    <a href="<?php echo $url_base?>vista/negocios.php/#negocios1" class="block has-text-black has-text-weight-bold">
                        <h2 class="title is-5">Tarifas eléctricas</h2>
                        <p>El gobierno ingresará un proyecto para triplicar el número de familias que acceden al subsidio eléctrico...</p>
                        <img src="<?php echo $url_base?>vista/image/tarifa.jpeg" alt="Claudio Bravo se retira" class="mt-4">
                    </a>
                </div>
                <div class="column">
                    <a href="<?php echo $url_base?>vista/negocios.php/#negocios2" class="block has-text-black has-text-weight-bold">
                        <h2 class="title is-5">Mercado Libre y la denuncia contra los bancos</h2>
                        <p>Mercado Libre acusa a los bancos argentinos de cartelización y prácticas anticompetitivas...</p>
                        <img src="<?php echo $url_base?>vista/image/mercadolibre.jpg" alt="mercado libre" class="mt-4">
                    </a>
                </div>
                <div class="column">
                    <a href="<?php echo $url_base?>vista/negocios.php/#negocios3" class="block has-text-black has-text-weight-bold">
                        <h2 class="title is-5">Escasez de gasolina en Colombia</h2>
                        <p>Decenas de vuelos fueron cancelados por falta de combustible, afectando varias aerolíneas...</p>           
                        <img src="<?php echo $url_base?>vista/image/gasoline.jpeg" alt="gasolina" class="mt-4">
                    </a>    
                </div>
            </div>
        </div>
    </section>

<?php include("vista/layout/footer.php")?>
