<?php
namespace Models\Entities;

class Users {
    public int $userId;
    public int $roleId;
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $password;

    public function __construct(
        int $userId,
        int  $roleId,
        string $firstName,
        string $lastName,
        string $email,
        string $password,
    ){
        $this->userId = $userId;
        $this->roleId = $roleId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }
}
?>