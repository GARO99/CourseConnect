<?php
namespace Models\Entities;

class Signature {
    private int $id;
    private int $unityId;
    private string $signatureName;

    public static function getTableName(): string {
        return 'signatures';
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getUnityId(): int {
        return $this->unityId;
    }

    public function getSignatureName(): string {
        return $this->signatureName;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setUnityId(int $unityId): void {
        $this->unityId = $unityId;
    }

    public function setSignatureName(string $signatureName): void {
        $this->signatureName = $signatureName;
    }
}
