<?php
namespace Services;

use Exception;
use Models\Entities\Users;
use Libraries\DabaBaseProviderFactory;
use Models\Repositories\UserRepository;
use Models\Repositories\RoleRepository;

class AuthService {
    private $userRepo;
    private $roleRepo;

    public function __construct() {
        $dbProvider = DabaBaseProviderFactory::getInstance();
        $this->userRepo = new UserRepository($dbProvider);
        $this->roleRepo = new RoleRepository($dbProvider);
    }

    public function SignIn(
        string $email,
        int $roleid,
        string $password
    ): Users {
        $users = $this->userRepo->findBy(
            [
                'email' => $email,
                'role_id' => $roleid
            ]
        );

        if (empty($users)) {
            throw new Exception('El usuario no existe o su rol es incorrecto');
        }

        $hashedPassword = hash('sha256', $password);

        $filteredUsers = array_filter($users, function($user) use ($hashedPassword) {
            return $user->getPassword() === $hashedPassword;
        });

        if (empty($filteredUsers)) {
            throw new Exception('Contraseña incorrecta');
        }

        return $filteredUsers[0];
    }

    public function GetRolName(int $roleid): string {
       $role = $this->roleRepo->find($roleid);

       return $role->getRoleName();
    }
}
?>