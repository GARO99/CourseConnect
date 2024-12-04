<?php
namespace Models\Entities;

class AcademicProgram {
    private int $id;
    private int $unityId;
    private string $academicProgramName;

    public static function getTableName(): string {
        return 'academic_programs';
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getUnityId(): int {
        return $this->unityId;
    }

    public function getAcademicProgramName(): string {
        return $this->academicProgramName;
    }

    // Setters

    public function setUnityId(int $unityId): void {
        $this->unityId = $unityId;
    }

    public function setAcademicProgramName(string $academicProgramName): void {
        $this->academicProgramName = $academicProgramName;
    }
}
?>
