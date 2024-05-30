<h1 class="nombre-pagina">Recupera tu contraseña</h1>
<p class="descripcion-pagina">Reestablece tu contraseña escribiendo tu email a continuacion</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" action="/olvide" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input 
        type="email"
        id="email"
        name="email"
        placeholder="Tu email"
        />
    </div>

    <input type="submit" class="boton" value="Enviar">
</form>

<div class="acciones">
    <a href="/">Ya tienes cuenta? Inicia sesion</a>
    <a href="/crear-cuenta">Aun no tienes cuenta? Crea una</a>
</div>