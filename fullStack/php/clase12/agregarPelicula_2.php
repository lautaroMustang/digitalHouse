<?php
    if(count(array_keys($_POST))) {
        echo '<pre>';var_dump($_POST);echo '</pre>';
    }
?>
<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form id="agregarPelicula" name="agregarPelicula" method="POST" action="db.php">
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" required/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating" required/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="premios" id="premios" required/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="duracion" id="duracion" required/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <input type="date" name="release_date" required>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>
