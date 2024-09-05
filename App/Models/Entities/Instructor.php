<?php
namespace Models\Entities;

class Instructor {
    public string $instructorId;
    public int $userId;
    public int $signatureId;

    public function __construct(
        string $instructorId,
        int  $userId,
        int $signatureId
    ){
        $this->instructorId = $instructorId;
        $this->userId = $userId;
        $this->signatureId = $signatureId;
    }
}
?>