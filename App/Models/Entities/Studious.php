<?php
namespace Models\Entities;

class Studious {
    private string $id;
    private int $userId;
    private int $academicProgramId;

    public static function getTableName(): string {
        return 'studious';
    }

    // Getters
    public function getId(): string {
        return $this->id;
    }

    public function getUserId(): int {
        return $this->userId;
    }

    public function getAcademicProgramId(): int {
        return $this->academicProgramId;
    }

    // Setters
    public function setId(string $id): void {
        $this->id = $id;
    }

    public function setUserId(int $userId): void {
        $this->userId = $userId;
    }

    public function setAcademicProgramId(int $academicProgramId): void {
        $this->academicProgramId = $academicProgramId;
    }
}
