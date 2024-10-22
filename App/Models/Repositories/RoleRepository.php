<?php
namespace Models\Repositories;;

use Models\Entities\Role;
use Libraries\DabaBaseProvider;

class RoleRepository extends BaseRepository {
    public function __construct(DabaBaseProvider $db) {
        parent::__construct($db, Role::class);
    }
}
?>
