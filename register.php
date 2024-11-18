<?php
$servername = "sql208.infinityfree.com";
$username = "if0_36647700";
$password = "De12Li34Gh56T"; // Reemplaza con tu contraseña si es diferente
$dbname = "if0_36647700_mydatabase";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); // Hash de la contraseña
$usuario = $_POST['usuario'];
$telefono = $_POST['telefono'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$documento = $_POST['documento'];
$terminos_condiciones = isset($_POST['terminos_condiciones']) ? 1 : 0;
$condiciones_servicio = isset($_POST['condiciones_servicio']) ? 1 : 0;

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO `users` (nombre, apellido, correo, contrasena, usuario, telefono, fecha_nacimiento, documento, terminos_condiciones, condiciones_servicio)
        VALUES ('$nombre', '$apellido', '$correo', '$contrasena', '$usuario', '$telefono', '$fecha_nacimiento', '$documento', '$terminos_condiciones', '$condiciones_servicio')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a la página de inicio de sesión
    header("Location: ../Inicio%20_sesion/Inicio_de_sesion.html");
    exit();
} else {
    // Redirigir a una página de error
    header("Location: error.html");
    exit();
}
$conn->close();
?>