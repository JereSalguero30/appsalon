<h1 class="nombre-pagina">Crear Nueva Cita</h1>
<p class="descripcion-pagina">Elige tus servicios y coloca tus datos</p>

<div id="app">

    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Info Citas</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>

    <div class="seccion" id="paso-1">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios a continuacion</p>
        <div id="servicios" class="listado-servicio"></div>
    </div>

    <div class="seccion" id="paso-2">
        <h2>Tus Datos y Citas</h2>
        <p class="text-center">Coloca tus datos y elige la fecha para tu cita</p>

        <form class="formulario">

            <div class="campo">
                <label for="nombre">Nombre</label>
                <input 
                    id="nombre"
                    type="text"
                    placeholder="Tu nombre"
                    value="<?php echo $nombre; ?>"
                    disabled
                />
            </div>

            <div class="campo">
                <label for="fecha">Fecha</label>
                <input 
                    id="fecha"
                    type="date"
                    min="<?php echo date('Y-m-d', strtotime('+1 day') ); ?> "
                />
            </div>
               
            <div class="campo">
                <label for="hora">Hora</label>
                <input 
                    id="hora"
                    type="time"
                />
            </div>
        </form>
    </div>

    <div class="seccion contenido-resumen" id="paso-3">
        <h2>Resumen</h2>
        <p class="text-center">Verifica que la informacion sea correcta</p>
    </div>

    <div class="paginacion">
        <button
            id="anterior"
            class="boton"  
        >&laquo; Anterior</button>

        <button
            id="siguiente"
            class="boton"  
        > Siguiente &raquo; </button>
    </div>
</div>

<?php 
    $script = "
        <script src='build/js/app.js'></script>
    ";
?>