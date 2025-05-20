<?php
session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'estudiante') {
    header("Location: login.html");
    exit;
}
$nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel Estudiante</title>
  <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
  <div class="sidebar">
    <h2>Estudiante: <?php echo htmlspecialchars($nombre); ?></h2>
    <nav>
      <a href="../php/ver_notas.php">Ver Notas</a>
      <a href="../php/logout.php" class="logout">Cerrar Sesión</a>
    </nav>
  </div>

  <div class="main-content">
    <h1>Bienvenido Estudiante</h1>
    <p>Usa el menú lateral para navegar.</p>
  </div>
</body>
</html>
s