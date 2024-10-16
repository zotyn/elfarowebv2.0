<?php include("../modelo/conexion.php");?>
<?php include("create.php");?>
<?php include("layout/header.php"); ?>

<section id="contacto" class="section">
        <div class="container">
            <h2 class="title">Contacto</h2>
            <form>
                <div class="field">
                    <label class="label" for="nombre">Nombre:</label>
                    <div class="control">
                        <input class="input" type="text" id="nombre" placeholder="Ingresa tu nombre" required>
                    </div>
                </div>
    
                <div class="field">
                    <label class="label" for="email">Correo electrónico:</label>
                    <div class="control">
                        <input class="input" type="email" id="email" placeholder="Ingresa tu correo" required>
                    </div>
                </div>
    
                <div class="field">
                    <label class="label" for="mensaje">Mensaje:</label>
                    <div class="control">
                        <textarea class="textarea" id="mensaje" placeholder="Escribe tu mensaje" required></textarea>
                    </div>
                </div>
    
                <div class="control">
                    <button class="button is-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </section>

<?php include("layout/footer.php");?>  