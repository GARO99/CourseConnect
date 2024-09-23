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
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $this->userRepo->registerUser($email, $hashedPassword, $roleId);
    }
}
?>
