<?php
namespace Services;

use Exception;
use Models\Entities\Users;
use Libraries\DabaBaseProviderFactory;
use Models\Repositories\UserRepository;

class AuthService {
    private $userRepo;

    public function __construct() {
        $dbProvider = DabaBaseProviderFactory::getInstance();
        $this->userRepo = new UserRepository($dbProvider);
    }

    public function SignIn(
        string $email,
        int $roleid,
        string $password
    ): Users {
        $users = $this->userRepo->findBy(
            [
                'email' => $email,
                'role_id' => $roleid,
                'password' => hash('sha256', $password)
            ]
        );

        if (empty($users)) {
            throw new Exception('Usuario no encontrado o credenciales incorrectas');
        }

        $user = $users[0];
        
        return $user;
    }
}
?>