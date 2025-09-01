<?php
require_once 'UsuarioController.php';

$mensaje = "";
$tipoAlerta = "";
$usuarios = [
    ['usuario' => 'admin', 'password' => 'admin123'],
    ['usuario' => 'Juan', 'password' => 'juan123'],
    ['usuario' => 'Maria', 'password' => 'maria123'],
    ['usuario' => 'Pedro', 'password' => 'pedro123'],
    ['usuario' => 'Ana', 'password' => 'ana123'],
    ['usuario' => 'Luis', 'password' => 'luis123'],
    ['usuario' => 'Sofia', 'password' => 'sofia123'],
    ['usuario' => 'Carlos', 'password' => 'carlos123'],
    ['usuario' => 'Laura', 'password' => 'laura123'],
    ['usuario' => 'Diego', 'password' => 'diego123']
];

if($_POST){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $usuarioController = new UsuarioController($usuarios);

    $usuarioCorrecto = $usuarioController->verificarUsuario($usuario, $password);

    if($usuarioCorrecto){
        $mensaje = "Usuario y contraseña correctos. Bienvenido, $usuario!";
        $tipoAlerta = "success";
    } else {
        $mensaje = "Credenciales incorrectas. Inténtalo de nuevo.";
        $tipoAlerta = "danger";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

  <!-- Encabezado -->
  <header class="bg-primary text-white text-center py-4 shadow-sm">
    <h1 class="h3 fw-bold mb-0">Sistema de Inicio de Sesión</h1>
  </header>

  <!-- Contenido principal -->
  <main class="flex-grow-1 d-flex align-items-center justify-content-center py-5">
    <div class="card shadow-sm p-4 w-100" style="max-width: 500px;">
      <h2 class="h5 text-center mb-4 text-primary">Resultado</h2>

      <?php if($mensaje): ?>
        <div class="alert alert-<?php echo $tipoAlerta; ?> text-center" role="alert">
          <?php echo $mensaje; ?>
        </div>
        <div class="d-grid">
          <a href="sign-in.php" class="btn btn-outline-primary">Volver al formulario</a>
        </div>
      <?php else: ?>
        <p class="text-center text-muted">No se ha enviado ningún formulario.</p>
        <div class="d-grid">
          <a href="sign-in.php" class="btn btn-primary">Ir al formulario</a>
        </div>
      <?php endif; ?>
    </div>
  </main>

  <!-- Pie de página -->
  <footer class="bg-primary text-white text-center py-3 mt-auto">
    <p class="mb-0 small">Desarrollado con Bootstrap 5</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
