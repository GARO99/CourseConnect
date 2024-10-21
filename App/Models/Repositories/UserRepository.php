<?php
namespace Models\Repositories;;

use Exception;
use Models\Entities\Users;
use Libraries\DabaBaseProvider;

class UserRepository extends BaseRepository {
    public function __construct(DabaBaseProvider $db) {
        parent::__construct($db, Users::class);
    }

    public function registerUser(string $email, string $hashedPassword, int $roleId, string $firstName = 'N/A', string $lastName = 'N/A'): bool {
        if ($this->isEmailRegistered($email)) {
            throw new Exception('El correo ya está registrado.');
        }

        $user = new Users();
        $user->setEmail($email);
        $user->setPassword($hashedPassword);
        $user->setRoleId($roleId);
        $user->setFirstName($firstName);
        $user->setLastName($lastName);

        $data = [
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'role_id' => $user->getRoleId(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName()
        ];

        return $this->create($data);
    }

    public function isEmailRegistered(string $email): bool {
        $users = $this->findBy(['email' => $email]);
        return !empty($users);
    }

    public function findUserById(int $id): ?Users {
        return $this->find($id);
    }

    public function findUserByEmail(string $email): ?Users {
        $users = $this->findBy(['email' => $email]);
        return $users ? $users[0] : null;
    }
}
?>
