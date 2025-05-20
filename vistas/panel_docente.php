<?php
session_start();
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'docente') {
    header("Location: login.html");
    exit;
}
$nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel Docente</title>
  <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
  <div class="sidebar">
    <h2>Docente: <?php echo htmlspecialchars($nombre); ?></h2>
    <nav>
      <a href="lugares.php">Agregar Lugares</a>
      <a href="form_agregar_asignatura.php">Agregar Asignatura</a>
      <a href="asignacion.php">Agregar Asignacion</a>
      <a href="notas.php">Ingresar Notas</a>
      <a href="usuarios.php">Agregar Usuarios</a>
      <a href="../php/logout.php" class="logout">Cerrar Sesión</a>
    </nav>
  </div>

  <div class="main-content">
    <h1>Bienvenido Docente</h1>
    <p>Selecciona una opción del menú para comenzar.</p>
  </div>
</body>
</html>
