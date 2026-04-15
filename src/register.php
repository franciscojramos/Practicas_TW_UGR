<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

if (!isset($_POST['name']) || trim((string) $_POST['name']) === '') {
    header('Location: index.php');
    exit;
}

$newsletterMarcado = isset($_POST['newsletter']) && $_POST['newsletter'] === '1';
if (!$newsletterMarcado) {
    $_SESSION['contacto_error'] = 'Debe aceptar el checkbox para recibir noticias por correo si desea enviar el formulario.';
    $_SESSION['contacto_old'] = [
        'name' => $_POST['name'] ?? '',
        'surname' => $_POST['surname'] ?? '',
        'email' => $_POST['email'] ?? '',
        'pokemon' => $_POST['pokemon'] ?? '',
        'comentario' => $_POST['comentario'] ?? '',
    ];
    header('Location: contacto.php');
    exit;
}

if (!empty($_COOKIE['author'])) {
    header('Location: index.php');
    exit;
}

$name = trim((string) $_POST['name']);
$surname = isset($_POST['surname']) ? trim((string) $_POST['surname']) : '';
$fullname = trim($name . ' ' . $surname);

setcookie('author', $fullname, [
    'expires' => time() + 60 * 60 * 24 * 30,
    'path' => '/',
    'httponly' => true,
    'samesite' => 'Lax',
]);

header('Location: index.php');
exit;
