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
}
?>