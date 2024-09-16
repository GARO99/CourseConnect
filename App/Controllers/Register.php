<?php
use Libraries\DatabaseProvider;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura los datos enviados desde el formulario
    $email = $_POST['email'];
    $code = $_POST['code'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Conectar a la base de datos principal
    $db1 = new DatabaseProvider('CourseConnect');

    // Verificar si el rol ya existe en la tabla 'Role'
    $db1->getquery("SELECT RoleId FROM Role WHERE RoleName = :roleName");
    $db1->bind(':roleName', $role);
    $roleData = $db1->getrow();

    if (!$roleData) {
        // Si el rol no existe, obtener el último RoleId para generar un nuevo RoleId
        $db1->getquery("SELECT MAX(RoleId) AS maxRoleId FROM Role");
        $maxRoleIdResult = $db1->getrow();
        $newRoleId = $maxRoleIdResult['maxRoleId'] + 1;

        // Insertar el nuevo RoleId y RoleName en la tabla 'Role'
        $db1->getquery("INSERT INTO Role (RoleId, RoleName) VALUES (:roleId, :roleName)");
        $db1->bind(':roleId', $newRoleId);
        $db1->bind(':roleName', $role);

        if ($db1->execute()) {
            $roleId = $newRoleId;
        } else {
            echo "Error al insertar el rol.";
            return;
        }
    } else {
        // Si el rol ya existe, obtenemos el RoleId
        $roleId = $roleData['RoleId'];
    }

    // Insertar el usuario en la tabla 'Users'
    $db1->getquery("INSERT INTO Users (UserId, RoleId, FirstName, LastName, UserName, UserPassword) VALUES (NULL, :roleId, '', '', :email, :password)");
    $db1->bind(':roleId', $roleId);
    $db1->bind(':email', $email);
    $db1->bind(':password', password_hash($password, PASSWORD_DEFAULT));

    // Verificar si la inserción fue exitosa
    if ($db1->execute()) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el usuario.";
    }
}
?>
