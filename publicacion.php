<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <section id="publicar" class="publicar">
            <div class="contenido-publicar">
                <h2>Publicar</h2>
                <hr>
                <nav id="nav">
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#publicar">Publicar</a></li>
                    </ul>
                </nav>
                <hr>
                <div class="formulario">
                    <form action="publicacion.php" method="post">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                        <label for="descripcion">Descripcion:</label>
                        <input type="text" id="descripcion" name="descripcion" required>
                        <label for="SubirProyecto">Subir proyecto:</label>
                        <input type="file" id="archivo" name="SubirProyecto " required>
                    </form>
                </div>  
            </div>
            <div class="guardar">
                <input type="button" value="Publicar" id="boton">
            </div>  
    </section>
</body>
</html>