<?php
require_once __DIR__ . '/utils.php';

$tituloPagina = 'Mi Blog Personal - Sobre mí';
$menuActivo = 'sobremi';
$claseBody = 'pagina-sobremi';
require_once __DIR__ . '/header.php';
?>

    <main class="container">
        <h1>Sobre mí</h1>

        <figure class="figura-perfil">
            <img class="foto-perfil img-fluid" src="img/francisco.jpg" alt="Foto de Francisco" width="280" height="280">
            <figcaption class="text-center text-decoration-underline">Foto de perfil.</figcaption>
        </figure>

        <h2>Hobbies</h2>
        <ol class="lista-romanos">
            <li>Deporte</li>
            <li>Lectura</li>
            <li>Música</li>
            <li>Tecnología</li>
        </ol>

        <h2>Cualidades</h2>
        <ul class="lista-emoji">
            <li>Curioso</li>
            <li>Paciente</li>
            <li>Constante</li>
        </ul>

        <h2>Asignaturas</h2>
        <div class="tabla-scroll">
        <?php echo muestra_tabla(__DIR__ . '/asignaturas.csv'); ?>
        </div>
    </main>

<?php require_once __DIR__ . '/footer.php'; ?>
