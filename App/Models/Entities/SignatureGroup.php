<?php
namespace Models\Entities;

class SignatureGroup {
    public int $id;
    public int $academicPeriodId;
    public string $instructorId;
    public int $signatureId;
    public int $availablePlaces;
    public string $groupName;
}
?>