<?php
namespace Models\Entities;

class Role {
    public int $roleId;
    public string $roleName;

    public function __construct(
        int $roleId,
        string $roleName,
    ){
        $this->roleId = $roleId;
        $this->roleName = $roleName;
    }
}
?>