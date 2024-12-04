<?php
namespace Models\Entities;

class Instructor {
    private string $id;
    private int $userId;
    private int $signatureId;

    public static function getTableName(): string {
        return 'instructors';
    }

    // Getters
    public function getId(): string {
        return $this->id;
    }

    public function getUserId(): int {
        return $this->userId;
    }

    public function getSignatureId(): int {
        return $this->signatureId;
    }

    // Setters
    public function setId(string $id): void {
        $this->id = $id;
    }

    public function setUserId(int $userId): void {
        $this->userId = $userId;
    }

    public function setSignatureId(int $signatureId): void {
        $this->signatureId = $signatureId;
    }
}
?>
