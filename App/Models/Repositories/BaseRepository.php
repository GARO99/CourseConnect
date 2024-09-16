<?php
namespace Models\Repositories;
use Models\Repositories\Contracts\IRepository;
use Libraries\DabaBaseProvider;
use Exception;
use ReflectionClass;
use DateTime;


class BaseRepository implements IRepository {
    protected DabaBaseProvider $db;
    protected string $table;
    protected string $entityClass;

    public function __construct(DabaBaseProvider $db, string $entityClass) {
        $this->db = $db;
        $this->entityClass = $entityClass;
        $this->table = $entityClass::getTableName();
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

    public function findBy(array $criteria): array {
        $conditions = [];
        $parameters = [];
        foreach ($criteria as $column => $value) {
            $conditions[] = "{$column} = :{$column}";
            $parameters[$column] = $value;
        }

        $query = "SELECT * FROM {$this->table} WHERE " . implode(' AND ', $conditions);

        $this->db->getquery($query);

        foreach ($parameters as $key => $value) {
            $this->db->bind(":{$key}", $value);
        }

        return array_map(fn($row) => $this->mapToEntity($row), $this->db->getrows());
    }

    public function findByOperators(array $criteria, array $operators = []): array {
        $conditions = [];
        $parameters = [];
        foreach ($criteria as $column => $value) {
            $operator = $operators[$column] ?? '=';
            $conditions[] = "{$column} {$operator} :{$column}";
            $parameters[$column] = $value;
        }
    
        $query = "SELECT * FROM {$this->table} WHERE " . implode(' AND ', $conditions);

        $this->db->getquery($query);
    
        foreach ($parameters as $key => $value) {
            $this->db->bind(":{$key}", $value);
        }
    
        return array_map(fn($row) => $this->mapToEntity($row), $this->db->getrows());
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
        $entity = new $this->entityClass();
        $reflection = new ReflectionClass($entity);
    
        foreach ($row as $column => $value) {
            $property = lcfirst(str_replace('_', '', ucwords($column, '_')));

            if ($reflection->hasProperty($property)) {
                $prop = $reflection->getProperty($property);
                $prop->setAccessible(true); 

                if ($this->isDateTimeColumn($value)) {
                    $value = new DateTime($value);
                }

                $prop->setValue($entity, $value);
            }
        }
        
        return $entity;
    }

    private function isDateTimeColumn($value): bool {
        try {
            if (is_string($value) && DateTime::createFromFormat('Y-m-d H:i:s', $value)) {
                return true;
            }
        } catch (Exception $e) {
            return false;
        }   
        return false;
    }
}
?>