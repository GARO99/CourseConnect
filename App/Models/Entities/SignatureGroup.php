<?php
namespace Models\Entities;

class SignatureGroup {
    public int $signatureGroupId;
    public int $academicPeriodId;
    public string $instructorId;
    public int $signatureId;
    public int $availablePlaces;
    public string $groupName;

    public function __construct(
        int $signatureGroupId,
        int $academicPeriodId,
        string $instructorId,
        int $signatureId,
        int $availablePlaces,
        string $groupName,
    ){
        $this->signatureGroupId = $signatureGroupId;
        $this->academicPeriodId = $academicPeriodId;
        $this->instructorId = $instructorId;
        $this->signatureId = $signatureId;
        $this->availablePlaces = $availablePlaces;
        $this->groupName = $groupName;
    }
}
?>