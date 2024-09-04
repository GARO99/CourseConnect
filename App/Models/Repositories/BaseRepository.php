<?php
namespace Repositories;
use Repositories\Contracts\IRepository;
use Libraries\DabaBaseProvider;

class BaseRepository implements IRepository {
    protected DabaBaseProvider $db;
    protected string $table;
    protected string $entityClass;

    public function __construct(DabaBaseProvider $db, string $table, string $entityClass) {
        $this->db = $db;
        $this->table = $table;
        $this->entityClass = $entityClass;
    }

    public function all(): array {
        $this->db->getquery("SELECT * FROM {$this->table}");
        return array_map(fn($row) => $this->mapToEntity($row), $this->db->getrows());
    }

    public function find($id): ?object {
        $this->db->getquery("SELECT * FROM {$this->table} WHERE id = :id");
        $this->db->bind(':id', $id);
        $result = $this->db->getrow();
        return $result ? $this->mapToEntity($result) : null;
    }

    public function create(array $data): bool {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        $this->db->getquery("INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})");
        
        foreach ($data as $key => $value) {
            $this->db->bind(":{$key}", $value);
        }

        return $this->db->execute();
    }

    public function update($id, array $data): bool {
        $set = '';
        foreach ($data as $key => $value) {
            $set .= "{$key} = :{$key}, ";
        }
        $set = rtrim($set, ', ');

        $this->db->getquery("UPDATE {$this->table} SET {$set} WHERE id = :id");
        $this->db->bind(':id', $id);

        foreach ($data as $key => $value) {
            $this->db->bind(":{$key}", $value);
        }

        return $this->db->execute();
    }

    public function delete($id): bool {
        $this->db->getquery("DELETE FROM {$this->table} WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    protected function mapToEntity(object $row): object {
        return new $this->entityClass(...(array) $row);
    }
}
?>