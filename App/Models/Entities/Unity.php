<?php
namespace Models\Entities;

class Unity {
    private int $id;
    private int $facultyId;
    private string $unityName;

    public static function getTableName(): string {
        return 'unity'; // Nombre de la tabla asociada con la entidad
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getFacultyId(): int {
        return $this->facultyId;
    }

    public function getUnityName(): string {
        return $this->unityName;
    }

    // Setters

    public function setFacultyId(int $facultyId): void {
        $this->facultyId = $facultyId;
    }

    public function setUnityName(string $unityName): void {
        $this->unityName = $unityName;
    }
}
?>
