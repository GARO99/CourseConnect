<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    
    <form  action="<?php echo htmlspecialchars(RUTURL.'Register/register');?>" method="post" autocomplete="off">
        <label for="id">Código de Usuario:</label>
        <input type="number" id="id" name="id" required>
        <br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <label for="role_id">Rol:</label>
        <select id="role_id" name="role_id" required>
            <option value="" disabled selected>Selecciona un rol</option>
            <option value="1">Administrador</option>
            <option value="2">Estudiante</option>
            <option value="3">Profesor</option>
        </select>
        <br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
