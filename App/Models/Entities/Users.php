<?php
namespace Models\Entities;

class Users {
    public int $id;
    public int $roleId;
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $password;

    public static function getTableName(): string {
        return 'users';
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getRoleId(): int {
        return $this->roleId;
    }
    
    public function getFirstName(): string {
        return $this->firstName;
    }
    
    public function getLastName(): string {
        return $this->lastName;
    }
    
    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRoleId($roleId){
        $this->roleId = $roleId;
    }

}
?>