<?php
$tituloPagina = $tituloPagina ?? 'Mi Blog Personal';
$menuActivo = $menuActivo ?? 'inicio';
$claseBody = $claseBody ?? '';
$atributosBody = $claseBody !== '' ? ' class="' . htmlspecialchars($claseBody, ENT_QUOTES, 'UTF-8') . '"' : '';
?>
<!-- Francisco José Ramos Moya -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($tituloPagina, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Double:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body<?php echo $atributosBody; ?>>

    <header class="encabezado-blog text-center py-3 px-2">
        <h1 class="titulo-blog h2 mb-1">Francisco Ramos Blog</h1>
        <p class="subtitulo-blog mb-0 small">Tecnología, Ingeniería y Negocios</p>
        <?php if (!empty($_COOKIE['author'])): ?>
        <p class="subtitulo-blog mb-0 small">Usuario: <?php echo htmlspecialchars($_COOKIE['author'], ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>
    </header>

    <nav class="navbar navbar-expand-md navbar-dark barra-navegacion">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Mostrar u ocultar menú">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu-principal">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link<?php echo $menuActivo === 'inicio' ? ' active' : ''; ?>"<?php echo $menuActivo === 'inicio' ? ' aria-current="page"' : ''; ?> href="index.php">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $menuActivo === 'sobremi' ? ' active' : ''; ?>"<?php echo $menuActivo === 'sobremi' ? ' aria-current="page"' : ''; ?> href="sobremi.php">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $menuActivo === 'contacto' ? ' active' : ''; ?>"<?php echo $menuActivo === 'contacto' ? ' aria-current="page"' : ''; ?> href="contacto.php">Contacta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
