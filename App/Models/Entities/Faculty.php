<?php
namespace Models\Entities;

class Faculty {
    private int $id;
    private string $facultyName;

    public static function getTableName(): string {
        return 'faculties';
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getFacultyName(): string {
        return $this->facultyName;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setFacultyName(string $facultyName): void {
        $this->facultyName = $facultyName;
    }
}
?>
