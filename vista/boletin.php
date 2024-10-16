<?php include("../modelo/conexion.php");?>
<?php include("create.php");?>
<?php include("layout/header.php");?>

<section id="suscripcion" class="section">
    <div class="container">
        <h2 class="title">Suscríbete a nuestro boletín</h2>
        <form action="create.php" method="post">
            <div class="field">
                <label class="label" for="nombre">Nombre:</label>
                <div class="control">
                    <input class="input" type="text" id="nombre" placeholder="Ingresa tu nombre" required>
                </div>
            </div>

            <div class="field">
                <label class="label" for="telefono">Telefono:</label>
                <div class="control">
                    <input class="input" type="telefono" id="telefono" placeholder="Ingresa tu número de contacto" required>
                </div>
            </div>

            <div class="field">
                <label class="label" for="fecha">Fecha nacimiento:</label>
                <div class="control">
                    <input class="input" type=date id="fecha" placeholder="Ingresar fecha de Nacimiento" required>
                </div>
            </div>

            <div class="field">
                <label class="label" for="email">Correo electrónico:</label>
                <div class="control">
                    <input class="input" type="email" id="email" placeholder="Ingresa tu correo electrónico" required>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" required>
                        Acepto los <a href="#">términos y condiciones</a>
                    </label>
                </div>
            </div>

            <div class="control">
                <button class="button is-primary" type="submit">Suscribirse</button>
            </div>
        </form>
    </div>
</section>

 
    
<?php include("layout/footer.php");?>  
 