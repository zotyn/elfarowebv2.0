<?php $url_base="https://zotyn.github.io/elfarowebv2.0/"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Faro</title>
    <link rel="stylesheet" href="<?php echo $url_base?>vista/css/styles.css">
    <link rel="stylesheet" href="<?php echo $url_base?>css/styles.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>

<body>
    
  
    <!-- Sección superior de avisos -->
    <div class="notification is-info is-marginless">
        <a href="<?php echo $url_base?>vista/boletin.php/#boletin" class="has-text-weight-bold has-text-white">
           <strong>NewsLetter:</strong> Suscríbete a nuestro reporte semanal de las noticias más relevantes.
        </a> 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
         Suscribirse
        </button>

    </div>
    
    

    <header class="navbar is-primary">
            <div class="container is-flex is-flex-direction-column is-align-items-center">
         
            <div class="navbar-brand">
                <a class="navbar-item" href="<?php echo $url_base?>index.php">
                <img src="<?php echo $url_base?>vista/image/EL FARO_transparent-.png" 
                alt="Logotipo de El Faro" 
                class="is-fullwidth" 
                style="max-height: 300px;">
                </a>
            </div>
            
            <div class="navbar-item">
                <div id="reloj" class="is-size-5 has-text-white"></div>
            </div>
            </div>
     </header>
   
       
    <!-- Menú de navegación -->
    <nav class="tabs is-centered is-boxed is-mobile">
        <ul>
            <li class="is-active"><a href="<?php echo $url_base?>index.php">Inicio</a></li>
            <li><a href="<?php echo $url_base?>vista/Deportes.php">Deporte</a></li>
            <li><a href="<?php echo $url_base?>vista/negocios.php">Negocios</a></li>
            <li><a href="<?php echo $url_base?>vista/contacto.php/#contacto">Contacto</a></li>
        </ul>
    </nav>    
    
    
