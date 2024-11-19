<?php
namespace Services;

use Models\Repositories\UserRepository;
use Libraries\DabaBaseProviderFactory;
use Exception;

class RegisterService {

    private $userRepo;

    public function __construct() {
        $dbProvider = DabaBaseProviderFactory::getInstance();
        $this->userRepo = new UserRepository($dbProvider);
    }

    public function registerUser(string $email, string $password, int $roleId): void {
       // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@(?:[a-zA-Z0-9-]+\.)*umb\.+edu\.+co$/", $email)) {
            throw new Exception('El correo debe ser válido para la institución');
        }
        $hashedPassword = hash('sha256', $password);
        $this->userRepo->registerUser($email, $hashedPassword, $roleId);
    }
}
?>
