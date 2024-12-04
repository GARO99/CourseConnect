<?php
namespace Models\Entities;

class Classroom {
    private int $id;
    private int $buildingId;
    private int $classroomNumber;

    public static function getTableName(): string {
        return 'classrooms';
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getBuildingId(): int {
        return $this->buildingId;
    }

    public function getClassroomNumber(): int {
        return $this->classroomNumber;
    }

    // Setters


    public function setBuildingId(int $buildingId): void {
        $this->buildingId = $buildingId;
    }

    public function setClassroomNumber(int $classroomNumber): void {
        $this->classroomNumber = $classroomNumber;
    }
}
?>
