<?php
namespace Models\Entities;

class Role {
    private int $id;
    private string $roleName;

    public static function getTableName(): string {
        return 'role';
    }

    public function getId(): int {
        return $this->id;
    }

    public function getRoleName(): string {
        return $this->roleName;
    }
}
?>