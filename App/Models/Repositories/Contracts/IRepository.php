<?php
namespace Models\Repositories\Contracts;

interface IRepository {
    public function all();
    public function find($id): ?object;
    public function findBy(array $criteria);
    public function findByOperators(array $criteria, array $operators = []);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
?>