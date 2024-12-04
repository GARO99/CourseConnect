<?php
namespace Models\Entities;

class SignatureGroup {
    private int $id;
    private int $academicPeriodId;
    private string $instructorId;
    private int $signatureId;
    private int $availablePlaces;
    private string $groupName;

    public static function getTableName(): string {
        return 'signature_groups';
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getAcademicPeriodId(): int {
        return $this->academicPeriodId;
    }

    public function getInstructorId(): string {
        return $this->instructorId;
    }

    public function getSignatureId(): int {
        return $this->signatureId;
    }

    public function getAvailablePlaces(): int {
        return $this->availablePlaces;
    }

    public function getGroupName(): string {
        return $this->groupName;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setAcademicPeriodId(int $academicPeriodId): void {
        $this->academicPeriodId = $academicPeriodId;
    }

    public function setInstructorId(string $instructorId): void {
        $this->instructorId = $instructorId;
    }

    public function setSignatureId(int $signatureId): void {
        $this->signatureId = $signatureId;
    }

    public function setAvailablePlaces(int $availablePlaces): void {
        $this->availablePlaces = $availablePlaces;
    }

    public function setGroupName(string $groupName): void {
        $this->groupName = $groupName;
    }
}
