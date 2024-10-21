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
        $hashedPassword = hash('sha256', $password);

        $this->userRepo->registerUser($email, $hashedPassword, $roleId);
    }
}
?>
