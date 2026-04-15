<?php
$tituloPagina = 'Mi Blog Personal - Inicio';
$menuActivo = 'inicio';
require_once __DIR__ . '/header.php';
?>

    <main class="container py-4">
        <article>
            <div class="row align-items-end g-2 mb-3">
                <div class="col-12 col-md-8">
                    <h2 class="display-5 mb-0">Aprendiendo HTML5 en la ETSIIT</h2>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row g-2">
                        <div class="col-6">
                            <p class="mb-0 metadatos-articulo"><span class="autor">Francisco</span></p>
                        </div>
                        <div class="col-6">
                            <p class="mb-0 metadatos-articulo">Fecha: 17 de marzo de 2026</p>
                        </div>
                    </div>
                </div>
            </div>

            <p>Este es el primer artículo de mi blog personal realizado para la asignatura de Tecnologías Web.</p>

            <figure>
                <img class="img-fluid rounded" src="https://images.pexels.com/photos/1643456/pexels-photo-1643456.jpeg" alt="Tres gatitos abrazándose al aire libre ">
                <figcaption class="text-center text-decoration-underline mt-2">Gatitos al aire libre.</figcaption>
            </figure>

            <p>La semántica en HTML5 es importante aprenderla para poder desarrollar un buen contenido web.</p>
        </article>

        <article>
            <div class="row align-items-end g-2 mb-3">
                <div class="col-12 col-md-8">
                    <h2 class="display-5 mb-0">El futuro de IA en ambitos de aprendizaje: BookAR</h2>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row g-2">
                        <div class="col-6">
                            <p class="mb-0 metadatos-articulo"><span class="autor">Francisco</span></p>
                        </div>
                        <div class="col-6">
                            <p class="mb-0 metadatos-articulo">Fecha: 17 de marzo de 2026</p>
                        </div>
                    </div>
                </div>
            </div>
            <p>El desarrollo de IA en ambitos de aprendizaje es importante. Como por ejemplo BookAR, una empresa que estoy desarrollando en la asignatura de SIE.</p>
        </article>
    </main>

<?php require_once __DIR__ . '/footer.php'; ?>
