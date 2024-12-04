<?php
namespace Models\Entities;

class SignatureInscribed {
    private int $id;
    private string $studiousId;
    private int $signatureGroupId;

    public static function getTableName(): string {
        return 'signature_inscribed';
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getStudiousId(): string {
        return $this->studiousId;
    }

    public function getSignatureGroupId(): int {
        return $this->signatureGroupId;
    }

    // Setters

    public function setStudiousId(string $studiousId): void {
        $this->studiousId = $studiousId;
    }

    public function setSignatureGroupId(int $signatureGroupId): void {
        $this->signatureGroupId = $signatureGroupId;
    }
}
