<?php
namespace Models\Repositories;;

use Models\Entities\Users;
use Libraries\DabaBaseProvider;

class UserRepository extends BaseRepository {
    public function __construct(DabaBaseProvider $db) {
        parent::__construct($db, Users::class);
    }
}
?>