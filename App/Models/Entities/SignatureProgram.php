<?php
namespace Models\Entities;

class SignatureProgram {
    private int $id;
    private int $academicProgramId;
    private int $signatureId;

    public static function getTableName(): string {
        return 'signature_program';
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getAcademicProgramId(): int {
        return $this->academicProgramId;
    }

    public function getSignatureId(): int {
        return $this->signatureId;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setAcademicProgramId(int $academicProgramId): void {
        $this->academicProgramId = $academicProgramId;
    }

    public function setSignatureId(int $signatureId): void {
        $this->signatureId = $signatureId;
    }
}
