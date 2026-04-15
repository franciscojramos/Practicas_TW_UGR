<?php
session_start();

$tituloPagina = 'Mi Blog Personal - Contacta';
$menuActivo = 'contacto';
$claseBody = 'pagina-contacto';

$formError = $_SESSION['contacto_error'] ?? '';
$formOld = $_SESSION['contacto_old'] ?? [];
unset($_SESSION['contacto_error'], $_SESSION['contacto_old']);

$pokemonSeleccionado = $formOld['pokemon'] ?? '';

require_once __DIR__ . '/header.php';
?>

    <main class="container py-4">
        <h1>Contacta</h1>

        <?php if ($formError !== ''): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($formError, ENT_QUOTES, 'UTF-8'); ?>
        </div>
        <?php endif; ?>

        <form class="formulario-contacto" action="register.php" method="post">
            <div class="row g-3 mb-1">
                <div class="col-12 col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nombre" name="name" placeholder="Nombre" required
                            value="<?php echo htmlspecialchars($formOld['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                        <label for="nombre">Nombre</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="apellidos" name="surname" placeholder="Apellidos" required
                            value="<?php echo htmlspecialchars($formOld['surname'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                        <label for="apellidos">Apellidos</label>
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-1">
                <div class="col-12 col-md-6">
                    <div class="form-floating">
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="correo@ejemplo.com"
                            pattern="[a-z0-9.\-]+@[a-z0-9.\-]+"
                            required
                            value="<?php echo htmlspecialchars($formOld['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                        >
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-floating">
                        <select class="form-select" id="pokemon" name="pokemon" aria-label="Pokémon preferido" required>
                            <option value="" disabled<?php echo $pokemonSeleccionado === '' ? ' selected' : ''; ?>>Elegir Pokémon</option>
                            <option value="treecko"<?php echo $pokemonSeleccionado === 'treecko' ? ' selected' : ''; ?>>Treecko</option>
                            <option value="torchic"<?php echo $pokemonSeleccionado === 'torchic' ? ' selected' : ''; ?>>Torchic</option>
                            <option value="mudkip"<?php echo $pokemonSeleccionado === 'mudkip' ? ' selected' : ''; ?>>Mudkip</option>
                            <option value="kyogre"<?php echo $pokemonSeleccionado === 'kyogre' ? ' selected' : ''; ?>>Kyogre</option>
                            <option value="groudon"<?php echo $pokemonSeleccionado === 'groudon' ? ' selected' : ''; ?>>Groudon</option>
                            <option value="rayquaza"<?php echo $pokemonSeleccionado === 'rayquaza' ? ' selected' : ''; ?>>Rayquaza</option>
                            <option value="turtwig"<?php echo $pokemonSeleccionado === 'turtwig' ? ' selected' : ''; ?>>Turtwig</option>
                            <option value="chimchar"<?php echo $pokemonSeleccionado === 'chimchar' ? ' selected' : ''; ?>>Chimchar</option>
                            <option value="piplup"<?php echo $pokemonSeleccionado === 'piplup' ? ' selected' : ''; ?>>Piplup</option>
                            <option value="dialga"<?php echo $pokemonSeleccionado === 'dialga' ? ' selected' : ''; ?>>Dialga</option>
                            <option value="giratina"<?php echo $pokemonSeleccionado === 'giratina' ? ' selected' : ''; ?>>Giratina</option>
                            <option value="palkia"<?php echo $pokemonSeleccionado === 'palkia' ? ' selected' : ''; ?>>Palkia</option>
                            <option value="otro"<?php echo $pokemonSeleccionado === 'otro' ? ' selected' : ''; ?>>Otro (no tengo buen gusto sobre Pokémon)</option>
                        </select>
                        <label for="pokemon">Pokémon preferido</label>
                    </div>
                </div>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" id="comentario" name="comentario" placeholder="Comentario" style="height: 7rem"><?php echo htmlspecialchars($formOld['comentario'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                <label for="comentario">Comentario (opcional)</label>
            </div>

            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter" value="1">
                <label class="form-check-label" for="newsletter">Quiero darme de alta para recibir noticias por correo</label>
            </div>

            <div class="d-grid gap-2 d-sm-flex justify-content-sm-start flex-wrap">
                <button class="btn btn-primary px-4" type="submit">Enviando</button>
                <button class="btn btn-dark px-4" type="reset">Limpiar</button>
            </div>
        </form>
    </main>

<?php require_once __DIR__ . '/footer.php'; ?>
